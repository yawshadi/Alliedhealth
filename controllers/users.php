<?php

class users {


public function __construct(){
    if(!isset($_SESSION['userid'])){

        Redirecting::location('login');
    }

}

    public function login($username,$password){
        global $healthdb;
        $password=md5($password);

        $loginquery="SELECT * FROM users WHERE username='$username' and password= '$password'";
        $healthdb->prepare($loginquery);
        $result= $healthdb->singleRecord();
        if(is_object($result)){
            $_SESSION['userid']=$result->uid;
            Redirecting::location('index');
        }else{
            $data="Incorrect Username or Password";
            Redirecting::location('login',$data);

        }
    }

    public static function logout(){
        
            unset($_SESSION['userid']);
            session_destroy();
          
        Redirecting::location('login');
    }
   
   
}