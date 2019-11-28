<?php

//Урок 6 Задача :1-3
//Задача : 1 Не подсматривая в мой код создайте такой же класс User с такими же методами.
//
//Задача : 2 Создайте объект этого класса User, проверьте работу методов setAge и addAge.
//
//Задача : 3 Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.


class User
{
    public $name;
    public $age;

    /**
     * @param mixed $age
     */
    public function isAgeCorrect($age)
    {
        if ($age >= 18 and $age <= 60) {
            return true;
        } else {
            echo 'не прошло проверку';
        }
    }


    public function setAge($age)
    {
        if ($this->isAgeCorrect($age)) {
            $this->age = $age;
        } else {
            echo 'не прошло проверку в новом возрасте';
        }
    }


    public function addAge($years)
    {

        $newAge = $this->age + $years;


        if ($this->isAgeCorrect($newAge)) {
            $this->age = $newAge;
        } else {
            echo '<br>';
            echo 'не прошло проверку при добавлении возраста';
        }
    }

    public function subAge($years)
    {
        $minAge = $this->age - $years;

        if ($this->isAgeCorrect($minAge)) {
            $this->age = $minAge;
        } else {
            echo '<br>';
            echo 'не прошло проверку при уменщении возраста';
        }
    }
}

$user = new User;
$user->age = 25;

$user->setAge(50);
echo "<br>";
echo $user->age;
$user->addAge(7);
echo "<br>";
echo $user->age;
echo "<br>";
$user->subAge(3);
echo "<br>";
echo $user->age;
