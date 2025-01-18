<?php

class Account{
    private $accountNumber,$balance ;
    function __construct($accountNumber,$balance){
        $this -> accountNumber = $accountNumber ;
        $this -> balance = $balance ;
    }
    function getBalance(){
        echo $this -> balance.PHP_EOL ;
    }
    function deposit($money){
        $this -> balance += $money ;
    }
    function withdraw($money){
        if($money > $this -> balance){
            echo "Insufficient Balance\n" ;
            return ;
        }
        $this -> balance -= $money ;
    }
}
$obj = new Account("12345","20000") ;
$obj -> getBalance() ;
$obj -> deposit(15000) ;
$obj -> getBalance() ;
$obj -> withdraw(30000) ;
$obj -> getBalance() ;

// Output : 20000
//          35000
//          5000