<?php
 class DbConnect{
     private $host = 'localhost';
     private $dbname = 'challenge';
     private $user = 'root';
     private $pass = 'root';
     private $db;

     public function getDb(){
         try{
             $this ->db = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbname, $this->user, $this->pass);
             $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         }catch (PDOException $e){
             echo $e->getMessage();
         }
         return $this->db;
     }
 }