<?php
// Класс как набор методов
//Урок 18 Задача : 1  Напишите реализацию методов класса ArrayAvgHelper, заготовки методов которого расположены ниже:

    class ArraySumHelper
	{
		/*
			Находит сумму первых
			степеней элементов массива:
		*/
		public function getAvg1($arr)
		{


             return $this->getSum($arr, 1);
        }

		/*
			Находит сумму вторых степеней
			элементов массива и извлекает
			из нее квадратный корень:
		*/
		public function getAvg2($arr)
		{


           $result = $this->getSum($arr, 2);

            return $this->calcSqrt($result, 1/2);

        }
		/*
			Находит сумму третьих степеней
			элементов массива и извлекает
			из нее кубический корень:
		*/
		public function getAvg3($arr)
		{
            $result = $this->getSum($arr, 3);

            return $this->calcSqrt($result, 1/3);

        }
		/*
			Находит сумму четвертых степеней
			элементов массива и извлекает
			из нее корень четвертой степени:
		*/
		public function getAvg4($arr)
		{
            $result = $this->getSum($arr, 4);

            return $this->calcSqrt($result, 1/4);

		}
		/*
			Вспомогательный метод, который параметром
			принимает массив и степень и возвращает
			сумму степеней элементов массива:
		*/
		private function getSum($arr, $power)
		{

            $result = 0;
            foreach ($arr as $elem) {
                $result += pow($elem, $power);
            }
            return  $result;


        }
		/*
			Вспомогательный метод, который параметром
			принимает целое число
		 и степень и возвращает
			корень заданной степени из числа:
		*/
		private function calcSqrt($num, $power)
		{
           return pow($num, $power);

}

	}

$arraysumhelper = new ArraySumHelper;

$arr = [1 , 2 , 3];


echo $arraysumhelper->getAvg1($arr) . '<br>';
echo $arraysumhelper->getAvg2($arr) . '<br>';
echo $arraysumhelper->getAvg3($arr). '<br>';;
echo $arraysumhelper->getAvg4($arr). '<br>';


