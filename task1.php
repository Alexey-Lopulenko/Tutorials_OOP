<?php
echo "Task 1<br>
Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст),
salary (зарплата).Создайте объект этого класса, затем установите поля в следующие значения
(не в __construct, а для созданного объекта) - имя 'Иван', возраст 25, зарплата 1000. 
Создайте второй объект этого класса, установите поля в следующие значения - имя 'Вася', возраст 26, зарплата 2000.
Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

Дополните класс Worker из предыдущей задачи private методом checkAge,
который будет проверять возраст на корректность (от 1 до 100 лет). 
Этот метод должен использовать метод setAge перед установкой нового возраста
(если возраст не корректный - он не должен меняться).  ";

require_once 'Classes/FirstClass.php';

$Ivan = new Worker();
$Ivan->setName('Ivan');
$Ivan->checkAge(25);
$Ivan->setSalary(1000);

$Vasiliy = new Worker();
$Vasiliy->setName('Vasiliy');
$Vasiliy->checkAge(26);
$Vasiliy->setSalary(2000);

echo '<br><br>Information:';
echo '<br>Name: '.$Ivan->getName();
echo '<br>Age: '.$Ivan->getAge();
echo '<br>Salary: '.$Ivan->getSalary();

echo '<br><br>Information:';
echo '<br>Name: '.$Vasiliy->getName();
echo '<br>Age: '.$Vasiliy->getAge();
echo '<br>Salary: '.$Vasiliy->getSalary();


$sumAge = $Ivan->getAge() + $Vasiliy->getAge();
$sumSalary = $Ivan->getSalary() + $Vasiliy->getSalary();

echo '<br>';
echo '<br>Sum age:'.$sumAge;
echo '<br>Sum salary:'.$sumSalary;

?>