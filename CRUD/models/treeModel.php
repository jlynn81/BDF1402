<?php

include 'DB.php';

class treeModel extends DB{

    public function __constract(){

    }

    public function getAll(){
        $sql = "select t.NAME, t.treeId, td.height, td.description, td.id
        from
        Trees t join tree_details td on t.id = td.id";

        $st = $this->db->prepare($sql);
        $st->execute();

        return $st->fetchAll();

    }

    public function getOne($treeId=0){

        $sql = "select * from tree_details where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute[array(":id"=>$treeId)];

        return $st->fetchAll();

    }

    public function checkLogin($user_name='', $user_password=''){

        $sql = "select * from TREES where user_name = :username and user_password = :password" ;
        $st = $this->db->prepare($sql);
        $st->execute(array(":username"=>$user_name, ":user_password"=>$user_password));

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

        public function update($Id=0, $height='', $description=''){

            $sql = "update tree_details set height = :height, description = :description where id = :id";
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$Id, ":height"=>$height, ":description"=>$description));
        }

        public function delete($id=0){

        $sql = "delete from tree_details where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));


//        $sql = "delete from TREES where treeId = :id";
//        $st = $this->db->prepare($sql);
//        $st->execute[array(":id"=>$treeId)];
        }

        public function add($user_name = '', $user_password='', $NAME = '',$height ='', $description = ''){

        $sql = "insert into TREES (user_name, user_password, NAME)
							values (  :user_name, :user_password, :NAME)";
        $st = $this->db->prepare($sql);
        $st-> execute(array(":username"=> $user_name, ":user_password" => $user_password, ":NAME" => $NAME));
        $id = $this->db->lastInsertId();


        $sql = "insert into tree_details (id, height, description)
                            values (:id, :height, :description)";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id, ":height"=>$height, ":description"=>$description));
        }

}