<?php

    require_once '../Models/Patients.php';
    require_once 'session.php';
    $location ='Location:Dashboard.php'; 
    $id = $_GET['id'];
    $table = 'users';
    $patients = (new Patients)->delete($id,$table,$location);
?>



