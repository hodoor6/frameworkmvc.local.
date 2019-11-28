<?php
error_reporting(E_ALL);

//Объект со статическими свойствами и методами
//Урок 31 Задача : 1 Не подсматривая в мой код реализуйте такой же класс User, подсчитывающий количество своих объектов.

//class User
//{
//    public static $count = 0;
//    public $name;
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//
//        self::$count++;
//       }
//
//    public static function getCount()
//    {
//        return self::$count;
//    }
//
//
//}
//
//$user1 = new User(
//    'user1'); // создаем первый объект класса
//echo User::$count .'<br>'; //выведет 1
//
//$user2 = new User(
//    'user2'); // создаем второй объект класса
//echo User::$count; //выведет 2


//Урок 31 Задача : 2 Самостоятельно переделайте код вашего класса User в соответствии с теоретической частью урока.

class User
{
    private static $count = 0;
    public $name;

    public function __construct($name)
    {
        $this->name = $name;

        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }


}

$user1 = new User(
    'user1'); // создаем первый объект класса
echo User::getCount() . '<br>'; //выведет 1

$user2 = new User(
    'user2'); // создаем второй объект класса
echo User::getCount(); //выведет 2
?>