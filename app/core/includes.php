<?php
include('config.php');
include('Router.php');



//autoload

function __autoload($className){

    if(file_exists(ROOT . DS . 'app/core' . DS . $className . 'php')){
        require_once(ROOT . DS . 'app/core' . DS . $className . 'php');
    }
    elseif(file_exists(ROOT . DS . 'app/model' . DS . $className . 'php')){
        require_once(ROOT . DS . 'app/model' . DS . $className . 'php');
    }
    elseif(file_exists(ROOT . DS . 'app/view/includes'. DS . $className . 'php')){
        require_once(ROOT . DS . 'app/view/includes'. DS . $className . 'php');
    }
    elseif(file_exists(ROOT . DS . 'app/controller' . DS . $className . 'php')){
        require_once(ROOT . DS . 'app/controller' . DS . $className . 'php');
    }else{
        echo 'cannot find Class';
    }

}