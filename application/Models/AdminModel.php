<?php

class AdminModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'admins';
    }

    public function check_email_exists($email){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE email=?", $params=[$email], $fetchMode='fetch');
        if($statement){return true;}else{return false;}
    }

    public function register($firstname, $lastname, $email, $password, $registration_date){
        $statement = $this->db->query("INSERT INTO $this->tbl (firstname, lastname, email, password, registration_date) VALUES(?,?,?,?,?)", $params=[$firstname, $lastname, $email, $password, $registration_date]);
        if($statement){return true;}else{return false;}
    }

    public function get_user_with_email($email){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE email=?", $params=[$email], $fetchMode='fetch');
        if($statement){return $statement;}else{return false;}
    }


    

    
    
    
    
    
    public function get_message($id){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=[$id], $fetchMode = 'fetch');
        if($statement){
            return $statement;
        }
    }
}