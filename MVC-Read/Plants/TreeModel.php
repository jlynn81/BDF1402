<?php


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
            WHERE (TREEID)
            ORDER BY Name, Height, Description
        ");

        try{
            if ($statement->execute()) {
                $rows = $statement->fetchAll(\PDO::FETCH_ASSOC);
                return $rows;
            }
        }
        catch (\PDOException $e) {
            echo "Database for Plants was not queried.";
            var_dump($e);
        }

        return array();
    }


} 