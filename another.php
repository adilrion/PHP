<?php
function myTest()
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
