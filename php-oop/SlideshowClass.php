<?php



/**
 * Created by PhpStorm.
 * User: scottdeboer
 * Date: 9/6/16
 * Time: 6:08 PM
 */
class Slideshow
{
    private $conn;
    private $table_name = "slideshow";

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function displaySlideshow($q){
        $slideshowRequest = $this->conn->query($q);
        while ($retrieveCMS = $slideshowRequest->fetch()) {
            echo "<li>".$retrieveCMS['slideshowTitle']."</li>";
        }
    }

    function addSlideshowImage($params){
        $stmt = $this->conn->prepare("INSERT INTO slideshow (slideshowTitle, slideshowAlt, slideshowImg) VALUES (?, ?, ?)");
        $stmt->execute($params);
    }
}

?>