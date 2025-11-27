<?php

class VideoModel{
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'videos';
    }

    public function addVideo($title, $link, $date_added){
        $statement = $this->db->query("INSERT INTO $this->tbl(video_title, video_link, date_added) VALUES(?,?,?)",
            $params=[$title, $link, $date_added]
        );
        if($statement){return true;}else{return false;}
    }

    public function deleteVideo($video_id){
        $statement = $this->db->query("DELETE FROM $this->tbl WHERE id=?", $params=[$video_id]);
        if($statement){return true;}else{return false;}
    }

    public function updateVideo(){

    }

    public function getAllVideos(){
        $statement = $this->db->query("SELECT * FROM $this->tbl ORDER BY date_added DESC", $params=[], $fetchMode='fetchAll');
        return $statement;
    }
}

?>