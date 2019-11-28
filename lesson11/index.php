<?php
// Хранение объектов в массивах
//Урок 11 Задача : 1 Сделайте класс City (город), в котором будут следующие свойства: name (название города), population (количество населения).

//Урок 11 Задача : 2 Создайте 5 объектов класса City, заполните их данными и запишите в массив.
//Урок 11 Задача : 3 Переберите созданный вами массив с городами циклом и выведите города и их население на экран

class City
{
    public $name;
    public $population;

    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}

// масив городов

$cities = [
    new City('Москва', 5000),
    new City('Пенза', 6000),
    new City('Краснодар', 7000),
    new City('Ярославль', 8000),
    new City('Казань', 9000)
];

// вывод через цикл массив с данными классов

foreach ($cities as $city)
{
    echo 'Город '. $city ->name. ', Население ' . $city->population. '<br>';
};




