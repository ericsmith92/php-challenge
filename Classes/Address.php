<?php
    class Address{

        private $db;

        public function __construct($db){
            $this->db = $db;
        }

        //add address
        public function addAddress($address){
            $query = "INSERT INTO addresses
                       (address)
                       VALUES(:address)";
            $pdostmt = $this->db->prepare($query);
            $pdostmt->bindValue(':address', $address, PDO::PARAM_STR);
            $row = $pdostmt->execute();
            $pdostmt->closeCursor();

            return $row;
        }

        //return 5 most recent addresses
        public function getAddresses(){
            $query = "SELECT * FROM addresses
                       ORDER BY id DESC
                       LIMIT 5";
            $pdostmt = $this->db->prepare($query);
            $pdostmt->execute();
            $addresses = $pdostmt->fetchAll();
            $pdostmt->closeCursor();

            return $addresses;
        }
    }