<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0 " />
  <link rel="stylesheet" href="./style.css" />
  <title>Register</title>
</head>

<body>
  <div class="container" id="register">
    <div class="register popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER REGISTER</span>
        </h2>
        <input type="text" placeholder="Full Name" name="fullname">
        <input type="text" placeholder="Username" name="username">
        <input type="email" placeholder="E-mail" name="email">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="btn" name="register">REGISTER</button>
      </form>
    </div>
  </div>
</body>

</html>