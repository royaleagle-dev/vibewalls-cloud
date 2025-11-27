<?php

class Error_404 extends Controller{

	public function __construct(){
		$this->UserModel = $this->loadModel('UserModel');
	}
	
	public function index(){
		$email = $_SESSION['email'];
        $data = [
            'user' => $this->UserModel->get_user_with_email($email),
        ];
		new Template("core/404.html", $data);

	}
}


?>