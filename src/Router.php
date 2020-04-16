<?php 

namespace App;

class Router{

    private $_url;
    private $_routes=[];

    public function __construct($url){
        $this->_url = $url;
    }

    public function drive_check(){
        echo'<pre';
        echo print_r($this->_routes);
        echo '</pre>';
    }

    public function get($path,$callable){

    }
}