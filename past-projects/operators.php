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
        h2 {
            color: #555;
        }
        h3 {
            color: #777;
            margin-top: 20px;
        }

    </style>
</head>
<body>
    
<h1>PHP Operators</h1>
<?php


    // Small calculator using operators.
   
echo "<h2>3. Simple Calculator</h2>";
$num1 = 4;
$num2 = 4;

echo "The numbers are: " . $num1 . " and " . $num2 . "<br>";

echo "Addition: " . ($num1 + $num2) . "<br>";
echo "Subtraction: " . ($num1 - $num2) . "<br>";
echo "Multiplication: " . ($num1 * $num2) . "<br>";
echo "Division: " . ($num1 / $num2) . "<br>";
echo "Modulus: " . ($num1 % $num2) . "<br>";
echo "Exponentiation: " . ($num1 ** $num2) . "<br>";


 
?>

</body>
</html>