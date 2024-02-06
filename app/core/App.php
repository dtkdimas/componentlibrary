<?php

class App{

    // 1. Bersihkan URL
    public function parseURL(){
        if(isset($_GET['url'])){
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
    
    // 2. Construct Controller, Method, Params Default
    protected $controller = 'Home';
    protected $method = 'Index';
    protected $params = [];

    public function __construct(){
        
        $url = $this->parseURL();
        // 3. Cek Apakah Controller & Method Exist

        // If Controller Exist
        if(file_exists('../app/controllers/' . $url[0] . '.php')){
            $this->controller = $url[0];
            unset($url[0]);
        }
        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // If method exist
        if(isset($url[1])){
            if(method_exists($this->controller, $url[1])){
                $this->method = $url[1];
                unset($url[1]);
            }
        }    
        
        // If any parameters
        if(!empty($url)){
            $this->params = array_values($url);
        }

        // 4. Jalankan Controller, Method, dan kirim Params jika ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }
}