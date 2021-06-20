<?php 
    spl_autoload_register(function ($class) {
        if (file_exists("app/libraries/".'core/'.$class .'.php')) {
            require_once("app/libraries/".'core/'.$class .'.php');
        }
    });
?>