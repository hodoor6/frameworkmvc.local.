<?php
error_reporting(E_ALL);

//Урок 33 Задача : 1 Реализуйте предложенный класс Circle самостоятельно.
class Circle

{

    const PI = '3,14';
private $radius;


    public function __construct($radius)
    {
        $this->radius = $radius;
    }
//длина окружности
    public function getCircuit ()
    {
        return $resultCircuit = 2 * self::PI * $this->radius;
    }
    //Урок 33 Задача : 2 С помощью написанного класса Circle найдите длину окружности и площадь круга с радиусом 10.
//прощадь круга
    public function getSquare ()
{
    //$ra
    return $resultSquare = self::PI * pow($this->radius ,2);
}



}
$circle = new Circle(10);

//вывод длина окружности
echo $circle->getCircuit(). '<br>';

//вывод площядь круга
echo $circle->getSquare();



