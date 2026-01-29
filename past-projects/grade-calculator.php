<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            color: #333;
        }

    </style>
</head>
<body>
    <?php

    echo "<h1>Grade Calculator</h1>";
    

    $percentage = 90;
     
    echo "Percentage: " . $percentage . "%<br>";
    
    if ($percentage >= 90) {
        echo "Grade: A";
    }
     elseif ($percentage >= 80) {
        echo "Grade: B";
    }
     elseif ($percentage >= 70) {
        echo "Grade: C";
    }
     elseif ($percentage >= 60) {
        echo "Grade: D";
    }
     else {
        echo "Grade: F";
    }

    ?>

    
    
    
    
</body>
</html>