<?php
/*
 [ static keyword ] 

 -static properties/method are used to access properties/method in a global scope

 -Declaring class properties or methods as static 
    makes them accessible without needing an instantiation of the class 
    مشت محتاجين نعمل اوبجكت علاشان نوصل للعنصر ده

-a property declared as static cannot be accessed with an instatiated class object (But Static Method Can)

-one of the major benefits to using static properties is that 
    they keep their stored values for the duration of the script.


*/ 
class Iphone {
    public static $name="Mohamed";
    public static $ram="2GB";

    public static function sayHello(){

        echo "Hello ".Iphone::$name;
    }
}

echo Iphone::sayHello();
?>
