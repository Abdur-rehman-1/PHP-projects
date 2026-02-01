<?php
// Dashboard page - Advanced School Management
include 'config.php';

$stu_query = "SELECT * FROM students";
$stu_result = mysqli_query($connection, $stu_query);

$teach_query = "SELECT * FROM teachers";
$teach_result = mysqli_query($connection, $teach_query);

$class_query = "SELECT * FROM classes";
$class_result = mysqli_query($connection, $class_query);

$attendance_query = "SELECT * FROM attendance where status = 'Present'";
$attendance_result = mysqli_query($connection, $attendance_query);

?>
<?php include 'includes/header.php'; ?>

<div class="dashboard-container">
    <!-- Header Section -->
    <div class="dashboard-header mb-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h1 class="dashboard-title">Dashboard</h1>
                <p class="text-muted">Welcome back! Here's your school overview.</p>
            </div>
            <div class="col-md-6 text-end">
                <div class="date-time">
                    <p class="mb-0"><strong id="current-date"></strong></p>
                    <p class="mb-0"><strong id="current-time"></strong></p>
                </div>
            </div>
        </div>
    </div>

    <!-- KPI Cards -->
    <div class="row mb-4">
        <!-- Students Card -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card stat-card-primary">
                <div class="stat-card-body">
                    <div class="stat-icon">
                        <i class="icon-users"></i>
                    </div>
                    <div class="stat-content">
                        <h6 class="stat-label">Total Students</h6>
                        <h2 class="stat-value"><?php echo ($stu_result) ? mysqli_num_rows($stu_result) : '0'; ?></h2>
                        <!-- <p class="stat-change positive"><span>↑ 5%</span> from last month</p> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Teachers Card -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card stat-card-success">
                <div class="stat-card-body">
                    <div class="stat-icon">
                        <i class="icon-teacher"></i>
                    </div>
                    <div class="stat-content">
                        <h6 class="stat-label">Total Teachers</h6>
                        <h2 class="stat-value"><?php echo ($teach_result) ? mysqli_num_rows($teach_result) : '0'; ?></h2>
                        <!-- <p class="stat-change positive"><span>↑ 1%</span> this year</p> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Classes Card -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card stat-card-warning">
                <div class="stat-card-body">
                    <div class="stat-icon">
                        <i class="icon-book"></i>
                    </div>
                    <div class="stat-content">
                        <h6 class="stat-label">Active Classes</h6>
                        <h2 class="stat-value"><?php echo ($class_result) ? mysqli_num_rows($class_result) : '0'; ?></h2>
                        <!-- <p class="stat-change">Full capacity</p> -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Attendance Card -->
        <div class="col-lg-3 col-md-6 mb-4">
            <div class="stat-card stat-card-info">
                <div class="stat-card-body">
                    <div class="stat-icon">
                        <i class="icon-check"></i>
                    </div>
                    <div class="stat-content">
                        <h6 class="stat-label">Total Attendance</h6>
                        <h2 class="stat-value"><?php echo ($attendance_result) ? mysqli_num_rows($attendance_result) : '0'; ?></h2>
                        <!-- <p class="stat-change positive"><span>↑ 3%</span> this week</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section -->
    <div class="row mb-4">
        <!-- Student Distribution Chart -->
        <div class="col-lg-6 mb-4">
            <div class="card chart-card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Student Distribution by Class</h5>
                </div>
                <div class="card-body">
                    <canvas id="classDistributionChart">
                        <!-- 8 classes -->

                    </canvas>
                </div>
            </div>
        </div>

        <!-- Attendance Trend Chart -->
        <div class="col-lg-6 mb-4">
            <div class="card chart-card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Attendance Trend (Last 7 Days)</h5>
                </div>
                <div class="card-body">
                    <canvas id="attendanceTrendChart"></canvas>
                </div>
            </div>
        </div>
    </div>

    <!-- Additional Analytics -->
    <div class="row mb-4">
        <!-- Performance Chart -->
        <div class="col-lg-4 mb-4">
            <div class="card chart-card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Class Performance</h5>
                </div>
                <div class="card-body">
                    <canvas id="performanceChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Gender Distribution -->
        <div class="col-lg-4 mb-4">
            <div class="card chart-card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Gender Distribution</h5>
                </div>
                <div class="card-body">
                    <canvas id="genderChart"></canvas>
                </div>
            </div>
        </div>

        <!-- Quick Stats -->
        <div class="col-lg-4 mb-4">
            <div class="card chart-card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Quick Stats</h5>
                </div>
                <div class="card-body">
                    <div class="quick-stat">
                        <div class="stat-row">
                            <span class="stat-label">Present Today</span>
                            <span class="stat-badge">110</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-label">Absent Today</span>
                            <span class="stat-badge alert">10</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-label">Classes Today</span>
                            <span class="stat-badge info">8</span>
                        </div>
                        <div class="stat-row">
                            <span class="stat-label">Pending Tasks</span>
                            <span class="stat-badge warning">5</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Activities Section -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow-sm">
                <div class="card-header bg-transparent border-bottom">
                    <h5 class="mb-0">Recent Students</h5>
                </div>
                <div class="card-body">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Class</th>
                                <th>Phone</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>001</td>
                                <td>Ali Khan</td>
                                <td>10-A</td>
                                <td>0300-1234567</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>002</td>
                                <td>Maryam Ahmed</td>
                                <td>9-B</td>
                                <td>0301-7654321</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>003</td>
                                <td>Ahmed Hassan</td>
                                <td>11-C</td>
                                <td>0321-9876543</td>
                                <td><span class="badge bg-danger">Inactive</span></td>
                            </tr>
                            <tr>
                                <td>004</td>
                                <td>Fatima Khan</td>
                                <td>10-B</td>
                                <td>0310-5555555</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>005</td>
                                <td>Hassan Ali</td>
                                <td>9-A</td>
                                <td>0302-4444444</td>
                                <td><span class="badge bg-success">Active</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div> <!-- /.dashboard-container -->

<?php include 'includes/footer.php'; ?>
