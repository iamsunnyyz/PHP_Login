<?php

use LDAP\Result;

  require("./dbcon.php");
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
  <div class="logout">
    <a class="newproject" href="./createProject.php"><span>+</span><p>New Project</p></a>
    <a class="exit" href="./logout.php">Logout</a>
  </div>
  <?php 
    $query = "SELECT * FROM `project`";
    $result = mysqli_query($con,$query);
    if($result){
      ?>
      <div class="details">
      <?php
      while($result_fetch=mysqli_fetch_assoc($result)){
        $id=$result_fetch['id'];
        ?>
          <div class="project_details">
          <a class="delete" href="delete.php?deleteid=<?php echo$id ?>">delete</a>
          <a class="edit" href="update.php?updateid=<?php echo$id ?>">Edit/update</a>
          <h1>Project: <?php  echo $result_fetch['name'] ?></h1>
          <p>Decription: <?php  echo $result_fetch['description'] ?></p>
          <p><?php  echo $result_fetch['prototype'] ?></p>
          <p>Start Date: <?php  echo $result_fetch['startDate'] ?></p>
          <p>End Date: <?php  echo $result_fetch['endDate'] ?></p>
          <h3>Manager: <?php  echo $result_fetch['manager'] ?></h3>
          <h3>Developer: <?php  echo $result_fetch['developer'] ?></h3>
          <select class="status">
            <option>Pending</option>
            <option>Completed</option>
            <option>Processing</option>
            <option>Hold</option>
            <option>Terminated</option>
          </select>
          </div>
          
      </div>  
        <?php
      }
    }
    else{
      echo"<script>
        alert('can not run query');
        window.location.href='Registration.php';
      </script>";
    }
  ?>
</body>

</html>