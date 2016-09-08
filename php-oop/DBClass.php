<?php

/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 9/7/16
 * Time: 6:45 PM
 */
class Config
{

// specify your own database credentials
    private $host = "localhost";
    private $db_name = "slideshow";
    private $username = "root";
    private $password = "root";
    public $conn;

// get the database connection
    public function getConnection()
    {

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
        } catch (PDOException $exception) {
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}

?>