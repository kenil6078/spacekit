<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Admin Panel</title>
  <link rel="stylesheet" href="style1.css">
</head>
<body>
  <div class="admin-panel">
    <aside class="sidebar">
      <h2>Admin Panel</h2>
      <nav>
        <ul>
          <li data-target="login">Login Users</li>
          <li data-target="contacts">Contacts</li>
          <li data-target="products">Products</li>
          <li data-target="orders">Product Orders</li>
          <button type="submit" class="logout-button">Logout</button>
        </ul>
      </nav>
    </aside>

    <main class="content">
<section id="login" class="table-section">
          <div class="login-header">
                    <h3>Login Users</h3>
          </div>
          <table>
                    <thead>
                              <tr><th>ID</th><th>Username</th><th>Email</th><th>Message</th></tr>
                    </thead>
                    <tbody>
                              <tr><td colspan="4">No rows found</td></tr>
                    </tbody>
          </table>
</section>

      <section id="contacts" class="table-section hidden">
        <h3>Contacts</h3>
        <table><thead><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr></thead><tbody><tr><td colspan="4">No rows found</td></tr></tbody></table>
      </section>

      <section id="products" class="table-section hidden">
        <h3>Products</h3>
        <form class="product-form">
          <label>Product Name:<input type="text" name="product_name"></label>
          <label>Image:<input type="file" name="image"></label>
          <label>Description:<input type="text" name="description"></label>
          <label>Price:<input type="text" name="price"></label>
          <button type="submit">Add Product</button>
        </form>
        <table id="product-table"><thead><tr><th>ID</th><th>Name</th><th>Price</th><th>Status</th></tr></thead><tbody><tr><td colspan="4">No rows found</td></tr></tbody></table>
      </section>

      <section id="orders" class="table-section hidden">
        <h3>Product Orders</h3>
        <table><thead><tr><th>ID</th><th>Product</th><th>Customer</th><th>Date</th><th>Status</th></tr></thead><tbody><tr><td colspan="5">No rows found</td></tr></tbody></table>
      </section>
    </main>
  </div>

  <script>
    const links = document.querySelectorAll(".sidebar li");
    const sections = document.querySelectorAll(".table-section");

    links.forEach(link => {
      link.addEventListener("click", () => {
        sections.forEach(section => section.classList.add("hidden"));
        document.getElementById(link.dataset.target).classList.remove("hidden");
        links.forEach(l => l.classList.remove("active"));
        link.classList.add("active");
      });
    });
  </script>
</body>
</html>
