<?php

class Auth extends Controller {

    public function __construct(){
        $this->CategoryModel = $this->loadModel('CategoryModel');
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            $login = new Login($email, $password, 'users');
            $login = $login->log_user_in();
            if($login){
                echo json_encode([
                    'status' => 'success',
                    'message' => 'User Authentication Successful',
                    'email' => $_SESSION['email'],
                    'token' => $_SESSION['token'],
                ]);
            }else{
                echo json_encode([
                    'status' => 'warning',
                    'message' => 'Incorrect User Credentials'
                ]);
            }
        }else{
            echo json_encode([
                'status' => 'invalid-request'
            ]);
        }
    }

}

?>