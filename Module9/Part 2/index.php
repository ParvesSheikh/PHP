<?php

// 1.   

// $file = fopen("data1.text","a") ;
// $data1 = "Hello from Ostad 123".PHP_EOL ;
// fwrite($file,$data1) ;
// echo "Done" ;
// fclose($file) ;

// 2.

// $books = [
//     "Book 1",
//     "Book 2",
//     "Book 3",
//     "Book 4",
//     "Book 5"
// ] ;
// $file = fopen("data2.text","w") ;
// foreach($books as $book){
//     fwrite($file,$book.PHP_EOL) ;
// }
// echo "Done" ;

// 3.

// $books = [
//     "Book 6",
//     "Book 7",
//     "Book 8",
//     "Book 9",
//     "Book 10"
// ] ;
// $file = fopen("data2.text","a") ;
// foreach($books as $book){
//     fwrite($file,$book.PHP_EOL) ;
// }
// echo "Done" ;

// 4.

// $file = fopen("data2.text","r") ;
// while(!feof($file)){
//     echo fgets($file) ;
// }

// Alternative

// $file = file("data2.text") ;
// foreach($file as $line){
//     echo $line ;
// }

// 5.

// $file = file("data2.text") ;
// echo "Total books of count ".count($file) ;  

// Alternative

// $content = file_get_contents("data2.text") ;
// echo $content ;
// $books = explode(PHP_EOL,$content) ;
// echo "Total books count ".count($books) - 1 ;

// 6.

// $item = <<<EOD
//         Book 1
//         Book 2
//         Book 3
//         Book 4
//         Book 5
//         EOD;
// file_put_contents("data2.text",$item) ;
// echo "Done" ;

// Append Mood

// $item = <<<EOD
//         Book 6
//         Book 7
//         Book 8
//         Book 9
//         Book 10
//         EOD;
// file_put_contents("data2.text",$item,FILE_APPEND) ;
// echo "Done" ;

// 7. Use spl to read CSV

// $file = new SplFileObject("Module9/Part2/Books.csv") ;
// $file -> setFlags(SplFileObject::READ_CSV) ;
// $file -> setCsvControl(",") ;
// foreach($file as $row){
//     echo $row[0] ."-". $row[1] ."-". $row[2].PHP_EOL ;
// }

// 8.

$books = [  
            ["To Kill a Mockingbird", "Harper Lee", 12.99],
            ["The Lord of the Rings", "J.R.R. Tolkien", 15.99],
            ["The Hunger Games", "Suzanne Collins", 10.99],
            ["Pride and Prejudice", "Jane Austen", 8.99],
            ["The Catcher in the Rye", "J.D. Salinger", 11.99],
            ["The Hitchhiker's Guide to the Galaxy", "Douglas Adams", 9.99],
            ["The Handmaid's Tale", "Margaret Atwood", 14.99],
            ["The Nightingale", "Kristin Hannah", 13.99],
            ["The Power", "Naomi Alderman", 12.99],
            ["The Immortal Life of Henrietta Lacks", "Rebecca Skloot", 16.99]
        ] ;
$line = [] ;
foreach($books as $book){
    array_push($line,implode(",",$book)) ;
}
$data = implode(PHP_EOL,$line) ;
file_put_contents("data3.csv",$data) ;