<?php

class Sitemap extends Controller{
    public function __construct(){
        $this->WallpaperModel = $this->loadModel('WallpaperModel');
    }

    public function generate(){
        $filename = BASE_MEDIA_ROOT."/public/sitemap.txt";
        $file_handle = fopen($filename, "w");

        $ROOT = "https://vibewalls.top/";
        $link_arr = [
            $ROOT . "\n",
            $ROOT . 'wallpapers/list' . "\n",
        ];
        
        for($i=0; $i<count($link_arr); $i++){
            fwrite($file_handle, $link_arr[$i]);
        }
        
        $wallpapers = $this->WallpaperModel->list();
        foreach($wallpapers as $wallpaper){
            if ($file_handle) { // Check if the file was opened successfully
                $text_to_write = $ROOT . "s/wallpaper/s/". $wallpaper->id . "\n";
                fwrite($file_handle, $text_to_write);
            } else {
                echo "Error: Could not open the file.";
            }
        }
        

    }
}

?>