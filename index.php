<?php
// Include Config
require 'config.php';

// Include Bootstrap file
require 'classes/Bootstrap.php';

// The request comes in the form of $_GET super global
// When the constructor runs it will call a method called createController()
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

?>