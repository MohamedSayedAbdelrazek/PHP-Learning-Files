<?php
/*syntax
================================================================================
*define(constant name,value,case insensitive)
                           By default false...mean when you print constant you shoud take care about Case of letters
                           if ture ...write the name of constants capital or small
*constant is Glabal
*cannot be redefined
*/



		$firstName="mohamed";       // Ordinary variable
		echo $firstName."<br/>";

		define( "FIRST_NAME" , "Mohammed" , false);
		echo FIRST_NAME;

		echo " ";

		define("LAST_NAME","Sayed");
		echo LAST_NAME;

		echo"<br/>";

		define("PI",3.14);
		echo PI;
		echo"<br/>";

		echo PHP_INT_MAX;
		echo"<br/>";

		echo __FILE__; //output path of our file
		echo"<br/>";