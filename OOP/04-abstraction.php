<?php
/*
    class abstraction
        -Cannot be Instantiated [ Cannot make object from ]
        -Made for other classes to inherit PROP $ METHODS from
        -Can Have Methods & property
        -Can Have Abstracted Method & Non Abstracted Method

        * Rules to go on
        * Force Developers To Follow your methods


    Purpose : The purpose of making a class abstract is to provide a base class that outlines the interface for derived classes
                 but leaves the implementation details to those derived classes.

   - if a derived class does not implement all the Abstract functions declared in its abstract base class, the derived class also becomes abstract.
*/

abstract class makeDevice {

    protected $ram;

    //abstract method containes no body
    abstract public function setRam($ram); // abstract function , so you must the implementaion of it in inherited class

    public function print () {  // non abstract function
        echo "RAM => ".$this->ram;
    }

   
}

class appleDevice extends makeDevice {

    public function setRam($ram) {
        $this->ram=$ram;
    }

}


$iphone6=new appleDevice();
$iphone6->setRam('8GB');
$iphone6->print();
