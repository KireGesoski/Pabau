<?php

require_once 'ListItems.php';

class Login extends ListItems {
    
    public function query(){
        return $sql= "SELECT users.id,users.name,users.email,users.password,users.type
        FROM users 
        WHERE users.type = 0";    
    }
}        