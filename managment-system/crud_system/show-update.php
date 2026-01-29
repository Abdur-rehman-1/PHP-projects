<?php  include 'includes/header.php';

  require 'db-connect.php';
    $id =  $_GET["id"];

  $query = "SELECT * FROM `students` WHERE id=$id";
  
    $run = mysqli_query($con,$query);

    // if($result = mysqli_fetch_assoc($run)){
        // print_r($result);
    // }

     $result = mysqli_fetch_assoc($run);

?>
    <h1>Update Student Information</h1>

    

   
<form action="update.php" method="post" class="add-student-form">
  <input type="hidden" value="<?php echo $result['id']; ?>" name="id">
  
  <label for="name">Name:</label>
  <input type="text" value="<?php echo $result['Name']; ?>" id="name" name="name" required>

  <label for="address">Address:</label>
  <input type="text" value="<?php echo $result['Address']; ?>" id="address" name="address" required>

  <label for="class">Class:</label>
  <input type="text" value="<?php echo $result['Class']; ?>" id="class" name="class" required>

  <label for="phone">Phone:</label>
  <input type="number" value="<?php echo $result['Phone']; ?>" id="phone" name="phone" required>

  <button type="submit" name="save" class="save-btn">Update</button>

</form>
<?php
include 'includes/footer.php';
?>
