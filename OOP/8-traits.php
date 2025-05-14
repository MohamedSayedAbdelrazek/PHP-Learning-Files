<?php

/*
    - problem with extending classes , Is that U can Only extend one , this is a little limiting.
    -with traits its possible for PHP classes to inherit methods & properties from multible sources.

In traits : 
    -You Cannot Extends Or Implements. 
    -You Cannot Instantiate.
    -Its Supporting Class Not Replacing it.
    -Can Have Methods.
    -Have Priority Over Class.
*/

trait fingerPrint{

    public function fingerPrint(){
        echo "This Has Finger Print Feature.</br>";
    }
}

trait threeDimentionTouch{
    public function threeD(){
        echo "This Has 3D Touch Feature.</br>";
    }
}

trait faceDetect{
    public function faceFeature(){
        echo "This Has Face Detect Feature.</br>";
    }
}

trait allFeatures{
    use fingerPrint, threeDimentionTouch, faceDetect;
}
class Iphone {
    private $phoneName="Iphone";
 use allFeatures;

    public function sayHello () {
        echo "Hello From ".$this->phoneName.".";
    }
}

class Sony {
    private $phoneName="Sony";
    use faceDetect;
    public function sayHello () {
        echo "Hello From ".$this->phoneName.".";
    }
}

class Nokia {

}

$iphone =new Iphone();
$iphone->fingerPrint();
$iphone->threeD();
$iphone->faceFeature();
$iphone->sayHello();
echo "<pre>"; print_r($iphone); echo "</pre>";

$sony=new Sony();
$sony->faceFeature();
$sony->sayHello();

echo "<pre>"; print_r($sony); echo "</pre>";

$nokia = new Nokia();
echo "<pre>"; print_r($nokia); echo "</pre>";