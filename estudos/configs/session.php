<?php

class Session {

    public static function getLocalIp(){ 
        return gethostbyaddr($_SERVER['REMOTE_ADDR']); 
    }

    public static function createSession(){
        session_start();
        $_SESSION['ip'] = self::getLocalIp();
    }

    public function sessionCheck(){
        
        if(isset($_SESSION)){
            return true;
        }else{
            echo "<script>console.log('Sessão não iniciada')</script>";
            return false;
        } 

    }

}

Session::createSession();