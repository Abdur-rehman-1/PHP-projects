<?php

  require 'db-connect.php';
 
 $id =  $_GET["id"];

 
  $deletequery = "DELETE FROM `students` WHERE id=$id";
  mysqli_query($con,$deletequery);
  header("Location: index.php");


  

 ?>