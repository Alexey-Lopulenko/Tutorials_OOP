<?php

require_once 'Classes/point.php';



$obPoint = new Point();
$obPoint->setPointA([-1,4]);
$obPoint->setPointB([-1,2]);
$obPoint->setPointC([-7,3]);

$obTriangle = new Triangle();


$SQR = $obTriangle->square($obPoint->getPointA(),$obPoint->getPointB(),$obPoint->getPointC());
echo $SQR;


$perimeter = $obTriangle->perimeter($obPoint->getPointA(),$obPoint->getPointB(),$obPoint->getPointC());
echo '<br>'.$perimeter;
