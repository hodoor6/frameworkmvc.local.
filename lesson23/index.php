<?php
// Передача объектов по ссылке
//Урок 23 Задача : 1  Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).
//
//class Product
//{
//private $name;
//private $price;
//
//}


//Урок 23 Задача : 2  Сделайте класс Product (продукт), в котором будут следующие свойства: name (название продукта), price (цена).

//
//class Product
//{
//    private $name;
//    private $price;
//
//}
//
//$product1 = new Product;

//Урок 23 Задача : 3  Присвойте значение переменной $product1 в переменную $product2. Проверьте то, что обе переменные ссылаются на один и тот же объект.

class Product
{
    public $name;
    public $price;

}

$product1 = new Product;

$product1 -> name = 'bread';
$product1 -> price = 27;
$product2 = $product1;
echo $product1 -> name.'<br>';
echo $product1 -> price.'<br>';
echo $product2 -> name.'<br>';
echo $product2 -> price.'<br>';

