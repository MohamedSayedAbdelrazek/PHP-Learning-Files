<?php

class AppleDevice {
//variable inside class= [property] [attribute]
//function inside class= [method]
// [->] object operator
// [ $this ] pseudo variable [ refer to object that call the method]
// [self] بتتعامل مع الثوابت الي خاصه بالكلاس نفسه


/*
    self
        -Refer To Current class
        -Access Static Members [constants]
        -Not Use ($) Because Its Not represent a variable but represent class construction

    $this
        -Refer To Current Object
        -Access Non Static Members
        -Use ($) Because It represent a varibale
    
 */
    //properties
private $ram='1 GB';
private $inch='4 inch';
private $space='16 GB';
private $color='Silver';
private $lock;
public $ownerName;
   
   //CONSTANTS
   const MINCHAR =3;
    //methods
public function validateOwnerName() {

                            // to deal with constants
   if(strlen($this->ownerName)<self::MINCHAR):
    echo "Owner Name Cannot Be less than ".self::MINCHAR." characters";
   endif;
   
}

public function changeSpec($ram , $inch , $space , $color){
    $this->ram=$ram;
    $this->inch=$inch;
    $this->space=$space;
    $this->color=$color;
}

public function setLock($lo)
{
    $this->lock=sha1($lo);
}

}


$iphone6Plus= new AppleDevice();

$iphone6Plus->changeSpec('2GB','5 inch','32GB','GOLD');
$iphone6Plus->ownerName='Mo';
$iphone6Plus->validateOwnerName();

echo AppleDevice::MINCHAR; // to print the constant using the class Name
echo "<pre>";
var_dump($iphone6Plus);
echo "</pre>";


$iphone7Plus= new AppleDevice();

$iphone7Plus->changeSpec('8GB','7 inch','64GB','black');
$iphone7Plus->ownerName='Mohamed';
$iphone7Plus->validateOwnerName();

$iphone7Plus->setLock('mohamed123');

echo "<pre>";
var_dump($iphone7Plus);
echo "</pre>";


$iphone= new AppleDevice();

echo "<pre>";
var_dump($iphone);
echo "</pre>";