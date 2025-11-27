<?php

class Register extends Controller {

    public function __construct(){
        $this->UserModel = $this->loadModel('UserModel');
    }

    public function update_user_type(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $user_type = $_POST['user_type']; //buyer or seller
            $update_type = $this->UserModel->update_user_type($user_type, $email);
            if($update_type){
                echo json_encode([
                    'status' => 'success',
                    'message' => 'Information successfuly updated',
                ]);
            }else{
                echo json_encode([
                    'status' => 'error',
                    'message' => 'An error occured. Information cannot be updated at the moment.'
                ])
            }
        }else{
            'status' => 'error', 
            'message' => 'invalid operation'
        }
    }

    public function create_user(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $id = UUID::generateUUID();
            $email = $_POST['email'];
            $password = $_POST['password'];
            $firstname = $_POST['first_name'];
            $lastname = $_POST['last_name'];
            $dob = $_POST['dob'];
            $user_type = 'empty';
            $created = date('Y-m-d h:i:s');
            $modified = date('Y-m-d h:i:s');
            $password = password_hash($password, PASSWORD_DEFAULT);
            $login_token = UUID::generateUUID();

            //check if email exists
            $check_mail = $this->UserModel->check_email_exists($email);
            if($check_mail){
                echo json_encode(['status' => 'error', 'message' => 'Email already exist, please use a new email account']);
            }else{
                $register_user = $this->UserModel->register($id, $firstname, $lastname, $email, $password, $created, $modified, $login_token, $dob, $user_type);
                if($register_user){
                    $get_user = $this->UserModel->get_user_with_email($email);
                    echo json_encode([
                        'status' => 'success', 
                        'message' => 'User Registered Successfully',
                        'token' => $get_user->login_token,
                        'email' => $get_user->email
                    ]);
                }
            
            }

            //upload the resume
            // if ($_FILES["resume"]["error"] == 0) {
            //     $targetDir = "uploads/resume/"; // Change to your directory
            //     $targetFile = $targetDir . basename($_FILES["resume"]["name"]);
            
            //     if (move_uploaded_file($_FILES["resume"]["tmp_name"], $targetFile)) {
            //         //echo "File uploaded successfully: " . $targetFile;
            //         //file uploaded successfully Update resume link; insert record in db
            //         $user_id = $this->UserModel->get_user_with_email($email);
            //         $update_jobseeker = $this->JobSeekerModel->update($user_id->id, $targetFile);
            //         echo json_encode(['status' => 'success', 'msg' => 'User registered successfully']);

            //     } else {
            //         echo json_encode(['status' => 'error', 'msg' => 'Resume File cannot be uploaded']);
            //     }
            // } else {
            //     echo "No file uploaded or an error occurred.";
            // }
            
        }else{
            echo json_encode([
                'status' => 'error', 
                'message' => 'invalid operation'
            ]);
        }
    }

}

?>