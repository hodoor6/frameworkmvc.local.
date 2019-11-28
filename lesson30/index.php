<?php
error_reporting(E_ALL);

//Статические свойства
//Урок 30 Задача : 1 Сделайте класс Num, у которого будут два публичных статических свойства: num1 и num2. Запишите в первое свойство число 2, а во второе - число 3. Выведите сумму значений свойств на экран.

/*
class Num
{
    public static $num1;
    public static $num2;
}
Num::$num1 = 2;
Num::$num2 = 3;

$sumNumber = Num::$num1 + Num::$num2;

echo $sumNumber;*/


//Урок 30 Задача : 2 Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.
//
//class Num
//{
//    private static $num1 = 2;
//    private static $num2 = 3;
//}
//
//
//
//
//
//
//
//Num::$num1 = 2;
//Num::$num2 = 3;
//
//$sumNumber = Num::$num1 + Num::$num2;
//
//echo $sumNumber;



//Урок 30 Задача : 2 Сделайте класс Num, у которого будут два приватны статических свойства: num1 и num2. Пусть по умолчанию в свойстве num1 хранится число 2, а в свойстве num2 - число 3.

//class Num
//{
//    private static $num1 = 2;
//    private static $num2 = 3;
//}


//Урок 30 Задача : 3 Сделайте в классе Num метод getSum, который будет выводить на экран сумму значений свойств num1 и num2


//class Num
//{
//    private static $num1 = 2;
//    private static $num2 = 3;
//
//    public static function getSum()
//    {
//       return $sumNumber = self::$num1 + self::$num2;
//    }
//}
//
//
//echo Num::getSum();


//Урок 30 Задача : 4 Добавьте в наш класс Geometry метод, который будет находить объем шара по радиусу. С помощью этого метода выведите на экран объем шара с радиусом 10.


class Geometry
{
    private static $pi =
        3.14; // вынесем Пи в свойство

    public static function getCircleSquare($radius)
    {
        return self::$pi * $radius * $radius;
    }

    public static function getCircleCircuit($radius)
    {
        return 2 * self::$pi * $radius;
    }
    public static function getCircleBall($radius)
    {
       return (4/3) * self::$pi * pow($radius,3);

    }

}


echo Geometry::getCircleBall(10);