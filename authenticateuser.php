<?php
  include 'dbconfig.php';
  include 'utility.php';
  getData($username);
  getData($password);
  $sql=mysqli_query($connect,"select * from auth_user where username='$username' and password='$password' ");
  $result=mysqli_num_rows($sql);
  if($result==1)
  {
    header("Location: index.php");
  }
  else
  {
    echo "Error";
  }
?>
