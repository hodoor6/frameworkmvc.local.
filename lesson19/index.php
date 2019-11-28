<?php
//Наследование классов
 //Урок 19 Задача : 1  Не подсматривая в мой код реализуйте такие же классы User, Employee.

//class User {
//    private $name;
//    private $age;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//}
//
//class Employee extends User{
//
//    public $salary;
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//}
//$employee = new Employee;
//
//$employee->setSalary(1000); // метод класса Employee
//$employee->setName('Коля'); // метод унаследован от родителя
//$employee->setAge(25); // метод унаследован от родителя
//
//echo $employee->getSalary() . '<br>'; // метод класса Employee
//echo $employee->getName(). '<br>'; // метод унаследован от родителя
//echo $employee->getAge(). '<br>';// метод унаследован от родителя

// Наследование классов
//Урок 19 Задача : 2 Не подсматривая в мой код реализуйте такие же классы User, Employee.

//class User {
//    private $name;
//    private $age;
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function setAge($age)
//    {
//        $this->age = $age;
//    }
//}
//
//class Student extends User{
//    public $course;
//
//    public function getCourse()
//    {
//        return $this->course;
//    }
//
//    public function setCourse($course)
//    {
//        $this->course = $course;
//    }
//}
//
//$student = new Student;
//
//$student->setCourse(3); // метод класса Student
//$student->setName('Коля'); // метод унаследован от родителя
//$student->setAge(25); // метод унаследован от родителя
//
//echo $student->getCourse() . '<br>'; // метод класса Student
//echo $student->getName(). '<br>'; // метод унаследован от родителя
//echo $student->getAge(). '<br>'; // метод унаследован от родителя

//Урок 19 Задача : 3  Сделайте класс Programmer, который будет наследовать от класса Employee. Пусть новый класс имеет свойство langs,
// в котором будет хранится массив языков, которыми владеет программист.
// Сделайте также геттер и сеттер для этого свойства.
//


//class Employee {
//
//    public $salary;
//
//    public function getSalary()
//    {
//        return $this->salary;
//    }
//
//    public function setSalary($salary)
//    {
//        $this->salary = $salary;
//    }
//}
//  class Programmer extends  Employee
//  {
//      public $lands = ['php', 'html', 'js' , 'css'];
//
//
//
//      public function setlands($lands)
//      {
//          $this->Lands = $lands;
//      }
//
//      public function getlands()
//      {
//          return $this->lands;
//      }
//
//  }
//
//$programmer = new Programmer;
//echo  print_r($programmer->getlands()). '<br>';

//Урок 19 Задача : 4  Сделайте класс Driver (водитель), который будет наследовать от класса Employee. Пусть новый класс добавляет следующие свойства: водительский стаж, категория вождения (A, B, C, D), а также геттеры и сеттеры к ним.
class User {
    private $name;
    private $age;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}



class Employee extends User
{

    public $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}
  class Programmer extends  Employee
  {
      public $lands = ['php', 'html', 'js' , 'css'];



      public function setlands($lands)
      {
          $this->Lands = $lands;
      }

      public function getlands()
      {
          return $this->lands;
      }

  }


class Driver extends Employee {
    public $drivingExperience = ['40', '50', '60', '70'];
    public $drivingCategory = ['A', 'B', 'C', 'D'];


    public function getDrivingExperience()
    {
        return $this->drivingExperience;
    }


    public function setDrivingExperience($drivingExperience)
    {
        $this->drivingExperience = $drivingExperience;
    }

    public function getDrivingCategory()
    {
        return $this->drivingCategory;
    }

    public function setDrivingCategory($drivingCategory)
    {
        $this->drivingCategory = $drivingCategory;
    }
}

$driver = new Driver;

$driver->setAge(25);
$driver->setName('Сергей');
$driver->setSalary(5000);
$driver->setDrivingCategory('D');
$driver->setDrivingExperience(50);



echo $driver->getAge() . '<br>';
echo $driver->getName(). '<br>';
echo $driver->getSalary(). '<br>';
echo $driver->getDrivingCategory(). '<br>';
echo $driver->getDrivingExperience(). '<br>';