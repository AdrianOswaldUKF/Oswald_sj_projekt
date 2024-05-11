<?php

    class Read extends Database{

        private $db;

        public function __construct()
        {
            $this->db = $this->db_connection();
        }

        public function select($table){

            try{

                $sql = "SELECT * FROM ".$table;
                $query = $this->db->query($sql);
                $unity_accordion = $query->fetchAll();
                return $unity_accordion;

            }catch(PDOException $e){
                echo $e->getMessage();
            }
        }

    }

?>