<?php

class DatabaseConnection {

    use Singleton;

    public $dbConn = null;

    private function __construct() {
        $this->dbConn = new PDO("mysql:host=localhost;dbname=bazardb","root","");
    }

}