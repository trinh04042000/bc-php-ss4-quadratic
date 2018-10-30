<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<h2> Giải phương trình bậc 2</h2>
<form method="post">
    <input type="text" name="number1" placeholder="number1" value="">
    <input type="text" name="number2" placeholder="number2" value="">
    <input type="text" name="number3" placeholder="number3" value="">
    <input type="submit" name="calculate" value="Tính">
</form>
<body>
<?php
 class QuadraticEquation
 {
     private $a;
     private $b;
     private $c;

     function __construct($a, $b, $c)
     {
         $this->a = $a;
         $this->b = $b;
         $this->c = $c;
     }

     public function getA()
     {
         return $this->a;
     }

     public function getB()
     {
         return $this->b;
     }

     public function getC()
     {
         return $this->c;
     }

     public function delta()
     {
         return $this->b ** 2 - 4 * $this->a * $this->c;
     }

 }
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $number1 = $_POST["number1"];
      $number2 = $_POST["number2"];
      $number3 = $_POST["number3"];

      $quadraticEquation = new QuadraticEquation($number1, $number2, $number3);
      $root1 = 0;
      $root2 = 0;
      if ($quadraticEquation->delta() > 0) {
          $root1 = ($quadraticEquation->getB()) + sqrt($quadraticEquation->getB() ** 2 - 4 * $quadraticEquation->getA() * $quadraticEquation->getC());
          $root2 = ($quadraticEquation->getB()) - sqrt($quadraticEquation->getB() ** 2 - 4 * $quadraticEquation->getA() * $quadraticEquation->getC());
          echo $root1."</br>";
          echo $root2;
      } else if ($quadraticEquation->delta() === 0) {
          $root1 = $root2 = (-$quadraticEquation->getB()) / 2 * $quadraticEquation->getA();
          echo $root1."</br>";
          echo $root2;
      }
      if ($quadraticEquation->delta() < 0) {
          echo "The equation has no ";
      }
  }
?>
</body>
</html>