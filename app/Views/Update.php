<?php

require_once '../Models/Patients.php';
 
$id = $_GET['id'];
$namey = $_GET['name'];
$email = $_GET['email'];
$addressi = $_GET['address'];
$phone_number = $_GET['phone_number'];
$medical_condition = $_GET['medical_condition'];
$blood_type = $_GET['blood_type'];
$patients = (new Patients)->updateItem($id, $namey, $email, $addressi, $phone_number, $medical_condition, $blood_type);

?>

 
 