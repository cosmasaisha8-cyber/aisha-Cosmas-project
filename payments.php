<?php
header("Content-Type: application/json");
require_once "db.php";

$data = json_decode(file_get_contents("php://input"), true);

if (!$data || empty($data["orderNumber"]) || empty($data["method"]) || !isset($data["amount"])) {
    http_response_code(400);
    echo json_encode(["success" => false, "message" => "Required payment data is missing"]);
    exit;
}

$stmt = $pdo->prepare("
    INSERT INTO payments (order_number, method, amount, reference_number)
    VALUES (:order_number, :method, :amount, :reference_number)
");

$stmt->execute([
    ":order_number" => $data["orderNumber"],
    ":method" => $data["method"],
    ":amount" => (float) $data["amount"],
    ":reference_number" => $data["reference"] ?? ""
]);

echo json_encode(["success" => true, "message" => "Payment saved"]);
?>
