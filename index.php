<?php
// Include Config
require 'config.php';

// Include Bootstrap file
require 'classes/Bootstrap.php';
require 'classes/Controller.php';
require 'classes/Model.php';

require 'controllers/home.php';
require 'controllers/shares.php';
require 'controllers/users.php';

require 'models/home.php';
require 'models/share.php';
require 'models/user.php';

// The request comes in the form of $_GET super global
// When the constructor runs it will call a method called createController()
$bootstrap = new Bootstrap($_GET);
$controller = $bootstrap->createController();

if ($controller) {
    $controller->executeAction();
}

?>