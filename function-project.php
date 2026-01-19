<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    
    $input = 5;

    function Result($input)  {

         if ($input %2 == 0) {
            echo "The number " . $input . " is Even<br>";
         }
            else {
                echo "The number " . $input . " is Odd<br>";
            }
    }

    echo Result($input);
    
    ?>
</body>
</html>