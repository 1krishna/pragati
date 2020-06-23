<?php
    session_start();
    if(!isset($_SESSION['user_name'])){
        die;
    }else{
        include "./connect.php";
    }
?>