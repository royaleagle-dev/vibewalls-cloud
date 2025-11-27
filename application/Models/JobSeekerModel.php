<?php

class JobSeekerModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'job_seekers';
    }

    public function create($user_id, $resume_link){
        $statement = $this->db->query("INSERT INTO $this->tbl(user_id, resume_link) VALUES(?,?)", $params=[$user_id, $resume_link]);
        if($statement){return true;}else{return false;}
    }

    public function update($user_id, $resume_link){
        $statement = $this->db->query("UPDATE $this->tbl set resume_link=? WHERE user_id=?", $params=[$resume_link, $user_id]);
        if($statement){return true;}else{return false;}
    }
}