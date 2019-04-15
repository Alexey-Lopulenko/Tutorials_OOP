<?php
echo "Task 1<br>
Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст),
salary (зарплата).Создайте объект этого класса, затем установите поля в следующие значения
(не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. 
Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи. ";

require_once 'Classes/FirstClass.php';

$Ivan = new Worker();
$Ivan->name = 'Ivan';
$Ivan->age = 25;
$Ivan->salary = 1000;


$Vasiliy = new  Worker();
$Vasiliy->name = 'Vasiliy';
$Vasiliy->age = 26;
$Vasiliy->salary = 2000;

$sumAge = $Ivan->age + $Vasiliy->age;
$sumSalary = $Ivan->salary + $Vasiliy->salary;

echo "<br>Sum age:".$sumAge;
echo "<br>Sum salary:".$sumSalary;

$test = new Worker();
echo '<br>test:';
$test ->age = 102;

echo '<br>', $test->age;
?>