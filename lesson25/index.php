<?php
error_reporting(E_ALL);
//Передача объектов параметрами

//Урок 25 Задача : 1  Сделайте класс Product (товар), в котором будут приватные свойства name (название товара), price (цена за штуку) и quantity. Пусть все эти свойства будут доступны только для чтения.
//
//class Product {
//    private $name;
//    private $price;
//    private $quantity;
//}
//Урок 25 Задача : 2  Добавьте в класс Product метод getCost, который будет находить полную стоимость продукта (сумма умножить на количество).

//class Product
//{
//    private $name;
//    private $price;
//    private $quantity;
//
//
//    public function getCost()
//    {
//        return $this->price * $this->quantity;
//    }
//}

//Урок 25 Задача : 3 Сделайте класс Cart (корзина). Данный класс будет хранить список продуктов (объектов класса Product) в виде массива. Пусть продукты хранятся в свойстве products.

//class Product
//{
//    private $name;
//    private $price;
//    private $quantity;
//
//
//    public function getCost()
//    {
//        return $this->price * $this->quantity;
//    }
//}
//class Cart
//{
//public $products = [];
//
//}

//Урок 25 Задача : 4 Реализуйте в классе Cart метод add для добавления продуктов.

//
//
//class Product
//{
//    private $name;
//    private $price;
//    private $quantity;
//
//
//    public function __construct($name, $price, $quantity)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }
//
//
//    public function getCost()
//    {
//        return $this->price * $this->quantity;
//    }
//}
//class Cart
//{
//    public $products = [];
//
//
//    public function add($product)
//    {
//        $this->products[] = $product;
//    }
//
//    public function getProducts()
//    {
//        return $this->products;
//    }
//
//}
//
//$cart= new Cart;
//
//$cart->add(new Product( 'продукт 1', 10, 15));
//$cart->add(new Product( 'продукт 2', 20, 25));
//$cart->add(new Product( 'продукт 3', 30, 35));
//
//
//print_r($cart->getProducts());

//Урок 25 Задача : 5 Реализуйте в классе Cart метод remove для удаления продуктов. Метод должен принимать параметром название удаляемого продукта.

class Product
{
    public $name;

    public $price;
    public $quantity;


    public function __construct($name, $price, $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
    }



    public function getName()
    {
        return $this->name;
    }


    public function getCost()
    {
        return $this->price * $this->quantity;
    }
}
class Cart
{
    public $products = [];


    public function add($product)
    {
        $this->products[] = $product;
    }

    public function getProducts()
    {
        return $this->products;
    }

    public function remove($productName)
    {

        foreach ($this->products as $key => $product)
        {
            if($product->name == $productName)
            {
                unset($this->products[$key]);
            }
        }
    }

}
$cart= new Cart;

$cart->add(new Product( 'молоко', 10, 15));
$cart->add(new Product( 'кефир', 20, 25));
$cart->add(new Product( 'ряженка', 30, 35));

var_dump($cart->getProducts());
$cart->remove('кефир');
var_dump($cart->getProducts());

//Урок 25 Задача : 6 Реализуйте в классе Cart метод getTotalCost, который будет находить суммарную стоимость продуктов.

//class Product
//{
//    public $name;
//    public $price;
//    public $quantity;
//
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
//
//
//    public function __construct($name, $price, $quantity)
//{
//    $this->name = $name;
//    $this->price = $price;
//    $this->quantity = $quantity;
//}
//
//
//    public function getCost()
//{
//    return $this->price * $this->quantity;
//}
//}
//class Cart
//{
//    public $products = [];
//
//
//    public function add($product)
//    {
//        $this->products[] = $product;
//    }
//
//    public function getProducts()
//    {
//        return $this->products;
//    }
//
//
//    // Находим  суммарную стоимость продуктов:
//public function getTotalCost()
//{
//    $sumAllProduct = 0;
//    foreach ($this->products as $oneProduct)
//    {
//        $sumAllProduct += $oneProduct->getPrice();
//    }
//    return  'Cумма всех продуктов ' . $sumAllProduct;
//}
//
//}
//
//$cart= new Cart;
//
//$cart->add(new Product( 'продукт 1', 10, 15));
//$cart->add(new Product( 'продукт 2', 20, 25));
//$cart->add(new Product( 'продукт 3', 30, 35));
//
//echo $cart->getTotalCost(); //вывод cумми всех продуктов

//Урок 25 Задача : 7 Реализуйте в классе Cart метод getTotalQuantity, который будет находить суммарное количество продуктов (то есть сумму свойств quantity всех продуктов).

//class Product
//{
//    public $name;
//    public $price;
//    public $quantity;
//
//
//    public function __construct($name, $price, $quantity)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }
//
//
//    public function getQuantity()
//    {
//        return $this->quantity;
//    }
//
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
//
//
//    public function getCost()
//    {
//        return $this->price * $this->quantity;
//    }
//}
//class Cart
//{
//    public $products = [];
//
//
//    public function add($product)
//    {
//        $this->products[] = $product;
//    }
//
//    public function getProducts()
//    {
//        return $this->products;
//    }
//
//
//    // Находим  суммарную стоимость продуктов:
//    public function getTotalCost()
//    {
//        $sumAllProduct = 0;
//        foreach ($this->products as $oneProduct)
//        {
//            $sumAllProduct += $oneProduct->getPrice();
//        }
//        return  'Cумма всех продуктов ' . $sumAllProduct;
//    }
// Находим  суммарное количество всех продуктов
//    public function getTotalQuantity()
//    {
//        $sumAllQuantity = 0;
//        foreach ($this->products as $oneProductQuantity)
//        {
//            $sumAllQuantity += $oneProductQuantity->getQuantity();
//        }
//        return  'Cумма общего количества продуктов ' . $sumAllQuantity;
//    }
//
//}
//
//$cart= new Cart;
//
//$cart->add(new Product( 'продукт 1', 10, 15));
//$cart->add(new Product( 'продукт 2', 20, 25));
//$cart->add(new Product( 'продукт 3', 30, 35));
//
//
//echo $cart->getTotalQuantity(). '<br>' ; //вывод суммарное количество всех продуктов

//Урок 25 Задача : 8 Реализуйте в классе Cart метод getAvgPrice, который будет находить среднюю стоимость продуктов (суммарная стоимость делить на количество всех продуктов).

//class Product
//{
//    public $name;
//    public $price;
//    public $quantity;
//
//
//    public function __construct($name, $price, $quantity)
//    {
//        $this->name = $name;
//        $this->price = $price;
//        $this->quantity = $quantity;
//    }
//
//
//    public function getQuantity()
//    {
//        return $this->quantity;
//    }
//
//
//    public function getPrice()
//    {
//        return $this->price;
//    }
//
//
//    public function getCost()
//    {
//        return $this->price * $this->quantity;
//    }
//}
//class Cart
//{
//    public $products = [];
//
//
//    public function add($product)
//    {
//        $this->products[] = $product;
//    }
//
//    public function getProducts()
//    {
//        return $this->products;
//    }
//
//
//    // Находим  суммарную стоимость продуктов:
//    public function getTotalCost()
//    {
//        $sumAllProduct = 0;
//        foreach ($this->products as $oneProduct)
//        {
//            $sumAllProduct += $oneProduct->getPrice();
//        }
//        return   $sumAllProduct;
//    }
//
//    public function getTotalQuantity()
//    {
//        $sumAllQuantity = 0;
//        foreach ($this->products as $oneProductQuantity)
//        {
//            $sumAllQuantity += $oneProductQuantity->getQuantity();
//        }
//        return   $sumAllQuantity;
//    }
////находим среднюю стоимость всех продуктов
//    public function getAvgPrice ()
//    {
//        $arrayAllProduct = $this->products;
//      $averageCostAllProducts = $this->getTotalCost()/ $this->getTotalQuantity();
//
//       return $averageCostAllProducts;
//    }
//
//}
//
//$cart= new Cart;
//
//$cart->add(new Product( 'продукт 1', 10, 15));
//$cart->add(new Product( 'продукт 2', 20, 25));
//$cart->add(new Product( 'продукт 3', 30, 35));
//
//echo $cart->getAvgPrice(). '<br>' ; //вывод средней стоимости всех продуктов
