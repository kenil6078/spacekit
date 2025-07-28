<?php include 'header.php';?>

<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <link rel="stylesheet" href="style.css">
</head>
<body>
          <section class="part-1">
            <div class="marquee">
                <div class="text">
                 <p>your</p>
                 <p>gateway</p>
                 <p>to</p>
                <p>the</p>
                <p>stars</p>
                </div>
                <div class="text">
                 <p>your</p>
                 <p>gateway</p>
                 <p>to</p>
                 <p>the</p>
                 <p>stars</p>
                </div>
             </div>
</section>
<section class="products">
          <h1>Explore the space kits designed to inspire curiosity and wonder.</h1>

         <div class="component">
          <?php
          include 'connection.php';

          $p_display = "SELECT * FROM `product`";

          $result3 = mysqli_query($conn,$p_display);

          while($data = mysqli_fetch_assoc($result3)){

            echo '
            <div class="product-1">
                    <div class="top">
                              <img src="'.$data['p_image'].'" alt="" onclick="window.location.href=\'addtocart.php?p_id='.$data['p_id'].'\'">
                    </div>
                    <div class="btm">
                              <div class="btm-text">
                                        <h4>'.$data['p_name'].'</h4>
                                        <h4>'.$data['p_description'].'</h4>
                              </div>
                              <h4>'.$data['p_price'].'</h4>
                    </div>
          </div>';
            
          }


          ?>
           
         </div>
         <?php include 'footer.php'; ?> 
          
</section>    
</body>
</html>
  
