<?php

//Include the database.php file
include 'database.php';

//Creates the class that will extend the database
class contactsModel extends database{
    public function _constract(){

    }
    public function getAll(){
        //retrieves user information
        $sql = "select * from users";
        $st = $this->db->prepare($sql);
        $st->execute();

        //returns information back
        return $st->fetchAll();
    }
    //gets/retrieves one user id
    public function getOne($userId=0){
        $sql = "select * from userInfo where userId = :$userId";
        $st = $this->db->prepare($sql);
        $st->execute(array(":userId"=>$userId));

        return $st->fetchAll();

    }
}