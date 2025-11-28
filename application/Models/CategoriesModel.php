<?php

class CategoriesModel{
    
    private $db;
    private $tbl;

    public function __construct(){
        $this->db = new Database;
        $this->tbl = 'categories';
    }

    public function add($id, $name, $description, $meta_description, $meta_keywords, $created, $modified){
        $statement = $this->db->query("INSERT INTO $this->tbl() VALUES(?,?,?,?,?,?,?)", $params=[$id, $name, $description, $meta_description, $meta_keywords, $created, $modified]);
        if($statement){return true;}else{return false;}
    }

    public function get_all(){
        $statement = $this->db->query("SELECT * FROM categories ORDER BY name", $params=[], $fetchMode='fetchAll');
        if($statement){return $statement;}else{return false;}
    }
}

?>