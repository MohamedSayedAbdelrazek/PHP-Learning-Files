<?php
$lessonName="concatenation";

$homePage="PHP- $lessonName";
$heading="Welcome to ".$lessonName;
$brief="This lesson talk about ".$lessonName." and how to use it";
$languages="<li>PHP</li>";
$languages.="<li>HTML</li>";
$languages.="<li>CSS</li>";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
       
        <title> <?php echo $homePage;?></title>
    </head>
    <body>
        <h1> <?php echo $heading;  ?></h1>
        <p> <?php echo $brief;     ?></p>   
        <h2>The Languages I love</h2>    
        <ul>
            <?php echo $languages;?>
        </ul>
        <?php echo phpversion();?>
        <?php
        $name = 'Linus';
        echo '<h1>Hello $name</h1>';
        echo "<h1>Hello $name</h1>";
        ?>
    </body>
</html>



