<?php
  function getData($connect,$str)
  {
    if(isset($_POST[$str]))
     {
        $str1=$str;   
     }
    else if(isset($_GET[$str]))
     {
        $str1=$str;   
     }
    else
     {
        $str1=NULL;
     }
    $str1=mysqli_real_escape_string($connect,$str1);
    return($str1);
  }
?>
