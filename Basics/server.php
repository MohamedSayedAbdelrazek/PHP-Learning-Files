<?php
/*
 $_SERVER['PHP_SELF'] =====> to send the form to the same file that i open it
 $_SERVER['SERVER_NAME']    ' like : localhost'
 $_SERVER['SERVER_ADD']
 $_SERVER['QUERY_STRING']    =====>  "?name=mohamed & age=18 ..."
 $_SERVER['HTTP_REFERER']    =====> "where you coming from ? "
*/

if( $_SERVER['SERVER_NAME']=='localhost')
{
	echo "Your IP Is : 127.0.0.1 </br>";
}

echo $_SERVER['HTTP_REFERER'];
ECHO '</br>';
?>


<a href="<?php echo $_SERVER['PHP_SELF'];?>">Click</a>
