const products = [
  { id: 1, name: "Ngano ya unga", category: "Ngano", company: "Azam Mills", unit: "50kg bag", price: 78000, discount: 8, stock: 180, image: "https://bakhresa.com/wp-content/uploads/2022/05/Azam-NGANO-BORA-Flour.png" },
  { id: 2, name: "Ngano ya unga", category: "Ngano", company: "Bakhresa", unit: "25kg bag", price: 40500, discount: 6, stock: 220, image: "https://bakhresa.com/wp-content/uploads/2022/01/SBF.jpg" },
  { id: 3, name: "Maji ya Uhai", category: "Maji", company: "Uhai", unit: "Carton 12 bottles", price: 12000, discount: 5, stock: 450, image: "https://madukanetwork.com/storage/app/public/product/2025-11-22-69215fa83a43e.webp" },
  { id: 4, name: "Maji Kilimanjaro", category: "Maji", company: "Kilimanjaro", unit: "Carton 12 bottles", price: 14500, discount: 5, stock: 360, image: "https://madukanetwork.com/storage/app/public/product/2025-11-22-69215fa83a43e.webp" },
  { id: 5, name: "Maji Sumsun", category: "Maji", company: "Sumsun", unit: "Carton 12 bottles", price: 11000, discount: 4, stock: 260, image: "https://madukanetwork.com/storage/app/public/product/2025-11-22-69215fa83a43e.webp" },
  { id: 6, name: "Maji Uduzungwa", category: "Maji", company: "Uduzungwa", unit: "Carton 12 bottles", price: 13000, discount: 5, stock: 310, image: "https://madukanetwork.com/storage/app/public/product/2025-11-22-69215fa83a43e.webp" },
  { id: 7, name: "Mafuta ya kupikia 5L", category: "Mafuta", company: "Korie", unit: "Bottle", price: 18500, discount: 7, stock: 190, image: "https://jumlatraders.co.tz/wp-content/uploads/2022/10/image-68-600x600.jpg" },
  { id: 8, name: "Mafuta ya kupikia 10L", category: "Mafuta", company: "Korie", unit: "Jerican", price: 35500, discount: 9, stock: 145, image: "https://jumlatraders.co.tz/wp-content/uploads/2022/10/image-68-600x600.jpg" },
  { id: 9, name: "Mafuta ya kupikia 20L", category: "Mafuta", company: "Sunbelt", unit: "Jerican", price: 69000, discount: 11, stock: 98, image: "https://madukanetwork.com/storage/app/public/product/2025-11-22-69217e30ed14e.webp" },
  { id: 10, name: "Sabuni za miche", category: "Sabuni miche", company: "Kuku", unit: "Box", price: 24000, discount: 6, stock: 240, image: "https://bakhresa.com/wp-content/uploads/2022/05/AZAM-WASHING-SOAP.png" },
  { id: 11, name: "Sabuni za miche", category: "Sabuni miche", company: "Jamaa", unit: "Box", price: 22500, discount: 5, stock: 210, image: "https://bakhresa.com/wp-content/uploads/2022/05/AZAM-WASHING-SOAP.png" },
  { id: 12, name: "Sabuni za unga", category: "Sabuni unga", company: "Omo", unit: "Carton", price: 52000, discount: 10, stock: 125, image: "https://jumlatraders.co.tz/wp-content/uploads/2022/10/image-61-600x600.jpg" },
  { id: 13, name: "Sabuni za unga", category: "Sabuni unga", company: "Kleesoft", unit: "Carton", price: 47000, discount: 9, stock: 155, image: "https://jumlatraders.co.tz/wp-content/uploads/2023/12/1000000255-600x600.jpg" },
  { id: 14, name: "Sukari", category: "Chakula", company: "Kilombero", unit: "50kg bag", price: 132000, discount: 4, stock: 80, image: "https://jumlatraders.co.tz/wp-content/uploads/2025/09/img_3628-600x551.jpeg" },
  { id: 15, name: "Chumvi", category: "Chakula", company: "Neel Salt", unit: "Carton", price: 18000, discount: 3, stock: 270, image: "https://i0.wp.com/imart.co.tz/wp-content/uploads/2023/01/da0a06b1861f77f36b4cc5360071cd6d.jpg?fit=600%2C600&ssl=1" },
  { id: 16, name: "Biscuits", category: "Biscuits", company: "Azam", unit: "Carton", price: 36000, discount: 8, stock: 175, image: "https://bakhresa.com/wp-content/uploads/2022/10/AZAM-Biskuti-ya-chai.png" }
];

const money = (value) => `TZS ${Number(value).toLocaleString("en-US")}`;

function findProduct(id) {
  return products.find((product) => product.id === Number(id)) || products[0];
}

function renderProducts() {
  const grid = document.getElementById("productGrid");
  if (!grid) return;

  const category = document.getElementById("categoryFilter").value;
  const search = document.getElementById("productSearch").value.toLowerCase();
  const filtered = products.filter((product) => {
    const categoryMatch = category === "all" || product.category === category;
    const searchMatch = `${product.name} ${product.company} ${product.category}`.toLowerCase().includes(search);
    return categoryMatch && searchMatch;
  });

  grid.innerHTML = filtered.map((product) => `
    <article class="product-card">
      <img class="product-image" src="${product.image}" alt="${product.name} ${product.company}">
      <h3>${product.name}</h3>
      <div class="product-meta">
        <span>Category: ${product.category}</span>
        <span>Company: ${product.company}</span>
        <span>Unit: ${product.unit}</span>
        <span>Stock: ${product.stock}</span>
      </div>
      <div class="price-row">
        <span>Discount ${product.discount}%</span>
        <strong>${money(product.price)}</strong>
      </div>
    </article>
  `).join("");
}

function populateProductSelect(selectId) {
  const select = document.getElementById(selectId);
  if (!select) return;
  select.innerHTML = products.map((product) => (
    `<option value="${product.id}">${product.name} - ${product.company} (${product.unit})</option>`
  )).join("");
}

function updateCalculator() {
  const productSelect = document.getElementById("orderProduct");
  const quantityInput = document.getElementById("orderQuantity");
  if (!productSelect || !quantityInput) return;

  const product = findProduct(productSelect.value);
  const quantity = Number(quantityInput.value || 1);
  const subtotal = product.price * quantity;
  const discountAmount = subtotal * (product.discount / 100);
  const total = subtotal - discountAmount;

  document.getElementById("unitPrice").textContent = money(product.price);
  document.getElementById("discountValue").textContent = money(discountAmount);
  document.getElementById("totalPayable").textContent = money(total);
}

function formDataToObject(form) {
  return Object.fromEntries(new FormData(form).entries());
}

async function postJson(url, data) {
  const response = await fetch(url, {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify(data)
  });
  if (!response.ok) throw new Error("Request failed");
  return response.json();
}

function setupForms() {
  const orderForm = document.getElementById("orderForm");
  if (orderForm) {
    orderForm.addEventListener("submit", async (event) => {
      event.preventDefault();
      const data = formDataToObject(orderForm);
      const product = findProduct(data.productId);
      const quantity = Number(data.quantity);
      data.unitPrice = product.price;
      data.discountPercent = product.discount;
      data.totalAmount = product.price * quantity * (1 - product.discount / 100);
      try {
        await postJson("api/orders.php", data);
        document.getElementById("orderMessage").textContent = "Order submitted successfully.";
        orderForm.reset();
        updateCalculator();
      } catch {
        document.getElementById("orderMessage").textContent = "Demo mode: order calculated locally. Connect PHP/MySQL to save it.";
      }
    });
  }

  const paymentForm = document.getElementById("paymentForm");
  if (paymentForm) {
    paymentForm.addEventListener("submit", async (event) => {
      event.preventDefault();
      try {
        await postJson("api/payments.php", formDataToObject(paymentForm));
        document.getElementById("paymentMessage").textContent = "Payment saved successfully.";
        paymentForm.reset();
      } catch {
        document.getElementById("paymentMessage").textContent = "Demo mode: connect PHP/MySQL to save payments.";
      }
    });
  }

  const returnForm = document.getElementById("returnForm");
  if (returnForm) {
    returnForm.addEventListener("submit", async (event) => {
      event.preventDefault();
      try {
        await postJson("api/returns.php", formDataToObject(returnForm));
        document.getElementById("returnMessage").textContent = "Rejected goods report submitted.";
        returnForm.reset();
      } catch {
        document.getElementById("returnMessage").textContent = "Demo mode: connect PHP/MySQL to save rejected goods.";
      }
    });
  }
}

function renderDashboard() {
  const table = document.getElementById("stockTable");
  if (!table) return;
  document.getElementById("stockCount").textContent = products.length;
  table.innerHTML = products.map((product) => `
    <tr>
      <td>${product.name}</td>
      <td>${product.category}</td>
      <td>${product.company}</td>
      <td>${product.unit}</td>
      <td>${money(product.price)}</td>
      <td>${product.discount}%</td>
      <td>${product.stock}</td>
    </tr>
  `).join("");
}

document.addEventListener("DOMContentLoaded", () => {
  renderProducts();
  populateProductSelect("orderProduct");
  populateProductSelect("returnProduct");
  updateCalculator();
  setupForms();
  renderDashboard();

  document.getElementById("categoryFilter")?.addEventListener("change", renderProducts);
  document.getElementById("productSearch")?.addEventListener("input", renderProducts);
  document.getElementById("orderProduct")?.addEventListener("change", updateCalculator);
  document.getElementById("orderQuantity")?.addEventListener("input", updateCalculator);
});
