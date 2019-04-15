<?php

class Worker{
    public $name;
    public $age;
    public $salary;
    private $car;

    private function setAge($value){
        $this->age = $value;

    }
    private function checkAge($age){
        if ($age > 1 || $age < 100){
            return setAge($age);
        }
        else echo "<br>Error!";
    }


}