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

} 