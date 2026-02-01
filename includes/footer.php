<?php
   $class1_query = "SELECT * FROM students WHERE class_id = '1'";
   $class1_result = mysqli_query($connection, $class1_query);

   $class2_query = "SELECT * FROM students WHERE class_id = '2'";
   $class2_result = mysqli_query($connection, $class2_query);

    $class3_query = "SELECT * FROM students WHERE class_id = '3'";
   $class3_result = mysqli_query($connection, $class3_query);

    $class4_query = "SELECT * FROM students WHERE class_id = '4'";
   $class4_result = mysqli_query($connection, $class4_query);

    $class5_query = "SELECT * FROM students WHERE class_id = '5'";
   $class5_result = mysqli_query($connection, $class5_query);

    $class6_query = "SELECT * FROM students WHERE class_id = '6'";
   $class6_result = mysqli_query($connection, $class6_query);

    $class7_query = "SELECT * FROM students WHERE class_id = '7'";
   $class7_result = mysqli_query($connection, $class7_query);

    $class8_query = "SELECT * FROM students WHERE class_id = '8'";
   $class8_result = mysqli_query($connection, $class8_query);


   $attendance_query = "SELECT * FROM attendance where date >= DATE_SUB(CURDATE(), INTERVAL 7 DAY) ORDER BY date ASC";

   
?>
    </div> <!-- /#page-content-wrapper -->
</div> <!-- /#wrapper -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
<script src="js/script.js"></script>

<script>
    // Initialize Charts
    document.addEventListener('DOMContentLoaded', function() {
        // Class Distribution Chart
        const ctxClass = document.getElementById('classDistributionChart');
        if (ctxClass) {
            new Chart(ctxClass, {
                type: 'bar',
                data: {
                    labels: ['Class 1', 'Class 2', 'Class 3', 'Class 4', 'Class 5', 'Class 6', 'Class 7', 'Class 8'],
                    datasets: [{
                        label: 'Students',
                        data: [
                            <?php echo ($class1_result) ? mysqli_num_rows($class1_result) : '0'; ?>,
                            <?php echo ($class2_result) ? mysqli_num_rows($class2_result) : '0'; ?>,
                            <?php echo ($class3_result) ? mysqli_num_rows($class3_result) : '0'; ?>,
                            <?php echo ($class4_result) ? mysqli_num_rows($class4_result) : '0'; ?>,
                            <?php echo ($class5_result) ? mysqli_num_rows($class5_result) : '0'; ?>,
                            <?php echo ($class6_result) ? mysqli_num_rows($class6_result) : '0'; ?>,
                            <?php echo ($class7_result) ? mysqli_num_rows($class7_result) : '0'; ?>,
                            <?php echo ($class8_result) ? mysqli_num_rows($class8_result) : '0'; ?>
                        ],
                        backgroundColor: [
                            'rgba(79, 70, 229, 0.8)',
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(245, 158, 11, 0.8)',
                            'rgba(6, 182, 212, 0.8)',
                            'rgba(239, 68, 68, 0.8)',
                            'rgba(168, 85, 247, 0.8)',
                            'rgba(236, 72, 153, 0.8)',
                            'rgba(34, 197, 94, 0.8)'
                        ],
                        borderColor: [
                            'rgba(79, 70, 229, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(245, 158, 11, 1)',
                            'rgba(6, 182, 212, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(236, 72, 153, 1)',
                            'rgba(34, 197, 94, 1)'
                        ],
                        borderWidth: 2,
                        borderRadius: 8,
                        hoverBackgroundColor: [
                            'rgba(79, 70, 229, 1)',
                            'rgba(16, 185, 129, 1)',
                            'rgba(245, 158, 11, 1)',
                            'rgba(6, 182, 212, 1)',
                            'rgba(239, 68, 68, 1)',
                            'rgba(168, 85, 247, 1)',
                            'rgba(236, 72, 153, 1)',
                            'rgba(34, 197, 94, 1)'
                        ]
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            display: false
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            grid: {
                                display: true,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Attendance Trend Chart
        const ctxAttendance = document.getElementById('attendanceTrendChart');
        if (ctxAttendance) {
            new Chart(ctxAttendance, {
                type: 'line',
                data: {
                    labels: ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'],
                    datasets: [{
                        label: 'Attendance %',
                        data: [ <?php
                            // Sample data for the last 7 days
                            $attendance_data = [90, 85, 88, 92, 95, 87, 91];
                            echo implode(',', $attendance_data);
                        ?>],
                        borderColor: 'rgba(79, 70, 229, 1)',
                        backgroundColor: 'rgba(79, 70, 229, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 6,
                        pointBackgroundColor: 'rgba(79, 70, 229, 1)',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2,
                        pointHoverRadius: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            display: true,
                            labels: {
                                usePointStyle: true,
                                padding: 15
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: false,
                            min: 80,
                            max: 100,
                            grid: {
                                display: true,
                                color: 'rgba(0, 0, 0, 0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Performance Chart
        const ctxPerformance = document.getElementById('performanceChart');
        if (ctxPerformance) {
            new Chart(ctxPerformance, {
                type: 'doughnut',
                data: {
                    labels: ['Excellent', 'Good', 'Average', 'Below Avg'],
                    datasets: [{
                        data: [45, 35, 15, 5],
                        backgroundColor: [
                            'rgba(16, 185, 129, 0.8)',
                            'rgba(79, 70, 229, 0.8)',
                            'rgba(245, 158, 11, 0.8)',
                            'rgba(239, 68, 68, 0.8)'
                        ],
                        borderColor: [
                            'rgba(16, 185, 129, 1)',
                            'rgba(79, 70, 229, 1)',
                            'rgba(245, 158, 11, 1)',
                            'rgba(239, 68, 68, 1)'
                        ],
                        borderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                usePointStyle: true
                            }
                        }
                    }
                }
            });
        }

        // Gender Distribution Chart
        const ctxGender = document.getElementById('genderChart');
        if (ctxGender) {
            new Chart(ctxGender, {
                type: 'doughnut',
                data: {
                    labels: ['Male Students', 'Female Students'],
                    datasets: [{
                        data: [65, 55],
                        backgroundColor: [
                            '#3B82F6',
                            '#EC4899'
                        ],
                        borderColor: [
                            '#1E40AF',
                            '#BE185D'
                        ],
                        borderWidth: 3,
                        hoverBorderWidth: 5,
                        hoverOffset: 8
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: true,
                    cutout: '60%',
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 20,
                                usePointStyle: true,
                                pointStyle: 'circle',
                                font: {
                                    size: 14,
                                    weight: '600'
                                },
                                color: '#374151',
                                generateLabels: function(chart) {
                                    const data = chart.data;
                                    return data.labels.map((label, i) => ({
                                        text: label + ' (' + data.datasets[0].data[i] + ')',
                                        fillStyle: data.datasets[0].backgroundColor[i],
                                        strokeStyle: data.datasets[0].borderColor[i],
                                        lineWidth: 2,
                                        hidden: false,
                                        index: i
                                    }));
                                }
                            }
                        },
                        tooltip: {
                            backgroundColor: 'rgba(0, 0, 0, 0.8)',
                            titleColor: '#fff',
                            bodyColor: '#fff',
                            borderColor: '#4f46e5',
                            borderWidth: 2,
                            padding: 12,
                            displayColors: true,
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.parsed || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((value / total) * 100).toFixed(1);
                                    return label + ': ' + value + ' (' + percentage + '%)'
                                }
                            }
                        }
                    }
                }
            });
        }
    });
</script>
</body>
</html>
