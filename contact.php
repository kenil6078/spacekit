<?php include 'header.php';?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
          <meta charset="UTF-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Contact Us</title>
          <link rel="stylesheet" href="style.css">
  </head>
  <body>
          <section class="contact">
            <div class="text">
                <h1>Have questions or need support?</h1>
            </div>
            <?php
            include 'connection.php';

            if($_SERVER['REQUEST_METHOD']=='POST'){
            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

  $contact = "INSERT INTO `contact` (`name`, `email`, `message`) VALUES ('$name', '$email', '$message')";

  $result_send = mysqli_query($conn,$contact);

  if($result_send){
    echo '<script src="https://unpkg.com/@lottiefiles/dotlottie-wc@0.6.2/dist/dotlottie-wc.js" type="module"></script>
                    <dotlottie-wc src="https://lottie.host/b21093ba-2288-42ec-b676-61ba703f89bb/oYSBJZ79DJ.lottie" style="width: 700px;height: 500px; position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); z-index:2" speed="1" autoplay loop></dotlottie-wc>';
            echo "<script>
            setTimeout(() => {
                window.location.href = 'index.php';
            }, 4000); // Redirect after 2 seconds
            </script>";
  } else {
    echo "<script>alert('Registration failed. Please try again.');</script>";
  }
}

            ?>
            <form action="" method="POST">
            <div class="form">
                 <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" required>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" required>
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Enter Your Message" required></textarea>
                <button type="submit">contact me</button>
            </div>
            </form>
        </section>
<?php include 'footer.php'; ?>