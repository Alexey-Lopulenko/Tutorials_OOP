<?php
class Cat
{
    public $weight = 1;

    public function eat()
    {
        $this->weight++;
    }
}
    echo "Step one<br>";

    $cat = new Cat();
    $cat->eat();
    echo  $cat->weight;
    echo "<br>";
    $cat->eat();
    echo  $cat->weight;
    echo  "<br>Step two";

?>


