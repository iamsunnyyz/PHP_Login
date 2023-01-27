
<?php
require("./dbcon.php");
$id=$_GET['updateid'];
 if(isset($_POST['Update'])){
  $query = "UPDATE `project` SET `name`='$_POST[name]',`description`='$_POST[desc]',`prototype`='$_POST[prototype]',`startDate`='$_POST[StartDate]',`endDate`='$_POST[endDate]',`manager`='$_POST[manager]',`developer`='$_POST[developer]' where `id`=$id";
  if(mysqli_query($con,$query)){
    echo"<script>
      alert('Project Updated');
      window.location.href='project.php';
    </script>";
  }
  else{
    echo"<script>
      alert('Some Error occurred');
      window.location.href='createProject.php';
    </script>";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width = device-width, initial-scale = 1.0 " />
  <link rel="stylesheet" href="./style.css" />
  <title>Register</title>
</head>

<body>
  <div class="container" id="register-popup">
    <div class="register popup">
      <form method="POST">
        <h2>
          <span>Edit/Update</span>
        </h2>
        <input type="text" placeholder="Project Name" name="name">
        <textarea placeholder="Description" name="desc" rows="3" cols="50" ></textarea>
        <input type="file" accept="application/pdf" name="prototype" style="display: none;" id="pt"><label for="pt">Project Prototype</label>
        <input type="text" placeholder="Project Start Date" onfocus="(this.type='date')" name="startDate" >
        <input type="text" placeholder="Project End Date" onfocus="(this.type='date')" name="endDate" >
        <select name="manager" class="select">
          <option>Select Project Manager</option>
          <?php 
            $query = "SELECT `username` FROM `manager`";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($result)){
            ?>
              <option><?php  echo $row['username'] ?></option>
            <?php
            }
            ?>
        </select>
        <select name="developer" class="select">
          <option>Select Developer</option>
          <?php 
           
            $query = "SELECT * FROM `developer`";
            $result = mysqli_query($con,$query);
            while($row = mysqli_fetch_assoc($result)){
            ?>
              <option><?php  echo $row['name'] ?></option>
            <?php
            }
            ?>
        </select>

        <button type="submit" class="btn" name="Update">Edit/Update</button>
      </form>
    </div>
  </div>
</body>

</html>