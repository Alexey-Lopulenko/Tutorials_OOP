<?php

//namespace Vendor\Model;
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

//class Rectangle extends Point
//{
//
//}