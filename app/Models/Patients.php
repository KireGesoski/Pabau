<?php

require_once 'ListItems.php';

class Patients extends ListItems {
    
    public function query(){
        return $sql= "SELECT users.id,users.name,users.email,users.type,address.address,phones.phone_number,medical_conditions.medical_condition,medical_conditions.blood_type
        FROM users JOIN phones ON phones.user_id=users.id
                   JOIN address ON address.user_id=users.id
                   JOIN medical_conditions ON medical_conditions.user_id=users.id 
        WHERE users.type = 1                       
        ORDER BY users.id";    
    } 

    //if you want to add create item option
    
    // public function get_object_data($data){
        
    //    return  $new_object=[
    //       'name'=> $_POST['name'],
    //       'sku'=>$_POST['SKU'],
    //       'price'=>$_POST['price'],
    //       'type_id'=>$_POST['type_id'],
    //       'weight'=>$_POST['weight'],
    //   ];
    // }
}