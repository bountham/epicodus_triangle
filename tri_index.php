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

     function getTriangleType() {
         if(($this->sideA == $this->sideB) AND ($this->sideA == $this->sideC)) {
             return "equilateral";
         } else if(($this->sideA == $this->sideB) OR
            ($this->sideA == $this->sideC) OR ($this->sideB == $this->sideC)) {
             return "isoceles";
         } else {
             return "scalene";
         }
     }
}

$tempA = $_GET['sideA'];
$tempB = $_GET['sideB'];
$tempC = $_GET['sideC'];

if (($tempA + $tempB < $tempC) OR ($tempA + $tempC < $tempB) OR
    ($tempB + $tempC < $tempA)) {
        echo "Values do not create a valid triangle.";
    } else {
        $tempTriangle = new Triangle($tempA, $tempB, $tempC);
        echo "Your triangle is " . $tempTriangle->getTriangleType() . "!";
    }
?>
