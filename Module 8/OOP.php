<?php

// 1.

class Person {
    public $firstName = "Hasin" ;
    public $lastName = "Hayder" ;
    public function getName () {
        $fullName = $this->firstName . " " . $this->lastName ;
        echo $fullName ."\n";
    }    
}
$personObj = new Person () ;
echo $personObj -> firstName ."\n";
echo $personObj -> lastName ."\n";
$personObj -> getName() ;

// Output : Hasin
//          Hayder
//          Hasin Hayder

// 2.

class Sum {
    function __construct( $a,$b,$c) {
        $n1 = 10 ;
        $n2 = 20 ;
        echo $n1 + $n2 + $a + $b + $c ;
    }
}
$sumObj = new Sum ( 30,20,20 ) ;

// Output : 100.

// 3.   Inheritance

class House {
    public function add(){
        $num1 = 50 ;
        $num2 = 70 ;
        echo $num1 + $num2 ;
    }
}

class Land extends House {

}
$SonObj = new Land () ;
$SonObj->add() ;

// Output : 120 

// 4.   Inheritance Overriding

class ElderBro {
    public function add(){
        $num1 = 50 ;
        $num2 = 70 ;
        echo $num1 + $num2 ;
    }
}

class YoungBro extends ElderBro {
    public function add(){
    $num1 = 50 ;
    $num2 = 100 ;
    echo $num1 + $num2 ;
    }
}

$YoungObj = new YoungBro () ;
$YoungObj->add() ;

// Output : 150

// 5.   Parent Keyword

class Wife {
    public function add(){
        $num1 = 50 ;
        $num2 = 70 ;
        echo $num1 + $num2 ;
    }
}

class Daughter extends Wife {
    public function Inherit(){
        parent::add() ;
    }
}
$SonObj = new Daughter () ;
$SonObj->Inherit() ;

// Output : 120

// 6.   Abstract

abstract class Phone {
    public function add(){
        $num1 = 50 ;
        $num2 = 70 ;
        echo $num1 + $num2 ;
    }
}
    
class Watch extends Phone {
    public function Inherit(){
        parent::add() ;
    }
}
// $SonObj = new Phone () ;
// $SonObj->add() ;

$SonObj = new Watch () ;
$SonObj->Inherit() ;

// Output : 120 .

// 7.   Constructor in Inheritance

class Fathers {
        public function __construct(){
       echo "This is father constructor." ;
    }
}
class Sons extends Fathers {

}
$SonObj = new Son () ;

// Output : This is father constructor.

// 8.   

class Senior {
    public function __construct(){
       echo "This is father constructor." ;
    }
}
class Junior extends Senior {
    public function __construct(){
        echo "This is son's constructor." ;
     }
}
$SonObj = new Junior () ;

// Output : This is son's constructor.

// 9.   Final Keyword

class Father {
    public function House(){
       echo "You can access here." ;
    }
    final public function Land(){
       echo "You can't access here." ;
    }
    public function Car(){
       echo "You can access here." ;
    }
}
class Son extends Father {
    public function House(){
        echo "You can access here." ;
     }
    // public function Land(){
    //     echo "You can't access here." ;
    //  } 
}
$SonObj = new Son () ;
$SonObj -> House() ;

// 10.  Static Properties & Methods

class MyGadgets {
    public function Phone(){
       echo "Phone".PHP_EOL ;
    }
    public static function Umbrella(){
       echo "Umbrella".PHP_EOL ;
    }
    public static function DSLR(){
       echo "DSLR".PHP_EOL ;
    }
    public function Watch(){
       echo "Watch".PHP_EOL ;
    }
}
MyGadgets::Umbrella() ;
MyGadgets::DSLR() ;

// Output : Umbrella
//          DSLR

// 11.  Access Static $ Non Static properties inside the class

class MyGadget {
   public static $Phone = "POCO X2" ;
   public $Camera = "Cannon 200D" ;
    public function Watch(){
       echo "Watch".PHP_EOL ;
    }
    public function DSLR(){
       echo "DSLR".PHP_EOL ;
    }
    public function phone() {
        echo self::$Phone ; 
    }
    public function camera() {
        echo $this -> Camera ;
    }
}
