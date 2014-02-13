<?php
/**
 * Created by PhpStorm.
 * User: jlynn81
 * Date: 2/13/14
 * Time: 5:06 AM
 */

class TreeModel {
    public function __construct($dsn, $user, $pass) {

        $db = new \PDO($dsn, $user, $pass);

    }

} 