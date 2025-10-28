<?php
/*
    Magic Methods
        -Method With Special Name Start with double underscore

    1-construct
        -construct Can Be inherit 

    2-destruct

    3-call
        -called when invoking function not accessible or not found
        -accept two parameters [$methodName , $params]

    4- __get($prop)
        -Called When Getting a properety not accessible or not found
        -Accept one parameter

    5- __set($prop,$value)
        -Called when setting a value to a property not found or not accessible.
        -Accept Two Parameters [ $prop , $value]

    6- magic method clone & clone keyword
        -typical copy of object in php works by reference
        -Mean Both ( main and copied ) Object Will Be Interlinked

    7-clone 
        -magic method clone executes when object cloning is performed
*/

class Iphone {
    public $name;
    public $ram;

    public function __construct ($na,$ra){
       $this->name=$na; 
       $this->ram=$ra;
       echo "Hello ".$na." your device has ".$ra." Ram"."</br>";
    }

    public function __call($method,$params) {
        echo "The Method [ ".$method." ] Not Found Or Not Accessible.</br>" ;
        $str="";
        foreach($params as $param) {
           
           $str= implode(" , " , $params);
        }
        if($str!="")
        echo "Your Parameters Is : ".$str."</br> </br>";
    }

    public function __get ($prop) {
        echo "The proprety [ ".$prop." ] Is not found or not accessible.";
    }

    public function __set ($prop , $val) {
        echo "The proprety [ ".$prop." ] Is not found or not accessible.";
        echo "And you Cannot Assign This Value [ ".$val." ] To It";
    }

    public function __clone (){
        $this->name=clone $this->name;
        $this->ram=clone $this->ram;
    }
}

class Sony extends Iphone {

}

$phone=new Iphone("Mohamed","10GB");
$phone->sayHello("Mohamed",5,3,2);

$sony=new Sony("Ahmed","5GB");
$sony->sayBlaBla("Bla1","Bla2");

$sony->color="red";
 
 // $copy=$sony; هينسخ السوني في الكوبي وأي تعديل في أي خاصية فيهم أيا كانت هيأثر في التاني
$copy= clone $sony;  // عملت استنساخ وكله اوبجكت منفصل عن التاني بتعديلاتهم

//this technique will not work with a class that has a data member wich is an object of another class
