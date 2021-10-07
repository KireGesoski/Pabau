<!DOCTYPE html>
<html>
<head>
    <title>Pabau</title>
    <link href="../../../Public/styles.css" rel="stylesheet">
    <link href="../../Public/styles.css" rel="stylesheet">

    <script href="../Public/javascript.js" rel="stylesheet"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>

<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />
</head>
<body>
   <div class="header">
       <div class="lhdiv">Pabau Clinic</div><div class="rhdiv">
       <?php if ($_SESSION['id']){?> 
        <a href="logout.php" class="logout">Logout</a></div>
        <?php }else {?>
            <a href="" class="login">Login</a></div>
       <?php }?>
        
   </div>
   <div class="main">

