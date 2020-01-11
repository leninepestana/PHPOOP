<?php
class Bootstrap {
    private $controller;
    private $action;
    private $request;

    
    public function __construct($request) {
        $this->request = $request;
        // Check for the controller
        if ($this->request['controller'] == "") {
            $this->controller = 'home';
        } else {
            $this->controller = $this->request['controller'];
        }

        // Check for the action
        if ($this->request['action'] == "") {
            $this->action = 'index';
        } else {
            $this->action = $this->request['action'];
        }

        //echo "</br>" . $this->action;   
    }

    public function createController() {
        // Check class
        if (class_exists($this->controller)) {
            $parents = class_parents($this->controller);
            // Check extend
            if (in_array("Controller", $parents)) {
                // Check if controller has the action
                if (method_exists($this->controller, $this->action)) {
                    return new $this->controller($this->action, $this->request);
                } else {
                    // Method does not exist
                    echo "<h1>Method does not exist</h1>";
                    return;
                }
            } else {
                // Base controller Does Not Exist
                echo "<h1>Base controller not found</h1>";
                return;
            }
        } else {
            // The Controller Class Does Not Exist
            echo "<h1>Controller class does not exist</h1>";
            return;
        }
    }
}
?>