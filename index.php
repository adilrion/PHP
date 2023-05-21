<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello PHP</title>
</head>

<body>
    <?php

    // Variable
    $name = 'Adil Mahmoud Rion';
    echo 'My Name Is ' . $name . '</br>';
    $age = 12;
    print("I'm .$age. Years old </br>");


    $food = array('Appall', 'Banana', 'Mango');
    echo "I like  .$food[2]. </br>";
    echo count($food);


    // Loop Through an Indexed Array
    for ($x = 0; $x < count($food); $x++) {
        echo "<br>Array index $x : $food[$x]";
    }


    // Associative Array 
    $food2 = array('Appall' => '10kg', 'Banana' => '5kg', 'Mango' => '30kg');

    // Loop Through an Associative Indexed Array
    foreach ($food2 as $key => $value) {
        echo "<br> $key : $value <br>";
    }
    // access values in an associative multidimensional array
    $assocMultiDimArray = array(
        'fruits' => array(
            'apple' => 'red',
            'banana' => 'yellow',
            'mango' => 'orange'
        ),
        'animals' => array(
            'lion' => 'roar',
            'elephant' => 'trumpet',
            'giraffe' => 'hum'
        )
    );

    // Accessing all values in an associative multidimensional array
    foreach ($assocMultiDimArray as $category => $subArray) {
        echo "<br>Category: " . $category . "<br>";

        foreach ($subArray as $key => $value) {
            echo "Key: " . $key . ", Value: " . $value . "<br>";
        }

        echo "<br>";
    }



    echo 'Rion'


    ?>
</body>

</html>