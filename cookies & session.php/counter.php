<?php
if(empty($_SESSION['counter'])) {

    $_SESSION['counter']=1;

}
else {
    $_SESSION['counter']++;
}

echo "You Viewed This Page ". $_SESSION['counter']." Times</br>";