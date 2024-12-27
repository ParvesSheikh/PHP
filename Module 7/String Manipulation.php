<?php

// 1.   Various String operations

$string1 = "Welcome" ;
$string2 = "Bangladesh" ;
$string3 = $string1 ." ". $string2 ;
$string4 = "{$string1} {$string2}" ;
echo $string3."   ".$string4 ;

// Output : Welcome Bangladesh   Welcome Bangladesh

$date = "25 January" ;
$cost = "TK. 520" ;
echo "On {$date} total expense is {$cost}" ;

// Output : On 25 January total expense is TK. 520.

// 2.   String reverse

$string = "Hello Bangladesh" ;
$reverse = strrev($string) ;
echo $reverse ;

// Output : hsedalgnaB olleH .

$string = "Bangladesh" ;
$length = strlen($string) ;
$reverse = "" ;
for($i = $length-1 ; $i>=0 ; $i--){
    $reverse =$reverse.$string[$i] ;
}
echo $reverse ;

// Output : hsedalgnaB .

$reverse = "hsedalgnaB" ;
$length = strlen($reverse) ;
$string = "" ;
for($i = $length-1 ; $i>=0 ; $i--){
    $string .= $reverse[$i] ;
}
echo $string ;

// Output : Bangladesh.

// 3.   str_repeat() To print repeated data in a specific format

$string = " *-* " ;
$final = str_repeat($string,10) ;
echo $final ;

// Output :  *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-* 

$string = " *-* " ;   
$final = " " ;
for($i = 1 ; $i <=10 ; $i++){
    $final .= $string ;
}
echo $final ;

// Output : *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-*  *-* 

// 4.   $str_shuffle() To shuffle string

$string = "Hello from Ostad" ;
$shuffle = str_shuffle($string) ;
echo $shuffle ;

// Output : esrl lfOmoHtoda ;

// 5.   strtoLower() It returns the same string but with all uppercase letters converted to lowercase.

$string = "BANGLAdesh" ;
$lower = strtolower($string) ;
echo $lower ;

// Output : bangladesh

// 6.   strtoUpper() It returns the same string but with all lowercase letters converted to Uppercase.

$string = "banglaDESH" ;
$upper = strtoupper($string) ;
echo $upper ;

// Output : BANGLADESH

// 7.   ucwords() It capitalizes the first letter of each word in the string while keeping the rest unchanged.

$string = "hello world" ;
$words = ucwords($string) ;
echo $words ;

// Output : Hello World

// 8.

$string = " hello WorLd. hoW are you " ;
$lower = strtolower($string) ;
$explode = explode(". ",$lower) ;
$fixed = "" ;
for($i = 0 ; $i <count($explode) ; $i++){
   $explode[$i] = ucwords(ltrim($explode[$i])) ;
}
$parts = join(". ",$explode) ;
$fixed .= $parts ;
echo $fixed."?" ;

// Output : Hello World. How Are You ?

// 9.   Trim() it removes spaces, tabs, newlines, carriage returns, and other whitespace characters.

$string = "     Hello World     " ;
echo strlen($string) ;

// Output : 21.

$string = "     Hello World     " ;
$ltrim = ltrim($string) ;
echo $ltrim ;

// Output : Hello World     .

$string = "     Hello World     " ;
$rtrim = rtrim($string) ;
echo $rtrim ;

// Output :      Hello World.

$string = "     Hello World     " ;
$trim = trim($string) ;
echo $trim ;

// Output : Hello World.

// 10.  

$string = " Hello from Ostad PHP Course " ;
$explode = explode(" ",$string) ;
$implode = join("-",$explode) ;
echo $implode ;

// Output : -Hello-from-Ostad-PHP-Course-Array.

// 11 . str_replace() It searches for specific words or characters within a string or an array.
//                    Then it replaces those words or characters with a new value.

$wrongName1 = "Abdur  Rahim" ;
$wrongName2 = "Mohammad  Ali" ;
$wrongName3 = "Abdul   Mannan" ;
$replaced1 = str_replace("  "," ",$wrongName1) ;
$replaced2 = str_replace("  "," ",$wrongName2) ;
$replaced3 = str_replace("   "," ",$wrongName3) ;
echo $replaced1."\n" ;
echo $replaced2."\n" ;
echo $replaced3."\n" ;

// Output : Abdur Rahim
//          Abdul Mannan
//          Mohammad Ali

$wrongName1 = "Abdur  Rahim" ;
$wrongName2 = "Dr.. Mohammad  Ali" ;
$wrongName3 = "Abdul   Mannan" ;
$replaced1 = str_replace("  "," ",$wrongName1) ;
$replaced2 = str_replace(["  ",".."],[" ","."],$wrongName2) ;
$replaced3 = str_replace("   "," ",$wrongName3) ;
echo $replaced1."\n" ;
echo $replaced2."\n" ;
echo $replaced3."\n" ;

// Output : Abdur Rahim
//          Dr. Mohammad Ali
//          Abdul Mannan

// 12.  substr() It extracts a specific portion of a string from the beginning or the middle based on a given length.

$string = "Hello from Ostad Laravel Course" ; 
$from = 5 ;
$to = 12 ;
$length = $to - $from ;
$result = substr($string, $from, $length) ;
echo $result ;

// Output :  from O.

// 13.  str_split

$string = "Bangladesh" ;
$split = str_split($string,2) ;
print_r($split) ;

// Output : Array
//          (
//              [0] => Ba
//              [1] => ng
//              [2] => la
//              [3] => de
//              [4] => sh
//          )

// 14.  strpos() It is used to find another string within a string. It returns the position (index) of the first occurrence of the found string. If the string is not found, it returns false.

$missing = "Rahim, Karim, Motin, Jobbar aj k school theke palaise" ;
$search = "Rahim" ;
$found = strpos($missing,$search) ;
if($found !== false){
    echo "$search aj k school theke palaise." ;
}else{
    echo "$search aj k school theke palay ny." ;
}

// Output : Rahim aj k school theke palaise.

// 15.  strip_tags() The function removes only the specified tags from the HTML/PHP code and keeps the rest of the text.

$string = "<p>Hello <b>Bangladesh</b>. How are you?</p>" ;
$clean = strip_tags($string) ;
echo $clean ;

// Output : Hello Bangladesh. How are you?

// 16. 

$string = "hello world//--" ;
$string1 = "hello world/?&..,$%?#....&&&?" ;
$trim1 = trim($string," /-") ;
$trim2 = trim($string1," ?/#&.,$%?#") ; 
echo $trim1 ;
echo " " ;
echo $trim2 ;

// Output : hello world hello world