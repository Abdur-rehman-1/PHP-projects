<?php

include 'config.php';

$id = $_POST["id"];

  $query = "DELETE FROM `teachers` WHERE id=$id";

  if (mysqli_query($connection, $query)) {
    header("Location: teachers.php?deleted=1");
  } else {
    echo "Error deleting teacher: " . mysqli_error($connection);
  }
?>