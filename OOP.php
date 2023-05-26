<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object Oriented Programming In PHP</title>
</head>

<body>





    <?php

    echo 'Object Oriented Programming in javascript <br>';

    class fruits
    {
        public $name;
        public $color;


        // Method 
        function setFruit($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        function getFruit()
        {
            return "Fruit name: $this->name, and Fruit Color: $this->color <br>";
        }
    }


    $obj1 = new fruits();
    $obj1->setFruit('Appal', 'red');
    echo $obj1->getFruit();




    class objectWithConstrictor
    {
        public $name;
        public $color;


        // Method 
        function __construct($name, $color)
        {
            $this->name = $name;
            $this->color = $color;
        }
        function getFruit()
        {
            return "Fruit name: $this->name, and Fruit Color: $this->color";
        }
    }



    $objWithConstruct = new objectWithConstrictor("fuck Fruit", 'Black');


    echo $objWithConstruct->getFruit();



    class Fruit
    {
        public $name;
        public $color;

        function __construct($name)
        {
            $this->name = $name;
        }
        function __destruct()
        {
            echo "<br> <h1> The fruit is {$this->name}. <h1>";
        }
    }

    $apple = new Fruit("Apple");



    class Fruit2 {
        public $name;
        public $color;
        public function __construct($name, $color) {
          $this->name = $name;
          $this->color = $color;
        }
        public function intro() {
          echo "The fruit is {$this->name} and the color is {$this->color}.";
        }
      }
      
      // Strawberry is inherited from Fruit
      class Strawberry extends Fruit2 {
        public function message() {
          echo "Am I a fruit or a berry? ";
        }
      }
      $strawberry = new Strawberry("Strawberry", "red");
      $strawberry->message();
      $strawberry->intro();












    ?>





</body>

</html>