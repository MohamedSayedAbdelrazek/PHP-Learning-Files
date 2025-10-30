<?php

$file=dirname(__FILE__)."\Aya.txt";

if(file_exists($file)) {

	echo "Good The File [ ".$file." ] is exist ";
	file_put_contents($file , "Added With php file put file_put_contents");
}
else
	echo "Sorry , the file does not exist";