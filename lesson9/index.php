<?php
//Свойства только для чтения
//Урок 9 Задача : 1 Сделайте класс Employee, в котором будут следующие свойства: name (имя), surname (фамилия) и salary (зарплата).
//class Employee
//
//{
//    public $name;
//    public $surname;
//    public $salary;
//
//}


//Урок 9 Задача : 2 Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
//
// Урок 8 Задача : 3


//Урок 8  Задача :4 Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.

//Урок 9  Задача : 5 Выведите на экран сумму зарплат Васи и Пети.


//Урок 9 Задача : 2 Сделайте так, чтобы свойства name и surname были доступны только для чтения, а свойство salary - и для чтения, и для записи.
//
class Employee

{
    private $name;
    private $surname;
    private $salary;

    public function __construct($name, $surname, $salary)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;

    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}



$employee = new Employee('Василий','Василевич', 1000);
//вывод имени

echo $employee->getName() . '<br>';
// вывод фамилии

echo $employee->getSurname() . '<br>';
// вывод зарплаты
echo $employee->getSalary(). '<br>';
$employee->setSalary(3000);
echo $employee->getSalary(). '<br>';

