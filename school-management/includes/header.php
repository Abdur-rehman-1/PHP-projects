<?php
// Header
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>School Management System - Advanced Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <!-- Chart.js Library -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
</head>
<body>
<div class="d-flex" id="wrapper">
    <!-- Sidebar -->
    <div class="bg-dark text-white p-3" id="sidebar-wrapper" style="min-width:250px;">
        <h3 class="text-center">📊 My School</h3>
        <ul class="nav flex-column mt-4">
            <li class="nav-item mb-2"><a href="index.php" class="nav-link text-white">🏠 Dashboard</a></li>

            <!-- Students Dropdown -->
            <li class="nav-item mb-2">
                <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#studentsMenu" role="button" aria-expanded="false" aria-controls="studentsMenu">
                    <span>👥 Students</span>
                    <span class="badge bg-transparent text-white">▸</span>
                </a>
                <div class="collapse" id="studentsMenu">
                    <ul class="nav flex-column ms-3 mt-2">
                        <li class="nav-item"><a class="nav-link text-white" href="students.php">View Students</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="add_student.php">Add Student</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="update_student.php">Update Student</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="delete_student.php">Delete Student</a></li>
                    </ul>
                </div>
            </li>

            <!-- Teachers Dropdown -->
            <li class="nav-item mb-2">
                <a class="nav-link text-white d-flex justify-content-between align-items-center" data-bs-toggle="collapse" href="#teachersMenu" role="button" aria-expanded="false" aria-controls="teachersMenu">
                    <span>🎓 Teachers</span>
                    <span class="badge bg-transparent text-white">▸</span>
                </a>
                <div class="collapse" id="teachersMenu">
                    <ul class="nav flex-column ms-3 mt-2">
                        <li class="nav-item"><a class="nav-link text-white" href="teachers.php">View Teachers</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="add_teacher.php">Add Teacher</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="update_teacher.php">Update Teacher</a></li>
                        <li class="nav-item"><a class="nav-link text-white" href="delete_teacher.php">Delete Teacher</a></li>
                    </ul>
                </div>
            </li>

            <li class="nav-item mb-2"><a href="classes.php" class="nav-link text-white">📚 Classes</a></li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id="page-content-wrapper" class="flex-grow-1 p-4">
        <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4 rounded">
            <div class="container-fluid">
                <button class="btn btn-primary" id="menu-toggle">☰ Toggle Menu</button>
            </div>
        </nav>