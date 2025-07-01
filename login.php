

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <style>
    
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      height: 100vh;
      background: url(./assets/mainimage.jpg) no-repeat center center/cover;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .glass-container {
      background: rgba(255, 255, 255, 0.333);
      border-radius: 16px;
      padding: 40px;
      width: 320px;
      backdrop-filter: blur(15px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
      color: white;
    }

    .glass-container h2 {
      text-align: center;
      margin-bottom: 30px;
    }

    .input-group {
      margin-bottom: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: 500;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      outline: none;
      background-color: rgba(255, 255, 255, 0.69);
      color: #111;
    }

    .input-group input::placeholder {
      color: #ccc;
    }

    .buttons {
      display: flex;
      justify-content: space-between;
      margin-top: 20px;
    }

    .buttons button {
      width: 48%;
      padding: 10px;
      border: none;
      border-radius: 8px;
      background-color: rgba(255, 255, 255, 0.34);
      color: #fff;
      font-weight:600;
      color:#fff;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .buttons button:hover {
      background-color: rgba(255, 255, 255, 0.3);
    }

    .forgot-link {
      text-align: right;
      margin-top: 10px;
      font-size: 0.9em;
    }

    .forgot-link a {
      color: blue;
      text-decoration: none;
    }

    .forgot-link a:hover {
      text-decoration: underline;
    }
  </style>
</head>
<body>
  <div class="glass-container">
    <h2>Login</h2>
    <form action="#">
      <div class="input-group">
        <label for="username">Username</label>
        <input type="text" id="username" placeholder="Enter your username" required>
      </div>
      <div class="input-group">
        <label for="password">Password</label>
        <input type="password" id="password" placeholder="Enter your password" required>
      </div>
      <div class="forgot-link">
        <a href="#">Forgot Password?</a>
      </div>
      <div class="buttons">
        <button type="submit">Login</button>
        <button type="reset">Reset</button>
      </div>
    </form>
  </div>
</body>
</html>

