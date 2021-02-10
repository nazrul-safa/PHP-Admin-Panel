<?php

 class DB{ 
   function db_connect(){
      $db_connect = mysqli_connect('localhost', 'root', '', 'safaa');
      return $db_connect;
   }
   function all($table_name){  
      $select_query = "SELECT * FROM $table_name";
      $from_db = mysqli_query($this->db_connect(), $select_query);
      return $from_db;
   }
   function insert($table_name_insert , $service_icon, $service_title, $service_description){
      $insert_query = "INSERT into $table_name_insert(service_icon, service_title, service_description) VALUES('$service_icon','$service_title','$service_description')";
      $from_db_services = mysqli_query($this->db_connect(), $insert_query);
      return $from_db_services;
   }
   function update_service($table_name_update, $what_to_do, $id)
   {
      $update_query = "UPDATE $table_name_update SET status='$what_to_do' WHERE id= $id";
      $from_db_services_update = mysqli_query($this->db_connect(), $update_query);
      return $from_db_services_update;
   }
 }
 $db = new DB;

?>