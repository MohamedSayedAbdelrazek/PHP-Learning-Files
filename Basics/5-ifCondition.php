<?php
$num1=200;
$num2=1;
if($num1>$num2)
	echo "Yes ".$num1." is larger than ".$num2;
elseif($num1==$num2)
	echo "yes ".$num1." equal to ".$num2;
else
	echo "No ".$num1." smaller than ".$num2;

echo "<br/>";

echo $num1**$num2 ."<br/>";  //power operator

$currency=100; //Dollar
$currency*=3.75;
$currency.=" riyal saudi <br/>";

echo $currency;

/*[ === ] : Identical 
  equal in data type and value
  [!==]
*/
$a=50;
$b=50;
if($a===$b)
	echo "\$a identical with \$b <br/>";
else
{
	echo "false <br/>";
	if($a!=$b)
	{

		echo "$a not identical with $b <br/>";
		echo "Because ".$a." not equal ".$b."<br/>";
	}
	else
	{
	  echo "$a not identical with $b <br/>";
	  echo "Because $a is ".gettype($a)."<br/>";
	  echo "and $b is ".gettype($b)."<br/>";
	}

}

$c=100;
$d="100";
if($c==$d)
	echo "true <br/>";

// echo "$c";==echo $c;
// [ <> ] == [ != ] "not equals"

//pre/post increment-decrement [++$var,$var++,--$var,$var--]
