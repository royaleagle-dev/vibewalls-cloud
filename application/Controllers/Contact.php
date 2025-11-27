<?php

ini_set("SMTP", "mail.rekruteiq.au");
ini_set("smtp_port", "465");
ini_set("sendmail_from", "admin@rekruteiq.au");

class Contact extends Controller{
	
	public function __construct(){
		$this->UserModel = $this->loadModel('UserModel');
		$this->locationModel = $this->loadModel('LocationModel');
	}

	public function index(){
		//$email = $_SESSION['email'];
        $data = [
            //'locations' => $this->locationModel->get_all(),
            //'user' => $this->UserModel->get_user_with_email($email),
        ];
		new Template("contact.html", $data);
	}

	public function process(){
		if($_SERVER['REQUEST_METHOD'] == 'POST'){
			$fullname = $_POST['fullname'];
			$contact_number = $_POST['contact_number'];
			$email = $_POST['email'];
			$location = $_POST['location'];
			$suburb = $_POST['suburb'];
			$message = $_POST['message'];

			$to = "admin@rekruteiq.au";
			$subject = "New Contact - $fullname";
			$message = "Full Name: $fullname\n\n<br>
						Contact Number: $contact_number\r\n<br>
						Email: $email\r\n<br>
						Location: $location\r\n<br>
						Suburb: $suburb\r\n<br><br>
						Message: $message\r\n";
			$headers = "From: support@rekruteiq.au\r\n" .
           		"Reply-To: $email\r\n" .
           		"MIME-Version: 1.0\r\n" .
           		"Content-Type: text/html; charset=UTF-8\r\n" .
           		"X-Mailer: PHP/" . phpversion();

			if (mail($to, $subject, $message, $headers)) {
    			//echo "Email sent successfully!";
				echo json_encode(['status' => 'success', 'msg'=>'Message submitted successfully']);
			} else {
    			//echo "Email sending failed.";
				echo json_encode(['status' => 'error', 'msg' => 'Action Failed. Please try again.']);
			}
		}
	}

}

?>