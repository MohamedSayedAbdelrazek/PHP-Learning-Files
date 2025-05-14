<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<fieldset>
			<legend> Login</legend>
			<input type="text" name="username">
			<input type="submit" value="Send">
		</fieldset>
	</form>
</body>
</html>




<?php
if($_SERVER['REQUEST_METHOD']=='POST') {
echo "Good , you are Using Post to prcess Data </br>";
echo $_POST['username'];
}
else if ($_SERVER['REQUEST_METHOD']=='GET') {
echo "Good , you are Using Get to prcess Data </br>";
echo $_GET['username'];
}
else
{
echo "You Can Not Browse This Page Directly ";
}
?>