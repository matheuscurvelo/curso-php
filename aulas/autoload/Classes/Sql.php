<?php
    <pre>
    class Sql extends PDO{
        
        private $conn;
        
        function __Construct(){
            $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7","root","root");
        }

        private function setParams($comando,$params){
            $stmt = $this->conn->prepare($comando);
            foreach ($params as $key => $value) {
                $stmt->bindParam($key,$value);
                //echo "$key => $value<br>";
            }
            echo $stmt->execute();
            return $stmt;
        }

        private function comando($comando,$params = array()){
            $this->setParams($comando,$params);
        }

        public function select($comando,$params = []): array{
            $stmt = $this->setParams($comando,$params);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insert($comando,$params = array()){
            $this->comando($comando,$params);
            return $this->conn->lastInsertId();
        }
    }
    </pre>
?>
