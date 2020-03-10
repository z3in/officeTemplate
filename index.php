<?php

include 'app/core/includes.php';
if(isset($_SERVER['PATH_INFO'])){
    $url = $_SERVER['PATH_INFO'];
    Router::setURL($url);
}else{
    $url = [];
}

Router::getURL();