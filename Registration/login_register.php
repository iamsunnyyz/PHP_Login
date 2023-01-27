<?php

   require('./dbcon.php');
   session_start();

  if(isset($_POST['login'])){
    $query="SELECT * FROM `manager` WHERE `username`='$_POST[email_username]' OR `email`='$_POST[email_username]'";
    $result = mysqli_query($con,$query);
    if($result){
      if(mysqli_num_rows($result)==1){
        $result_fetch = mysqli_fetch_assoc($result);
        if($_POST['password']==$result_fetch['password']){
          $_SESSION['logged_in']=true;
          $_SESSION['username']=$result_fetch['username'];
          header("location:index.php");
        }
        else{
          echo"<script>
            alert('Incorrect Password');
            window.location.href='index.php';
          </script>";
        }

        
      }
      else{
        echo"<script>
            alert('User not found');
            window.location.href='registration.php';
          </script>";
      }
    }
    else{
      echo"<script>
            alert('Can not run query');
            window.location.href='index.php';
          </script>";
    }
  } 
  



  if(isset($_POST['register'])){
    $user_exist = "SELECT * FROM `manager` WHERE `username`='$_POST[username]' OR `email`='$_POST[email]'";
    $result = mysqli_query($con,$user_exist);
    if($result){
      if(mysqli_num_rows($result)>0){
        $result_fetch=mysqli_fetch_assoc($result);
        if($result_fetch['username']==$_POST['username']){
          echo"<script>
            alert('Username already exists.');
            window.location.href='index.php';
          </script>";
        }
        else{
          echo"<script>
            alert('Duplicate email');
            window.location.href='index.php';
          </script>";
        }
        
      }
      else{
        // $password = password_hash($_POST['password'],PASSWORD_BCRYPT);
        $query = "INSERT INTO `manager`(`fullname`, `username`, `email`, `password`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[email]','$_POST[password]')";
        if(mysqli_query($con,$query)){
          echo"<script>
            alert('Registration successful');
            window.location.href='index.php';
          </script>";
        }
        else{
          echo"<script>
            alert('Can not query1');
            window.location.href='Registration.php';
          </script>";
        }
      }
    }
    else{
      echo"<script>
        alert('can not run query');
        window.location.href='Registration.php';
      </script>";
    }
  }

  if(isset($_POST['create'])){
    $query = "INSERT INTO `project`(`name`, `description`,`prototype`, `startDate`, `endDate`, `manager`, `developer`) VALUES ('$_POST[name]','$_POST[desc]','$_POST[prototype]','$_POST[startDate]','$_POST[endDate]','$_POST[manager]','$_POST[developer]')";
    if(mysqli_query($con,$query)){
      echo"<script>
        alert('Project created');
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