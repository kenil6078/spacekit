<?php
include 'connection1.php';
session_start();
if(!isset($_SESSION['check'])){
    header("Location: index.php");
    exit();
}
?>

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
          <li data-target="login">Registered Users</li>
          <li data-target="contacts">Contacts</li>
          <li data-target="products">Products</li>
          <li data-target="orders">Product Orders</li>
          <button type="submit" onclick="location.href='logout.php'" class="logout-button">Logout</button>
        </ul>
      </nav>
    </aside>

    <main class="content">
<section id="login" class="table-section">
          <div class="login-header">
                    <h3>Registered Users</h3>
          </div>
          <table>
                    <thead>
                              <tr><th>ID</th><th>Username</th><th>Email</th><th>Password</th></tr>
                              <?php
                                  $id = 1;
                                  $read = "SELECT * FROM `registration`";

                                  $result1 = mysqli_query($conn,$read);

                                  while($row = mysqli_fetch_assoc($result1)){
                                      echo "<tr>
                                              <td>".$id."</td>
                                              <td>".$row['username']."</td>
                                              <td>".$row['email']."</td>
                                              <td>".$row['password']."</td>
                                            </tr>";
                                      $id++;
                                  }


                             ?>
                    </thead>
                    <tbody>
                              <tr><td colspan="4">No rows found</td></tr>
                    </tbody>
          </table>
</section>

      <section id="contacts" class="table-section hidden">
        <h3>Contacts</h3>
        <table><thead>
          <tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th></tr>
           <?php
                                  $id = 1;
                                  $contact = "SELECT * FROM `contact`";

                                  $result_con = mysqli_query($conn,$contact);

                                  while($row_con = mysqli_fetch_assoc($result_con)){
                                      echo "<tr>
                                              <td>".$id."</td>
                                              <td>".$row_con['name']."</td>
                                              <td>".$row_con['email']."</td>
                                              <td>".$row_con['message']."</td>
                                            </tr>";
                                      $id++;
                                  }


                             ?>
        </thead><tbody><tr><td colspan="4">No rows found</td></tr></tbody></table>
      </section>

      <section id="products" class="table-section hidden">
        <h3>Products</h3>
        <form class="product-form" method='post' action="dashboard.php">
          <label>Product Name:<input type="text" name="product_name" required></label>
          <label>Image:<input type="text" name="image" required></label>
          <label>Description:<input type="text" name="description" required></label>
          <label>Price:<input type="text" name="price" required></label>
          <button type="submit">Add Product</button>
        </form>

        <?php
            if($_SERVER['REQUEST_METHOD']=='POST'){
                    $p_name = $_POST['product_name'];
                    $p_image = $_POST['image'];
                    $p_description = $_POST['description'];
                    $p_price = $_POST['price'];

                    $insert1 = "INSERT INTO `product` (`p_name`, `p_price`, `p_image`, `p_description`) VALUES ('$p_name', '$p_price', '$p_image', '$p_description')";

                    $result2 = mysqli_query($conn,$insert1);

                   if($result2)
                        {
                        echo "<script>alert('Product Insert successful!');</script>";
                        }
                        else{
                            echo "<script>alert('Registration failed. Please try again.');</script>";
                            }  
              }
?>
        <table id="product-table"><thead>
          <tr><th>ID</th><th>Name</th><th>Price</th><th>Image</th><th>Description</th><th>Status</th></tr>
           <?php
                                  $id = 1;
                                  $product_r = "SELECT * FROM `product`";

                                  $result_show = mysqli_query($conn,$product_r);

                                  while($row_pr = mysqli_fetch_assoc($result_show)){
                                      echo "<tr>
                                              <td>".$id."</td>
                                              <td>".$row_pr['p_name']."</td>
                                              <td>".$row_pr['p_price']."</td>
                                              <td>".$row_pr['p_image']."</td>
                                              <td>".$row_pr['p_description']."</td>
                                            </tr>";
                                      $id++;
                                  }


                             ?>
        </thead><tbody><tr><td colspan="4">No rows found</td></tr></tbody></table>
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
