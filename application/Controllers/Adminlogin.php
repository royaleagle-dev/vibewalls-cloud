<?php

class Adminlogin extends Controller{

	public function __construct(){
		new SessionManager();
	}

	public function index(){
		new Template("administrator/login.html", $data=array());
	}

	public function authenticate(){
		if($_SERVER['REQUEST_METHOD'] == "POST"){
			
				$email = $_POST['email'];
				$password = $_POST['password'];
				//print $email . $password;
				$authenticate = new Login($email, $password);
				$login = $authenticate->log_user_in();
				if($login == true){
					SessionManager::flash_message("success");
					redirect('dashboard');
				}else{
					SessionManager::flash_message("failure");
					//redirect ('adminLogin');
				}
			
		}else{
			redirect('nowhere');
		}


		//new Template("administrator/authenticate.html", $data=array());
	}
}

?>