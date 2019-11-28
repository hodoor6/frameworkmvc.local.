<?php

//Урок 4 Задача :1
//Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), age (возраст), salary (зарплата).
//    Урок 4 Задача :2
//Сделайте в классе Employee метод getName, который будет возвращать имя работника.
//Урок 4 Задача :3
//Сделайте в классе Employee метод getAge, который будет возвращать возраст работника.
//Урок 4 Задача :4
//Сделайте в классе Employee метод getSalary, который будет возвращать зарплату работника.
//Урок 4 Задача :5
//Сделайте в классе Employee метод checkAge, который будет проверять то, что работнику больше 18 лет и возвращать true, если это так, и false, если это не так.
//Урок 4 Задача :6
//Создайте два объекта класса Employee, запишите в их свойства какие-либо значения. С помощью метода getSalary найдите сумму зарплат созданных работников.
//class Employee
//{
//    public $name;
//    public $age;
//    public $salary;
//
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//
//    }
//
//    public function checkAge()
//    {
//        if ($this->age > 18) {
//
//            return true;
//        } else {
//            return  false;
//        }
//    }
//}
//
//$employee = new Employee;
//$employee->name = 'Коля';
//$employee->age = 25;
//$employee->salary = 1000;
//
//
//$employee1 = new Employee;
//$employee1->name = 'Вася';
//$employee1->age = 25;
//$employee1->salary = 1200;
//
//echo $employee->getSalary() + $employee1->getSalary();
//Урок 4 Задача :7-10
//Задача : 7 Сделайте класс User, в котором будут следующие свойства - name (имя), age (возраст).
//
//Задача : 8
//Сделайте метод setAge, который параметром будет принимать новый возраст пользователя.
//
//Задача : 9 Создайте объект класса User с именем 'Коля' и возрастом 25. С помощью метода setAge поменяйте возраст на 30. Выведите новое значение возраста на экран.
//
//Задача : 10 Модифицируйте метод setAge так, чтобы он вначале проверял, что переданный возраст больше или равен 18. Если это так - пусть метод меняет возраст пользователя, а если не так - то ничего не делает.
//

//
//class User
//{
//    public $name;
//    public $age;
//
//    /**
//     * @param mixed $age
//     */
//    public function setAge($age)
//    {
//        if($age >=18){
//            $this->age = $age;
//        } else{
//            exit;
//        }
//    }
//}
//
//$user = new User;
//$user->name = 'Коля';
//$user->age = 25;
//
//$user->setAge(19);
//
//echo $user->age;

////Урок 4 Задача :11
////
////Задача : 11 Сделайте класс Employee (работник), в котором будут следующие свойства - name (имя), salary (зарплата). Сделайте метод doubleSalary, который текущую зарплату будет увеличивать в 2 раза.
//
//class Employee
//{
//    public $name;
//    public $salary;
//
//    public function doubleSalary()
//    {
//
//        return $this->salary = $this->salary * 2;
//
//    }
//}
//
//$employee = new Employee;
//$employee->name = 'Коля';
//$employee->salary = 1000;
//echo $employee->doubleSalary();

//Урок 4 Задача :12 -14
//Задача : 12 Сделайте класс Rectangle (прямоугольник), в котором в свойствах будут записаны ширина и высота.
//
//Задача : 13 В классе Rectangle сделайте метод getSquare, который будет возвращать площадь этого прямоугольника.
//
//Задача : 14 В классе Rectangle сделайте метод getPerimeter, который будет возвращать периметр этого прямоугольника.

class Rectangle
{
    public $width;
    public $height;

    public function getSquare()
    {

        return $this->width * $this->height;

    }
    public function getPerimeter()
    {

        return ($this->width + $this->height) * 2 ;

    }
}

$rectangle = new Rectangle;
$rectangle->width = 10;
$rectangle->height = 15;
echo $rectangle->getSquare();
echo '<br>';
echo $rectangle->getPerimeter();