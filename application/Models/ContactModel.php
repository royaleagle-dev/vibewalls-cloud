<?php

class ContactModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'contact_messages';
    }

    public function update_replied($id){
        $statement = $this->db->query("UPDATE $this->tbl SET replied=? WHERE id=?", $params=[1, $id]);
        if($statement){
            return true;
        }else{
            return false;
        }
    }

    public function add_message($name, $email, $subject, $message, $date){
        $statement = $this->db->query("INSERT INTO $this->tbl (name, email, subject, message, date_sent) VALUES(?,?,?,?,?)", $params=[$name, $email, $subject, $message, $date]);
        if($statement){
            return true;
        }else{return false;}
    }

    public function get_all_messages(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY date_sent DESC", $params=[], $fetchMode='fetchAll');
        return $statement;
    }

    public function delete_message($id){
        $statement = $this->db->query("DELETE FROM $this->tbl WHERE id=?", $params=[$id]);
        if($statement){
            return true;
        }else{return false;}
    }

    public function get_message($id){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=[$id], $fetchMode = 'fetch');
        if($statement){
            return $statement;
        }
    }
}