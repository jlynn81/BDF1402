<?php
/**
 * Created by PhpStorm.
 * User: jlynn81
 * Date: 2/13/14
 * Time: 5:06 AM
 */

class TreeModel {

    private $db;

    //creates the constructor function for the TreeModel
    public function __construct($dsn, $user, $pass) {

        try {
            $this->db = new \PDO($dsn, $user, $pass);
        }
        catch (\PDOException $e) {
            var_dump($e);

        }



    }



    public function getLatestTree() {
        $statement = $this->db->prepare("
            SELECT Name, Height, Description
            FROM TREES
            WHERE (TREEID > 0)
            ORDER BY Name, Height, Description
        ");

        try{
            if ($statement->execute()) {
                $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                return $rows;
            }
        }
        catch (\PDOException $e) {
            echo "Database for Trees was not queried.";
            var_dump($e);
        }

        return array();
    }

} 