<?php  
$db = new PDO("mysql:host=localhost;dbname=banco", "root", "");
  
$db->exec("CREATE TABLE clientes(id INT AUTO_INCREMENT, 
   nome VARCHAR(255), email VARCHAR(255)) ");
?>
