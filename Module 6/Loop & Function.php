<?php

// 1.   (1-10 up to print)

for( $i=1 ; $i<=10 ; $i++ ){
    echo $i." ";
}

// Output : 1 2 3 4 5 6 7 8 9 10 . 

// 2.   (10-1 up to print)

for( $i=10 ; $i>=1 ; $i-- ){
    echo $i." ";
}

// output : 10 9 8 7 6 5 4 3 2 1 .

// 3.   (0-20 up to print even number)

for( $i=0 ; $i<=20 ; $i+=2 ){
    echo $i." ";
}

// Output : 0 2 4 6 8 10 12 14 16 18 20 .

// 4.   (1-20 up to print odd number)

for( $i=1 ; $i<=20 ; $i+=2 ){
    echo $i." ";
}

// Output : 1 3 5 7 9 11 13 15 17 19 .

// 5.   using while loop print (1 to 10)

$i = 1 ;
while( $i<=10 ){
    echo $i." ";
    $i++ ;
}

// Output : 1 2 3 4 5 6 7 8 9 10 .

// 6.   using do while loop print (1 to 10)

$i = 1 ;
do{
    echo $i." " ;
    $i++ ;
}while( $i<=10 );

// Output : 1 2 3 4 5 6 7 8 9 10 .

// 7.   Post increment 

$i = 0 ;
while( $i++ <5 ){
    echo $i." " ;
}

// Output : 1 2 3 4 5 .

// 8.   Pre increment

$i = 0 ;
while( ++$i <5 ){
    echo $i." ";
}

// Output : 1 2 3 4 .

// 9.   Using Break 

for( $i=1 ; $i<=10 ; $i++ ){
    echo $i." " ;
    if( $i==6 ){
        break ;
    }
}

// Output : 1 2 3 4 5 6 .

// 10. Using Continue

for( $i=1 ; $i<=10 ; $i++ ){
    if($i<6){
        continue ;
    }
    echo $i." " ;
}

// Output : 6 7 8 9 10 .

// 11.  Fibonacci Series

$v = 0 ;
$o = 1 ;
$n = 1 ;

for( $i=0 ; $i<=10 ; $i++ ){
    echo $v." " ;
    $o = $n ;
    $n = $v + $o ;
    $v = $o ;
}

// Output : 0 1 1 2 3 5 8 13 21 34 55 .

// 12.  Find the number even or odd

function evenOrOdd($n){
    if( $n%2==0 ){
        echo "The number $n is even." ;
    }
    else{
        echo "The number $n is odd." ;
    }
}
evenOrOdd(3);

// Output : The number 3 is odd.

// 13.  Default Parameter 

function serve( $a,$b="1" ){
    echo "Please give me $b cup of $a.";
}
serve( "Coffee" );

// Output : Please give me 1 cup of Coffee.

// 14.  To sum few arguments in one parameter

function sum(...$numbers){
    $result = 0 ;
    for( $i = 0 ; $i<count($numbers) ; $i++ ){
        $result += $numbers[$i] ;
    }
    echo $result ;
}
sum(10,20,30,40);

// Output : 100.

// 15.  Recursive function 

function recursive($number){
    echo $number." " ;
    $number++ ;
    if( $number <= 10 ){
        return recursive($number) ; 
    }
}
recursive(1);

// Output : 1 2 3 4 5 6 7 8 9 10 .

// **

function factorial($n) {
    if ($n == 0) {
    return 1 ;
    }
    else {
        return $n * factorial($n-1) ;
    }
}
    echo factorial(5);

// Output : 120.

// 16.  Local Scope

function hi(){
    $name = "Bangladesh" ;
    echo $name ;
}
hi();

// Output : Bangladesh.

// 17.  Global Scope

$subject = "Business Studies" ;
function hello(){
    global $subject ;
    echo $subject ;
}
hello();

// Output : Business Studies.

// 18.  Static Scope

function counter(){
    static $count = 0 ;
    echo "Counter $count".", " ;
    $count++ ;
}
counter() ;
counter() ;
counter() ;

// Output : Counter 0, Counter 1, Counter 2.

// 19.  Find String Length

$string = "Bangladesh" ;
$result = strlen($string);
echo $result ;

// Output : 10.

// 20.  Sum of two numbers

function welcome(){
    $n1 = 20 ;
    $n2 = 25 ;
    $result = $n1 + $n2 ;
    echo $result ;
}
welcome();

// Output : 45.

// 21.  Sum of function parameter

function addition($m,$n){
    echo $m + $n ;
}
addition(40,50);

// Output : 90.

// 22.  Sum of Default Parameter

function add($a,$b=2){
    echo $a + $b ;
}
add(10);

// Output : 12.

// 23.  Type Hinting

function hill( int $num1,int $num2 ) {
    echo $num1+$num2 ;
}
hill(20,20);

// Output : 40.

// 24.  Multiple type hinting in one parameter

function sea( int|string $num1,int|string $num2 ) {
    echo $num1+$num2 ;
}
sea("33","20");

// Output : 53.

// 25.  Nullable type hints

function myName( ?string $text ): void {
    if ($text) {
        echo "Text is: $text.\n" ;
    }
    else {
        echo "No text provided." ;
    }
}
myName("Jack");
myName(null);

// Output : Text is: Jack.
// Output : No text provided.

// 26.  Variadic Function of Array Sum

function variadic(...$numbers){
    echo $result = array_sum($numbers);
}
variadic(10,20,30);

// Output : 60.

// 27.  

function sky(...$numbers) {
    echo $numbers[2];
}
sky(1,2,"3",4,5);

// Output : 3.

// 28.  Anonymous Functions (or Closures)

(function(){
    echo "Hello from Ostad";
})();

// Output : Hello from Ostad.

// 29.    Assign to a Variable and Execute

$greet = function($name) {
    echo "Hello, " . $name . "!";
};
$greet("OSTAD");

// Output : Hello, OSTAD! 

// 30.  Callback Function

function adds( $a,$b ) {
    echo $a + $b ;
}
function calculate($num1, $num2, $callback) {
    return $callback($num1, $num2);
}
$result = calculate(5, 3, 'adds');

// Output : 8.

// 31.  Basic Return Types

function getAge(): int {
    return 25 ;
}
function isAdult(int $age): bool {
    return $age >= 18 ;
}
echo getAge().PHP_EOL;
echo isAdult(19);

// Output : 25.
// Output : 1.

// 32.  Strict mode in PHP

// * Affects how type hints are enforced.
// * By default, PHP will try to coerce values of the wrong type to match the expected type.
// * In strict mode, PHP will throw a TypeError if the provided value does not exactly match the
//   expected type.

// declare(strict_types=1);
// function add(int $a, int $b): int {
// return $a + $b;
// }
// echo add("5", "10");
