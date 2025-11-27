<?php

class Upload{

    public function __construct($size, $target_dir, $file_obj){
        //accepts size in bytes 2000000 = 2mb
        $this->size = $size;
        $this->target_dir = $target_dir;
        $this->file = $file_obj;
    }

    public function upload_file(){
        $target_file = $this->target_dir . basename($this->file['name']);
        if($this->file['size'] > 5000000){
            return false;
        }else{
            move_uploaded_file($this->file['tmp_name'], $target_file);
            return([
                'upload_path' => $target_file,
                'upload_path_d' => URL_ROOT."public/uploads/wallpapers/".basename($this->file['name']),
                'status' => true,
            ]);
        }
    }

}

?>