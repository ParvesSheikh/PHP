<?php
interface AccountInterface{
    function __construct($balance) ;
    function getBalance() ;
    function deposit($money) ;
    function withdraw($money) ;
}
abstract class AbstractAccount implements AccountInterface {
    protected $balance ;
    function __construct($balance){
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
            return;
        }else{
            $this -> balance -= $money ;
        }
    }
}
class CurrentAccount extends AbstractAccount{
    function withdraw($money){
        if($money > 5000){
            echo "You can't withdraw more than 5000 TK.\n" ;
            return ;
        }
    }
}
class SavingsAccount extends AbstractAccount{
    function withdraw($money){
       
        if($money > 50000){
            echo "You can't withdraw more than 50000 TK.\n" ;  
            return;    
        }else{
            parent::withdraw($money) ;
        }
        
    }
}
$obj = new CurrentAccount(20000) ;
$obj -> getBalance() ;
$obj -> deposit(15000) ;
$obj -> getBalance() ;
$obj -> withdraw(30000) ;
$obj -> getBalance() ;

echo PHP_EOL ;

$obj = new SavingsAccount("20000") ;
$obj -> getBalance() ;
$obj -> deposit(15000) ;
$obj -> getBalance() ;
$obj -> withdraw(40000) ;
$obj -> getBalance() ;

// Output : 20000
//          35000
//          You can't withdraw more than 5000 TK.
//          35000

//          20000
//          35000
//          Insufficient Balance
//          35000
