<?php
// Перезапись методов родителя в классе потомке
//Урок 21 Задача : 1  Модифицируйте код класса User так, чтобы в методе setName выполнялась проверка того, что длина имени более 3-х символов.
//Урок 21 Задача : 2 Добавьте в класс Student метод setName, в котором будет выполняться проверка того, что длина имени более 3-х символов и менее 10 символов. //Пусть метод setName класса Student использует метод setName своего родителя, чтобы выполнить часть проверки.

class User
{
    private $name;
    private $age;

    public function setName($name)
    {
        if (mb_strlen($name) > 2) {
            $this->name = $name;
        } else {
            echo ' Меньше 3 символов';
        }
    }

    public function getName()
    {
        return $this->name;
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

    public function setName($name)
    {
        if (mb_strlen($name) < 10) {
                        parent::setName($name);
        } else {
            echo ' Больше 10 символов';
        }
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
$student->setName('Де111111111111111');
$student->setAge(25);
$student->setCourse(2);


echo $student->getName(). '<br>';
echo $student->getAge(). '<br>';
echo $student->getCourse(). '<br>';
