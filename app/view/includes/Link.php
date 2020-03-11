<?php

class Link{

    public static function addLink(){
        echo '<link href="' . SROOT . 'css/custom.css" type="text/css">';
        echo '<script src="' . SROOT . 'js/custom.js" type="text/javascript"></script>';
        echo '<script src="' . SROOT . 'js/jquery-3.4.1.min.js" type="text/javascript"></script>';
    }
}