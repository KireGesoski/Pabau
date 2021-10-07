<?php

require_once 'Database.php';

abstract class ListItems  {

  protected $connect;

  public function __construct(){
      $this->connect= Database::connect($this); 
  }
  
  //show items
  public function getItems(){
    $sql = $this->query();
    $statement=$this->connect->prepare($sql);
    $statement->execute();
    $result=$statement->fetchAll(\PDO::FETCH_ASSOC);
    return $result;
  }
  
  //delete item
  public function delete($id,$table,$location){
    $id = intval($id);
    $sql = "DELETE FROM $table WHERE id = $id";
    $statement=$this->connect->prepare($sql);
    try {
       $statement->execute();
    } catch(PDOException $error) {
      echo "Error";
  }
  header($location);   
 }

//edit item that is used by AJAX.Otherwise this method is abstract 100%

    public function updateItem($id, $namey, $email ,$addressa, $phone, $medical_condition , $blood_type){
      
    $sql1 = "Update users set name = '$namey', email = '$email'  where id = $id";
    $sql2 = "Update address set address = '$addressa' where user_id = $id";
    $sql3 = "Update phones set phone_number = '$phone' where user_id = $id";
    $sql4 = "Update medical_conditions set medical_condition = '$medical_condition', blood_type = '$blood_type' where user_id = $id";
    $statement1 = $this->connect->prepare($sql1);
    $statement2 = $this->connect->prepare($sql2);
    $statement3 = $this->connect->prepare($sql3);
    $statement4 = $this->connect->prepare($sql4);
    try{
      $statement1->execute();
      $statement2->execute();
      $statement3->execute();
      $statement4->execute();
    }catch (\PDOException $e){
      echo "Error";
   }
}   

 
// public function addItem($data $location){
    
//   if($_SERVER['REQUEST_METHOD'] == "POST") {
//     $table=$this->gettable();
//     $new_object = $this->get_object_data($data);
    
//    $sql = sprintf(
//      "INSERT INTO %s (%s) values (%s)",
//      $table,
//      implode(", ", array_keys($new_object)),
//      ":" . implode(", :", array_keys($new_object))
//  );

//    $statement = $this->connect->prepare($sql);
//    try{
//      $statement->execute($new_object);
//    }catch (\PDOException $e){
//      echo "Error";
//    }
//    header($location);
//   }   
// }
 

}
