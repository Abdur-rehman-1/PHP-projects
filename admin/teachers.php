<?php

  include "../includes/config.php";
  include "../includes/header.php";

   $query="SELECT * FROM `teachers`";

   $result=mysqli_query($connection,$query);
   
?>
<!DOCTYPE html>
 <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
    </head>


<body>

  

 <div class="container mt-5">
        <h2 class="mb-4">Teachers List</h2>
        <table class="table table-bordered">
      
        <thead class="bg-dark text-white"> 
            <tr>
                     <th>ID</th>
                    <!-- <th>Class ID</th> -->
                    <th>Name</th>
                    <th>Subject</th>
                    <th>Phone</th>
                    <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($row=mysqli_fetch_assoc($result)) {
                if (mysqli_fetch_assoc($result) > 0) { 
                    ?>
                    
                
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['subject']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td class="p-4">
                    <button class="btn btn-primary">Edit</button>
                    <button class="btn btn-danger">Delete</button>  
                </td>
            </tr>
            
             <?php 
                }   
                else {
                    echo "No record found";}
            }  
            ?>
            
  
            
        </tbody>
       
     </table>
 </div>







<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>