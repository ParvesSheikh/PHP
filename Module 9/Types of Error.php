<?php

// 1.   Parse error: Syntax error = কোন কোড লিখতে গিয়ে যদি দাড়ি, কমা, সেমিকোলন 
//                                  ইত্যাদি ভূল হয় তবে তা এই এরর ।

echo 'Bangladesh'

// 2.   Fatal error: Uncaught Error: কোন ফাংশন বা ভেরিয়েবল এর নাম কল করার সময়
//                                   ভূল নামে কল করা হয় তবে তা এই এরর ।                

function MyFun(){
    echo "Bangladesh" ;
}
MyFan() ;

// 3.   Warning or Notice Error : একাট ফাইল পিএইচপি তে নাই, সেটিকে যদি অ্যাড করা
//                                হয় তবে তা এই এরর । 

include("Bangladesh.php") ;
echo "I added this file" ;

// 4.   Strict Error : নন স্ট্যাটিক ফাংশনকে স্ট্যাটিক মুডে কল করলে এই এরর হয়।

class Human {
    function name(){
        echo "Hello!" ;
    }
}
Human::name() ;