<!DOCTYPE html>
<html>
  <head>
    <h3> Testing PHP Syntax</h3>
  </head>
  <body>
    <div>
      <h4> Tutorial 1</h4>
      <?php 
        $color = "red";
        $x = 5;

        echo "Color is ".$color.".";
        // The var_dump() function returns the data type and the value:
        var_dump($x);
        echo "<br>";
        $x = $y = $z = "Fruit";
        echo $x.$y.$z;
        $xx = 5;
        $yy = 10;

        function myTest() {
          global $xx, $yy;
          $yy = $xx + $yy;

        }

        myTest();
        echo $yy; // outputs 15
        echo "<br>";
        // test array
        $arr = array("apple","ball","cat");
        echo var_dump($arr);
        // test class and object
        echo "<h1>Test class and object</h1>";
        class Car {
          public $color;
          public $model;
          public function __construct($color, $model) {
            $this->color = $color;
            $this->model = $model;
          }
          public function message() {
            return "My car is a " . $this->color . " " . $this->model . "!";
          }
        }
        
        $myCar = new Car("red", "Volvo");
        echo $myCar->message();
        echo "strlen and str_word_count example<br>";
        echo "strlen Hello world! length is ".strlen("Hello world!")."<br>";
        echo "str_word_count Hello world! str_word_count is ".str_word_count("Hello world!")."<br>";
        echo "strpos Search for the text 'world' in the string 'Hello world!'".strpos("Hello world!","world")."<br>";
        echo "strtoupper eg.".strtoupper("hello")."<br>";
        echo "strtolower eg.".strtolower("HeLlo")."<br>";
        echo "str_replace Replace the text 'World' with 'Dolly':".str_replace("World","Dolly","Lovely World")."<br>";
        echo "strrev string reverse hello:".strrev("hello")."<br>";
        echo "explode string to array 'Hello Kitty'";
        $str_arr = explode(" ","Hello Kitty");
        echo print_r($str_arr)."<br>";
        define("GREETING", "Welcome to W3Schools.com!");
        echo "CONSTANT".GREETING;

        $i = 0;

        while ($i < 6) {
          $i++;
          if ($i == 1 || $i == 2) continue;  
          echo $i;
        } 

        // while and end while
        while ($i < 6):
          echo $i;
          $i++;
        endwhile;

        // do while

        do {
          if ($i == 3) break;
          echo $i;
          $i++;
        } while ($i < 6);
        echo "<br>The continue statement can be used to jump out of the current iteration of a loop, and continue with the next."
        for ($x = 0; $x < 10; $x++) {
          if ($x == 4) {
            continue;
          }
          echo "The number is: $x <br>";
        }
        // function arguments pass by referencee
        echo "<br>functions arguments pass by reference"
        function add_five(&$value) {
          $value += 5;
        }
        
        $num = 2;
        add_five($num);
        echo $num;
        //Variable Number of Arguments
        echo "<br>Variable Number of Arguments you can only have one argument with variable length, and it has to be the last argument."
        function myFamily($lastname, ...$firstname) {
          $txt = "";
          $len = count($firstname);
          for($i = 0; $i < $len; $i++) {
            $txt = $txt."Hi, $firstname[$i] $lastname.<br>";
          }
          return $txt;
        }
        
        $a = myFamily("Doe", "Jane", "John");
        echo $a;

        //Variable Number of Arguments
        function sumMyNumbers(...$x) {
          $n = 0;
          $len = count($x);
          for($i = 0; $i < $len; $i++) {
            $n += $x[$i];
          }
          return $n;
        }
        
        $a = sumMyNumbers(5, 2, 6, 2, 7, 7);
        echo $a;

        //
        echo "Test Index array loop<br>";
        $cars = array("marcede","bmw","hondafit");
        foreach($cars as $car){
          echo $car."<br>";
        }
        echo "Test Associated array<br>";
        $myCar = array("model"=>"bmw","color"=>"red","license"=>"12345");
        foreach($myCar as $key => $value){
          echo $key." is ".$value."<br>";
        }
        //
        echo "Update Array Items in a Foreach Loop<br>";
        echo "Without the unset($x) function, the $x variable will remain as a reference to the last array item<br>";
        $carsa = array("Volvo", "BMW", "Toyota");
        foreach ($carsa as &$xa) {
          $xa = "Ford";
        }
        unset($xa);
        $xa = "ice cream";

        var_dump($carsa);
        //
        echo "Remove item from array<br>The unset() function will NOT re-arrange the indexes, and the examples above will no longer contain the missing indexes.";
        $carsb = array("Volvo", "BMW", "Toyota");
        unset($carsb[0], $carsb[1]);
        var_dump($carsb);

      ?>

    </div>

  </body>
  <footer>

  </footer>
</html>
