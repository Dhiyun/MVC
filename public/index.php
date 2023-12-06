<?php
if (session_status() === PHP_SESSION_NONE) 
    session_start();
    
include_once '../app/init.php';
$app = new App;
?>
