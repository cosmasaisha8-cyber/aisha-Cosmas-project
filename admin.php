<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard | COSSIE Wholesale</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header class="topbar">
    <a class="brand" href="index.php"><span class="brand-mark">CW</span><span>COSSIE Wholesale</span></a>
    <nav class="nav">
      <a href="index.php">Home</a>
      <a href="products.php">Products</a>
      <a href="order.php">Order</a>
      <a href="payment.php">Payment</a>
      <a href="returns.php">Reject Goods</a>
      <a class="active" href="admin.php">Dashboard</a>
    </nav>
  </header>

  <main class="page">
    <section class="page-heading">
      <p class="eyebrow">Admin area</p>
      <h1>Inventory and order dashboard</h1>
    </section>

    <section class="summary-band dashboard">
      <article><strong id="stockCount">0</strong><span>Products</span></article>
      <article><strong>TZS 4.8M</strong><span>Today's orders</span></article>
      <article><strong>12</strong><span>Pending deliveries</span></article>
      <article><strong>3</strong><span>Rejected goods</span></article>
    </section>

    <section class="table-section">
      <h2>Stock overview</h2>
      <div class="table-wrap">
        <table>
          <thead>
            <tr>
              <th>Product</th>
              <th>Category</th>
              <th>Company</th>
              <th>Unit</th>
              <th>Price</th>
              <th>Discount</th>
              <th>Stock</th>
            </tr>
          </thead>
          <tbody id="stockTable"></tbody>
        </table>
      </div>
    </section>
  </main>

  <footer><p>&copy; 2026 COSSIE Wholesale</p></footer>
  <script src="assets/js/app.js"></script>
</body>
</html>
