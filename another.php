<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Name: <input type="text" name="fname">
        <input type="submit">
    </form>



    <a href="test_get.php?subject=PHP&web=W3schools.com">Test $GET</a>


    <?php

    # echo "Study " . $_GET['subject'] . " at " . $_GET['web'];


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $name   = $_REQUEST['fname'];
        if (empty($name)) {
            echo "Name is empty <br>";
        } else {
            echo $name . "<br>";
        }
    }

    /*  function myTest()
    {
        $x = 0;
        echo $x;
        $x++;
    }

    myTest();
    myTest();
    myTest();
    myTest();



    $txt1 = "Fuck PHP";
    $txt2 = "<br>From Adil Rion World";
    $x = 5;
    $y = 4;

    echo "<h2>" . $txt1 . "</h2>";
    echo "Study PHP at " . $txt2 . "<br>";
    echo $x + $y;

    var_dump($txt1);

    $cars = array("Volvo", "BMW", "Toyota");
    var_dump($cars);




    class Car
    {
        public $color;
        public $model;


        public function __construct($color, $model)
        {
            $this->color = $color;
            $this->model = $model;
        }

        public function output()
        {
            return "My car is a " . $this->color . "and color is a " . $this->model . "! <br>";
        }
    }


    $myCar = new Car("red", "BMW");
    $myNewCar = new Car("Black", "audi");



    echo $myCar->output();
    echo $myNewCar->output();


    echo (abs(-33426.7));

    echo ("<br>" . rand(5, 23));



    $firstName = 'Adil';
    $lastName = "Mahmoud";

    $fullName = $firstName . $lastName;
    echo ('<br>' . $fullName);



    $x = 12;
    $y = 23;

    $ternary = ($x == $y) ?  $x : $y;
    $nullCoalescing = ($x < $y) && $y;

    echo ("<br> $ternary");
    echo ("<br> $nullCoalescing"); */

    echo $_SERVER['PHP_SELF'];
    echo "<br>";
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['HTTP_HOST'];
    echo "<br>";
    echo $_SERVER['HTTP_REFERER'];
    echo "<br>";
    echo $_SERVER['HTTP_USER_AGENT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_NAME'];
    echo '<br>';
    echo $_SERVER['SERVER_SOFTWARE'];
    echo '<br>';
    echo $_SERVER['SERVER_PORT']










    ?>
</body>

</html>