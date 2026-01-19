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

<h1>PHP Data Types</h1>
<?php
// String
echo "<h2>Data Types Examples</h2>";
echo "<h3>1. String</h3>";
$name = "John Doe";
echo "String: " . $name . "<br>";




// Integer
echo "<h3>2. Integer</h3>";
$age = 30;
echo "Integer: " . $age . "<br>";



// Float
echo "<h3>3. Float</h3>";
$height = 5.9;
echo "Float: " . $height . "<br>";



// Boolean
echo "<h3>4. Boolean</h3>";
$is_student = false;
echo "Boolean: " . ($is_student ? 'true' : 'false') . "<br>";




// Array
echo "<h3>5. Array</h3>";
$fruits = array("Apple", "Banana", "Cherry");
// echo "Array: ";
print_r($fruits);
?>
</body>
</html>