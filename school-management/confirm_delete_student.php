<?php

include 'config.php';

$id = $_POST["id"];

  $query = "DELETE FROM `students` WHERE id=$id";

  if (mysqli_query($connection, $query)) {
    header("Location: students.php?deleted=1");
  } else {
    echo "Error deleting student: " . mysqli_error($con);
  }
?>