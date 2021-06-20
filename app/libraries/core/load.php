<?php 
    $controllerFile = "app/controllers/".$controller.".php";
    //echo $controllerFile;
    if (file_exists($controllerFile)) {
        //require_once(LIBS . 'core/' . $class . '.php');
        require_once($controllerFile);
        $controller=new $controller();
        if(method_exists($controller, $method))
        {
            $controller->{$method}($params);
        }
        else
        {
            require_once("app/controllers/error.php");
        }
    } else {
        require_once("app/controllers/error.php");
    }
?>