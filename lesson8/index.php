<?php
// Работа с геттерами и сеттерами
//Урок 8 Задача :1 Сделайте класс Employee, в котором будут следующие private свойства: name (имя), age (возраст) и salary (зарплата).
//Урок 8 Задача : 2 Сделайте геттеры и сеттеры для всех свойств класса Employee.
//
// Урок 8 Задача : 3 Дополните класс Employee приватным методом isAgeCorrect, который будет проверять возраст на корректность (от 1 до 100 лет). Этот метод должен использоваться в сеттере setAge перед установкой нового возраста (если возраст не корректный - он не должен меняться).




//Урок 8  Задача :4 Задача : Пусть зарплата наших работников хранится в долларах. Сделайте так, чтобы геттер getSalary добавлял в конец числа с зарплатой значок доллара. Говоря другими словами в свойстве salary зарплата будет хранится просто числом, но геттер будет возвращать ее с долларом на конце.


class Employee

{
    private $name;
    private $age;
    private $salary;



    public function getName()
    {
        return $this->name;
    }

    public function  setName($name)
    {
        $this->name =  $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($this->isAgeCorrect($age)){

            $this->age = $age;
        }

    }
// добавление знака $ к Salary
    public function  getSalary()
    {
        return $this->salary . ' $';
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
// проверка на совпадение возраста
    private function isAgeCorrect($age)
    {
        if ($age >= 1 and $this->age <= 100) {
            return $this->age = $age;
        } else {
            echo 'Количество лет больше 100';
        }
    }


}

$employee = new Employee;
$employee->setAge(50);
echo $employee->getAge(). '<br>';
// вывод зарплаты
$employee->setSalary(1000);
echo $employee->getSalary();

