<?php

// 1.   Indexed Arrays

$fruits1 = array("Apple","Banana","Orange") ;
$fruits2 = ["Cherry","Pine-Apple","Mango"] ;

print_r($fruits1) ;
echo PHP_EOL ;
print_r($fruits2) ;

// Output : Array
//           (
//              [0] => Apple
//              [1] => Banana
//              [2] => Orange
//           )

// Output : Array
//           (
//              [0] => Cherry
//              [1] => Pine-Apple
//              [2] => Mango
//           )

// 2.   Loop over Indexed Arrays

$number = [10,20,30,40,50,60] ;
foreach($number as $value){
    echo $value." " ;
}

// Output : 10 20 30 40 50 60.

// 3.   Associative Arrays   

$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65"
] ;
print_r($bilGates) ;

// Output : Array
//          (
//              [firstName] => Bill
//              [lastName] => Gates
//              [age] => 65
//           )

// 4.   Loop over Associative Arrays

$bilGates=[
    "firstName"=>"Bill",
    "lastName"=>"Gates",
    "age"=>"65"
] ;
foreach($bilGates as $key => $value){
    echo "$key".":"."$value".PHP_EOL ;
}

// Output : firstName:Bill
//          lastName:Gates
//          age:65

// 5.   Multidimensional Indexed Arrays

$num1 = [10,20,30] ;
$num2 = [40,50,60] ;
$num3 = [70,80,90] ;
$allNumbers = [$num1,$num2,$num3] ;
print_r($allNumbers[0][1]) ;

// Output : 20.

// 6.   Loop over Multidimensional Indexed Arrays

$num4 = [10,20,30] ;
$num5 = [40,50,60] ;
$num6 = [70,80,90] ;
$numbers = [$num4,$num5,$num6] ;
foreach($numbers as $parentItem){
    foreach($parentItem as $childItem){
        echo $childItem." " ;
    }
}

// Output : 10 20 30 40 50 60 70 80 90.

// 7.   Multidimensional Associative Arrays

$person1=[
    "firstName"=>"Rabbil",
    "lastName"=>"Gates1",
    "age"=>"65",
] ;

$person2=[
    "firstName"=>"Hasin",
    "lastName"=>"Gates2",
    "age"=>"65",
] ;

$person3=[
    "firstName"=>"Rupom",
    "lastName"=>"Gates3",
    "age"=>"65",
] ;
$allPerson = [$person1,$person2,$person3] ;
print_r($allPerson[1]) ;

// Output : Array
//          (
//              [firstName] => Hasin
//              [lastName] => Gates2
//              [age] => 65
//          )

// 8.   Loop over Multidimensional Associative Arrays

$person1=[
    "firstName"=>"Rabbil",
    "lastName"=>"Gates1",
    "age"=>"65",
] ;

$person2=[
    "firstName"=>"Hasin",
    "lastName"=>"Gates2",
    "age"=>"65",
] ;

$allPerson = [
    "One" => $person1,
    "Two" => $person2
    ] ;
foreach($allPerson as $parentKey => $parentValue){
    foreach($parentValue as $childKey => $childValue){
        echo $childKey." : ".$childValue.PHP_EOL ;
    }
}

// Output : firstName : Rabbil
//          lastName : Gates1
//          age : 65
//          firstName : Hasin
//          lastName : Gates2
//          age : 65

// 9.   array_values() - Returns all the values from the array

$data = array("a" => "apple", "b" => "banana", "c" => "cherry") ;
$value = array_values($data) ;
print_r($value) ;

// Output : Array
//          (
//             [0] => apple
//             [1] => banana
//             [2] => cherry
//          )

// 10.  array_keys() - Returns all the keys from the array.

$assoc = array("a" => "apple", "b" => "banana", "c" => "cherry") ;
$key = array_keys($assoc) ;
print_r($key) ;

// Output : Array
//          (
//              [0] => a
//              [1] => b
//              [2] => c
//          )

// 11.  array_combine() - Combines two arrays: one for keys and the other for values.

$keys = array("ab","cd","ef") ;
$values = array("apple","banana","cherry") ;
$combined = array_combine($keys,$values) ;
print_r($combined) ;

// Output : Array
//          (
//              [ab] => apple
//              [cd] => banana
//              [ef] => cherry
//          )

// 12.  array_fill() - Fills an array with values.

$filled = array_fill(0, 2, "apple") ;
print_r($filled) ;

// Output : Array
//          (
//              [0] => apple
//              [1] => apple
//          )

// 13.  array_push() - Adds one or more elements to the end of an array.

$fruits = array("Date","Cherry","Mango") ;
array_push($fruits,"Apple","Banana") ;
print_r($fruits) ;

// Output : Array
//          (
//              [0] => Date
//              [1] => Cherry
//              [2] => Mango
//              [3] => Apple
//              [4] => Banana
//          )

// 14.  array_pop( ) - Removes the last element from an array.

$fruits = array("Date","Cherry","Mango") ;
array_pop($fruits) ;
print_r($fruits) ;

// Output : Array
//          (
//              [0] => Date
//              [1] => Cherry
//          )

// 15.  array_unshift() - Adds one or more elements to the beginning of an array.

$fruits = array("apple", "banana", "cherry") ;
array_unshift($fruits, "apricot") ;
print_r($fruits) ;

// Output : Array
//          (
//              [0] => apricot
//              [1] => apple
//              [2] => banana
//              [3] => cherry
//          )

// 16.  array_shift() - Removes the first element from an array.

$fruits = array("apple", "banana", "cherry") ;
array_shift($fruits) ;
print_r($fruits) ;

// Output : Array
//          (
//              [0] => banana
//              [1] => cherry
//          )

// 17.  array_splice() - Removes a portion of the array and replaces it with something else.

$fruits = array("apple", "banana", "cherry", "mango", "lichi") ;
$someFruits = array_splice($fruits,-4,2) ;
print_r($someFruits) ;

// Output : Array
//          (
//              [0] => banana
//              [1] => cherry
//          )

// 18.  array_slice() - Extracts a portion of the array

$fruits = array("apple", "banana", "cherry", "mango", "lichi") ;
$few = array_slice($fruits,1,3) ;
print_r($few) ;

// Output : Array
//          (
//              [0] => banana
//              [1] => cherry
//              [2] => mango
//          )

// 19.  count() - Counts the number of elements in an array.

$numbers = array(1,2,3,4,5,6,7) ;
echo count($numbers) ;

// Output : 7.

// 20.  sizeof() - An alias of count() . Also counts the number of elements in an array.

$number = array(1,2,3,4,5) ;
$sizeOf = sizeof($number) ;
echo $sizeOf ;

// Output : 5.

// 21.  array_sum() - Computes the sum of values in an array.

$array = array(10,20,30,40) ;
$sum = array_sum($array) ;
echo $sum ; 

// Output : 100.

// 22.  array_product() - Computes the product of values in an array.

$numbers = array(1, 2, 3, 4, 5) ;
$product = array_product($numbers) ;
echo $product ;

// Output : 120.

// 23.  in_array() - Checks if a value exists in an array.

$have = array(1,2,3,4,5) ;
if(in_array(3,$have)){
    echo "3 is in the array" ;
}
else{
    echo "3 is not in the array" ;
}

// Output : 3 is in the array.

// 24.  array_key_exists() - Checks if a key exists in an array.

$assoc = array("first" => "apple", "second" => "banana") ;
if(array_key_exists("first",$assoc)){
    echo "Key 'first' exists in the array." ;
}
else{
    echo "Key 'first' is not exists in the array." ;
}

// Output : Key 'first' exists in the array.

// 25.  array_search() - Searches the array for a given value and returns the first corresponding key.

$assoc = array("first" => "apple", "second" => "banana") ;
$key = array_search("banana", $assoc) ;
echo $key ;

// Output : second.

// 26.  array_map() - Applies a callback function to the elements of one or more arrays.

function square($n){
    return $n*$n ;
}
$number = array(1,2,3,4,5) ;
$squareNumber = array_map("square",$number) ;
print_r($squareNumber) ;

// Output : Array
//          (
//              [0] => 1
//              [1] => 4
//              [2] => 9
//              [3] => 16
//              [4] => 25
//          )

// 27.  array_filter() - Filters elements of an array using a callback function.

function is_even($n){
    return $n%2 == 0 ;
}
$numbers =[1,2,3,4,5] ;
$filter = array_filter($numbers,"is_even") ;
print_r($filter) ;

// Output : Array
//          (
//              [1] => 2
//              [3] => 4
//          )

// 28.  array_merge() - Merges one or more arrays.

$array1 = array("apple","mango") ;
$array2 = array("cherry","orange") ;
$merged = array_merge($array1,$array2) ;
print_r($merged) ;

// Output : Array
//          (
//              [0] => apple
//              [1] => mango
//              [2] => cherry
//              [3] => orange
//          )

// 29.  array_replace() - Replaces values from one array to another.

$base = ["Mango","Apple","Orange"] ;
$replacements = [0 => "apricot", 1 =>"Cherry"] ;
$replaced = array_replace($base, $replacements) ;
print_r($replaced) ;

// Output : Array
//          (
//              [0] => apricot
//              [1] => Cherry
//              [2] => Orange
//          )

// 30.  array_flip() - Exchanges all keys with their associated values in an array.

$input = array("a" => 1, "b" => 2, "c" => 3) ;
$flipped = array_flip($input) ;
print_r($flipped) ;

// Output : Array
//          (
//              [1] => a
//              [2] => b
//              [3] => c
//          )

// 31.  array_change_key_case() - Changes the case of all keys in an array.

$input = array("First" => 1, "SecONd" => 4) ;
$result = array_change_key_case($input, CASE_UPPER) ;
print_r($result) ;

// Output : Array
//          (
//              [FIRST] => 1
//              [SECOND] => 4
//          )

// 32.  array_column() - Returns the values from a single column of the input array.

$records = array(
    array('id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe'),
    array('id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith'),
    array('id' => 5342, 'first_name' => 'Jane', 'last_name' => 'Jones')
) ;
$firstNames = array_column($records, 'first_name') ;
print_r($firstNames) ;

// Output : Array
//          (
//              [0] => John
//              [1] => Sally
//              [2] => Jane
//          )

// 33.  sort() - Sorts an array in ascending order.

$number = array(3,2,4,1) ;
sort($number) ;
print_r($number) ;

// Output : Array
//          (
//              [0] => 1
//              [1] => 2
//              [2] => 3
//              [3] => 4
//          )

// 34.  rsort() - Sorts an array in descending order.

$number = array(3,2,4,1) ;
rsort($number) ;
print_r($number) ;

// Output : Array
//          (
//              [0] => 4
//              [1] => 3
//              [2] => 2
//              [3] => 1
//          )

// 35.  asort() - Sorts an array and maintains index association.

$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana") ;
asort($fruit) ;
print_r($fruit) ;

// Output : Array
//          (
//              [key3] => banana
//              [key1] => lemon
//              [key2] => orange
//          )

// 36.  arsort() - Sorts an array in reverse order and maintains index association.

$fruit = array("key1" => "lemon", "key2" => "orange", "key3" => "banana") ;
arsort($fruit) ;
print_r($fruit) ;

// Output : Array
//          (
//              [key2] => orange
//              [key1] => lemon
//              [key3] => banana
//          )

// 37.  ksort() - Sorts an array by key.

$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana") ;
ksort($fruit) ;
print_r($fruit) ;

// Output : Array
//          (
//              [a] => orange
//              [b] => banana
//              [d] => lemon
//          )

// 38.  krsort() - Sorts an array by key in reverse order.

$fruit = array("d" => "lemon", "a" => "orange", "b" => "banana") ;
krsort($fruit) ;
print_r($fruit) ;

// Output : Array
//          (
//              [d] => lemon
//              [b] => banana
//              [a] => orange
//          )

// 39.  natsort() - Sorts an array using natural order algorithm.

$files = array("img1.png", "img10.png", "img12.png", "img2.png") ;
natsort($files) ;
print_r($files) ;

// Output : Array
//          (
//              [0] => img1.png
//              [3] => img2.png
//              [1] => img10.png
//              [2] => img12.png
//          )

// 40.  natcasesort() - Sorts an array using a case-insensitive natural order algorithm.

$files = array("Img1.png", "img10.png", "img12.png", "IMG2.png") ;
natcasesort($files) ;
print_r($files) ;

// Output : Array
//          (
//              [0] => Img1.png
//              [3] => IMG2.png
//              [1] => img10.png
//              [2] => img12.png
//          )

// 41.  uasort() - Sorts an array with a user-defined comparison function and maintains index association.       

$people = array("Peter" => 35 , "Alex" => 32 , "David" => 28) ;
function Comparator($a, $b){
    return $a-$b ;
}
uasort($people, "Comparator") ;
print_r($people) ;

// Output : Array
//          (
//              [David] => 28
//              [Alex] => 32
//              [Peter] => 35
//          )

// 42.  uksort() - Sorts an array by keys using a user-defined comparison function.

$people = array( "Peter" => 35, "Jack" => 32, "Mary" => 28) ;
function ageComparator($a, $b) {
return $a <=> $b ;
}
uksort($people , 'ageComparator') ;
print_r($people) ;

// Output : Array
//          (
//              [Jack] => 32
//              [Mary] => 28
//              [Peter] => 35
//          )

// 43.  array_walk() - Applies a user-defined function to each item in an array.

$fruits = array("apple", "banana", "cherry") ;
function test_alter(&$item, $key, $prefix) {
$item = "$prefix: $item" ;
}
array_walk($fruits, 'test_alter', 'fruit') ;
print_r($fruits) ;

// Output : Array
//          (
//              [0] => fruit: apple
//              [1] => fruit: banana
//              [2] => fruit: cherry
//          )

// 44.  array_walk_recursive() - Applies a user-defined function recursively to each item in an array.

$fruits = [ "a" => 50,"b" => 100,"c" => 150 ] ;
function hold( $value,$key ){
    echo " $key hold $value".", " ;
}
array_walk_recursive($fruits,"hold") ; 

// Output : a hold 50,  b hold 100,  c hold 150.

// 45.  array_reduce() - Iteratively reduces the array to a single value using a callback function.

$numbers = array(10,20,30,40,50) ;
function sum($carry,$item){
    $carry += $item ;
    return $carry ;
}
$result = array_reduce($numbers,"sum") ;
echo $result ;

// 46.  array_multisort() This function can be used to sort multiple arrays at once or a multi-
// dimensional array by one or more dimensions.

$name = ["Dhaka","Khulna","Jashore"] ;
$number = [3,2,1,] ;
array_multisort($name,$number) ;
print_r($name) ;
print_r($number) ;

// Output : Array
//          (
//              [0] => Dhaka
//              [1] => Jashore
//              [2] => Khulna
//          )
//          Array
//          (
//              [0] => 3
//              [1] => 1
//              [2] => 2
//          )

// 47.  array_diff() It returns the values from the main array that are not present in the other arrays

$array1 = ["a","b","c","d"] ;
$array2 = ["b","d"] ;
$result = array_diff($array1,$array2) ;
print_r($result) ;

// Output : Array
//          (
//              [0] => a
//              [2] => c
//          )

// 48.  array_diff_assoc() If any value and key do not match, that element is returned.

$array1 = ["a" => "red", "b" => "green", "c" => "blue"] ;
$array2 = ["a" => "red"] ;
$result = array_diff_assoc($array1,$array2) ;
print_r($result) ;

// Output : Array
//          (
//              [b] => green
//              [c] => blue
//          )

// 49.  array_diff_key() It returned the keys from $array1 that are not present in $array2.

$array1 = ["blue" => 1, "red" => 2, "green" => 3] ;
$array2 = ["green" => 4, "yellow" => 7] ;
$result = array_diff_key($array1, $array2) ;
print_r($result) ;

// Output : Array
//          (
//              [blue] => 1
//              [red] => 2
//          )

// 50.  array_intersect() Computes the intersection of arrays.

$array1 = ["a", "b", "c", "d"] ;
$array2 = ["b", "c", "e"] ;
$result = array_intersect($array1, $array2) ;
print_r($result) ;

// Output : Array
//          (
//              [1] => b
//              [2] => c
//          )

// 51.  array_intersect_assoc() Computes the intersection of arrays with additional index check.

$array1 = ["a" => "green", "b" => "brown", "c" => "blue"] ;
$array2 = ["a" => "green", "b" => "yellow", "c" => "blue"] ;
$result = array_intersect_assoc($array1, $array2) ;
print_r($result) ;

// Output : Array
//          (
//              [a] => green
//              [c] => blue
//          )

// 52.  array_intersect_key() Computes the intersection of arrays using keys for comparison.

$array1 = ["blue" => 1, "red" => 2, "green" => 3] ;
$array2 = ["green" => 4, "yellow" => 7] ;
$result = array_intersect_key($array1, $array2) ;
print_r($result) ;

// Output : Array
//          (
//              [green] => 3
//          )

// 53.  array_unique() Removes duplicate values from an array.

$number = ["a","b","b","c","a"] ;
$result = array_unique($number) ;
print_r($result) ;

// Output : Array
//          (
//              [0] => a
//              [1] => b
//              [3] => c
//          )

// 54.  array_reverse() Returns an array with elements in reverse order.

$number = [1,2,3] ;
$result = array_reverse($number) ;
print_r($result) ;

// Output : Array
//          (
//              [0] => 3
//              [1] => 2
//              [2] => 1
//          )

// 55.  array_rand() Picks one or more random entries out of an array.

$input = ["apple", "banana", "cherry", "date", "fig"] ;
$randomKey = array_rand($input) ;
echo $input[$randomKey] ;
$randomKeys = array_rand($input, 2) ;
print_r($randomKeys) ;

// Output : cherry Array
//                 (
//                      [0] => 0
//                      [1] => 3
//                  )

// 56.  shuffle() Shuffles (randomizes the order of) the elements in an array.

$number = array(1,2,3,4,5) ;
shuffle($number) ;
print_r($number) ;

// Output : Array
//          (
//              [0] => 3
//              [1] => 2
//              [2] => 5
//              [3] => 4
//              [4] => 1
//          )

// 57.  range() Creates an array containing a range of elements.

$number = range(1, 3) ;
print_r($number) ;

// Output : Array
//          (
//              [0] => 1
//              [1] => 2
//              [2] => 3
//          )

$letter = range("a", "e") ;
print_r($letter) ;

// Output : Array
//          (
//              [0] => a
//              [1] => b
//              [2] => c
//              [3] => d
//              [4] => e
//          )

$evenNumber = range(2, 10, 2) ;
print_r($evenNumber) ;

// Output : Array
//          (
//              [0] => 2
//              [1] => 4
//              [2] => 6
//              [3] => 8
//              [4] => 10
//          )

  