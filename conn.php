<?php
  // MySQL
  $db = new PDO("mysql:host=localhost;dbname=banco", "root", "senha");
                         
  // PostgreSQL
                         
  $db = new PDO("pgsql:host=localhost;dbname=banco", "root", "senha");
                         
  // SQLite
  
  $db = new PDO("sqlite:banco.sqlite");
?>
