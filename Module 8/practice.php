<?php

// 1. ক্লাস তৈরী এবং অবজেক্ট দ্বারা কল করা । ক্লাস তৈরী করলে এটিকে অবজেক্ট দ্বারা বাস্তবায়ন করতে হয় । 

class Man {
    public $name ;
    function sayHi(){
        echo "Salam" ;
    }
    function sayName(){
        echo "My name is {$this -> name}" ;
    }
}
class Cat {
    function sayHi(){
        echo "Meow" ;
    }
}

$h1 = new Man () ;                         /* [নোট : অবজেক্ট তৈরী ] */
$h1 -> name = "Hasin" ;
echo $h1 -> name ;
$h1 -> sayName() ;
$h1 -> sayHi() ;

$c1 = new Cat () ;
$c1 -> sayHi() ;

// Output : Hasin
//          My name is Hasin
//          Salam
//          Meow

// 2. কন্সট্রাক্ট = অবজেক্ট তৈরী করার সময় অটোমেটিক কল করার জন্য ব্যবহৃত হয় । 

class Person {
    public $name ;
    public $age ;
    function __construct($name,$age = 0){                   /* [নোট : কন্সট্রাক্ট তৈরী ] */
        $this -> name = $name ;
        $this -> age = $age ;
    }
    function sayHi(){
        $this -> sayName() ;
    }
    function sayName(){
        if($this -> age){
            echo "I am {$this -> name}.I am {$this -> age} years old.\n" ;
        }else{
            echo "I am {$this -> name}.I don't know how old I am ?" ;
        }
    }
}
$obj1 = new Person("Rabbil",32) ;
$obj2 = new Person("Hasin") ;
$obj1 -> sayHi() ;
$obj2 -> sayHi() ;

// Output : I am Rabbil.I am 32 years old.
//          I am Hasin.I don't know how old I am ?

// 3.   

class Fund {
    private $fund ;
    function __construct($initialFund = 0){
        $this -> fund = $initialFund ;
    }
    function addFund($money){
        $this -> fund += $money ;
    }
    function deductFund($money){
        $this -> fund -= $money ;
    }
    function getTotal(){
        echo "Total fund is {$this -> fund}.\n" ;
    }
}
$ourFund = new Fund (100) ;
$ourFund -> getTotal() ;
$ourFund -> addFund(20) ;
$ourFund -> getTotal() ;
$ourFund -> deductFund(10) ;
$ourFund -> getTotal() ;

// Output : Total fund is 100.
//          Total fund is 120.
//          Total fund is 110.

// 4.

class RGB {
    private $color ;
    private $red ;
    private $green ;
    private $blue ;

    function __construct($colorCode = "") {
        $this -> color = $colorCode ;
        $this -> perseColor() ;
    }
    function getColor(){
        return $this -> color ;
    }
    function setColor($code){
        $this -> color = $code ;
        $this -> perseColor() ;
    }
    function getRGBColor(){
        echo "RED = {$this -> red}\nGREEN = {$this -> green}\nBLUE = {$this ->blue}" ;
    }
    function readRGBColor(){
        return array($this -> red, $this -> green, $this ->blue) ;
    }
    function perseColor(){
        if($this -> color){
            list($this -> red, $this -> green, $this ->blue) = sscanf($this -> color,"%2x%2x%2x") ;
        }else{
            list($this -> red, $this -> green, $this ->blue) = array(0,0,0) ;
        }
    }
    function red(){
        return $this -> red ; 
    }
    function green(){
        return $this -> green ; 
    }
    function blue(){
        return $this -> blue ; 
    }
}
$colorObj = new RGB ("58ff26") ;
$colorObj -> setColor("ffffff") ;
$colorObj -> getRGBColor() ;

// Output : RED = 1
//          GREEN = 255
//          BLUE = 255

// 5. প্যারেন্ট কীওয়ার্ড ব্যবহৃত হয়েছে ।

class ParentClass {
    public $name ;
    function __construct($name){
        $this -> name = $name ;
        $this -> Hi() ;
    }
    function Hi(){
        echo "Bangladesh\n" ;
    }
}
class ChildClass extends ParentClass {
    function Hi() {
        parent::Hi() ;                   /* [নোট : প্যারেন্ট কীওয়ার্ড ব্যবহার ] */
        echo "Australia" ;
    }
}
$cc = new ChildClass("ABCD") ;

// Output : Bangladesh
//          Australia

// 6.

class Area {
    protected $name,$area ;
    function __construct($name) {
        $this -> name = $name ;
        $this -> calculateArea() ;
    }
    function calculateArea(){

    }
    function getArea(){
        echo "This {$this -> name}'s area is {$this -> area}\n" ;
    }
}
class Square extends Area {
    private $a,$b,$c ;
    function __construct($a,$b,$c){
        $this -> a = $a ;
        $this -> b = $b ;
        $this -> c = $c ;
        parent::__construct("Triangle") ;
    }
    function calculateArea(){
        $periMeter = ($this -> a + $this -> b + $this -> c ) ;
        $this -> area = sqrt($periMeter*($periMeter-$this->a)*($periMeter-$this->b)*($periMeter-$this->c)) ;
    }
}
class Angle extends Area {
    private $a,$b ;
    function __construct($a,$b,){
        $this -> a = $a ;
        $this -> b = $b ;
        parent::__construct("Rectangle") ;
    }
    function calculateArea(){
        $this -> area = $this -> a * $this -> b  ;        
    }
}
$t = new Square(10,20,30) ;
$t ->getArea() ;
$r = new Angle(10,20) ;
$r ->getArea() ;

// Output : This Triangle's area is 1897.366596101
//          This Rectangle's area is 200

// 7. অ্যাবসট্রাক্ট ক্লাস = এই ক্লাসে থাকা ফাংশন অবশ্যই থাকতে হবে, যেখানে এই ক্লাসকে এক্সটেন্ড করা হবে ।

abstract class Measure {                           /* [ নোট : অ্যাবসট্রাক্ট ক্লাস ] */
    abstract function getArea () ;
    abstract function getPeriMeter () ;
}
class Circle extends Measure {
    private $base,$height ;
    function __construct($base,$height){
        $this -> base = $base ;
        $this -> height = $height ;
    }
    function setBase($base){
        $this -> base = $base ;
    }
    function setHeight($height){
        $this -> height = $height ;
    }
    function getArea(){
        $periMeter = $this -> base * $this -> height ;
        return $periMeter ;
    }
    function getPeriMeter(){} 
}
$c = new Circle(20,30) ;
echo $c -> getArea() ;

// Output : 600.

//  8. ফাইনাল = প্যারেন্ট ক্লাসে যেই ফাংশনে ফাইনাল কীওয়ার্ড থাকবে সেটি চাইল্ড ক্লাসে ব্যবহার করা যাবে না । 

class OurClass {
     final function House(){                     /* [ নোট : ফাইনাল কীওয়ার্ড ব্যবহার ] */
        echo "House" ; 
    }
    function Car(){
        echo "Car" ;
    }
}
class MyClass extends OurClass {
    // function House(){
    //                                          [Note : এই ফাংশনের প্রথমে final কীওয়ার্ড থাকায় এই ফাংশনটি কাজ করবে না । ]
    // }
    function Car (){
        parent::Car() ;
    }
}
$mc = new MyClass();
$mc ->Car() ;

// Output : Car

// 9. যেই অবজেক্টটি শেপ না সেই ক্লাস বাদ দেয়া হলো । 

class Shape{}
class Shapes {
    private $shapes ;
    function __construct(){
        $this -> shapes = array() ;
    }
    function addShape(Shape $Shape){
        array_push($this -> shapes, $Shape) ;
    }
    function totalShape(){
        return count($this -> shapes) ;
    }
}
class Rectangle extends Shape {}
class Triangle extends Shape {}
class Student{}

$sc = new Shapes() ;
$sc -> addShape(new Rectangle()) ;
$sc -> addShape(new Triangle()) ;
// $sc -> addShape(new Student()) ;     [নোট : এই অবজেক্টটি শেপ না হওয়ার কারণে এটি কাজ করবে না ।]
echo $sc -> totalShape() ;

// Output : 2.

// 10.  Interface = এটিকে ইমপ্লিমেন্ট করতে হয় সবসময় । আর ক্লাসকে এক্সটেন্ড । 

interface BaseAnimal {
    function isAlive() ;
    function canEat() ;
    function breed() ;
}
class Animal implements BaseAnimal {
    function isAlive(){} 
    function canEat() {}
    function breed() {}
}
interface BaseHuman extends BaseAnimal {
    function canTalk() ;
}
class Human implements BaseHuman {
    function isAlive(){} 
    function canEat() {}
    function breed() {}
    function canTalk() {}
}
$c = new Human () ;
echo $c instanceof  Animal ;

// 11.

class Math {
    private $number ; static $name ;
    static function fibonacci($n){
        echo "Fibonacci series up to {$n}\n" ;
        echo self::$name."\n" ;
    }
    static function doSome(){
        echo "Doning Something\n" ;
        
    }
    function factorial ($n){
        $this -> doSome() ;
        self::$name = "ABCD" ;
        echo "The factorial is {$n}\n" ;
    }
}
$mathC = new Math() ;
$mathC -> factorial(8) ;
Math::fibonacci(7) ;

// Output : Doning Something
//          The factorial is 8
//          Fibonacci series up to 7
//          ABCD

// 12. প্যারেন্ট ক্লাসে স্ট্যাটিক ম্যাথড থাকলে চাইল্ড ক্লাসে অবশ্যই স্ট্যাটিক ম্যাথড থাকতে হবে ।

class A {
    static function sayHi() {
        echo "Hi from A\n" ;
    }
}
class B extends A {
    static function sayHello(){
        echo "Hello from B\n" ;
        parent::sayHi() ;
    }
}
B::sayHello() ;

// Output : Hello from B
//          Hi from A

// 13. স্ট্যাটিক ম্যাথড ক্লাস থেকে কল করতে self:: ব্যবহার করতে হয় ।

class AB {
    private static $name ;
    static function sayHi() {
            echo "Hi from A\n" ;
            echo self::$name = "Bangladesh" ;            /* [ নোট : স্ট্যাটিক ম্যাথড ব্যবহার ] */
        }
    }
class BC extends AB {
    static function sayHello(){
        echo "Hello from B\n" ;
        parent::sayHi() ;
    }
}
BC::sayHello() ;

// Output : Hello from B
//          Hi from A
//          Bangladesh

// 14. Constant = এটি সবসময় স্ট্যাটিক স্কোপে থাকে । 

define("ok",1234) ;
echo ok ;

// Output : 1234 

class NewClass {
    const City = "Dhaka\n" ;
    function sayHi(){
        echo "Hi from ". self::City ;
    }
}
$m = new NewClass() ;
echo NewClass::City ;
$m -> sayHi() ;

// Output : Dhaka
//          Hi from Dhaka

// 15. ম্যাজিক ম্যাথড 

class Students {
    private $name ;
    private $age ;
    private $class ;
    function __construct($name,$age,$class){
        $this -> name = $name ;
        $this -> age = $age ;
        $this -> class = $class ;
    }
    function __get($prop){                           /* [ নোট : ম্যাজিক ম্যাথড ব্যবহার ] */
        return $this -> $prop ; 
    }
    function __set($key,$value){                     /* [ নোট : ম্যাজিক ম্যাথড ব্যবহার ] */
        $this -> key = $value ;
    }
    function getDetails(){
        echo "My name is {$this -> name}. I am {$this -> age}. I am in class {$this -> class}." ;
    }
}
$R = new Students("Noman",25,"IX") ;
echo $R-> getDetails() ;

// Output : My name is Noman. I am 25. I am in class IX

// 16.

class District implements IteratorAggregate {                
    private $districts ;
    function __construct(){
        $this -> districts = array() ;
    }
    function add($district){
        array_push($this -> districts,$district) ;
    }
    function getIterator(): Traversable{
        return new ArrayIterator($this -> districts) ;
    }
}
$coll = new District() ;
$coll -> add("Rajshahi") ;
$coll -> add("Khulna") ;
$coll -> add("Jassore") ;
$coll -> add("Cumilla") ;

foreach($coll as $value){
    echo $value."\n" ;
}

// Output : Rajshahi
//          Khulna
//          Jassore
//          Cumilla

// 17.

class Districts implements IteratorAggregate,Countable {
    private $districts ;
    function __construct(){
        $this -> districts = array() ;
    }
    function add($district){
        array_push($this -> districts,$district) ;
    }
    function getIterator(): Traversable{
        return new ArrayIterator($this -> districts) ;
    }
    function count(){
        return count($this -> districts)."\n" ;
    }
}
$coll = new Districts() ;
$coll -> add("Rajshahi") ;
$coll -> add("Khulna") ;
$coll -> add("Jassore") ;
$coll -> add("Cumilla") ;
$coll -> add("Pabna") ;
echo count($coll) ;

// Output : 5.

// 18.

class Fav {
    public $data ;
    function __construct($data){
        $this -> data = $data ;
    }
    function setData ($data){
        $this -> data = $data ;
    }
}
$f1 = new Fav("Red") ;
$f2 = clone $f1 ;
$f2 -> setData("Green") ;
print_r($f1) ;
print_r($f2) ;

// Output : Fav Object
//          (
//              [data] => Red
//          )
//          Fav Object
//          (
//              [data] => Green
//          )

// 19.

class Color {
    public $data ;
    function __construct($data){
        $this -> data = $data ;
    }
    function setData ($data){
        $this -> data = $data ;
    }
    function __toString(){
        return "The color is {$this -> data }" ;
    }
}
$cl = new Color("White") ;
echo $cl;

// Output : The color is White

// 20.

class planet {
    public $name ;
    function __construct($name){
        $this -> name = $name ;
    }
}
$p1 = new planet("Earth") ;
$p2 = new planet("Earth") ;
if($p1 === $p2){
    echo "They are same planet" ;
}else{
    echo "They aren't same planet" ;
}

// Output : They aren't same planet.

// 21.  Early binding & late binding

class Play {
     static function better(){
         echo static::good() ;
     } 
     static function good() {
        echo "Bangladesh\n" ;
     }
}
class Game extends Play {
    static function good(){
        echo "Pakistan" ;
    }
}
Play::better() ;
Game::better() ;

// Output : Bangladesh
//          Pakistan

// 22.

class MotorCycle {
    private $periMeter ;
    function __construct($displacement,$milage,$cc){
        $this -> periMeter = [] ;
        $this -> periMeter['displacement'] = $displacement ;
        $this -> periMeter['milage'] = $milage ;
        $this -> periMeter['cc'] = $cc ;
    }
    function __get($name){
        echo $this -> periMeter[$name] ;
    }
    function __set($name, $value){
        echo $this -> periMeter[$name] = $value ;
    }
    function __isset($name){
        if(!isset($this -> periMeter[$name])){
            echo "{$name} is not found\n" ;
            return false ;
        }
        else{
            return true ;
        }
    }
    function __unset($name){
        print_r($this -> periMeter) ;
        unset($this -> periMeter[$name]) ;
        print_r($this -> periMeter) ;
    }
}
$bike = new MotorCycle("FZ-V2","45km","149cc") ;
if(isset($bike->Tire)){
    echo $bike->Tire ;
}
unset($bike -> milage) ;

// Output : Tire is not found.
//          Array
//          (
//              [displacement] => FZ-V2
//              [milage] => 45km
//              [cc] => 149cc
//          )
//          Array
//          (
//              [displacement] => FZ-V2
//              [cc] => 149cc
//          )

