<?php
include 'config.php';
include 'includes/header.php';

    

  $id = intval($_GET['id']);
    if ($id <= 0) {
        header('Location: teachers.php');
        exit();
    }

  $query = "SELECT * FROM `teachers` WHERE id=$id";
    $result = mysqli_query($connection,$query);

    $teacher = mysqli_fetch_assoc($result);
?>
<div class="container mt-4">
    <div class="card shadow-sm">
        <div class="card-header bg-danger text-white">
            <h5 class="mb-0">Confirm Delete Teacher</h5>
            <small class="text-white-50">Review the teacher details before deleting.</small>
        </div>
        <div class="card-body">
            <!-- `id`, `name`, `subject`, `phone` -->
            <form action="confirm_delete_teacher.php" method="post" class="row g-3">
                <input type="hidden" name="id" value="<?php echo $teacher['id']; ?>">

                <div class="col-12">
                    <label class="form-label small text-muted">Name</label>
                    <input type="text" readonly class="form-control-plaintext fs-6" value="<?php echo $teacher['name']; ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label small text-muted">Subject</label>
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $teacher['subject']; ?>">
                </div>

                <div class="col-md-6">
                    <label class="form-label small text-muted">Phone</label>
                    <input type="text" readonly class="form-control-plaintext" value="<?php echo $teacher['phone']; ?>">
                </div>

     

                <div class="col-12 d-flex justify-content-end gap-2 mt-3">
                    <a href="teachers.php" class="btn btn-outline-secondary">Cancel</a>
                    <button type="submit" class="btn btn-danger">Confirm Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include 'includes/footer.php'; ?>