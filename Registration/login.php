<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0 " />
  <link rel="stylesheet" href="./style.css" />
  <title>Manager Registration</title>
</head>

<body>
  <div class="container" id="login">
    <div class="popup">
      <form method="POST" action="login_register.php">
        <h2>
          <span>USER LOGIN</span>
        </h2>
        <input type="text" placeholder="E-mail or Username" name="email_username">
        <input type="password" placeholder="Password" name="password">
        <button type="submit" class="btn" name="login">LOGIN</button>
        <p class="new">New user? <a href="./registration.php">Register</a> here.</p>
      </form>
    </div>
  </div>
</body>

</html>