<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Payment | COSSIE Wholesale</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header class="topbar">
    <a class="brand" href="index.php"><span class="brand-mark">CW</span><span>COSSIE Wholesale</span></a>
    <nav class="nav">
      <a href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a href="order.php">Order</a>
      <a class="active" href="payment.php">Payment</a>
      <a href="returns.php">Reject Goods</a>
      <a href="admin.php">Dashboard</a>
    </nav>
  </header>

  <main class="page split-layout">
    <section>
      <div class="page-heading compact">
        <p class="eyebrow">Payment registration</p>
        <h1>Lipia order yako</h1>
      </div>
      <form id="paymentForm" class="form-card">
        <label>Order number
          <input name="orderNumber" required placeholder="ORD-2026-0001">
        </label>
        <label>Payment method
          <select name="method" required>
            <option value="">Choose method</option>
            <option>Cash</option>
            <option>M-Pesa</option>
            <option>Tigo Pesa</option>
            <option>Airtel Money</option>
            <option>Bank transfer</option>
            <option>Credit</option>
          </select>
        </label>
        <label>Amount paid
          <input name="amount" type="number" min="0" required placeholder="0">
        </label>
        <label>Reference number
          <input name="reference" placeholder="Transaction ID or receipt number">
        </label>
        <button class="button primary" type="submit">Save payment</button>
      </form>
    </section>
    <aside class="notice">
      <h2>Payment notes</h2>
      <p>All payments are connected to an order number. Admin can later confirm whether the order is paid, partly paid, or pending.</p>
      <p id="paymentMessage" class="status-message"></p>
    </aside>
  </main>

  <footer><p>&copy; 2026 COSSIE Wholesale</p></footer>
  <script src="assets/js/app.js"></script>
</body>
</html>
