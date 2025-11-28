<?php

class WallCatModel{
    
    private $db;
    private $tbl;
    private $sec1;
    
    public function __construct(){
        $this->db = new Database();
        $this->tbl = 'wallpaper_categories';
        $this->sec1 = 'categories';
    }

    public function add($id, $category_id, $wallpaper_id, $created, $modified){
        $statement = $this->db->query("INSERT INTO $this->tbl(id, category_id, wallpaper_id, created, modified) VALUES(?,?,?,?,?)", $params=[$id, $category_id, $wallpaper_id, $created, $modified]);
        if($statement){return true;}else{return false;}
    }

    public function get_categories($wallpaper_id){
        //get categories of a specific wallpaper_id
        $statement = $this->db->query("SELECT * FROM $this->tbl INNER JOIN $this->sec1 ON $this->tbl.category_id = $this->sec1.id WHERE wallpaper_id=?", $params=[$wallpaper_id], $fetchMode='fetchAll');
        //print_r($statement);
        if($statement){return $statement;}else{return false;}

    }
}

?>