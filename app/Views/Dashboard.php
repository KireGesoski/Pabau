<?php

require_once '../Models/Patients.php';
require_once 'session.php';
$patients = (new Patients)->getItems();

?>

<?php include 'Layouts/Header.php' ?>
<div class="leftDiv">

<input id="search" class="search" type="text" placeholder="Insert ID">
<table class="table">
    <thead>
    <h2>List of Patients</h2>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone number</th>
        <th>Address</th>
        <th>Medical Condition</th>
        <th>Blood Type</th>
        <th></th>
        <th></th>
    </tr>
    </thead>
    <tbody id = "tbody">

    <?php foreach($patients as $patient){?>
    <tr id = "row_<?php echo $patient['id']?>">
        <td><input type="text" id = "id_<?php echo $patient['id']?>" value="<?php echo $patient['id']?>" readonly></td> 
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "name_<?php echo $patient['id']?>" value="<?php echo $patient['name']?>" readonly></td>
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "email_<?php echo $patient['id']?>" value="<?php echo $patient['email']?>" readonly></td>
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "pn_<?php echo $patient['id']?>" value="<?php echo $patient['phone_number']?>" readonly></td>
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "address_<?php echo $patient['id']?>" value="<?php echo $patient['address']?>" readonly></td>
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "mc_<?php echo $patient['id']?>" value="<?php echo $patient['medical_condition']?>" readonly></td>
        <td><input class="cl_<?php echo $patient['id']?>" type="text" id = "bt_<?php echo $patient['id']?>" value="<?php echo strtoupper($patient['blood_type'])?>" readonly></td>
        <td><div class="input-group-edit" id="ige_<?php echo $patient['id']?>"><button class="edBtn" id="btnEdit_<?php echo $patient['id']?>">Edit</button></a></div></td>
        <td><div class="delPaBtn" data-id="<?php echo $patient['id']?>"><a href="#ex1" rel="modal:open"><button>Delet</button></a></div> </td>
    </tr>
    <?php } ?>
    </tbody>   
</table>
</div>
<div class="rightDiv"></div>

<?php include 'Layouts/Footer.php' ?>

