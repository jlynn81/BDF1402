<?php

include 'DB.php';

class treeModel extends DB{

    public function __constract(){

    }

    public function getAll(){
        $sql = "select t.NAME, t.id, td.height, td.description, td.id
        from
        TREES t join tree_details td on t.id = td.id";

        $st = $this->db->prepare($sql);
        $st->execute();

        return $st->fetchAll();

    }

    public function getOne($id=0){

        $sql = "select * from tree_details where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute[array(":id"=>$id)];

        return $st->fetchAll();

    }

    public function checkLogin($username='', $password=''){

        $sql = "select * from TREES where user_name = :username and user_password = :password" ;
        $st = $this->db->prepare($sql);
        $st->execute[array(":user_name"=>$username, ":user_password"=>$password)];

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

        public function update($id=0, $height='', $description=''){

            $sql = "update tree_details set height = :height, description = :description where id = :id";
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$id, ":height"=>$height, ":description"=>$description));
        }

        public function delete($id=0){

        $sql = "delete from tree_details where id =:id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));

        $sql = "delete from TREES where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute[array(":id"=>$id)];
        }

        public function add($user_name = '', $user_password='', $NAME = '', $height ='', $description = ''){

        $sql = "insert into TREES (user_name, user_password, NAME, height, description)
							values (  :user_name, :user_password, :NAME, :height, :description)";
        $st = $this->db->prepare($sql);
        $st-> execute(array(":user_name"=> $user_name, ":user_password" => $user_password, ":NAME" => $NAME, ":height" => $height, ":description"=>$description));

        }

}