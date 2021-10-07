<?php

spl_autoload_register(function($classname) {
    $explode = explode('\\',$classname);
    $class =end($explode);
 
         if(file_exists('../Controllers/'.$class.'.php')){
             include_once '../Controllers/'.$class.'.php';
         }else if(file_exists('../Models/'.$class.'.php')){
             include_once '../Models/'.$class.'.php';
         }else {
             echo "error";
    }	
});   
