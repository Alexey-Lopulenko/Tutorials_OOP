<?php


class Point
{
   private $pointA;
   private $pointB;
   private $pointC;
   private $pointD;


    public function setPointA($pointA)
    {
        $this->pointA = $pointA;
    }
    public function getPointA()
    {
        return $this->pointA;
    }

    public function setPointB($pointB)
    {
        $this->pointB = $pointB;
    }
    public function getPointB()
    {
        return $this->pointB;
    }

    public function setPointC($pointC)
    {
        $this->pointC = $pointC;
    }
    public function getPointC()
    {
        return $this->pointC;
    }


    public function setPointD($pointD)
    {
        $this->pointD = $pointD;
    }
    public function getPointD()
    {
        return $this->pointD;
    }
}



class Triangle extends Point
{
    function __construct()
    {
        $this->setPointA([-1,4]);
        $this->setPointB([-1,2]);
        $this->setPointC([-7,3]);
    }

    public function square($a , $b, $c)
    {
        $sqaTriangle = 0.5 * (((($a[0] - $c[0]) * ($b[1] - $c[1])) - (($b[0]- $c[0]) * ($a[1]-$c[1]))));
        return $sqaTriangle;
    }

    public function perimeter($a,$b,$c)
    {
        $AB = sqrt((($b[0] - $a[0])**2) + (($b[1] - $a[1])**2));
        $BC = sqrt((($c[0] - $b[0])**2) + (($c[1] - $b[1])**2));
        $AC = sqrt((($c[0] - $a[0])**2) + (($c[1] - $a[1])**2));

        $perimeter= $AB+$BC+$AC;
        return $perimeter;
    }
}


class Figure extends Point
{
    private $square;
    private $perimeter;

    public function setSquare($square)
    {
        $this->square = $square;
    }

    public function getSquare()
    {
        return $this->square;
    }

    public function setPerimeter($perimeter)
    {
        $this->perimeter = $perimeter;
    }

    public function getPerimeter()
    {
        return $this->perimeter;
    }


    function __construct()
    {
        $this->setPointA([-4,-2]);
        $this->setPointB([1,-2]);
        $this->setPointC([1,-4]);
        $this->setPointD([-4,-4]);

        $a = $this->getPointA();
        $b = $this->getPointB();
        $c = $this->getPointC();
        $d = $this->getPointD();


        if ($a[1] == $b[1] && $a[0] == $d[0] && $d[1] == $c[1] && $b[0] == $c[0]) {

            if (($b[1]-$c[1]) == ($b[0] - $a[0])){

                echo '<br>figure - quadrate';

               $this->setSquare(($b[1]-$c[1])**2);
               $this->setPerimeter((($b[1]-$c[1])*4));
            }

            else{

                echo '<br>figure - rectangle';

                $sideA = $b[0] - $a[0];
                $sideB = $a[1] - $d[1];

                $this->setSquare($sideA * $sideB);
                $this->setPerimeter(($sideA *2 ) + ($sideB * 2));
            }
        }










    }
}