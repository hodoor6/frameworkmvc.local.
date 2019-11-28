<?php
// Начальные значения свойств в конструкторе
//Урок 12 Задача : 1 Не подсматривая в мой код реализуйте такой же класс Student.

//Урок 12 Задача : 2 Модифицируйте метод transferToNextCourse так, чтобы при переводе на новый курс выполнялась проверка того, что новый курс не будет больше 5.

class Student
{
    public $name;
    public $course;

    public function __construct($name)
    {
        $this->name = $name;
        $this->course = 6;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

public function transferToNextCourse()
{
//проверка то что курс есть в диапазоне от 1 до 5
    if($this->course >= 1 and $this->course <= 5){
        $this->course++;
    }else{
        echo 'не прошло проверку';
        exit;
    }
}
}

$student = new Student('Коля');

echo $student->name .'<br>';
echo $student->getCourse().'<br>';

$student->transferToNextCourse().'<br>';
echo $student->getCourse();
