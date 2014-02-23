<?php

include 'DB.php';

class treeModel extends DB{

    public function __constract(){

    }

    public function getAll(){
        $sql = "select t.name, t.id, td.height, td.description, td.id
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

        public function update($id=0, $height='', $description=''){

            $sql = "update tree_details set height = :height, description = :description where id = :id";
            $st = $this->db->prepare($sql);
            $st->execute(array(":id"=>$id, ":height"=>$height, ":description"=>$description));
        }

        public function delete($id=0){

        $sql = "delete from tree_details where treeid = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));


        $sql = "delete from Trees where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));
        }

        public function add($user_name = '', $user_password='', $name = '',$height ='', $description = ''){

        $sql = "insert into Trees (name, user_name, user_password)
							values (:name, :user_name, :user_password)";
        $st = $this->db->prepare($sql);
        $st-> execute(array(":user_name"=> $user_name, ":user_password" => $user_password, ":name" => $name));
        $treeid = $this->db->lastInsertId();


        $sql = "insert into tree_details (treeid, height, description)
                            values (:treeid, :height, :description)";
        $st = $this->db->prepare($sql);
        $st->execute(array(":treeid"=>$treeid, ":height"=>$height, ":description"=>$description));
        }

}