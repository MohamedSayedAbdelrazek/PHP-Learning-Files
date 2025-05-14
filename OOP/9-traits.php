<?php


trait Myfeature1{

    public function feature(){
        echo "This Is Feature One";
    }
}


trait Myfeature2{
    public function feature(){
        echo "This Is Feature Two";
    }
}

class Iphone {
    use Myfeature1,Myfeature2{ // colision will be made what should we do 

       /* [trait name] [method name] [keyword as] [new name of the method] */ 
        Myfeature2::feature as feature2;

        
        /*[trait name] [::] [method name] [keyword instead of] [other method name]*/
        Myfeature1::feature insteadOf Myfeature2; 
         // mean : use feature from Myfeature1 trait instead of feature in Myfeature2
    }
}

$iphone=new Iphone();

$iphone->feature();
$iphone->feature2();