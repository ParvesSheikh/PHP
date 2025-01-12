<?php

// SESSION = Backend Temporary data storage system .

session_start() ;
$_SESSION['userEmail'] = "me.parvezj@gmail.com".'<br/>' ;
$_SESSION['userName'] = "Bangladesh".'<br/>' ;
$_SESSION['userScore'] = 100 .'<br/>' ;


// [ নোট : সেশন ‍সার্ভার পিসিতে ডাটা স্টোর করে রাখে । 
//          এটি দেখতে হলে জ্যাম্প এর মধ্যে টেম্প ফাইলটি ওপেন করতে হবে । ]