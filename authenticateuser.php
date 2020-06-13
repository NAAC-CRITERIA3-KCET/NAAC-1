<?php
  include 'dbconfig.php';
  include 'utility.php';
  getData($username);
  getData($password);
  $sql="select * from 
  if(($username=='username') && ($password=='password'))
  {
    header("Location: index.php");
  }
  else
  {
    echo "Error";
  }
?>
