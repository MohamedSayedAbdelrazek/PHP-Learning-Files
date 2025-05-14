<?php
if(isset($_COOKIE['background']))

{
echo "<style> body{ background-color:". $_COOKIE["background"] . " }</style>";
}


if($_SERVER['REQUEST_METHOD']=='POST') 
{
	setcookie("background",$_POST['bg-color'],time()+60*60*24*30*12);
	
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Practice Cookie</title>
</head>
<body>
	<form method="POST">
		<fieldset>
			<legend> LOGIN</legend>
			<input type="color" name="bg-color">
			<input type="submit" value="Choose Color">
		</fieldset>
	</form>
</body>
</html>