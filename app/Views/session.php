<?php
session_start();
if(!isset($_SESSION['id'])) {
    header("Location: Home.php");
    die();
}else {
    //header("Location: Dashboard.php");
}
