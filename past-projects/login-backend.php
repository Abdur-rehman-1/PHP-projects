<?php
  
  session_start();
  
 $password=password_hash($_POST["password"],PASSWORD_DEFAULT);
 $user=$_POST["username"];

 if ($user=="admin"&& password_verify("123",$password) ) 
    {
      
     header("location:/admin/dashboard.php");
     $_SESSION["user"]="admin";


 }
else {
    echo "Invalid Username";
}

?>