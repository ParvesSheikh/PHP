 <?php

$fileName = "c:\Users\Parves\Desktop\Os re practice\Module 9\Practice\invoice.text";
class Invoice{
    public $title , $items = [] , $total = 0 ;
    function addTitle($title){
        $this -> title = $title ;
    }
    function addItem($itemName,$price){
        $this -> items[] = ["name" => $itemName, "price" => $price] ;
        $this -> total+= $price ;
    }
    function getInvoice(){
       global $fileName ;
        $file=fopen($fileName,'w');
        $title=  "{$this -> title}\n" ;
        fwrite($file,$title) ;
        $dash =  "-------------------------\n" ;
        fwrite($file,$dash) ;
        foreach($this -> items as $item){
            $data="Item : {$item["name"]}\t Price : {$item["price"]}\n" ;
            fwrite($file,$data);
        }
       $line= "-------------------------\n" ;
       fwrite($file,$line);
        $ttl = "The total price is \t {$this -> total}" ;
        fwrite($file,$ttl) ;
    }
}
$obj = new Invoice() ;
$obj -> addTitle("My First Invoice") ;
$obj -> addItem("1",200) ;
$obj -> addItem("2",300) ;
$obj -> addItem("3",250) ;
$obj -> addItem("4",90) ;
$obj -> getInvoice() ;

