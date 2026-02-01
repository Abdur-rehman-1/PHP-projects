<?php
include 'config.php';
include 'includes/header.php';

 
    if (!isset($_GET['id']) || empty($_GET['id'])) {
        header('Location: students.php');
        exit();
    }

  $id = intval($_GET['id']);
    if ($id <= 0) {
        header('Location: students.php');
        exit();
    }
  $query = "SELECT * FROM `students` WHERE id=$id";
    $result = mysqli_query($connection,$query);

    $student = mysqli_fetch_assoc($result);
?>
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">Confirm Delete</h5>
            <small class="text-white-50">Review the student details before deleting.</small>
        </div>
        <div class="card-body">
            <form action="confirm_delete_student.php" method="post" class="row g-3">
                <input type="hidden" name="id" value="<?php echo $student['id']; ?>">

                <div class="col-12">
                    <label class="form-label small text-muted">Name</label>
                    <input type="text" readonly class="form-control-plaintext fs-6" value="<?php echo $student['name']; ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label small text-muted">Class</label>
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $student['class_id']; ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label small text-muted">Phone</label>
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $student['phone']; ?>">
                </div>

                <div class="col-12">
                    <label class="form-label small text-muted">Email</label>
                    <input type="email" readonly class="form-control-plaintext" value="<?php echo $student['email']; ?>">
                </div>

                <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                    <a href="students.php" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>