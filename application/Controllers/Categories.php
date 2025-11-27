<?php

class Categories extends Controller{
    public function __construct(){
        $this->CategoriesModel = $this->loadModel('CategoriesModel');
    }

    public function admin(){
        if($_SERVER['REQUEST_METHOD'] == 'GET'){
            $data = [
                'categories' => $this->CategoriesModel->get_all(),
            ];
            new Template("administrator/categories.html", $data);
        }else{
            $name = $_POST['name'];
            $description = $_POST['description'];
            $meta_description = $_POST['meta_description'];
            $meta_keywords = $_POST['meta_keywords'];
            $created = date('Y-m-d H:i:s');
            $modified = date('Y-m-d H:i:s');
            
            $id = new Slugger($name);
            $id = $id->create();

            $add_c = $this->CategoriesModel->add($id, $name, $description, $meta_description, $meta_keywords, $created, $modified);
            if($add_c){
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Category added successfully',
                ]);
            }else{
                echo json_encode([
                    'status' => 'error',
                    'message' => 'Try Again. Category can not be added at this time',
                ]);
            }

        }
    }
}

?>