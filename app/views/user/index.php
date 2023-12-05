<?php
    if (session_status() === PHP_SESSION_NONE) 
    session_start();
    if ($_SESSION['role'] === 'User'){
        if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
            header("Location: ../login.php");
            exit();
        } else {
            if (!empty($_GET['page'])) {
                include '' . $_GET['page'] . '/home.php';
            } else {
                include 'home.php';
            }
        }
    } else {
        echo 'ga iso blok';
    }
?>