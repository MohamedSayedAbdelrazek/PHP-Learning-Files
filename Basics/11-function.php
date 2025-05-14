<?php
/*

function identifier ($arg1 , $arg2 , $arg3) {

    //function body
}

//more dynamic ...modify on function body... not in every once you use it
//reusability

*/
function countFromA_To_B($a ,$b)
{
	$start;
	$end;
	if($a>$b)
	{
		$start=$b;
		$end=$a;
	}
	else
	{
		$start=$a;
		$end=$b;
	}
for($i=$start ;$i<=$end ; $i++)
	echo $i." ";

echo "<br>";
}
countFromA_To_B(20 ,1);
countFromA_To_B(1,10);



function generateYearsFromA_To_B($a,$b)
{
echo "<select name='years'>";

for($i=$a ; $i<=$b ;$i++)
   {
     echo "<option value='$i'>".$i."</option>";
   }

echo "</select>";
}
echo "<h2>mohamed years </h2>";
generateYearsFromA_To_B(2020,2024);

echo "<h2>Ahmed years </h2>";
generateYearsFromA_To_B(2015,2024);


//if function not return anything,then var_dumb(fun()) will display null