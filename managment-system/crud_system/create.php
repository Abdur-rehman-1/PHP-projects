<?php  include 'includes/header.php';?>
    <h1>Add Student</h1>

    <!-- name,address,class,phone, -->

   <form action="add-backend.php" method="post" class="add-student-form">
  <label for="name">Name:</label>
  <input type="text" id="name" name="name" required>

  <label for="address">Address:</label>
  <input type="text" id="address" name="address" required>

  <label for="class">Class:</label>
  <input type="text" id="class" name="class" required>

  <label for="phone">Phone:</label>
  <input type="number" id="phone" name="phone" required>

  <button type="submit" name="save" class="save-btn">Save</button>


</form>
<?php
include 'includes/footer.php';
?>
