<?php
// Хранение классов в отдельных файлах
//Урок 10 Задача : 2 Подключите к файлу index.php класс Employee, создайте два объекта этого класса с произвольными данными, выведите на экран сумму их зарплат.
// фаил index.php
// подключаю класс Employee;
require_once 'Employee.php';

$employee = new Employee ('Вася','Иванов','Василевич', 2000);
$employee1 = new Employee ('Петр','Петров','Василевич', 5000);
//вывод суммы зарплат
echo 'Сумма зарплат Васи и Пети ' . ($employee1->getSalary() + $employee->getSalary());