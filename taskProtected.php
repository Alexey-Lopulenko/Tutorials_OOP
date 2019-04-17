<?php

require_once 'Classes/point.php';


$obTriangle = new Triangle();

$SQR = $obTriangle->square($obTriangle->getPointA(),$obTriangle->getPointB(),$obTriangle->getPointC());
//echo 'Площадь триуголиника = '.$SQR;

$perimeter = $obTriangle->perimeter($obTriangle->getPointA(),$obTriangle->getPointB(),$obTriangle->getPointC());
//echo '<br>Периметр триугольника = '.$perimeter;

$Figure = new Figure();
$a =$Figure->getSquare();
$b = $Figure->getPerimeter();

echo '<br>Square - '.$a.'<br>Perimeter - '.$b;


