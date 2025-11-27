<?php

class SubscriberModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'subscribers';
    }

    public function get_all_subscribers(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY date_added DESC", $params=[], $fetchMode='fetchAll');
        return $statement;
    }

    public function add_subscriber($email, $date_added){
        $statement = $this->db->query("INSERT IGNORE INTO $this->tbl (email, date_added) VALUES (?,?)", $params=[$email, $date_added]);
        if($statement){
            return true;
        }else{return false;}

    }

    public function delete($email){
        $statement = $this->db->query("DELETE FROM $this->tbl WHERE email=?", $params=[$email]);
        if($statement){return true;}else{return false;}
    }
}

?>
