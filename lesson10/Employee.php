<?php
// Хранение классов в отдельных файлах
//Урок 10 Задача : 1  Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия), patronymic (отчество) и salary (зарплата). Пусть этот класс хранится в отдельном файле.
// Employee.php
class Employee
{
    private $name;
    private $surname;
    private $patronymic;
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function __construct($name, $surname, $patronymic, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->patronymic = $patronymic;
        $this->salary = $salary;
    }
}