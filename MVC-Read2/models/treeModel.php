<?php

include 'DB.php';

class treeModel extends DB{

    public function __constract(){

    }

    public function getAll(){
        $sql = "select * from Trees";
        $st = $this->db->prepare($sql);
        $st->execute();

        return $st->fetchAll();

    }

    public function getOne($id=0){

        $sql = "select * from tree_details where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));

        return $st->fetchAll();

    }

} 