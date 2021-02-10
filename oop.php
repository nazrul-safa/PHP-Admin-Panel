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
    function count($table_name)
    {
        
        $count_query = "SELECT COUNT(*) as total FROM $table_name";
        $from_db = mysqli_fetch_assoc(mysqli_query($this->db_connect(), $count_query));
        return $from_db['total'];
    }
 }
 $db = new DB;
 foreach ($db->all('users') as $user){
 print_r($user['full_name']);
 echo "<br>";
 }
foreach ($db->all('contact') as $user) {
    print_r($user);
    echo "<br>";
}
echo "<br>";
print_r($db->count('users'));
echo "<br>";
print_r($db->count('contact'));
echo "<br>";
print_r($db->count('users'));

?>