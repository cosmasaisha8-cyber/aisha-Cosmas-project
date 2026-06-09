<?php
header("Content-Type: application/json");
require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!$data || empty($data["customerName"]) || empty($data["businessType"]) || empty($data["productId"])) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Required order data is missing"]);
    exit;
}

$orderNumber = "ORD-" . date("Y") . "-" . str_pad((string) random_int(1, 9999), 4, "0", STR_PAD_LEFT);

$stmt = $pdo->prepare("
    INSERT INTO orders (
        order_number, customer_name, business_type, product_id, quantity,
        unit_price, discount_percent, total_amount, delivery_location, note
    ) VALUES (
        :order_number, :customer_name, :business_type, :product_id, :quantity,
        :unit_price, :discount_percent, :total_amount, :delivery_location, :note
    )
");

$stmt->execute([
    ":order_number" => $orderNumber,
    ":customer_name" => $data["customerName"],
    ":business_type" => $data["businessType"],
    ":product_id" => (int) $data["productId"],
    ":quantity" => (int) $data["quantity"],
    ":unit_price" => (float) $data["unitPrice"],
    ":discount_percent" => (float) $data["discountPercent"],
    ":total_amount" => (float) $data["totalAmount"],
    ":delivery_location" => $data["deliveryLocation"],
    ":note" => $data["note"] ?? ""
]);

echo json_encode([
    "success" => true,
    "message" => "Order saved",
    "orderNumber" => $orderNumber
]);
?>
