<?php
// Начальные значения свойств при объявлении
//Урок 13 Задача : 1  Реализуйте класс Arr, похожий на тот, который я реализовал выше.
// В отличие от моего класса метод add вашего класса параметром должен принимать массив чисел. Все числа из этого массива должны добавляться в конец массива $this->numbers.

//Урок 13 Задача : 2 Вместо метода getSum реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.
//
//class Arr
//{
//       public $number = [1,2];
//
//
//    public function getNumber()
//    {
//        return $this->number;
//    }
//
//    public function add($arr)
//    {
//
//        $result = array_merge ($this->number,$arr);
//
//        print_r($result);
//        }
//}
//
//
//$arr = new Arr;
//
//$arr->add([3, 4]);
//
//var_dump($arr->getNumber());


//Урок 13 Задача : 2 Вместо метода getSum реализуйте метод getAvg, который будет находить среднее арифметическое переданных чисел.


class Arr
{
       public $number = [1,2];


    public function getNumber()
    {
        return $this->number;
    }

    public function add($arr)
    {

        $this->number = array_merge ($this->number,$arr);


        }
        public function getAvg ()
        {
            $a = count($this->number);
            $sum = array_sum($this -> number);
      $count = count($this -> number);
         return $avg = $sum / $count;


    $resultSun= 0;
    foreach ($this->number as $nam)
    {
        $resultSun +=$nam  . '<br>';

    }

    echo  $resultSun / $a ;
}

// подсмотрено у других учасников
    public function getAvg1 ()
    {
        $sum = array_sum($this->number);
        $count = count($this->number);
        return $avg = $sum / $count;
    }
}
$arr = new Arr;
$arr->add([3, 4]);
echo $arr->getAvg(). '<br>';
// подсмотрено у других учасников
echo $arr->getAvg1();