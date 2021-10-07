<?php

session_start();
if ($_SESSION['id']){
    header("Location: Dashboard.php");
}

require_once '../Models/Login.php';
$log= (new Login)->getItems();
foreach($log as $logger) {
    $em= $logger['email'];
    $pas =$logger['password'];
    $id = $logger['id'];
  }


if(isset($_POST['email']) && isset($_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password']; 

    if($em == $email && $password == $pas) {
        $_SESSION['id'] = $id;
        header("Location: Dashboard.php");  
} else {
    header("Location: Home.php");  
}
}

?>

<?php include 'Layouts/Header.php' ?>
    <div id="titleDiv">Hospital</div>
    <div id="loginDiv">
        <form class="editForm" action="" method="POST">
            <p class="inputDisc">Email</p>
            <input class="inputForm" type="text" name="email">
            <p class="inputDisc">Password</p>
            <input class="inputForm" type="text" name="password">
            <p><button class="logbtn">Submit</button></p> 
        </form>
    </div>
<?php include 'Layouts/Footer.php' ?>