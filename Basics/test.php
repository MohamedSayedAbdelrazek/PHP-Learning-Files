<!--If a file contains only PHP code, it is preferable to omit the PHP closing tag at the end of the file.-->
<!--is a non case sensetive language-->
<!--   #this is comment in php    -->
<!--echo consider as a language construct not a function-->


<!-- concatination 

using '.' operator
<?php echo "mohamed"." sayed"?>
 <p> <?php echo "Hello" . " " . "PHP"?></p>
<p> <?php echo $num1." this is string concatenation";?></p>
<p> <?php echo 1.2; ?></p> will output 1.2
<p> <?php echo 1 . 2; ?></p> will output 12
<p> <?php echo 100.55 . "test"?></p> 100.55test
-->




<?php
$firstName="mohamed";
$age=18;
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title> <?php echo "Home Page"?></title>
    </head>
    <body>

    <?php  echo "<h1 class=\"1\">Hello from php</h1>"; ?>
    <?php echo $firstName?>

    </body>
</html>




