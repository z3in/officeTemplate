<?php
include('config.php');
include('Router.php');



//autoload

function __autoload($className){

    if(file_exists(ROOT . DS . $className . '.php')){
        require_once(ROOT . DS . $className . '.php');
    }
    elseif(file_exists(ROOT . DS . '../model' . DS . $className . '.php')){
        require_once(ROOT . DS . '../model' . DS . $className . '.php');
    }
    elseif(file_exists(ROOT . DS . '../view/includes'. DS . $className . '.php')){
        require_once(ROOT . DS . '../view/includes'. DS . $className . '.php');
    }
    elseif(file_exists(ROOT . DS . '../controller' . DS . $className . '.php')){
        require_once(ROOT . DS . '../controller' . DS . $className . '.php');
    }else{
        echo 'cannot find Class';
    }

}