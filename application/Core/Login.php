<?php

class Login{
    private $email;
    private $password;
    private $statement;

    public function __construct($email, $password, $user_table){
        $this->email = $email;
        $this->password = $password;
        $this->user_table = $user_table;
        $this->database = new Database();
    }

    public function log_admin_in(){

        $statement = $this->database->query("SELECT * FROM admins WHERE email=?", $params = array($this->email), $fetchmode = 'fetch');
        if(!$statement){
            return false;
        }
        $supplied_password = $this->password;
        $hashed_password= $statement->password;
        if(password_verify($supplied_password, $hashed_password)){
            //new SessionManager();
            SessionManager::set_session(array(
                'email'=>$statement->email,
                'firstname'=>$statement->firstname,
                'is_admin' => true,
                )
            );
            print_r($_SESSION);
            return true;
        }else{
            return false;
        }

    }
    
    public function log_user_in(){
        $statement = $this->database->query("SELECT * FROM $this->user_table WHERE email=?", $params = array($this->email), $fetchmode = 'fetch');
        if(!$statement){
            return false;
        }
        $supplied_password = $this->password;
        $hashed_password= $statement->password;
        if(password_verify($supplied_password, $hashed_password)){
            SessionManager::set_session(array(
                'email'=>$statement->email,
                'firstname'=>$statement->firstname,
                'type' => $statement->user_type,
                'is_admin' => false,
                'token' => $statement->login_token
                )
            );            
            return true;
        }else{
            return false;
        }
    }
}
?>