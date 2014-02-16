<?php
include 'DB.php';

class contactsModel {
    public function __constract(){

    }

    public function getAll(){
        $sql = "select * from users";
        $st = $this->db->prepare($sql);
        $st->execute();

        return $st->fetchAll();
    }

    public function getOne($id=0){

        $sql = "select * from user_details where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));

        return $st->fetchAll();
    }

} 