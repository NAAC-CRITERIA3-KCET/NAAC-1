<?php
  include 'dbconfig.php';
  $username=$_POST['username'];
  $password=$_POST['password'];
  if(($username=='username') && ($password=='password'))
  {
    header("Location: index.php");
  }
  else
  {
    echo "Error";
  }
?>
