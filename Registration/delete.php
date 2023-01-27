<?php
 require("./dbcon.php");
 if(isset($_GET['deleteid'])){
  $id = $_GET['deleteid'];
  $query = "DELETE FROM `project` WHERE `id`=$id";
  $result = mysqli_query($con,$query);
  if($result){
    echo"<script>
            alert('Delete successful');
            window.location.href='project.php';
          </script>";
  }
  else{
    echo"<script>
            alert('Delete Unsuccessful');
            window.location.href='project.php';
          </script>";
  }
 }
?>