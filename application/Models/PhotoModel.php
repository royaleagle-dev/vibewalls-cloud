<?php


class PhotoModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'photos';
    }

    public function deletePhotos(){
        $statement = $this->db->query("DELETE FROM $this->tbl", $params=[]);
        if($statement){
            return true;
        }else{
            return false;
        }
    }

    public function getPhoto($photoId){
        $statement = $this->db->query("SELECT * FROM $this->tbl WHERE id=?", $params=array($photoId), $fetchMode='fetch');
        if($statement){
            return $statement;
        }
    }

    public function getAllPhotos(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY id DESC", $params=array(), $fetchMode = 'fetchAll');
        return $statement;
    }

    public function deletePhoto($photoId){
        $statement = $this->db->query("DELETE FROM $this->tbl WHERE id=?", $params=array($photoId));
        if($statement){
            return true;
            //echo json_encode(array("status"=>"success"));
        }
    }

    public function addPhoto($photo_path, $photo_name, $date_added, $real_path){
        $statement = $this->db->query("INSERT INTO $this->tbl (photo_path, photo_name, date_added, real_path) VALUES(?,?,?,?)", $params=array($photo_path, $photo_name, $date_added, $real_path));
        if($statement){
            return true;
        }

    }

    public function deleteAllPhotos(){

    }
}

?>