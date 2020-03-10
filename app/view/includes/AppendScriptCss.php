<?php

class AppendScriptCss{

    public function static append(){
        echo '<link href="' . SROOT . 'css/custom.css" type="text/css">';
        echo '<script src="' . SROOT . 'js/custom.js" type="text/javascript">';
        echo '<script src="' . SROOT . 'js/jquery-3.4.1.min.js" type="text/javascript">';
        
    }
}