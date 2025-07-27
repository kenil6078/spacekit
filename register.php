<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Registration</title>
  <style>
          /* Reset & Base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
body {
   font-family: Helvetica Now Display;
  /* background: linear-gradient(120deg, #74ebd5, #9face6); */
  background-image: url(./assets/mainimage.jpg);
  height: 100%;
  width: 100%;
  background-size: cover;
  background-position: center;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
}

/* Container */
.container {
  width: 100%;
  max-width: 400px;
  padding: 20px;
}

/* Form Box */
.form-box {
  background: white;
  padding: 30px;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.15);
}

.form-box h2 {
  text-align: center;
  margin-bottom: 24px;
  color: #333;
}

/* Input Fields */
.form-box label {
  display: block;
  margin-bottom: 6px;
  font-weight: 500;
}
.form-box input {
  width: 100%;
  padding: 10px;
  margin-bottom: 18px;
  border: 1px solid #ccc;
  border-radius: 8px;
  transition: border-color 0.3s;
}
.form-box input:focus {
  border-color: #6a11cb;
  outline: none;
}

/* Submit Button */
.form-box button {
  width: 100%;
  padding: 12px;
  background: #6a11cb;
  color: white;
  font-weight: bold;
  border: none;
  border-radius: 8px;
  cursor: pointer;
  transition: background 0.3s;
}
.form-box button:hover {
  background: #2575fc;
}

/* Login Link */
.login-link {
  text-align: center;
  margin-top: 15px;
}
.login-link a {
  color: #6a11cb;
  text-decoration: none;
}
.login-link a:hover {
  text-decoration: underline;
}

/* Responsive */
@media (max-width: 480px) {
  .form-box {
    padding: 20px;
  }
  #canvas{
    height: 100%;
    width: 100%;
  }
}

  </style>
</head>
<body>
  <?php
  // Include the connection file
  include 'connection.php';
  ?>
  <canvas id="canvas" width="500" height="800" style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); display: none; z-index: 2;"></canvas>
  <div class="container">
    <form class="form-box" action="register.php" method="POST">
      <h2>Register</h2>
      
      <label for="username">Username</label>
      <input type="text" id="username" name="username" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Create Account</button>

      <p class="login-link">Already have an account? <a href="login.php">Login</a></p>
    </form>
  </div>
</body>
</html>

<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];

  $insert = "INSERT INTO `registration` (`username`, `email`, `password`) VALUES ('$username', '$email', '$password')";

  $result = mysqli_query($conn,$insert);

  if($result){
    echo "<script type='module'>
      import { DotLottie } from 'https://cdn.jsdelivr.net/npm/@lottiefiles/dotlottie-web/+esm';

      new DotLottie({
        autoplay:true,
        loop: true,
        canvas: document.getElementById('canvas'),
        src: 'https://lottie.host/3a2c48a1-316b-4d86-93c4-aa9b678aa518/Jw2UY8q7bz.lottie', // or .json file
      });

      canvas.style.display = 'initial';
     // document.querySelector('.container').style.display = 'none';
      setTimeout(() => {
        window.location.href = 'login.php';
      }, 5000); // Redirect after 5 seconds
    </script>";
  } else {
    echo "<script>alert('Registration failed. Please try again.');</script>";
  }
}

?>
