<?php

namespace App\Core;

class Router {

    function __construct()
    {
        $this->controllerName = ($_GET["t"] ?? 'Site') . 'Controller';
        $this->actionName = 'action' . ($_GET["a"] ?? 'home');
        // $view = 'siteView';
    }

    public function run() {

       $className = "App\\Controller\\{$this->controllerName}";

        if (class_exists($className)) {
            $MVC = new $className();

            if (method_exists($MVC, $this->actionName)) {
                $MVC->{$this->actionName}();
            } else {
                echo "нет такого метода: $this->actionName";
            }
        } else {
            echo "нет такого класса: $this->controllerName";
        }

    }

    

}

?>