<?php
error_reporting(E_ALL);

//Функции для работы с классами и объектами
//Функция get_class

//Урок 33 Задача : 1 Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект.

//class Test
//{
//
//}
//
//$test= new Test;
//
//echo get_class($test);

//Урок 33 Задача : 2 Сделайте объект какого-нибудь класса. Примените к объекту функцию get_class и узнайте имя класса, которому принадлежит объект

//class Test1
//{
// public $name;
//
//    /**
//     * Test1 constructor.
//     * @param $name
//     */
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//
//}
//
//
//
//class Test2
//{
//    public $name;
//
//
//    public function __construct($name)
//    {
//        $this->name = $name;
//    }
//}
//
//$username1= new Test1('Сергей');
//$username2= new Test1('Андрей');
//$usertest1= new Test2('Василий');
//$usertest2= new Test2('Петя');
//
//$arr = [$username1,$username2,$usertest1,$usertest2];
//
//foreach ($arr as $user)
//{
//    echo get_class($user) . '<br>';
//    echo $user->name. '<br>';
//}
//
//Урок 33 Задача : 3 Сделайте класс Test с методами method1, method2 и method3. С помощью функции get_class_methods получите массив названий методов класса Test.


//class Test
//{
//    public function method1()
//    {
//
//    }
//
//    public function method2()
//    {
//
//    }
//
//    public function method3()
//    {
//
//    }
//}
//
//
//$test = new Test;
//
//foreach(get_class_methods('Test') as $class)
//{
//
//  echo $class.'<br>';
//}

//Урок 33 Задача : 4  Создайте объект класса Test, запишите его в переменную $test.
//С помощью функции get_class_methods получите массив названий методов объекта. Переберите его циклом и в цикле вызовите каждый метод класса, используя объект $test.

//Переберите этот массив циклом и в этом цикле вызовите каждый метод объекта.

//class Test
//{
//
//    public $test;
//
//    public function method1()
//    {
//  return 1;
//    }
//
//    public function method2()
//    {
//        return 2;
//    }
//
//    public function method3()
//    {
//        return 3;
//    }
//}
//
//
//$test = new Test;
//
//foreach(get_class_methods('Test') as $class)
//{
//
//  echo $test->$class().'<br>';
//}
//

//Урок 33 Задача : 5  Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4.

//class Test
//
//{
// public $prop1;
// public $prop2;
// private $prop3;
// private $prop4;
//
//}

//Урок 33 Задача : 6  Вызовите функцию get_class_vars снаружи класса Test. Выведите массив доступных свойств.

//class Test
//
//{
//    public $prop1 = 1;
//    public $prop2 = 2;
//    private $prop3 = 3;
//    private $prop4 = 4;
//
//}
//
//$test= new Test;
////
//$varClass = get_class_vars(get_class($test));
//
//foreach ($varClass as $var)
//{
//    echo $var . '<br>';
//}
//
//$arr = get_class_vars( 'Test');
//foreach($arr as $i) {
//    echo $i . '<br>';
//}

//Урок 33 Задача : 7  Вызовите функцию get_class_vars внутри класса Test (например, в конструкторе). Выведите массив доступных свойств.


//class Test
//
//{
//    public $prop1;
//    public $prop2;
//    private $prop3;
//    private $prop4;
//
//    public function __construct($prop1, $prop2, $prop3, $prop4)
//    {
//        $this->prop1 = $prop1;
//        $this->prop2 = $prop2;
//        $this->prop3 = $prop3;
//        $this->prop4 = $prop4;
//       // print_r(get_class_vars('test'));
//
//        foreach(get_class_vars('test') as $var=>$key)
//        {
//            echo $var .'<br>';
//
//    }
//
//    }
//
//}
//
//
//$test= new Test(1,2,3,4);


//Урок 33 Задача : 8   Сделайте класс Test с публичными свойствами prop1 и prop2, а также с приватными свойствами prop3 и prop4. Создайте объект этого класса.
//С помощью функции get_object_vars получите массив свойств созданного объекта.

//class Test
//
//{
//    public $prop1;
//    public $prop2;
//    private $prop3;
//    private $prop4;
//
//
////    public function test() {
////        var_dump(get_object_vars($this));
////    }
//}
//
//
//
//$test = new Test;
//
////var_dump(get_object_vars($test));
//
//$arr = get_object_vars($test);
//
//foreach($arr as $i) {
//    echo $i . '<br>';
//
//
//}
//$test->test();





//var_dump(get_object_vars($test));

//Урок 33 Задача : 9    Пусть у вас есть класс Test1 и нет класса Test2.
//
//Проверьте, что выведет функция class_exists для класса Test1 и для класса Test2.

//class Test
//
//{
//
//}
//
//var_dump(class_exists('Test'));
//var_dump(class_exists('Test2'));


//Урок 33 Задача : 10    Пусть у вас есть класс Test1 и нет класса Test2.
//
//Проверьте, что выведет функция class_exists для класса Test1 и для класса Test2

//class Test1
//
//{
//
//}
//
//
//
//?>
<!--<form method="GET">-->
<!--    Логин: <input type="text" name="Test" /><br><br>-->
<!--    <input type="submit" value="Отправить">-->
<!---->
<?php
//
//$className = $_GET['Test'];
//
//if (class_exists($className))
//{
//    echo 'существует'. '<br>';
//}else {
//    echo ' не существует клас'. '<br>';
//}
//
//
//if (isset($className ) and !empty($className)) //класс
//
//{
//    echo 'прошло isset' . '<br>';
//
//    if (!empty($className)) {
//        echo 'прошло empty'. '<br>';
//        if (class_exists($className))
//        {
//            echo 'существует'. '<br>';
//        }else {
//            echo ' не существует клас'. '<br>';
//        }
//}else {
//        echo 'не существует empty'. '<br>';
//    }
//
//    } else {
//        echo 'не существует isset'. '<br>';
//    }

//Урок 33 Задача : 12 Сделайте класс Test с методом method1 и без метода method2.
//Проверьте, что выведет функция method_exists для метода method1 и для метода method2.

//class Test1
//
//{
//
//    public function method1()
//    {
//        return 1;
//    }
//}
//
//$test1= new Test1;
//$method_name = 'method1';
//var_dump(method_exists($test1, $method_name));
//var_dump(method_exists($test1,'method2'));

//Урок 33 Задача : 13   Сделайте класс Test со свойством prop1 и без свойства prop2.
//
//Проверьте, что выведет функция property_exists для свойства prop1 и для свойства prop2.

//class Test
//
//{
// public $prop1 = 1;
//}
//
//
//var_dump(property_exists ('Test','prop1'));
//var_dump(property_exists ('Test','prop2'));

//Урок 33 Задача : 14 Дан массив со свойствами класса. Дан также класс, имеющий часть из этих свойств. Переберите этот массив циклом, для каждого свойства проверьте, существует ли оно в классе и, если существует, выведите на экран значение этого свойства.

//
//class Test
//
//{
// public $prop1 = 1;
// public $prop2 = 2;
//
//}
//
//$test= new Test;
//
//$className = 'Test';
//$arr = ['prop1','prop2','prop3','prop4'];
//
//foreach ($arr as $value)
//{
//    if (property_exists($className,$value))
//    {
//        echo $value . ' = ' . $test->$value .'<br>';
//        echo $value . ' = ' . (new Test)->$value .'<br>';
//    }
//}


//Урок 33 Задача : 15  Сделайте класс ChildClass наследующий от ParentClass.
//С помощью функции get_parent_class выведите на экран родителя класса ParentClass.

//class ChildClass extends ParentClass
//
//{
//}
//
//
//class ParentClass
//{
//}
//
//var_dump(get_parent_class('ChildClass'));
//

//Урок 33 Задача : 16 Сделайте класс ChildClass наследующий от ParentClass, который в свою очередь наследует от GrandParentClass


//class ParentClass extends GrandParentClass
//{
//}

//class ChildClass extends ParentClass
//
//{
//}

//class GrandParentClass
//{
//
//}

//Урок 33 Задача : 17 Сделайте класс ChildClass наследующий от ParentClass, который в свою очередь наследует от GrandParentClass

//class ParentClass extends GrandParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//class GrandParentClass
//{
//}
//

//Урок 33 Задача : 18 С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass.
//class ParentClass extends GrandParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//class GrandParentClass
//{
//}
//
//$test= new GrandParentClass;
//
//var_dump(is_subclass_of($test,'ChildClass'));


///Урок 33 Задача : 19 С помощью функции is_subclass_of проверьте, является ли класс ParentClass потомком GrandParentClass.
//
//class ChildClass extends ParentClass
//
//{
//}
//
//class ParentClass extends GrandParentClass
//{
//}
//
//class GrandParentClass
//{
//}

//$test= new ParentClass;
//
//var_dump(is_subclass_of($test,'GrandParentClass'));
//
//

///Урок 33 Задача : 19 С помощью функции is_subclass_of проверьте, является ли класс ChildClass потомком ParentClass.

//class ParentClass extends GrandParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//class GrandParentClass
//{
//}
//
//$test= new ChildClass;
//
//var_dump(is_subclass_of($test,'ParentClass'));


///Урок 33 Задача : 20 Сделайте класс ChildClass наследующий от ParentClass. Создайте объект класса ChildClass, запишите его в переменную $obj.


//class ParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//$obj = new ChildClass;

///Урок 33 Задача : 21 С помощью функции is_a проверьте, принадлежит ли объект $obj классу ChildClass.


//class ParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//$obj = new ChildClass;
//
//
//var_dump(is_a($obj,'ChildClass'));


///Урок 33 Задача : 22 С помощью функции is_a проверьте, принадлежит ли объект $obj классу ParentClass.
///

//class ParentClass
//{
//}
//
//class ChildClass extends ParentClass
//
//{
//}
//
//$obj = new ChildClass;
//
//
//var_dump(is_a($obj,'ParentClass'));


///Урок 33 Задача : 23 Выведите на экран список всех объявленных классов.
///

class ParentClass
{

}

class ChildClass extends ParentClass

{

}

var_dump(get_declared_classes ());



