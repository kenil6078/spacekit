<?php include 'header.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Product Detail</title>
  <style>
    :root {
      --primary-color: #ededed;
      --accent-color: #ffcc00;
      --text-color: #000;
      --font-head: Helvetica Now Display;
      --font-body: Helvetica Now Display;
    }

    body {
      margin: 0;
      font-family:Helvetica Now Display;
      /* background: var(--primary-color); */
      color: var(--text-color);
    }

    .container {
      display: flex;
      flex-wrap: wrap;
      max-width: 1200px;
      margin: 10rem auto;
      padding: 2rem;
      background: var(--primary-color);
      border-radius: 20px;
    }

    .details {
      flex: 1 1 50%;
      padding-right: 2rem;
    }

    .details h1 {
      font-family: var(--font-head);
      font-size: 2.5rem;
      margin-bottom: 0.5rem;
    }

    .details p.price {
      font-weight: bold;
      font-size: 1.2rem;
      margin-bottom: 1rem;
    }

    .details p.desc {
      margin-bottom: 1.5rem;
    }

    .quantity-cart {
      display: flex;
      align-items: center;
      gap: 1rem;
      margin-bottom: 2rem;
    }

    .quantity-cart input {
      width: 50px;
      padding: 0.5rem;
      font-size: 1rem;
      text-align: center;
      border-radius: 8px;
      border: 1px solid #ccc;
    }

    .quantity-cart button {
      background-color: var(--accent-color);
      border: none;
      color:#fff;
      padding: 0.75rem 1.5rem;
      border-radius: 12px;
      font-weight: bold;
      cursor: pointer;
      /* box-shadow: 2px 3px 0 #000; */
      transition: 0.2s ease;
    }

    .quantity-cart button:hover {
      transform: scale(1.03);
    }

    .extra-info {
      border-top: 1px dashed #888;
      margin-top: 1.5rem;
      padding-top: 1rem;
    }

    .extra-info div {
      display: flex;
      justify-content: space-between;
      padding: 0.5rem 0;
      border-bottom: 1px dashed #888;
    }

    .product-image {
      flex: 1 1 50%;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .product-image img {
      max-width: 100%;
      border-radius: 20px;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.3);
    }

    @media (max-width: 768px) {
      .container {
          margin-top: 5rem;
        flex-direction: column;
        padding: 1rem;
      }

      .details, .product-image {
          margin-top: 5rem;
        flex: 1 1 100%;
        padding: 0;
      }

      .details h1 {
        font-size: 1.8rem;
      }

      .quantity-cart {
        flex-direction: column;
        align-items: flex-start;
      }
    }
  </style>
</head>
<body>

<div class="container">
<div class="details">
  <?php
    include 'connection.php';
    $id = $_GET['p_id'];
    //echo $id;
    $p_add = "SELECT * FROM `product` where p_id = '$id'";
    $result4 = mysqli_query($conn,$p_add);

    while($data1 = mysqli_fetch_assoc($result4))
    {
      echo '
    <h1>'.$data1['p_name'].'</h1>
    <p class="price">'.$data1['p_price'].'</p>
    <p class="desc">'.$data1['p_description'].'</p>
    <div class="quantity-cart">
      <input type="number" value="1" min="1"/>
      <button>ADD TO CART</button>
    </div>
    <div class="extra-info">
      <div>
        <strong>PRODUCT WEIGHT</strong>
        <span>1500g</span>
      </div>
      <div>
        <strong>PRODUCT COLOUR</strong>
        <span>WHITE / BLACK</span>
      </div>
    </div>
  </div>
  <div class="product-image">
    <img src="'.$data1['p_image'].'" alt="Italian Soda">
  </div>
 
</div>
';
    }
?>
 
</body>
</html>

<?php include 'footer.php'; ?>



