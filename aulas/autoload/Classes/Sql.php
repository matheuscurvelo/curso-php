<?php
    class Sql extends PDO{
        
        private $conn;
        
        function __Construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=db_gie","mmcs","");
        }

        private function setParams($stmt,$params){
            foreach ($params as $key => $value) {
                $stmt->bindParam($key,$value);
            }
        }

        public function query($comando,$params = []){
            $stmt = $this->conn->prepare($comando);
            $this->setParams($stmt,$params);
            $stmt->execute();
            return $stmt;
        }

        public function select($comando,$params = []): array{
            $stmt = $this->query($comando,$params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert($comando,$params = []){
            $this->query($comando,$params);
            return $this->conn->lastInsertId();
        }
    }
?>