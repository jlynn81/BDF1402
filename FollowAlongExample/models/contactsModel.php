<?php
include 'DB.php';

class contactsModel extends DB{
    public function __constract(){

    }

    public function getAll(){
        $sql = "select u.user_fullname, u.user_name, u.user_id, ud.email, ud.phone, ud.address, ud.id
                from
                users u join user_details ud on u.user_id = ud.id";
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

    public function checkLogin($user_name='',$user_password=''){

        $sql = 'select * from users where user_name = :user_name and user_password = :user_password';
        $st = $this->db->prepare($sql);
        $st->execute(array(":user_name"=>$user_name, ":user_password"=>$user_password));

        $num = $st->rowCount();

        if($num>0){
            $_SESSION['loggedin'] = 1;
        }else{
            $_SESSION["loggedin"] = 0;
        }

        return $st->fetchAll(PDO::FETCH_COLUMN, 0);

        }

        public function logout(){
            $_SESSION["loggedin"] = 0;
        }

    }