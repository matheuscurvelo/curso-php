<?php
    class Sql extends PDO{
        
        private $conn;
        
        function __Construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");
        }

        private function setParams($statement, $parameters = array()){

            foreach ($parameters as $key => $value) {
                
                $this->setParam($statement, $key, $value);
    
            }
    
        }
    
        private function setParam($statement, $key, $value){
    
            $statement->bindParam($key, $value);
    
        }
    
        public function query($rawQuery, $params = array()){
    
            $stmt = $this->conn->prepare($rawQuery);
    
            $this->setParams($stmt, $params);
    
            $stmt->execute();
            
            return $stmt;
    
        }
    
        public function select($rawQuery, $params = array()):array
        {
    
            $stmt = $this->query($rawQuery, $params);
    
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        }

        public function insert($rawQuery, $params = array()):int
        {
    
            $stmt = $this->query($rawQuery, $params);
            return $this->conn->lastInsertId();
    
        }

        public function update($rawQuery, $params = array()):int
        {
            $stmt = $this->query($rawQuery, $params);
            return $stmt->rowCount();
        }
    
        public function delete($rawQuery, $params = array()):int
        {
            $stmt = $this->query($rawQuery, $params);
            return $stmt->rowCount();
        }
    }
?>
