<?php
error_reporting(E_ALL);
//Сравнение объектов

//Урок 26 Задача : 1 Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса,

//class compare{
//
//    public $name;
//    public $age;
//
//public function compare ($objctOne,$objctOne1)
//{
//
//    if ($objctOne == $objctOne1)
//    {
//      echo 'true';
//        return var_dump($objctOne == $objctOne1);
//    }else {
//        echo 'false';
//    }
//}
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//}
//
//$compare = new compare('Коля',30);
//$compare1 = new compare('Коля',30);
//
//$compare->compare($compare,$compare);

//Урок 26 Задача : 2 Сделайте функцию compare, которая параметром будет принимать два объекта и возвращать true, если они имеют одинаковые свойства и значения являются экземплярами одного и того же класса,
//
//
//class compare{
//
//    public $name;
//    public $age;
//
//    public function compare ($objctOne,$objctOne1)
//    {
//
//        if ($objctOne === $objctOne and $objctOne1 === $objctOne1)
//        {
//            echo true;
//        }else {
//            echo false;
//        }
//    }
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//}
//
//$compare = new compare('Коля',30);
//$compare1 = new compare('Коля',2);
//
//$compare->compare($compare,$compare1);


//Урок 26 Задача : 3  Сделайте функцию compare, которая параметром будет принимать два объекта и сравнивать их.
//Функция должна возвращать 1, если переданные переменные ссылаются на один и тот же объект.
//Функция должна возвращать 0, если объекты разные, но одного и того же класса и с теми же свойствами и их значениями. Функция должна возвращать -1 в противном случае.

//class compare{
//
//    public $name;
//    public $age;
//
//    public function compare ($objctOne,$objctTwu)
//    {
//
//        if ($objctOne === $objctTwu)
//        {
//            echo 1;
//        }elseif($objctOne == $objctTwu) {
//            echo 0;
//        }else{
//            echo -1;
//        }
//    }
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
//
//}
//
//$compare1 = new compare('Коля',30);
//$compare2 = new compare('Коля',30);
//
////$compare1 = $compare2;
//
//$compare1->compare($compare1,$compare2) . '<br>';
//
//
//$compare1->compare($compare1,$compare2) . '<br>';

//Урок 26 Задача : 4  Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу.


//class Employee
//{
//    private $name;
//    private $salary;
//
//    public function
//    __construct($name, $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//}
//
//class EmployeesCollection
//{
//    private $employees = [];
//
//    public function add($newEmployee)
//    {
//        if (!$this->exists($newEmployee)) {
//            $this->employees[] = $newEmployee;
//        }
//    }
//    public function get()
//    {
//        return $this->employees;
//    }
//    private function exists($employee)
//    {
//        foreach ($this->employees as $employees) {
//
//            if ($employees == $employee) {
//                return true;
//
//            }
//        }
//        return false;
//    }
//}
//$employeesCollection = new EmployeesCollection;
//
//$employee = new Employee('Коля', 1000);
//$employee = new Employee('Коля', 1000);
//$employee1 = new Employee('Коля', 1090);
//$employee3 = new Employee('Коля1', 1090);
//
//$employeesCollection->add($employee);
//$employeesCollection->add(new Employee('Коля', 1000));
//
//
//$employeesCollection->add($employee);
//$employeesCollection->add($employee1);
//$employeesCollection->add($employee3);
//
//
//var_dump($employeesCollection->get());



//Урок 26 Задача : 5  Скопируйте мой код класса Employee, затем самостоятельно реализуйте описанный класс EmployeesCollection, проверьте его работу.

class Employee
{
    private $name;
    private $salary;

    public function
    __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {

       if (!in_array($newEmployee,$this->employees, false))
       {
                  $this->employees[] = $newEmployee;
       }

    }
    public function get()
    {
        return $this->employees;
    }

}
$employeesCollection = new EmployeesCollection;

$employee = new Employee('Коля', 1000);
$employee = new Employee('Коля', 1000);
$employee1 = new Employee('Коля', 1090);
$employee3 = new Employee('Коля1', 1090);

$employeesCollection->add($employee);
$employeesCollection->add(new Employee('Коля', 1000));


$employeesCollection->add($employee);
$employeesCollection->add($employee1);
$employeesCollection->add($employee3);


var_dump($employeesCollection->get());