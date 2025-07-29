<!DOCTYPE html>
<html lang="en">
<head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
</head>
<link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.5.0/fonts/remixicon.css"
    rel="stylesheet"
/>
<style>
          *{
                    margin: 0;
                    padding: 0;
                    box-sizing:border-box;

          }
          html,body{
                    height: 100%;
                    width: 100%;
                    font-family: Helvetica Now display;
                    background-color:#9E9E9E;
          }
          .nav-view{
                    padding:3rem 2rem;
                    height: 100%;
                    width: 50%;
                    background: transparent;
                    background-color:rgba(255, 255, 255, 0.24);
                    backdrop-filter: blur(20px);
                    /* background-color: red; */
                    display:flex;
                    flex-direction: column;
                    gap:1.9rem;
          }
          h4 a{
                    color:#fff;
                    text-decoration: none;
                    font-size: 1.4rem;
                    font-weight: 500;
          }
          button{
                    margin-top: 2rem;
                    width: 70%;
                    height: 2.4rem;
                    border-radius: 0.5rem;
                    background-color: #111;
                    color: #fff;
                    font-size: 1.2rem;
                    font-weight: 500;
                    border:none;
                    cursor:pointer;
          }
          button a{
                    color: #fff;
                    text-decoration: none;
          }
          .ri-close-fill{
                    position: absolute;
                    top: 2.5rem;
                    right: 2.8rem;
                    font-size: 2rem;
                    color: #111;
                    cursor: pointer;
                    text-decoration: none;
          }
          .logout{
            z-index: -1;
            width: 50%;
            position: absolute;
            top: 17.6rem;
          }

          @media (min-width:780px){
                    .nav-view {
                        display:none;
                    }
          }
</style>
<body>
          <div class="nav-view">
                <h4><a href="index.php">Home</a></h4>
                <h4><a href="products.php">Products</a></h4>
                <h4><a href="addtocart.php">Cart</a></h4>
                <h4><a href="contact.php">Contact Us</a></h4>
                <button><a href="login.php">Login<i class="ri-arrow-right-line"></i></a></button>
                <button class="logout"><a href="logout.php">Logout<i class="ri-arrow-right-line"></i></a></button>
          </div>
          <a href="index.php"><i class="ri-close-fill"></i></a>
</body>
</html>
 <?php
    session_start();
    if(isset($_SESSION['u_nm'])) {
        echo '<script>document.querySelector(".logout").style.zIndex = "2";</script>';
    }
    ?>