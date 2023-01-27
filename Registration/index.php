<?php 
  require("./dbcon.php");
  session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0 " />
  <link rel="stylesheet" href="./style.css" />
  <title>Manager Registration</title>
</head>

<body>
  
  <?php
    if(isset($_SESSION['logged_in'])&&$_SESSION['logged_in']==true){
      require("project.php");
    }
    else{
      require("./login.php");
    }
  ?>
</body>

</html>