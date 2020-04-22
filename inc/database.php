<?php

$conn=mysqli_connect('localhost','root','','sweets');
if(mysqli_connect_errno()){
  echo "something went wrong ".mysqli_connect_error();
}

?>