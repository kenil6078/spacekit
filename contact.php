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
            <form>
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