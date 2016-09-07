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
        $this->dbTable = 'slideshow';
    }

    function displaySlideshow($q){
        try {
            $db = new PDO('mysql:dbname='.$this->dbName.';host='.$this->dbHost.'', $this->dbUser, $this->dbPass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        $slideshowRequest = $db->query($q);
        while ($retrieveCMS = $slideshowRequest->fetch()) {
            echo "<li>".$retrieveCMS['slideshowTitle']."</li>";
        }
    }

    function addSlideshowImage($q,$params){
        try {
            $db = new PDO('mysql:dbname='.$this->dbName.';host='.$this->dbHost.'', $this->dbUser, $this->dbPass);
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
        }

        $stmt = $db->prepare($q);
        // Execute statement
        $stmt->execute($params);

    }

}

$homepageSlideshow = new Slideshow;
$homepageSlideshow->displaySlideshow("SELECT * FROM slideshow WHERE slideshowID = '2'");
$homepageSlideshow->addSlideshowImage("INSERT INTO table (field1, field2, field3) VALUES (?, ?, ?)", array($id, $name, $pass))

sql($db, "INSERT INTO table (field1, field2, field3) VALUES (?, ?, ?)", array($id, $name, $pass));
?>