<?php

class DB {

    public function __construct(){
        //create new PDO connection to DB
        //Dump error if connection issue
        try{
            $dsn = "mysql:host=127.0.0.1;port=8889;dbname=BDF1402";
            $db_user = "root";
            $db_password = "root";

            $this->db = new PDO($dsn, $db_user, $db_password);
        }
        catch (PDOException $error){
            var_dump($error);
        }
    }

}
?>