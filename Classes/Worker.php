<?php

class Worker
{
    private $name ;
    private $age;
    private $salary;


    public function setAge($age)
    {
        $this->age = $age;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function checkAge($age)
    {
        if($age > 1 && $age < 100)
            $this->setAge($age);


    }
    function  __construct()
    {
        $this-> setName('Worker');
        $this-> setAge(30);
        $this-> setSalary(1500);
    }

}