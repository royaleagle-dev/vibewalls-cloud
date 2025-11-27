<?php

class Index extends Controller {

    public function __construct(){
        $this->UserModel = $this->loadModel('UserModel');
        $this->WallpaperModel = $this->loadModel('WallpaperModel');
    }

    public function getRandom(){        
        $random_img = $this->WallpaperModel->get_random();
        if($random_img){
            echo json_encode([
                'status' => 'success',
                'message' => 'Operation Successful',
                'data' => $random_img,
            ]);
        }else{
            echo json_encode([
                'status' => 'error',
                'message' => 'Operation Failed',
            ]);
        }
    }


    public function index(){
        $data = [
            'hero_bg' => $this->WallpaperModel->get_random(),
            'editor_choice' => $this->WallpaperModel->get_random(),
            'trending' => $this->WallpaperModel->get_multiple(4),
            'latest' => $this->WallpaperModel->get_multiple(10),
        ];
        new Template("index.html", $data);
        
    }

    public function send_message(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //$name = htmlentities($_POST['name']);
            $email = htmlentities($_POST['email']);
            $subject = htmlentities($_POST['subject']);
            $message = htmlentities($_POST['message']);
            $date = date('Y-m-d');

            $add = $this->contactModel->add_message('User', $email, $subject, $message, $date);
            if($add){
                echo json_encode(['status'=>'success', 'message'=>'Your message was sent successfully.']);
            }else{
                echo json_encode(['status'=>'failure', 'message'=>'Message could not be sent. Please try again.']);
            }
        }
    }
}

?>