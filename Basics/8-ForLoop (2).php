<?php
//to print from 1 to 20
for($i=1 ; $i<=10 ;$i++)
	echo $i."<br>";
?>

<select>
	<?php
	for($year=1990 ; $year<=2024 ; $year++)
		echo "<option value='$year'>".$year."</option>"
	?>
</select>

<?php 
echo "<br>";

$langs=array("HTML","CSS","Java Script","PHP","C++","Python");

echo "<ul>";
for($i=0 ; $i<count($langs);$i++)
	echo "<li>$langs[$i]</li>";
echo "</ul>";

 ?>
