<?php

//Урок 6 Задача :1-3
//Задача : 1 Не подсматривая в мой код создайте такой же класс User с такими же методами.
//
//Задача : 2 Создайте объект этого класса User, проверьте работу методов setAge и addAge.
//
//Задача : 3 Добавьте также метод subAge, который будет выполнять уменьшение текущего возраста на переданное количество лет.


//class User
//{
//    public $name;
//    public $age;
//
//    public function setAge($age)
//    {
//        if ($this->isAgeCorrect($age)) {
//            $this->age = $age;
//        } else {
//            echo 'не прошло проверку в новом возрасте';
//        }
//    }
//
//
//    public function addAge($years)
//    {
//
//        $newAge = $this->age + $years;
//
//
//        if ($this->isAgeCorrect($newAge)) {
//            $this->age = $newAge;
//        } else {
//            echo '<br>';
//            echo 'не прошло проверку при добавлении возраста';
//        }
//    }
//
//
//    public function subAge($years)
//    {
//        $minAge = $this->age - $years;
//
//        if ($this->isAgeCorrect($minAge)) {
//            $this->age = $minAge;
//        } else {
//            echo '<br>';
//            echo 'не прошло проверку при уменщении возраста';
//        }
//    }
//
//    /**
//     * @param mixed $age
//     */
//    private function isAgeCorrect($age)
//    {
//        if ($age >= 18 and $age <= 60) {
//            return true;
//        } else {
//            echo 'не прошло проверку';
//        }
//    }
//}
//
//$user = new User;
//$user->age = 25;
//
//$user->setAge(50);
//echo "<br>";
//echo $user->age;
//$user->addAge(7);
//echo "<br>";
//echo $user->age;
//echo "<br>";
//$user->subAge(3);
//echo "<br>";
//echo $user->age;
////выдаст ошибку
////Урок 6 Задача :2 Попробуйте вызвать метод isAgeCorrect снаружи класса. Убедитесь, что это будет вызывать ошибку.
//echo $user->isAgeCorrect(25);
//

//Урок 6 Задача :3 В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
//Урок 6 Задача : 4 В классе Student сделайте public метод transferToNextCourse, который будет переводить студента на следующий курс.
////class Student
//{
//    public $name;
//    public $course;
//// метод переводит студента на следующий курс
//    public function transferToNextCourse ()
//    {
//       $this->course++;
//
//       }
//
//}
//
//
//$student = new Student;
//$student->name = 'Вася';
//$student->course = 2;
//
//$student->transferToNextCourse ();
//echo  'Cтудент переведен на слудующий курс ' . $student->course;

////Урок 6 Задача : 5 Выполните в методе transferToNextCourse проверку на то, что следующий курс не больше 5.
//
//class Student
//{
//    public $name;
//    public $course;
//// метод переводит студента на следующий курс
//    public function transferToNextCourse ()
//    {
//        if ($this->course < 5){
//            $this->course++;
//        }else {
//            echo 'Курс студента больше чем 5 курс';
//        }
//
//    }
//
//}
//
//
//$student = new Student;
//$student->name = 'Вася';
//$student->course = 6;
//
//echo $student->transferToNextCourse ();


//Урок 6 Задача : 6 Вынесите проверку курса в отдельный private метод isCourseCorrect.

class Student
{
    public $name;
    public $course;

// метод переводит студента на следующий курс
    public function transferToNextCourse()
    {
        if ($this->isCourseCorrect()) {
            return $this->course++;
        }

    }
// проверка курсов от 1 до 5
    private function isCourseCorrect()
    {
        if ($this->course >= 1 and $this->course <= 5){

            return true;
        }else         {
            echo 'Курс студента больше чем 5 курс вас курс ';

        }

}
}


$student = new Student;
$student->name = 'Вася';
$student->course = 0;

$student->transferToNextCourse();
echo $student->course;



//class Student
//{
//    public $name, $course;
//
//    public function transferToNextCourse(){
//        if($this->isCourseCorrect()){
//            $this->course += 1;
//        }
//    }
//
//    private function isCourseCorrect(){
//        return ($this->course >= 1 && $this->course <= 5);
//    }
//}
//
//$student = new Student;
//$student->name = 'Вася';
//$student->course = 3;
//
//echo $student->transferToNextCourse ();
//echo $student->course;