<?php
error_reporting(E_ALL);

//Статические методы
//Урок 27 Задача : 1 Сделайте класс Post (должность), в котором будут следующие свойства, доступные только для чтения: name (название должности) и salary (зарплата на этой должности).

//class Post
//
//{
//    private $name;
//    private $salary;
//}
////Урок 27 Задача : 2 Создайте несколько объектов класса Post: программист, менеджер водитель.
//
//class Post
//
//{
//    private $name;
//    private $salary;
//}
//
//$programist = new Post;
//$manager = new Post;
//$driver = new Post;

////Урок 27 Задача : 3 Сделайте класс Employee (работник), в котором будут следующие свойства: name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
///
//class Employee
//{
// private $name;
// private $surname;
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//}


////Урок 27 Задача : 3 Сделайте класс Employee (работник), в котором будут следующие свойства: name (имя) и surname (фамилия). Пусть начальные значения этих свойств будут передаваться параметром в конструктор.
///
//class Employee
//{
//    private $name;
//    private $surname;
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//}

////Урок 27 Задача : 4 Сделайте геттеры и сеттеры для свойств name и surname.
///
//class Employee
//{
//    private $name;
//    private $surname;
//
//    public function __construct($name, $surname)
//    {
//        $this->name = $name;
//        $this->surname = $surname;
//    }
//
//      public function getName()
//    {
//        return $this->name;
//    }
//
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//     public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function setSurname($surname)
//    {
//        $this->surname = $surname;
//    }
//
//}


////Урок 27 Задача : 5 Пусть теперь третьим параметром конструктора будет передаваться должность работника, представляющая собой объект класса Post. Укажите тип этого параметра в явном виде.
///
//class Post
//
//{
//    private $name;
//    private $salary;
//}
//
//$programist = new Post;
//$manager = new Post;
//$driver = new Post;
//
//class Employee
//{
//    private $name;
//    private $surname;
//
//    public function __construct(Post $post , $name, $surname)
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
//    public function setName($name)
//    {
//        $this->name = $name;
//    }
//
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function setSurname($surname)
//    {
//        $this->surname = $surname;
//    }
//
//}

////Урок 27 Задача : 6 Сделайте так, чтобы должность работника (то есть переданный объект с должностью) записывалась в свойство post.

//class Post
//
//{
//    private $name;
//    private $salary;
//}
//
//$programist = new Post;
//$manager = new Post;
//$driver = new Post;
//
//class Employee
//{
//    private $name;
//    private $surname;
//    private $post;
//
//
//    public function __construct(Post $post , $name, $surname)
//    {
//        $this->post = $post;
//        $this->name = $name;
//        $this->surname = $surname;
//    }
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
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function setSurname($surname)
//    {
//        $this->surname = $surname;
//    }
//
//}

////Урок 27 Задача : 7 Создайте объект класса Employee с должностью программист. При его создании используйте один из объектов класса Post, созданный нами ранее.
//
//class Post
//
//{
//    private $name;
//    private $salary;
//}
//
//$programist = new Post;
//$manager = new Post;
//$driver = new Post;
//
//class Employee
//{
//    private $name;
//    private $surname;
//    private $post;
//
//
//    public function __construct(Post $post , $name, $surname)
//    {
//        $this->post = $post;
//        $this->name = $name;
//        $this->surname = $surname;
//    }
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
//    public function getSurname()
//    {
//        return $this->surname;
//    }
//
//    public function setSurname($surname)
//    {
//        $this->surname = $surname;
//    }
//
//}
//
//$programist = new Employee($programist);
//



////Урок 27 Задача : 8 Выведите на экран имя, фамилию, должность и зарплату созданного работника.

class Post

{
    private $name;
    private $salary;


    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
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

$user = new Post('Програмист', 2700);
$user2 = new Post('Менеджер', 3000);
$user3 = new Post('Водитель', 2700);

class Employee
{
    private $name;
    private $surname;
    private $post;

    public function getPost()
    {
        return $this->post;
    }


    public function __construct(Post $user, $name, $surname)
    {
        $this->post = $user;
        $this->name = $name;
        $this->surname = $surname;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }
    public function changePost ($changeWorker )
    {
      return   $this->getPost()->setName($changeWorker);
    }

}

$employee = new Employee($user,'Сергей', 'Сергеевич');


echo $employee->getName() . '<br>';
echo $employee->getSurname() . '<br>';
echo $employee->getPost() -> getName(). '<br>';
echo $employee->changePost($user2) . '<br>';
echo $employee->getPost() ->setName('Уборшик'). '<br>';
echo $employee->getPost() -> getName(). '<br>';
echo $employee->getPost()->getSalary() . '<br>';


