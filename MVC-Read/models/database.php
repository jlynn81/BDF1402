<?php
class database{

    public function _creation(){
        //Attempt to create new connection with database
        try{
            $dsn = "mysql:dbname=BDF1402;host=local";
            $db_user = "root";
            $db_password = "root";

            $this->db = new PDO($dsn, $db_user, $db_password);

        }
        catch (PDOException $error){
            //if there is an error with the connection, perform dump/removal
            var_dump($error);
        }
    }
}
?>