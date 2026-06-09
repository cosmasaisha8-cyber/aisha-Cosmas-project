<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Products | COSSIE Wholesale</title>
  <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
  <header class="topbar">
    <a class="brand" href="index.php"><span class="brand-mark">CW</span><span>COSSIE Wholesale</span></a>
    <nav class="nav">
      <a href="index.php">Home</a>
      <a class="active" href="products.php">Products</a>
      <a href="order.php">Order</a>
      <a href="payment.php">Payment</a>
      <a href="returns.php">Reject Goods</a>
      <a href="admin.php">Dashboard</a>
    </nav>
  </header>

  <main class="page">
    <section class="page-heading">
      <p class="eyebrow">Wholesale stock list</p>
      <h1>Products, companies, prices and discounts</h1>
    </section>

    <section class="toolbar">
      <label>
        Category
        <select id="categoryFilter">
          <option value="all">All categories</option>
          <option value="Ngano">Ngano</option>
          <option value="Maji">Maji</option>
          <option value="Mafuta">Mafuta</option>
          <option value="Sabuni miche">Sabuni za miche</option>
          <option value="Sabuni unga">Sabuni za unga</option>
          <option value="Chakula">Chakula</option>
          <option value="Biscuits">Biscuits</option>
        </select>
      </label>
      <label>
        Search
        <input id="productSearch" type="search" placeholder="Search product or company">
      </label>
    </section>

    <section id="productGrid" class="product-grid"></section>
  </main>

  <footer><p>&copy; 2026 COSSIE Wholesale</p></footer>
  <script src="assets/js/app.js"></script>
</body>
</html>
