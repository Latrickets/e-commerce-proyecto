<?php
class Session{
    private $session = null;

    public function __construct($session_name){
        session_set_cookie_params(60*60*24*14);
        session_start();

        if(!isset($_SESSION[$session_name])){
            $_SESSION[$session_name] = null;
        }
        $this-> session = $session_name;

    }

    public function setValue ($value){
        $_SESSION[$this->session] = $value;
    }
    
    public function getValue (){
        return $_SESSION[$this->session];
    }


}

?>