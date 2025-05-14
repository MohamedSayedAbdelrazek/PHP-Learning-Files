<?php
/*
switch(Expression) {

case :
  //code
  break;
}

*/
$brwoser="Google Chrome";

switch ($brwoser) {
	case 'firefox':
	echo "Your Favourite Brwoser Is firefox";
			break;

	case "Google Chrome":
	case "Chrome":
	echo "Your Favourite Brwoser is Google Chrome and that is the best";
			break;

	default:
	echo "Your Favourite Brwoser is not here";
		break;
}