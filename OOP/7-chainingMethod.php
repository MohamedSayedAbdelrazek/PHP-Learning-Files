<?php

/*

Methods Chaining
    -When a class's methods returns a $this Keyword , They can be chaining together
*/

class Iphone {
    public $name;
    public $email;

    public function pressPower(){
        echo "You Have Pressed The Power Button </br>";
        return $this;
    }

    public function bootPhone(){
        echo "The Phone Is Booting Now...</br>";
        return $this;
    }

    public function sayWelcome(){
        echo "Welcome To Phone</br>";
        return $this;
    }
}


$phone = new Iphone();

$phone->pressPower()->bootPhone()->sayWelcome();
