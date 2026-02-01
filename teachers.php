<?php
   include 'config.php';
    include 'includes/header.php';
    $query = "SELECT * FROM teachers";
    $result = mysqli_query($connection, $query);
?>

 <div class="container">
    <h2 class="my-4">Teachers</h2>
    <a href="add_teacher.php" class="btn btn-primary mb-3">Add Teacher</a>
    <table class="table table-bordered">
        <thead>
            <tr>
               <td>ID</td>
               <td>Name</td>
               <td>Subject</td>
               <td>Phone</td>
               <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php while ($teacher = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <!-- `id`, `name`, `subject`, `phone -->
                    <td><?php echo $teacher['id']; ?></td>
                    <td><?php echo $teacher['name']; ?></td>
                    <td><?php echo $teacher['subject']; ?></td>
                    <td><?php echo $teacher['phone']; ?></td>
                    <td>
                        <a href="update_teacher.php?id=<?php echo $teacher['id']; ?>" class="btn btn-sm btn-primary">Edit</a>
                        <a href="delete_teacher.php?id=<?php echo $teacher['id']; ?>" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
 </div>

 <?php
    include 'includes/footer.php';
 ?>
