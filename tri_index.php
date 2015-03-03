<?php
class Triangle  {
     private $sideA;
     private $sideB;
     private $sideC;

     function __construct($a, $b, $c) {
         $this->sideA = $a;
         $this->sideB = $b;
         $this->sideC = $c;
     }

     function getA() {
         return $this->sideA;
     }

     function getB() {
         return $this->sideB;
     }

     function getC() {
         return $this->sideC;
     }

     function setA($newA) {
         $this->sideA = $newA;
     }

     function setB($newB) {
         $this->sideB = $newB;
     }

     function setC($newC) {
         $this->sideC = $newC;
     }
}

$tempA = $_GET['sideA'];
$tempB = $_GET['sideB'];
$tempC = $_GET['sideC'];

$tempTriangle = new Triangle($tempA, $tempB, $tempC);

echo $tempTriangle->getA();
echo $tempTriangle->getB();
echo $tempTriangle->getC();

?>
