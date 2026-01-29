<?php

    include 'includes/header.php';
    
    require 'db-connect.php';
        $id =  $_POST["id"];
    
    $query = "UPDATE `students` SET `id`='$_POST[id]',`Name`='$_POST[name]',`Address`='$_POST[address]',`Class`='$_POST[class]',`Phone`='$_POST[phone]' WHERE id=$id";
    
        
    
        