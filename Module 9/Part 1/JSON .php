<?php

// 1. Associative Array to Json Object.

$AssocArray = ["Name" => "Bangladesh", "Capital" => "Dhaka" ] ;
$json = json_encode($AssocArray) ;
echo $json."\n" ;

// Output : {"Name":"Bangladesh","Capital":"Dhaka"}

// 2. Multi Dimension Array to Json Array

$Array = [
    ["Name" => "Jon", "Age" => 32],
    ["Name" => "Doe", "Age" => 35]
] ;
$json = json_encode($Array) ;
print_r($json) ;

// Output : [{"Name":"Jon","Age":32},{"Name":"Doe","Age":35}]

// 3. Json Object to Associative Array

$stringData = '{"Name":"Bangladesh","Capital":"Dhaka"}' ;
$decode = json_decode($stringData, true) ;
print_r($decode) ;

// Output : Array
//          (
//              [Name] => Bangladesh
//              [Capital] => Dhaka
//          )

// 4. Json Array to Multi Dimension Array

$stringData = '[{"Name":"Jon","Age":32},{"Name":"Doe","Age":35}]' ;
$decode = json_decode($stringData, true) ;
print_r($decode) ;

// Output : Array
//          (
//              [0] => Array
//                  (
//                      [Name] => Jon
//                      [Age] => 32
//                  )

//              [1] => Array
//                  (
//                      [Name] => Doe
//                      [Age] => 35
//                  )
//          )

