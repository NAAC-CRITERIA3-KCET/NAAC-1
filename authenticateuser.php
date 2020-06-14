<?php
  include 'dbconfig.php';
  include 'utility.php';
  $username=getData($connect,$username);
  $password=getData($connect,$password);
  $sql=mysqli_query($connect,"select * from auth_user where username='$username' and password='$password' ");
  if($result=mysqli_fetch_assoc($sql))
  {
    header("Location: index.php");
  }
  else
  {
    echo "Error";
  }
?>
