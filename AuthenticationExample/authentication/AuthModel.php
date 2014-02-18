<?php


class AuthModel {

    public $db;

    public function __construct($dsn, $user, $pass) {
        $this->db = new \PDO($dsn, $user, $pass);
        $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

//Call for the login function for the application
    public function retrieveUserByNamePass($name, $pass) {
        //prepared SQL statement with parameters passed within
        $statement = $this->db->prepare("
            SELECT user_id AS id, user_name AS name, user_fullname AS fullname
            FROM users
            WHERE (user_name = :name)
              AND (user_password = MD5(CONCAT(user_salt, :pass)))
        ");

        if($statement->execute(array(':name' => $name, ':pass' => $pass))){
            //fetches the rows
            $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
            //returns the first user and not all of them
            if(count($rows) === 1) {
                return $rows[0];
            }
        }
        return false;
    }

}