<?php
// Цепочки методов
//Урок 17 Задача : 1  Не подсматривая в мой код самостоятельно реализуйте такой же класс Arr, методы которого будут вызываться в виде цепочки.

//class Arr
//{
//    public $numeber  = [];
//
//      public function __construct($numeber)
//    {
//        $this->numeber = $numeber;
//    }
//
//    public function add($num)
//    {
//        $this->numeber[] = $num;
//        return $this;
//    }
//    public function getSum()
//    {
//        return  array_sum($this->numeber);
//    }
//}
//
//echo (new Arr([]))->add(1)->add(2)->getSum();


//Урок 17 Задача : 2   Добавьте в класс Arr еще один метод append, который параметром будет принимать массив чисел и добавлять эти числа в конец массива, хранящегося в объекте. //Предполагается, что методы add и append можно будет использовать в любом порядке:
//class Arr
//{
//    public $numeber  = [];
//
//    public function __construct($numeber)
//    {
//        $this->numeber = $numeber;
//    }
//
//    public function append($arrayNum)
//    {
//
//        $this->numeber = array_merge($this->numeber,$arrayNum);
//
//        return $this;
//    }
//
//    public function add($num)
//    {
//
//     $this->numeber[] = $num;
//        return $this;
//    }
//
//    public function getSum()
//    {
//
//        return  array_sum($this->numeber);
//    }
//}
//
//echo (new Arr([]))->add(1)->append([4, 5, 6])->add(3)->add(5)->getSum();


//Урок 17 Задача : 3 //Сделайте класс User, у которого будут приватные свойства surname (фамилия), name (имя) и patronymic (отчество).
//Эти свойства должны задаваться с помощью соответствующих сеттеров.
//Сделайте так, чтобы эти сеттеры вызывались цепочкой в любом порядке, а самым последним методом в цепочке можно было вызвать метод getFullName, который вернет ФИО юзера (первую букву фамилии, имени и отчества).

class User
{

    private $surname;
    private $name;
    private $patronymic;

    public function setSurname($surname)
    {
        $this->surname = $surname;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setPatronymic($patronymic)
    {
        $this->patronymic = $patronymic;
        return $this;
    }

    public function getFullName()
    {

        return mb_strimwidth($this->surname, 0, 1) . mb_strimwidth($this->name, 0, 1) . mb_strimwidth($this->patronymic, 0, 1);
    }

}

echo (new User)->
setName('Николай')->setPatronymic('Иванович')
    ->setSurname('Петров')->
    getFullName(); // выведет 'ПНИ'