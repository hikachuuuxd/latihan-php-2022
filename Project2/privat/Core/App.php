<?php
class App{

    protected $controller = 'Home';
    protected $method = 'index';
    protected $params   = [];

    public function __construct(){
       $url = $this->url();
       
       //controller
       if($url == NULL){
        $url= [$this->controller];
       }
        if(file_exists('../privat/Controllers/' . $url[0] . '.php') ){
            $this->controller = $url[0];
            unset($url[0] );
        }
        require_once '../privat/Controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        //Method
        if(isset($url[1]) ){
            if(method_exists('../privat/Controllers/' . $url[1] . '.php') ){
                $this->method = $url[1];
                unset ($url[1]);
            }
        }

        //Params
        if( !empty($url) ){
            $this->params = array_values($url);
        }
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function url(){
       if(isset($_GET['url']) ){
        $url =rtrim( $_GET['url'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
       }
    }
}