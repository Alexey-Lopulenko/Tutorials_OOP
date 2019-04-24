<?php

require_once 'Classes/point.php';


$obA = new Point(1, 1);
$obB = new Point(2,  1);
$obC = new Point(3, 1);


$obTriangle = new Triangle($obA, $obB, $obC);

echo '<br>Периметр:'.$obTriangle->perimeter().'<br>Площадь:'.$obTriangle->square();