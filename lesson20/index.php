<?php
// Модификатор доступа protected
//Урок 20 Задача : 1  Скопируйте мой код класса User. Самостоятельно не подсматривая в мой код реализуйте описанный класс Student с методами getCourse, setCourse и addOneYear.

class User
{
    private $name;
    protected $age;

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

class Student extends User
{
private $course;

     public function addOneYear()
    {
      return  $this->age++;
    }

    public function getCourse()
    {
        return $this->course;
    }

     public function setCourse($course)
    {
        $this->course = $course;
    }
}

$student = new Student;
$student->setName('Ден');
$student->setAge(25);
$student->setCourse(2);

echo $student->getAge(). '<br>';
$student->addOneYear(). '<br>';
echo $student->getName(). '<br>';
echo $student->getAge(). '<br>';
echo $student->getCourse(). '<br>';