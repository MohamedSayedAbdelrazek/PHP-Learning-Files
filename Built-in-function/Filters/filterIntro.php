<?php

/*
to filter Harmful content 
filter_var(variable , filter_type , options)
*/ 


foreach(filter_list() as $filter) {
    echo $filter ."</br>";
}

?>

<form action="chk.php" method="POST">
    <input type="text" name="test" >
    <input type="submit" value="send">
</form>