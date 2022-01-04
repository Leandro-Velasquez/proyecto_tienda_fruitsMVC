<?php

spl_autoload_register(function($className){
    if(file_exists('Controllers/'.$className.'.php')){
        require 'Controllers/'.$className.'.php';
    }
    else if(file_exists('Models/'.$className.'.php')){
        require 'Models/'.$className.'.php';
    }
    else if(file_exists('Core/'.$className.'.php')){
        require 'Core/'.$className.'.php';
    }
});

?>