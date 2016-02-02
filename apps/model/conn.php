<?php

class DbConnection {

    private static $DB_HOST = 'localhost';
    private static $DB_NAME = 'tare_control';
    private static $DB_USER = 'root';
    private static $DB_PASS = '';
    public $conn;

    function __construct() {
        
        $this->conn = new PDO('mysql:host=' . DbConnection::$DB_HOST . ';dbname=' . DbConnection::$DB_NAME, DbConnection::$DB_USER, DbConnection::$DB_PASS);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

}
