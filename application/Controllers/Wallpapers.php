<?php

class Wallpapers extends Controller{
    
    public function __construct(){
        $this->WallpaperModel = $this->loadModel('WallpaperModel');
        $this->CategoriesModel = $this->loadModel('CategoriesModel');
        $this->WallCatModel = $this->loadModel('WallCatModel');
    }

    public function list(){
        $wallpapers = $this->WallpaperModel->list();
        $data = [
            'wallpapers' => $wallpapers,
        ];
        new Template('wallpapers.html', $data);
    }

    public function s($args){
        if($args){
            $id = $args[0];
            $wallpaper = $this->WallpaperModel->get_by_id($id);
            $categories = $this->WallCatModel->get_categories($wallpaper->id);
            $data = [
                'wallpaper' => $wallpaper,
                'categories' => $categories,
            ];
            new Template('wallpaper.html', $data);
        }else{

        }
    }

    public function add(){
        //accessible to admin only
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $data = [
                'categories' => $this->CategoriesModel->get_all(),
            ];
            new Template("administrator/add_wallpaper.html", $data);
        }else{
            $title = $_POST['title'];
            $description = $_POST['description'];
            $alt_text = $_POST['alt_text'];
            $meta_keywords = $_POST['meta_keywords'];
            $meta_description = $_POST['meta_description'];            
            $device_type = $_POST['device_type'];
            $image = $_FILES['image_upload'];
            $created = date('Y-m-d H:i:s');
            $modified = date('Y-m-d H:i:s');
            $categories = $_POST['categories'];

            $categories = explode(",", $categories);
            array_pop($categories);

            $id = new Slugger($title);
            $id = $id->create();
            $wallpaper_id = $id;
            
            $upload = new Upload('2000000', BASE_MEDIA_ROOT."/public/uploads/wallpapers/", $image);
            $upload_file = $upload->upload_file();
            $file_path = $upload_file['upload_path_d'] ?? 'empty';

            $add_w = $this->WallpaperModel->add($id, $title, $description, $alt_text, $meta_keywords, $meta_description, $device_type, $file_path, $created, $modified);
            
            //print_r($categories);
            foreach($categories as $category){
                $wallpaper_id = $wallpaper_id;
                $category_id = $category;
                $id = UUID::generateUUID();
                $add_cat = $this->WallCatModel->add($id, $category_id, $wallpaper_id, $created, $modified);
            }

            if($add_w){
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Wallpaper Added',
                ]);
            }else{
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Try again. An error occured',
                ]);
            }
        }

    }
}

?>