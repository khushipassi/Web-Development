<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>We Donate - Login</title>


  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      position: relative;
      font-family: "Roboto", sans-serif;
      height: 100vh;
      width: 100%;
      overflow: hidden;
      background: #000051;
    }

    .btn {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);
      padding: 10px;
    }

    .overlay {
      position: fixed;
      display: none;
      align-items: center;
      justify-content: center;
      height: 100vh;
      width: 100%;
      background: rgba(0, 0, 0, 0.2);
      z-index: 100;
    }

    .overlay.open {
      display: flex;
      animation: show-overlay 0.5s;
    }

    @keyframes show-overlay {
      0% {
        opacity: 0;
      }

      100% {
        opacity: 1;
      }
    }

    .login {
      padding: 50px 25px;
      background: white;
      border-radius: 10px;
    }

    .header {
      position: relative;
    }

    .header h1 {
      text-align: center;
      text-transform: uppercase;
      color: #000051;
      padding-bottom: 7px;
      border-bottom: 2px solid #000051;
    }

    .header i {
      position: absolute;
      top: 0;
      right: 0;
      font-size: 20px;
      color: #000051;
    }

    .body .form input {
      display: block;
      padding: 10px;
      margin: 25px 10px;
      outline: none;
      border: solid #000051 1px;
      color: #000051;
      transition: 0.4s;
    }

    .body .form input:focus {
      border-color: #534bae;
    }

    .footer {
      position: relative;
      height: 40px;
      width: 100%;
    }

    .footer button {
      position: absolute;
      padding: 10px;
      min-width: 100px;
      left: 50%;
      transform: translateX(-50%);
      background: #000051;
      border: none;
      color: white;
      cursor: pointer;
      transition: 0.4s;
    }

    .footer button:hover {
      background: #534bae;
    }
  </style>


  <title>Popup Login</title>
</head>

<body>
  <button class="btn" onclick="toggleLogin()">Show Login</button>
  <div class="overlay">
    <div class="login">
      <div class="header">
        <h1>Login</h1>
        <i class="fas fa-times" onclick="toggleLogin()"></i>
      </div>
      <div class="body">
        <form action="#" class="form">
          <input type="text" placeholder="username" required />
          <div class="body">
            <input type="password" placeholder="Password" required />
          </div>
        </form>
      </div>
      <div class="footer">
        <a href="NGO.php">
          <button onclick="">Login</button>
        </a>
      </div>
    </div>
  </div>
</body>
<script>
  function toggleLogin() {
    document.querySelector(".overlay").classList.toggle("open");
  }
</script>

</html>