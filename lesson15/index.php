<?php
// Переменные названия методов
//Урок 15 Задача : 1  Задача:
//
//Пусть массив $methods будет ассоциативным с ключами method1 и method2:
////	$methods = ['method1' =>
//		 'getName', 'method2' => 'getAge'];
//////Выведите имя и возраст пользователя с помощью этого массива.


class User
{
    private $name; // имя
    private $age; // возраст

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}

$user = new User('Иван', 25);
$methods = ['method1' => 'getName',
    'method2' => 'getAge'];

echo $user->{$methods['method1']}() . '<br>';
echo $user->{$methods['method2']}();




