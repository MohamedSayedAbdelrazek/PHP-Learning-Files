<?php

/*
[ 1 ] Indexed Array
[ 2 ] Associative Array
[ 3 ] MultiDiminsional Array
*/

                       
                       // Indexed Array


// $workers=array("Ahmed","Mohamed","Ali","Nader","Ibrahim","Zyad","Sayed");
// $workers[]="Ahmed";   add to array 
// $workers[]="Mohamed";
// $workers[]="Ali";
// $workers[]="Nader";
// $workers[]="Ibrahim";
// $workers[]="Zyad";
// $workers[]="Sayed";
 
$langs=array("HTML","CSS","PHP","JS","C++","Python");

$langs[]="mySQL";

echo "<ul>";
foreach($langs as $lang)
{
	echo "<li>".$lang."</li>";
}
echo "</ul>";

echo "<pre>";
print_r($langs);
echo "</pre>";

// echo $langs[3][2];

echo "====================================================================== <br>";

     /*

     [ 2 ]Associative Array
$arr=array(
key1=>value1
,key2=>value2
,key3=>value3

//key must be unique
//value can be the same
);
     */
$langs2=array(
	"HTML"    =>"100%",
	"HTML"    =>"100%",
	"HTML"    =>"90%",
	"CSS"     =>"30%",
	"PHP"     =>"50%",
	"JS"      =>"0%",
	"C++"     =>"100%",
	"Python"  =>"20%"
);
$langs2["MySQL"]="0%"; //add to Associative Array
echo "<ul>";
foreach($langs2 as $lang => $progress)
{

echo "<li>My Progress In ".$lang." is  => ".$progress."</li>";

}
echo "</ul>";

echo "<pre>";
print_r($langs2);
echo "</pre>";

echo "====================================================================== <br>";

/*
                           multidimentional Array
*/
$diet=array(
array("Apple" , "Banana" , "Milk"),
array("Egg" , "Rice" , "Apple"),
array("Meat" , "potatos"),
array("Milk" , "Water" , "Juice","Fruit")
);

for($i=0 ; $i<count($diet);$i++)
{
	$x=$i+1;
	echo "<h3>Day ".$x."</h3>";
	for($j=0 ; $j<count($diet[$i]);$j++)
	{
		echo $diet[$i][$j]," , ";
	}
echo "<br>";
}
echo "<pre>";
print_r($diet);
echo "</pre>";

$deit2=array(
"Day One"   =>array("Apple" , "Banana" , "Milk"),
"Day Two"   =>array("Egg" , "Rice" , "Apple"),
"Day Three" =>array("Meat" , "potatos"),
"Day Four"  =>array("Milk" , "Water" , "Juice",array(
	                                           "sault"=>"10%",
	                                           "sugar"=>"5%"))

);
echo $deit2["Day Four"][3]["sugar"];