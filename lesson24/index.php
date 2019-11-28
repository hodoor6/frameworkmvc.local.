<?php
//Использование классов внутри других классов
//Урок 24 Задача : 1  Задача : Самостоятельно повторите описанные мною классы Arr и SumHelper.

//class Arr
//{
//    public $number = [];
//    private $sumHelper;
//
//    public function __construct()
//    {
//        $this->SumHelper = new SumHelper;
//    }
//
//    public function add($num)
//    {
//        $this->number[] = $num;
//    }
//
//    public function getSum23()
//
//    {
//
//        $numb = $this->number;
//        return $this->SumHelper->getSum2($numb ) + $this->SumHelper->getSum3($numb);
//    }
//
//}
//
//class SumHelper
//{
//    public function getSum2($numb)
//    {
//        $sum = 0;
//        foreach ($numb as $elem) {
//            $sum += pow($elem, 2);
//        }
//        return $sum;
//
//    }
//
//    public
//    function getSum3($numb)
//    {
//        $sum = 0;
//        foreach ($numb as $elem) {
//            $sum += pow($elem, 3);
//        }
//         return $sum;
//
//    }
// }
//
//$arr = new Arr(); // создаем объект
//
//$arr->add(1); // добавляем в массив число 1
//$arr->add(2); // добавляем в массив число 2
//$arr->add(3); // добавляем в массив число 3
//
//// Находим сумму квадратов и кубов:
//echo $arr->getSum23();

//Урок 24 Задача : 2 Создайте класс AvgHelper с методом getAvg, который параметром будет принимать массив и возвращать среднее арифметическое этого массива (сумма элементов делить на количество).

//class AvgHelper{
//
//
//public function getAvg($numb){
//    $count = count($numb) ;
//    return $avg  = (array_sum($numb) / $count);
//}
//}
//$AvgHelper = new AvgHelper;
//echo $AvgHelper->getAvg([1,2,3,4]);


//Урок 24 Задача : 3 Добавьте в класс AvgHelper еще и метод getMeanSquare, который параметром будет принимать массив и возвращать среднее квадратичное этого массива (квадратный корень, извлеченный из суммы квадратов элементов, деленной на количество)

//class SumHelper
//{
//    public function getSum2($numb) //сумма квадратов
//    {
//        $sum = 0;
//        foreach ($numb as $elem) {
//            $sum += pow($elem, 2);
//        }
//        return $sum;
//
//    }
//
//    public
//    function getSum3($numb) //сумма кубов
//    {
//        $sum = 0;
//        foreach ($numb as $elem) {
//            $sum += pow($elem, 3);
//        }
//         return $sum;
//
//    }
// }
//
//class AvgHelper{
//
//    private $sumHelper;
//
//    public function __construct()
//    {
//        $this->SumHelper = new SumHelper();
//    }
//    public function getAvg($numb){
//        $count = count($numb). '<br>' ;
//        return $avg  = (array_sum($numb) / $count);
//    }
//
//    public function getMeanSquare($numb){
//        $count = count($numb) ;
//         $result = ($this->SumHelper->getSum2($numb)) /  $count ;
//
//       return sqrt ($result);
//    }
//}
//
//$AvgHelper = new AvgHelper;
//
//echo $AvgHelper->getMeanSquare([1,2,3,4]). '<br>';

//Урок 24 Задача : 4 Добавьте в класс Arr метод getAvgMeanSum, который будет находить сумму среднего арифметического и среднего квадратичного из массива $this->nums.
class Arr
{
    public $number = [];
    private $avghelper;

    public function __construct()
    {
        $this->avghelper = new AvgHelper;
    }


    public function add($num)
    {
        $this->number[] = $num;
    }

    public function getAvgMeanSum() //сумму среднего арифметического и среднего квадратичного из массива

    {

        $numb = $this->number;

       $result = $this->avghelper->getAvg($numb) +  $this->avghelper->getMeanSquare($numb);
       return $result;
    }

}

class SumHelper
{
    public function getSum2($numb)
    {
        $sum = 0;
        foreach ($numb as $elem) {
            $sum += pow($elem, 2);
        }
        return $sum;

    }

    public
    function getSum3($numb)
    {
        $sum = 0;
        foreach ($numb as $elem) {
            $sum += pow($elem, 3);
        }
         return $sum;

    }
 }

class AvgHelper{

    private $sumHelper;

    public function __construct()
    {
        $this->SumHelper = new SumHelper();
    }
    public function getAvg($numb){
        $count = count($numb). '<br>' ;
        $avg  = (array_sum($numb) / $count);
        return $avg;
    }


        public function getMeanSquare($numb)
        {
            $count = count($numb);
            $result = ($this->SumHelper->getSum2($numb)) / $count;

            $sqrt =sqrt($result);

            return $sqrt;




    }
}


$arr = new Arr(); // создаем объект

$arr->add(1); // добавляем в массив число 1
$arr->add(2); // добавляем в массив число 2
$arr->add(3); // добавляем в массив число 3
$arr->add(4); // добавляем в массив число 3

// сумму среднего арифметического и среднего квадратичного из массива
echo $arr->getAvgMeanSum();

