<?php

class WallpaperModel {
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'wallpapers';
    }

    public function list(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY modified DESC", $params=[], $fetchMode='fetchAll');
        if($statement){return $statement;}else{return false;}
    }

    public function add($id, $title, $description, $alt_text, $meta_keywords, $meta_description, $device_type, $file_path, $created, $modified){
        $statement = $this->db->query("INSERT INTO $this->tbl(id, image_name, description, alt_text, meta_keywords, meta_description, device_type, image_link, created, modified) VALUES(?,?,?,?,?,?,?,?,?,?)", $params=[$id, $title, $description, $alt_text, $meta_keywords, $meta_description, $device_type, $file_path, $created, $modified]);
        if($statement){return true;}else{return false;}
    }

    public function get_random(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY RANDOM() LIMIT 1", $params=[], $fetchMode='fetch');
        if($statement){return $statement;}else{return false;}
    }

    public function get_multiple($limit){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY modified DESC LIMIT $limit", $params=[], $fetchMode='fetchAll');
        if($statement){return $statement;}else{return false;}
    }

    public function get_by_id($id){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=[$id], $fetchMode='fetch');
        if($statement){return $statement;}else{return false;}
    }
}

?>