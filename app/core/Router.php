<?php

class Router {

    private static $arr = [];

    public static function setURL($url){
        self::$arr = explode('/',ltrim($url, '/'));
    }

    public static function getURL(){
        
    }

}