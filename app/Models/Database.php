<?php 
//static function for connecting to DB
 abstract class Database {

    public static function connect($object){
         
         $host = "localhost";
         $user = "root";
         $pwd = "Kire_12345@";
         $dbName = "kire";
    
         $options = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, 
            PDO::ATTR_EMULATE_PREPARES   => false
        ];
            try {
                $dsn = "mysql:host=" . $host . ";dbname=" . $dbName;
                return $pdo = new PDO($dsn, $user, $pwd, $options);
                
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        
 }