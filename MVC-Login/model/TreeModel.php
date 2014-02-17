<?php


class TreeModel {

    private $db;

    //creates the constructor function for the TreeModel
    public function __construct($dsn, $user, $pass) {

        try {
            $this->db = new \PDO($dsn, $user, $pass);
            $this->db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        }
        catch (\PDOException $e) {
            var_dump($e);

        }

    }

    /**
     * @return array Records from the database, as an array
     */

    public function getTreeData() {
        $statement = $this->db->prepare("
            SELECT Name, Height, Description
            FROM TREES
            WHERE (TREES.TREEID)
            ORDER BY Name
        ");

        try{
            //executes the SQL statement and returns rows
            if ($statement->execute()) {
                $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                return $rows;
            }
        }
        //if the execution fails a PDO execution will generate
        catch (\PDOException $e) {
            echo "Database for model was not queried.";
            var_dump($e);
        }

        return array();

    }

    public function getFlowerData() {
        $statement = $this->db->prepare("
            SELECT Name, Color, Description
            FROM FLOWERS
            WHERE (FLOWERS.FLOWERID)
            ORDER BY NAME

        ");

        try{
            if($statement->execute()) {
                $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                return $rows;
            }
        }
        catch (\PDOException $e) {
            echo "Database for model was not queried.";
            var_dump($e);
        }
        return array();
    }

    //Call for the login function for the application
    public function retrieveUserByNamePass($user, $pass) {

        if( (strlen($pass) < 50) || preg_match('/[^a-z_\-0-9]/i', $user) ) return false;

        //prepared SQL statement with parameters passed within
        $statement = $this->db->prepare("
            SELECT user_id AS id, user_name AS name, user_fullname AS fullname
            FROM users
            WHERE (user_name = :name)
              AND (user_password = MD5(CONCAT(user_salt, :pass)))
        ");

        $statement->bindParam(':name', $user, PDO::PARAM_STR);
        $statement->bindParam(':password', $pass, PDO::PARAM_STR);

        try {
            if ($statement->execute()){
                return$statement->fetch(\PDO::FETCH_ASSOC);
            }
        }
        catch (\PDOException $e){
            die('Could not execute query. '.$e);
        }
        return false;
    }

} 