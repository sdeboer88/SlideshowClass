<?php

/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 9/6/16
 * Time: 6:08 PM
 */
class Slideshow
{
    // Next comes the variable list as defined above
    // Note the key word 'var' and then a comma-separated list

    var $slideshowID,
        $slideshowTitle,
        $slideshowAlt,
        $slideshowImg,
        $dbHost,
        $dbUser,
        $dbName,
        $dbPass,
        $dbUserTable;

    // Next come all our methods with their argument lists
    // The syntax for these is just like normal PHP functions
    // Remember, this is just a skeleton, we will fill in these functions later

    function Slideshow() {
        $this->dbHost = 'localhost';
        $this->dbUser = 'root';
        $this->dbName = 'slideshow';
        $this->dbPass = 'root';
        $this->dbUserTable = 'slideshow';
    }

    function displaySlideshow(){
        try {
            $db = new PDO('mysql:dbname='.$this->dbHost.';host='.$this->dbHost.'', $this->dbUser, $this->dbPassword);
            echo 'Connected';
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }
    }


}
?>