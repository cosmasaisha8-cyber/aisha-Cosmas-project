<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Place Order | COSSIE Wholesale</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header class="topbar">
    <a class="brand" href="index.php"><span class="brand-mark">CW</span><span>COSSIE Wholesale</span></a>
    <nav class="nav">
      <a href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a class="active" href="order.php">Order</a>
      <a href="payment.php">Payment</a>
      <a href="returns.php">Reject Goods</a>
      <a href="admin.php">Dashboard</a>
    </nav>
  </header>

  <main class="page split-layout">
    <section>
      <div class="page-heading compact">
        <p class="eyebrow">Order form</p>
        <h1>Weka order ya mzigo</h1>
      </div>
      <form id="orderForm" class="form-card">
        <label>Customer name
          <input name="customerName" required placeholder="Mfano: Aisha Shop">
        </label>
        <label>Business type
          <select name="businessType" required>
            <option value="">Choose business type</option>
            <option>Retail shop</option>
            <option>Supermarket</option>
            <option>Restaurant</option>
            <option>School supplier</option>
            <option>Distributor</option>
          </select>
        </label>
        <label>Product
          <select id="orderProduct" name="productId" required></select>
        </label>
        <label>Quantity / cartons
          <input id="orderQuantity" name="quantity" type="number" min="1" value="1" required>
        </label>
        <label>Delivery location
          <input name="deliveryLocation" required placeholder="Street, town, region">
        </label>
        <label>Order note
          <textarea name="note" rows="4" placeholder="Any special instructions"></textarea>
        </label>
        <button class="button primary" type="submit">Submit order</button>
      </form>
    </section>

    <aside class="calculator">
      <h2>Price calculator</h2>
      <dl>
        <div><dt>Unit price</dt><dd id="unitPrice">TZS 0</dd></div>
        <div><dt>Discount</dt><dd id="discountValue">TZS 0</dd></div>
        <div><dt>Total payable</dt><dd id="totalPayable">TZS 0</dd></div>
      </dl>
      <p id="orderMessage" class="status-message"></p>
    </aside>
  </main>

  <footer><p>&copy; 2026 COSSIE Wholesale</p></footer>
  <script src="assets/js/app.js"></script>
</body>
</html>
