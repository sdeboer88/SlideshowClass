<?php

include_once 'DBClass.php';
include_once 'SlideshowClass.php';

$database = new Config();
$db = $database->getConnection();

$homepageSlideshow = new Slideshow($db);
$homepageSlideshow->displaySlideshow("SELECT * FROM slideshow");

$postTitle = 'Test Title';$postTitleAlt = 'Test Alt';$postImg = 'Image Goes Here.jpg';
$homepageSlideshow->addSlideshowImage(array($postTitle, $postTitleAlt, $postImg));

?>