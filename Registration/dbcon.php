<?php 
  $con = mysqli_connect("localhost","root","","registration");
  
  if(mysqli_connect_error()){
    echo"<script>alert('can not connect to database')</script>";
    exit();
  }
?>