<?php

class UserModel{
    
    private $db;
    private $tbl;

    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'users';
    }

    public function check_email_exists($email){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE email=?", $params=[$email], $fetchMode='fetch');
        if($statement){return true;}else{return false;}
    }

    public function register($id, $firstname, $lastname, $email, $password, $created, $modified, $login_token, $dob, $user_type){
        $statement = $this->db->query("INSERT INTO $this->tbl (id, firstname, lastname, email, password, created, modified, login_token, dob, user_type) VALUES(?,?,?,?,?,?,?,?,?,?)", $params=[$id, $firstname, $lastname, $email, $password, $created, $modified, $login_token, $dob, $user_type]);
        if($statement){return true;}else{return false;}
    }

    public function get_user_with_email($email){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE email=?", $params=[$email], $fetchMode='fetch');
        if($statement){return $statement;}else{return false;}
    }

    public function update_user_type($user_type, $email){
        $statement = $this->db->query("UPDATE $this->tbl SET user_type=? WHERE email=?", $params=[$user_type, $email]);
        if($statement){return true;}else{return false;}
    }


    

    
    
    
    
    
    public function get_message($id){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=[$id], $fetchMode = 'fetch');
        if($statement){
            return $statement;
        }
    }
}