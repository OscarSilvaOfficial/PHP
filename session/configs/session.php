<?php

class Session {

    public function getLocalIp(){ 
        return gethostbyaddr($_SERVER['REMOTE_ADDR']); 
    }

    public function createSession(){
        session_start();
        $_SESSION['ip'] = $this->getLocalIp();
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

$sessao = new Session();
$sessao->createSession();