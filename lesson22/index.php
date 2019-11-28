<?php
// Перезапись конструктора родителя в потомке
//Урок 22 Задача : 1  Не подсматривая в мой код реализуйте такой же класс Student, наследующий от User.

//class User
//{
//    protected $name;
//    protected $age;
//
//
//    public function __construct($name, $age)
//    {
//        $this->name = $name;
//        $this->age = $age;
//    }
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
//
//}
//
//class Student extends User
//{
//
//    private $course;
//
//
//    public function __construct($name, $age, $course)
//    {
//        $this->name = $name;
//        $this->age = $age;
//        $this->course = $course;
//    }
//
//
//    public function getCourse()
//    {
//        return $this->course;
//    }
//}
//
//$student = new Student(
//    'Коля', 19, 2); // теперь это работает
//
//echo $student->getName() . '<br>'; // выведет 'Коля'
//echo $student->getAge() . '<br>'; // выведет 19
//echo $student->getCourse(); // выведет 2


//Урок 22 Задача : 2  Сделайте класс User, в котором будут следующие свойства только для чтения: name (имя), surname (фамилия), Начальные значения этих свойств должны устанавливаться в конструкторе. Сделайте также геттеры этих свойств.
//
//class User {
//    private $name;
//    private $surname;
//
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//}

//Урок 22 Задача : 3  Сделайте так, чтобы третьим параметром в конструктор передавалась дата рождения работника в формате год-месяц-день Запишите ее в свойство birthday. Сделайте геттер для этого свойства.

//class User
//{
//    private $name;
//    private $surname;
//    private $birthday = ['1980', '11', '10'];
//
//
//
//    public function __construct($name, $surname, $birthday)
//    {
//        $this->name = $name;
//            $this->surname = $surname;
//            $this->birthday = $birthday;
//        }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getBirthday()
//    {
//        return $this->birthday;
//    }
//
//
//    }



//Урок 22 Задача : 4  Сделайте приватный метод calculateAge, который параметром будет принимать дату рождения, а возвращать возраст с учетом того, был ли уже день рождения в этом году, или нет.

//class User
//{
//    private $name;
//    private $surname;
//    private $birthday = ['1980', '11', '10'];
//
//
//
//    public function __construct($name, $surname, $birthday)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->birthday = $birthday;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getBirthday()
//    {
//        return $this->birthday;
//    }
//
//    public function calculateAge()
//    {
//        $date = date('Y');
//        $month = date('n');
//        $day = date('j');
//
//        if ($this->birthday[1] >= $month and $this->birthday[2] >= $day) {
//            echo "День рождения уже был в этом году ";
//            $result = $date - $this->birthday[0];
//            echo $result + 1;
//        } else {
//
//
//            $result = $date - $this->birthday[0];
//            echo "День рождения в этом году  еще не было ";
//            echo $result;
//        }
//
//
//    }
//}
//
//
//$user = new User(1,2,['1980', '11', '10']);
//
//$user->calculateAge();

//Урок 22 Задача : 5  Сделайте так, чтобы метод calculateAge вызывался в конструкторе объекта, рассчитывал возраст пользователя и записывал его в приватное свойство age. Сделайте геттер для этого свойства.

//class User
//{
//    private $name;
//    private $surname;
//    private $birthday = ['1980', '11', '25'];
//    private $age;
//
//    public function getAge()
//    {
//        return $this->age;
//    }
//
//    public function __construct($name, $surname, $birthday)
//    {
//        $this->age = $this->calculateAge();
//        $this->name = $name;
//        $this->surname = $surname;
//        $this->birthday = $birthday;
//    }
//
//    public function getName()
//    {
//        return $this->name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function getBirthday()
//    {
//        return $this->birthday;
//    }
//
//    private function calculateAge()
//    {
//        $date = date('Y');
//        $month = date('n');
//        $day = date('j');
//
//        if ($this->birthday[1] >= $month and $this->birthday[2] >= $day) {
//            $result = $date - $this->birthday[0];
//            $resultNew = $result + 1;
//            return "День рождения уже был в этом году " . $resultNew;
//
//        } else {
//
//
//            $result = $date - $this->birthday[0];
//            return "День рождения в этом году  еще не было " . $result;
//        }
//
//
//    }
//}
//
//$user = new User(1,2,[]);
//
//
//echo $user->getAge();


//Урок 22 Задача : 6  Сделайте класс Employee, который будет наследовать от класса User. Пусть новый класс имеет свойство salary, в котором будет хранится зарплата работника. Зарплата должна передаваться четвертым параметром в конструктор объекта. Сделайте также геттер для этого свойства.
class User
{
    private $name;
    private $surname;
    private $birthday;
    private $age;

    public function getAge()
    {
        return $this->age;
    }

    public function __construct($name, $surname, $birthday)
    {

        $this->name = $name;
        $this->surname = $surname;
        $this->birthday = $birthday;
        $this->age = $this->calculateAge($birthday);
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    private function calculateAge()
    {
        $date = date('Y');
        $month = date('n');
        $day = date('j');

        if ($this->birthday[1] >= $month and $this->birthday[2] >= $day) {
            $result = $date - $this->birthday[0];
            $resultNew = $result + 1;
            return "День рождения уже был в этом году " . $resultNew;

        } else {

            $result = $date - $this->birthday[0];
            return "День рождения в этом году  еще не было по этому Вам " . $result;
        }
    }
}

class Employee extends User {

    private $salary;

    public function __construct($name,$surname,$birthday, $salary)
    {
        parent::__construct($name,$surname,$birthday);
        $this->salary = $salary;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}

$employee = new Employee ('Сергей','Cергеев',['1985', '11', '20'], 5000);

echo $employee->getName().'<br>';
echo $employee->getSurname().'<br>';
echo $employee->getAge().'<br>';
echo $employee->getSalary().'<br>';