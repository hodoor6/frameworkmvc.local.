<?php
// Переменные названия свойств
//Урок 14 Задача : 1  Сделайте класс City (город), в котором будут следующие свойства - name (название), foundation (дата основания), population (население). Создайте объект этого класса.


//class City
//{
//    public $name;
//    public $foundation;
//    public $population;
//
//
//}
//
//
//$city= new City();

//Урок 14 Задача : 2  Пусть дана переменная $props, в которой хранится массив названий свойств класса City. Переберите этот массив циклом foreach и выведите на экран значения соответствующих свойств.

//class City
//{
//    public $name;
//    public $foundation;
//    public $population;
//
//    public function __construct($name, $foundation, $population)
//    {
//        $this->name = $name;
//        $this->foundation = $foundation;
//        $this->population = $population;
//    }
//
//    public function perebor($props)
//    {
//
//        foreach ($props as $elem) {
//            echo $this->$elem . '<br>';
//        }
//
//    }
//}
//
//$city = new City('Киев', 1900, 5000);
//$props = ['name', 'foundation', 'population'];
//
//$city->perebor($props);

//Урок 14 Задача : 3  Скопируйте мой код класса User и массив $props. В моем примере на экран выводится фамилия юзера. Выведите еще и имя, и отчество.
//
//
//class User
//{
//
//
//    public $surname; // фамилия
//    public $name; // имя
//    public $patronymic; // отчество
//
//    public function __construct($surname, $name, $patronymic)
//    {
//        $this->surname = $surname;
//        $this->name = $name;
//        $this->patronymic = $patronymic;
//    }
//}
//
//$user = new User('Иванов', 'Иван', 'Иванович');
//
//$props = ['surname', 'name', 'patronymic'];
//
//echo  $user->{$props[0]}. '<br>';
//echo $user->{$props[1]}. '<br>';
//echo $user->{$props[2]}. '<br>';

// проработка пого что нет в задании
//class User
//{
//
//
//    public $surname; // фамилия
//    public $name; // имя
//    public $patronymic; // отчество
//
//    public function __construct($surname, $name, $patronymic)
//    {
//        $this->surname = $surname;
//        $this->name = $name;
//        $this->patronymic = $patronymic;
//    }
//}
//
//class Prop
//{
//    public $surname;
//    public $name;
//    public $patronymic;
//
//
//    public function __construct($surname, $name, $patronymic)
//    {
//        $this->surname = $surname;
//        $this->name = $name;
//        $this->patronymic = $patronymic;
//    }
//
//    /**
//     * @return mixed
//     */
//    public function getName()
//    {
//        return $this->name;
//    }
//
//
//    /**
//     * @return mixed
//     */
//    public function getPatronymic()
//    {
//        return $this->patronymic;
//    }
//
//
//
//
//    /**
//     *
//     * @return mixed
//     */
//    public function getSurname()
//    {
//        return $this->surname;
//
//
//    }
//
//    /**
//     * Props constructor.
//     * @param $surname
//     */
//
//}
//
//
//$user = new User('Иванов', 'Иван', 'Иванович');
//$prop = new Prop('surname', 'name', 'patronymic');
//
//
//echo $user->{$prop->
//getSurname()};
//echo $user->{$prop->
//getName()};
//echo $user->{$prop->
//getPatronymic()};



