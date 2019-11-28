<?php

//Урок 2 Задача :1
//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).

class Employee
{
    public $name;
    public $age;
    public $salary;
}

//Урок 2 Задача :2
//Создайте объект класса Employee, затем установите его свойства в следующие значения - имя 'Иван', возраст 25, зарплата 1000.

$employee = new Employee;
$employee->name = 'Иван';
$employee->age = '25';
$employee->salary = '1000';

//Урок 2 Задача :3
//Создайте второй объект класса Employee, установите его свойства в следующие значения - имя 'Вася', возраст 26, зарплата 2000.

$employee1 = new Employee;
$employee1->name = 'Вася';
$employee1->age = '26';
$employee1->salary = '1000';

//Урок 2 Задача :4
//Выведите на экран сумму зарплат Ивана и Васи.

echo $employee->salary + $employee1->salary;
echo '<br>';

//Урок 2 Задача :5
//Выведите на экран сумму возрастов Ивана и Васи.

echo $employee->age + $employee1->age;
?>