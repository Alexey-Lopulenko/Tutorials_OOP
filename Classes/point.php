<?php

 class Point
{
    private $X;
    private $Y;

    public function __construct($x, $y)
    {
       $this->X = $x;
       $this->Y = $y;
    }

    /**
     * @return float
     */
    public function getX()
    {
        return $this->X;
    }


    /**
     * @return float
     */
    public function getY()
    {
        return $this->Y;
    }
}



 class Triangle
{
    private $sideA;
    private $sideB;
    private $sideC;

    private $pointA;
    private $pointB;
    private $pointC;

     /**
      * validation of the object
      * @param object
      * @param object
      * @param object
      */
   function __construct($obA, $obB, $obC)
   {

        $this->pointA = $obA;
        $this->pointB = $obB;
        $this->pointC = $obC;


       /**
        * check whether the figure is a triangle
        * if the figure is a triangle - field assignment (side)
        */
      $this->obValidity($obA, $obB, $obC);

   }

     /**
      * @param $pointA
      * @param $pointB
      * @param $pointC
      * @return bool
      */
   private function obValidity($pointA, $pointB, $pointC)
   {
       $aX = $pointA->getX();
       $aY = $pointA->getY();
       $bX = $pointB->getX();
       $bY = $pointB->getY();
       $cX = $pointC->getX();
       $cY = $pointC->getY();

       /**
        *side length determination
        */
       $AB = sqrt((($bX - $aX)**2) + (($bY - $aY)**2));
       $AC = sqrt((($cX - $aX)**2) + (($cY - $aY)**2));
       $BC = sqrt((($cX - $bX)**2) + (($cY - $bY)**2));


           if ($AB < $BC + $AC && $BC < $AB + $AC && $AC < $AB + $BC) {
               $this->sideA = $AB;
               $this->sideB = $BC;
               $this->sideC = $AC;

                echo '<br>Фигура триугольник!';
           }
           else {
               try{
                   throw new Exception('<br>Внимание! Данная фигура не триугольник!');
               }
               catch (Exception $e){
                   echo $e->getMessage();
               }
           }

   }
 /**
       * @return float
       */
    private function getPointA()
    {
        return $this->pointA;
    }

      /**
       * @return float
       */
    private function getPointB()
    {
        return $this->pointB;
    }

      /**
       * @return float
       */
    private function getPointC()
   {
       return $this->pointC;
   }


     /**
      * @return float
      */

     private function getSideA()
   {
        return $this->sideA;
   }

     /**
      * @return float
      */
     private function getSideB()
     {
         return $this->sideB;
     }

     /**
      * @return float
      */
     private function getSideC()
     {
         return $this->sideC;
     }


     /**
      * perimeter calculation
      * @return float
      */
   public function  perimeter()
   {
       $A = $this->getSideA();
       $B = $this->getSideB();
       $C = $this->getSideC();

       $perimeter = $A+$B+$C;
       return $perimeter;

   }

     /**
      * square calculation
      * @return float
      */
   public  function square()
   {
       $A = $this->getSideA();
       $B = $this->getSideB();
       $C = $this->getSideC();

       $perimeter = $this->perimeter();
       $pp = $perimeter /2;
       $square = sqrt($pp * ($pp - $A) * ($pp - $C) * ($pp - $B));
       return $square;

   }

}



/*
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
*/