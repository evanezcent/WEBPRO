<?php

$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pesbuk";

// create variabel mysqli for connection database

$conn = new mysqli('localhost', 'root', '', 'pesbuk');
   
try {    
   
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
 
    die("Terjadi masalah: " . $e->getMessage());
}

?>