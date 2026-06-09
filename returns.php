<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reject Goods | COSSIE Wholesale</title>
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
      <a class="active" href="returns.php">Reject Goods</a>
      <a href="admin.php">Dashboard</a>
    </nav>
  </header>

  <main class="page split-layout">
    <section>
      <div class="page-heading compact">
        <p class="eyebrow">Quality control</p>
        <h1>Kataa mzigo ulioharibika au pungufu</h1>
      </div>
      <form id="returnForm" class="form-card">
        <label>Order number
          <input name="orderNumber" required placeholder="ORD-2026-0001">
        </label>
        <label>Product
          <select id="returnProduct" name="productId" required></select>
        </label>
        <label>Problem type
          <select name="problemType" required>
            <option value="">Choose reason</option>
            <option>Damaged goods</option>
            <option>Short quantity</option>
            <option>Expired goods</option>
            <option>Wrong product or company</option>
            <option>Leaking package</option>
          </select>
        </label>
        <label>Affected quantity
          <input name="quantity" type="number" min="1" value="1" required>
        </label>
        <label>Explanation
          <textarea name="description" rows="4" required placeholder="Describe the issue"></textarea>
        </label>
        <button class="button danger" type="submit">Submit rejection</button>
      </form>
    </section>
    <aside class="notice warning">
      <h2>Return policy</h2>
      <p>Rejected goods are reviewed by admin. Valid cases can be replaced, refunded, or adjusted on the next order.</p>
      <p id="returnMessage" class="status-message"></p>
    </aside>
  </main>

  <footer><p>&copy; 2026 COSSIE Wholesale</p></footer>
  <script src="assets/js/app.js"></script>
</body>
</html>
