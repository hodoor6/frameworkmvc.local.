<?php
error_reporting(E_ALL);

//Функции для работы с классами и объектами
//Функция get_class

//Урок 33 Задача : 1 Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.

//class Test
//{
//
//}
//
//$test= new Test;
//
//echo get_class($test);

//Урок 33 Задача : 2 Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект

class Test1
{
 public $name;

    /**
     * Test1 constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

}



class Test2
{
    public $name;


    public function __construct($name)
    {
        $this->name = $name;
    }
}

$username1= new Test1('Сергей');
$username2= new Test1('Андрей');
$usertest1= new Test2('Василий');
$usertest2= new Test2('Петя');

$arr = [$username1,$username2,$usertest1,$usertest2];

foreach ($arr as $user)
{
    echo get_class($user) . '<br>';
    echo $user->name. '<br>';
}

