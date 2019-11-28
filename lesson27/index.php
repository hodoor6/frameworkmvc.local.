<?php
error_reporting(E_ALL);

//Определение принадлежности объекта к классу
//Урок 27 Задача : 1 Сделайте класс Employee с публичными свойствами name (имя) и salary (зарплата).

//class Employee
//{
//    private $name;
//    private $salary;
//}

//Урок 27 Задача : 2 Сделайте класс Student с публичными свойствами name (имя) и scholarship (стипендия).

//class Student
//{
//    private $name;
//    private $scholarship;
//}

//Урок 27 Задача : 3 Создайте по 3 объекта каждого класса и в произвольном порядке запишите их в массив $arr.
//
//class Employee
//{
//    private $name;
//    private $salary;
//
//     public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    public function __construct($name, $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//}
//
//class Student
//{
//    private $name;
//    private $scholarship;
//
//
//    public function __construct($name, $scholarship)
//    {
//        $this->name = $name;
//        $this->scholarship = $scholarship;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//     public function getScholarship()
//    {
//        return $this->scholarship;
//    }
//
//}
//
//$arr [] = $employee7 = new Employee( 'Сергей', 1000);
//$arr [] = $employee4 = new Employee( 'Андрей', 5000);
//$arr [] = $employee2 = new Employee( 'Егор', 1000);
//
//
//
//$arr [] = $student3 = new Student( 'Алексей', 9000);
//$arr [] = $student6 = new Student( 'Ярослав', 6000);
//$arr [] = $student9 = new Student( 'Владимир', 7000);


//Урок 27 Задача : 4 Переберите циклом массив $arr и выведите на экран столбец имен всех работников.

//class Employee
//{
//    private $name;
//    private $salary;
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
//
//    public function __construct($name, $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//}
//
//class Student
//{
//    private $name;
//    private $scholarship;
//
//
//    public function __construct($name, $scholarship)
//    {
//        $this->name = $name;
//        $this->scholarship = $scholarship;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getScholarship()
//    {
//        return $this->scholarship;
//    }
//
//}
//
//$arr [] = $employee7 = new Employee( 'Сергей', 1000);
//$arr [] = $employee4 = new Employee( 'Андрей', 5000);
//$arr [] = $employee2 = new Employee( 'Егор', 1000);
//
//
//
//$arr [] = $student3 = new Student( 'Алексей', 9000);
//$arr [] = $student6 = new Student( 'Ярослав', 6000);
//$arr [] = $student9 = new Student( 'Владимир', 7000);
//
//
//foreach ($arr as $allWorks => $workerName)
//{
// if($workerName instanceof Employee){
//
//echo     $workerName->getName() . '<br>';
// }
//}


//Урок 27 Задача : 5 Аналогичным образом выведите на экран столбец имен всех студентов.


//class Employee
//{
//    private $name;
//    private $salary;
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
//
//    public function __construct($name, $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//}
//
//class Student
//{
//    private $name;
//    private $scholarship;
//
//
//    public function __construct($name, $scholarship)
//    {
//        $this->name = $name;
//        $this->scholarship = $scholarship;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getScholarship()
//    {
//        return $this->scholarship;
//    }
//
//}
//
//$arr [] = $employee7 = new Employee( 'Сергей', 1000);
//$arr [] = $employee4 = new Employee( 'Андрей', 5000);
//$arr [] = $employee2 = new Employee( 'Егор', 1000);
//
//$arr [] = $student3 = new Student( 'Алексей', 9000);
//$arr [] = $student6 = new Student( 'Ярослав', 6000);
//$arr [] = $student9 = new Student( 'Владимир', 7000);
//
//
//
//foreach ($arr as $human){
//    if($human instanceof Student){
//        echo $human->getName()."<br>";
//    }
//}

//Урок 27 Задача : 6 Переберите циклом массив $arr и с его помощью найдите сумму зарплат работников и сумму стипендий студентов. После цикла выведите эти два числа на экран.

//class Employee
//{
//    private $name;
//    private $salary;
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
//
//    public function __construct($name, $salary)
//    {
//        $this->name = $name;
//        $this->salary = $salary;
//    }
//}
//
//class Student
//{
//    private $name;
//    private $scholarship;
//
//
//    public function __construct($name, $scholarship)
//    {
//        $this->name = $name;
//        $this->scholarship = $scholarship;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getScholarship()
//    {
//        return $this->scholarship;
//    }
//
//}
//
//$arr [] = $employee7 = new Employee( 'Сергей', 1000);
//$arr [] = $employee4 = new Employee( 'Андрей', 5000);
//$arr [] = $employee2 = new Employee( 'Егор', 1000);
//
//$arr [] = $student3 = new Student( 'Алексей', 9000);
//$arr [] = $student6 = new Student( 'Ярослав', 6000);
//$arr [] = $student9 = new Student( 'Владимир', 7000);
//
//
//$studentScholarship = 0 ;
//
//
//$employeeSalary = 0;
//foreach ($arr as $human){
//    // считаем сумму степендий студентов
//    if($human instanceof Student){
//        $studentScholarship += $human->getScholarship()."<br>";
//    }
//    // считаем сумму зарплат работников
//    if($human instanceof Employee){
//        $employeeSalary += $human->getSalary()."<br>";
//    }
//   }
//// вывод суммы степендий
//echo $studentScholarship . ' сумма степендий' . '<br>';
//// вывод суммы зарплат работников
//echo $employeeSalary . ' сумма Зарплат' . '<br>';

//Урок 27 Задача : 7 делайте класс User с публичным свойствами name (имя) и surname (фамилия).

//class User
//{
//    private $name;
//    private $surname;
//}

//Урок 27 Задача : 8 Сделайте класс Employee, который будет наследовать от класса User и добавлять salary (зарплата).

//class User
//{
//    private $name;
//    private $surname;
//}
//
//class Employee extends  User
//
//{
//    private $salary;
//
//}


////Урок 27 Задача : 10 Создайте 3 объекта класса User, 3 объекта класса Employee, 3 объекта класса City, и в произвольном порядке запишите их в массив $arr.
//
//class User
//{
//    public $name;
//    public $surname;
//
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//
//}
//
//
//class Employee extends  User
//
//{
//    public $salary;
//
//
//    public function __construct($name,$surname,$salary)
//    {
//        parent::__construct($name,$surname);
//        $this->salary = $salary;
//    }
//
//}
//
//class City
//{
//    public $name;
//    public $population;
//
//
//    public function __construct($name, $population)
//    {
//        $this->name = $name;
//        $this->population = $population;
//    }
//
//}
//
//
//$user1 = new User('Василий', 'Лямкин');
//$user2 = new User('Антон', 'Комолов');
//$user3 = new User('Ольга', 'Шелест');
//
//$employee1 = new Employee('Василий', 'Стрельников', 1000);
//$employee2 = new Employee('Яна', 'Чурикова', 2000);
//$employee3 = new Employee('Лика', 'Длугач', 2500);
//
//$city1 = new City('Стамбул', 15000000);
//$city2 = new City('Токио', 9300000);
//$city3 = new City('Амстердам', 821000);
//
//$arr = [$city2, $employee3, $employee1, $user2, $city3, $employee2, $user3, $city1, $user1];


//Урок 27 Задача : 11 Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые принадлежат классу User или потомку этого класса.

//class User
//{
//    public $name;
//    public $surname;
//
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//
//}
//
//
//class Employee extends  User
//
//{
//    private $salary;
//
//
//    public function __construct($name,$surname,$salary)
//    {
//        parent::__construct($name,$surname);
//        $this->salary = $salary;
//    }
//
//}
//
//class City
//{
//    public $name;
//    public $population;
//
//
//    public function __construct($name, $population)
//    {
//        $this->name = $name;
//        $this->population = $population;
//    }
//
//}
//
//
//$user1 = new User('Василий', 'Лямкин');
//$user2 = new User('Антон', 'Комолов');
//$user3 = new User('Ольга', 'Шелест');
//
//$employee1 = new Employee('Василий', 'Стрельников', 1000);
//$employee2 = new Employee('Яна', 'Чурикова', 2000);
//$employee3 = new Employee('Лика', 'Длугач', 2500);
//
//$city1 = new City('Стамбул', 15000000);
//$city2 = new City('Токио', 9300000);
//$city3 = new City('Амстердам', 821000);
//
//$arr = [$city2, $employee3, $employee1, $user2, $city3, $employee2, $user3, $city1, $user1];
//
////перебор обэктов класса для вывода User и его свойcтва name
//foreach ($arr as $objClass)
//{
//    if($objClass instanceof User) {
//        echo $objClass->name. '<br>';
//    }
//}

//Урок 27 Задача : 12 Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые НЕ принадлежат классу User или потомку этого класса.
//class User
//{
//    public $name;
//    public $surname;
//
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//
//}
//
//
//class Employee extends User
//
//{
//    private $salary;
//
//
//    public function __construct($name,$surname,$salary)
//    {
//        parent::__construct($name,$surname);
//        $this->salary = $salary;
//    }
//
//}
//
//class City
//{
//    public $name;
//    public $population;
//
//
//    public function __construct($name, $population)
//    {
//        $this->name = $name;
//        $this->population = $population;
//    }
//
//}
//
//
//$user1 = new User('Василий', 'Лямкин');
//$user2 = new User('Антон', 'Комолов');
//$user3 = new User('Ольга', 'Шелест');
//
//$employee1 = new Employee('Василий', 'Стрельников', 1000);
//$employee2 = new Employee('Яна', 'Чурикова', 2000);
//$employee3 = new Employee('Лика', 'Длугач', 2500);
//
//$city1 = new City('Стамбул', 15000000);
//$city2 = new City('Токио', 9300000);
//$city3 = new City('Амстердам', 821000);
//
//$arr = [$city2, $employee3, $employee1, $user2, $city3, $employee2, $user3, $city1, $user1];
//
////перебор обэктов класса для вывода City и его свойcтва name
//foreach ($arr as $objClass)
//{
//    if($objClass instanceof City) {
//        echo $objClass->name. '<br>';
//    }
//}

//Урок 27 Задача : 13 Переберите циклом массив $arr и выведите на экран столбец свойств name тех объектов, которые НЕ принадлежат классу User или потомку этого класса.

//class User
//{
//    public $name;
//    public $surname;
//
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//
//}
//
//
//class Employee extends User
//
//{
//    private $salary;
//
//
//    public function __construct($name,$surname,$salary)
//    {
//        parent::__construct($name,$surname);
//        $this->salary = $salary;
//    }
//
//}
//
//class City
//{
//    public $name;
//    public $population;
//
//
//    public function __construct($name, $population)
//    {
//        $this->name = $name;
//        $this->population = $population;
//    }
//
//}
//
//
//$user1 = new User('Василий', 'Лямкин');
//$user2 = new User('Антон', 'Комолов');
//$user3 = new User('Ольга', 'Шелест');
//
//$employee1 = new Employee('Василий', 'Стрельников', 1000);
//$employee2 = new Employee('Яна', 'Чурикова', 2000);
//$employee3 = new Employee('Лика', 'Длугач', 2500);
//
//$city1 = new City('Стамбул', 15000000);
//$city2 = new City('Токио', 9300000);
//$city3 = new City('Амстердам', 821000);
//
//$arr = [$city2, $employee3, $employee1, $user2, $city3, $employee2, $user3, $city1, $user1];
//
////перебор обэктов класса для вывода User и его свойcтва name
//foreach ($arr as $objClass)
//{
//    if($objClass instanceof User)
//    {
//        if($objClass instanceof Employee == false){
//
//            echo $objClass->name. '<br>';
//        }
//     //   var_dump($objClass instanceof Employee);
//    }
//}


//Урок 27 Задача : 14 Скопируйте мой код классов Employee и Student и самостоятельно не подсматривая в мой код реализуйте такой же класс UsersCollection.


class Employee
{
    private $name; // имя
    private $salary; // зарплата

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер зарплаты:
    public function getSalary()
    {
        return $this->salary;
    }
}


class Student
{
    private $name; // имя
    private $scholarship; // стипендия

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    // Геттер имени:
    public function getName()
    {
        return $this->name;
    }

    // Геттер стипендии:
    public function getScholarship()
    {
        return $this->scholarship;
    }
}

class UsersCollection

{
    public $students = [];
    public $employees = [];

  public function add($user)
  {


      if ($user instanceof Student)
      {
          $this->students[] = $user;
      }

      if ($user instanceof Employee)
      {
          $this->employees[]= $user;
      }
  }

    public function getTotalScholarship()
    {

        $allTotalScholarship = 0;
        foreach ($this->students as $student) {


            $allTotalScholarship += $student->getScholarship();
        }
        return $allTotalScholarship;

    }

    public function getTotalSalary()
    {
        $allTotalSalary = 0;
        foreach($this->employees as $student)
        {


            $allTotalSalary +=  $student->getSalary();
        }
        return   $allTotalSalary;

    }

    public function getTotalPayment()
    {
       return $this-> getTotalSalary() + $this->getTotalScholarship();
    }

}

$usersCollection = new UsersCollection;

$usersCollection->add(new Student('Петя', 100));
$usersCollection->add(new Student('Ваня', 200));

$usersCollection->add(new Employee('Коля', 300));
$usersCollection->add(new Employee('Вася', 400));

// Получим полную сумму стипендий:
echo $usersCollection->getTotalScholarship() . '<br>';; // выведет 300

// Получим полную сумму зарплат:
echo $usersCollection->getTotalSalary() . '<br>'; // выведет 700

// Получим полную сумму платежей:
echo $usersCollection->getTotalPayment(); // выведет 1000