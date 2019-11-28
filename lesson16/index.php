<?php

//Вызов метода сразу после создания объекта
//Урок 16 Задача : 1  Не подсматривая в мой код реализуйте такой же класс Arr и вызовите его метод getSum сразу после создания объекта.

//class Arr
//{
//    public $numeber  = [];
//
//    public function __construct($numeber)
//    {
//        $this->numeber = $numeber;
//    }
//
//    public function add($num)
//    {
//        $this->numeber[] = $num;
//    }
//
//    public function getSum()
//    {
//
//        return  array_sum($this->numeber);
//    }
//}
//
//echo (new Arr([1,2,3]))->getSum() + (new Arr([4,5,6]))->getSum() ;