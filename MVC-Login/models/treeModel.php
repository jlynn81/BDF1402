<?php

include 'DB.php';

class treeModel extends DB{

    public function __constract(){

    }

    public function getAll(){
        $sql = "select t.name, t.id, td.name, td.height, td.description, td.id
        from
        Trees t join tree_details td on t.id = td.id";

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

    public function checkLogin($user_name='', $user_password=''){

        $sql = "select * from Trees where user_name = :user_name and user_password = :user_password" ;
        $st = $this->db->prepare($sql);
        $st->execute(array(":user_name"=>$user_name, ":user_password"=>$user_password));

        $num = $st->rowCount();

        if($num>0){
            $_SESSION["successful"] = 1;
        }else{
            $_SESSION["successful"] = 0;
        }

        return $st->fetchAll(PDO::FETCH_COLUMN, 0);

        }
        public function logout(){
            $_SESSION["successful"] = 0;
        }

} 