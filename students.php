<?php
    include 'config.php';
    include 'includes/header.php';

    // Fetch students from the database
    $query = "SELECT * FROM students";
    $result = mysqli_query($connection, $query);

?>


<div class="container">
    <h2>Students List</h2>
    <a href="add_student.php" class="btn btn-primary mb-3">Add Student</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class ID</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php while ($student = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <!-- `id`, `class_id`, `name`, `email`, `phone` -->
                     <td><?php echo $student['id']; ?></td>
                     <td><?php echo $student['name']; ?></td>
                     <td><?php echo $student['class_id']; ?></td>
                     <td><?php echo $student['email']; ?></td>
                     <td><?php echo $student['phone']; ?></td>
                    <td>
                        <a href="update_student.php?id=<?php echo $student['id']; ?>" class="btn btn-primary btn-sm">Update</a>
                        <a href="delete_student.php?id=<?php echo $student['id']; ?>" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
 <?php
    include 'includes/footer.php';
 ?>
