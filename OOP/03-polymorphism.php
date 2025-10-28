<?php

/* Polymorphism => one interface with multiple implementations */

interface Mobile {

    public function pressHome(); //you must type the implementaion of it in below
}

class Iphone implements Mobile{
public function pressHome(){
    echo "Home's Iphone Pressed </br>";
}

}

class Sony implements Mobile{
    public function pressHome(){
        echo "Home's Sony Pressed </br>";
    }
    
    }
    
    $iphone=new Iphone();
    $iphone->pressHome();


    $sony=new Sony();
    $sony->pressHome();
