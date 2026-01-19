<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    
    $array = array(
        array("Name" => 'Abdur Rehman', "Age" => 24, "City" => "Karachi"),
        array("Name" => "Ali Hassan", "Age" => 22, "City" => "Lahore"),
        array("Name" => "Ayesha Khan", "Age" => 23, "City" => "Islamabad")
    );

    foreach($array as $person) {
        echo "Name: " . $person['Name'] . "<br>";
        echo "Age: " . $person['Age'] . "<br>";
        echo "City: " . $person['City'] . "<br><br>";
    }

    ?>
</body>
</html>