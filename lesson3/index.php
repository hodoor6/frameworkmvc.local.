<?php
//Урок 3 Задача :1
//Не подсматривая в мой код реализуйте такой же класс User с методом show.
//class User
//{
//    public $name;
//    public $age;
//
//    public function show ()
//    {
//        return '!!!';
//    }
//}
//
//$user = new User;
//$user->name = 'Коля';
//$user->age = 25;
//
//echo $user->show();

//Урок 3 Задача :2
//Не подсматривая в мой код реализуйте такой же класс User с методом show.

class User
{
    public $name;
    public $age;

    public function show($str)
    {
        return $str . '!!!';
    }
}


$user = new User;
$user->name = 'Коля';
$user->age = 25;

echo $user->show('Привет');
