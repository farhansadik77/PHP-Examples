<!doctype html>
<html lang="en" data-bs-theme="light">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Examples</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

  <div class="container text-center my-4">

    <!-- Example-1 -->

    <?php
    echo "<h1>"."Hello World!"." "."My Name Is Farhan Sadik"."</h1>";
    echo "<h2>"."I'm a Wordpress Web Developer"."</h2>";
    echo "<h3>"."Currently Learning PHP"."</h3>";
    ?>

    <!-- Example-2 -->

    <?php
      //echo "<h1>"."Hello World!"." "."My Name Is Farhan Sadik"."</h1>";
      #echo "<h1>"."Hello World!"." "."My Name Is Farhan Sadik"."</h1>";
    ?>

    <!-- Example-3 -->

    <?php
      /*echo "<h1>"."Hello World!"." "."My Name Is Farhan Sadik"."</h1>";
      echo "<h2>"."I'm a Wordpress Web Developer"."</h2>";
      echo "<h3>"."Currently Learning PHP"."</h3>";*/
      ?>

      <!-- Example-4 -->

      <?php
      $name = "Farhan";
      echo "<h1>"."His name is"." ". "$name"."</h1";
      ?>

      <!-- Example-5 -->

      <?php
      $a = 15;
      $b = "farhan";
      $c = 10.80;
      $d = [10,20,30];
      $e = true;
      $f = null;

      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      var_dump($f);
      ?>

      <!-- Example-6 -->

      <?php
      // global
      $Name = "Sadik";

      function calling_name(){
        // local
        global $Name;
        echo "<h1>"."His name is"." ". "$Name"."</h1";

      }
      calling_name();
      ?>

      <!-- Example-7 -->

      <?php
      $number1 = 500;
      $number2 = 700;
      $number1 += $number2;

      echo $number1;
      ?>

      <!-- Example-8 -->

      <?php
      $number1 = 500;
      $number2 = 700;
      if ($number1 == $number2) {
        echo "equal";
      }else {
        echo "not equal";
      }
      ?>

      <!-- Example-9 -->

      <?php
      print "Hello world!<br>";
      print "I'm about to learn PHP!";
      ?>

      <!-- Example-10 -->

      <?php
      $x = 5;
      var_dump($x);

      $x = "Hello";
      var_dump($x);
      ?>

      <!-- Example-11 -->

      <?php
      $a = 5;       
      $b = 5.34;    
      $c = "hello";
      $d = true;    
      $e = NULL;    

      $a = (string) $a;
      $b = (string) $b;
      $c = (string) $c;
      $d = (string) $d;
      $e = (string) $e;


      var_dump($a);
      var_dump($b);
      var_dump($c);
      var_dump($d);
      var_dump($e);
      ?>

      <!-- Example-12 -->

      <?php
      $A = 5;       
      $B = 5.34;    
      $C = "25 kilometers"; 
      $D = "kilometers 25"; 
      $E = "hello"; 
      $F = true;    
      $G = NULL;

      $A = (int) $A;
      $B = (int) $B;
      $C = (int) $C;
      $D = (int) $D;
      $E = (int) $E;
      $F = (int) $F;
      $G = (int) $G;

      var_dump($A);
      var_dump($B);
      var_dump($C);
      var_dump($D);
      var_dump($E);
      var_dump($F);
      var_dump($G);

      ?>

      <!-- Example-13 -->

      <?php
      echo(pi());
      ?>

      <!-- Example-14 -->

      <?php
      echo(min(0, 150, 30, 20, -8, -200) . "<br>");
      echo(max(0, 150, 30, 20, -8, -200));
      ?>

      <!-- Example-15 -->

      <?php
      echo(rand());
      ?>

      <!-- Example-16 -->

      <?php
      echo(sqrt(64));
      ?>

      <!-- Example-17 -->

      <?php
      $x = 1000;  
      $y = 500;

      echo $x - $y;
      ?>

      <!-- Example-18 -->

      <?php
      $x = 100;  
      $y = 50;

      echo $x * $y;
      ?>

      <!-- Example-19 -->

      <?php
      $x = 2000;  
      $y = 50;

      echo $x / $y;
      ?>

      <!-- Example-20 -->
      
      <?php
      $x = 3000;  
      $y = 50;

      echo $x % $y;
      ?>

      <!-- Example-21 -->

      <?php
      function myMessage() {
        echo "Hello world!";
      }

      myMessage();
      ?>

      <!-- Example-22 -->

      <?php
      $cars = array("Volvo", "BMW", "Toyota","Tesla","Ford");
      echo count($cars);
      ?>

      <!-- Example-23 -->

      <?php
      $a = 1;
      while ($a < 5) {
        echo $a;
        $a++;
      }
      ?>

    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>