<?php 
    // destroy session
    session_start();
    session_unset();
    session_destroy();
    
    // redirect to home page
    header('Location: /Lawss/login.php');
    die;
?>

