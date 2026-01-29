<?php

  include "../includes/config.php";
  include "../includes/header.php";



?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>
    <body>
        
    <?php $query="SELECT * FROM attendance";
    $result=mysqli_query($connection,$query);
    
    ?>
    <div class="container mt-5">
        <h2 class="mb-4">Attendance List</h2>
        <table class="table table-bordered">
            <thead class="bg-dark text-white">
               <!-- `id`, `student_id`, `date`, `status` -->
                <tr>
                    <th>ID</th>
                    <th>Student ID</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
            </thead>
            <tbody>
                <?php while($row=mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['student_id']; ?></td>
                    <td><?php echo $row['date']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                    <td class="p-4">
                        <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>
                    
                </tr>
                <?php } ?>
            </tbody>
        </table>