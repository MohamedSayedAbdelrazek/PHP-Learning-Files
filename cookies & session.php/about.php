<?php
session_start();

echo "Hello ".$_SESSION['name']." , How Are You ? <br>";

require_once('counter.php');

echo "<a href='4-session training - simple count.php'>Home</a>";