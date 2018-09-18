<?php

namespace Core;

class Request
{
    private $request;
    private $path;
    private $session;

    function __construct($request)
    {
        session_start();
        $this->request = $request;
        $this->path = $request['REDIRECT_URL'];
        $this->session = &$_SESSION;
    }

    public function getUrl(){
        return $this->path;
    }

    public function file($name){
        $result = $_FILES[$name];
        return $result;
    }

    public function input($name, $name_default = null){
        if($_POST[$name]){
            $result = $this->clean($_POST[$name]);
            return $result;
        }

        if($_GET[$name]) {
            $result = $this->clean($_GET[$name]);
            return $result;
        }

        return $name_default;
    }

    public function isAjax(){
        if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            return true;
        }
        return false;
    }

    public function isPost(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            return true;
        }
        else{
            return false;
        }
    }

    public function redirect($url, $statusCode = 303)
    {
        header('Location: ' . $url, true, $statusCode);
        die();
    }

    public function setSession($key, $value){
        $this->session[$key] = $value;
    }

    public function getSession($key){
        if(isset($this->session[$key])){
            return $this->session[$key];
        }
        else{
            return false;
        }
    }

    public function clearSession(){
        session_destroy();
    }

    private function clean($string){
        $string = strip_tags($string);
        $string = htmlspecialchars($string);
        return $string;
    }
}