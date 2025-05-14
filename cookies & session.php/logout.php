<?php

session_start(); // To Resume The Session 

session_unset();

session_destroy();

echo "<pre>";
print_r($_SESSION);
echo "</pre>";