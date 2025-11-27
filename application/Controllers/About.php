<?php

class About extends Controller{
	public function __construct(){
		$this->UserModel = $this->loadModel('UserModel');
	}
	public function index(){
		//$email = $_SESSION['email'];
        $data = [
            //'user' => $this->UserModel->get_user_with_email($email),
        ];
		new Template("about.html", $data);
	}
}

?>