<?php
include 'DB.php';

class contactsModel extends DB{
    public function __constract(){

    }

    public function getAll(){
        $sql = "select u.first, u.last, u.id, ud.email, ud.phone, ud.address, ud.userid
                from
                plant_users u join user_details ud on u.id = ud.id";

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

    public function checkLogin($uname='',$password=''){

        $sql = "select * from plant_users where un = :uname and pass = :password";
        $st = $this->db->prepare($sql);
        $st->execute(array(":uname"=>$uname, ":password"=>$password));

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

    public function update($id=0, $email='', $phone='', $address=''){

        $sql = "update user_details set email = :email, phone=:phone, address=:address where id =:id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id, ":email"=>$email, ":phone"=>$phone, ":address"=>$address));
    }

    public function delete($id=0){
        $sql = "delete from user_details where userid = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));

        $sql = "delete from plant_users where id = :id";
        $st = $this->db->prepare($sql);
        $st->execute(array(":id"=>$id));
    }

    public function add($first='', $last='', $un='', $pass='', $email='', $phone='', $address=''){

        $sql = "insert into plant_users (un, pass, first, last)
                            values (:un, :pass, :first, :last)";
        $st = $this->db->prepare($sql);
        $st->execute(array(":un"=>$un, ":pass"=>$pass, ":first"=>$first, ":last"=>$last));
        $userid = $this->db->lastInsertId();

        $sql = "insert into user_details (userid, email, phone, address)
                            values (:userid, :email, :phone, :address)";
        $st = $this->db->prepare($sql);
        $st->execute(array(":userid"=>$userid, ":email"=>$email, ":phone"=>$phone, ":address"=>$address));
    }

    }