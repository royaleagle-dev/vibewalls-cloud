<?php

class Subscriber extends Controller{
    public function __construct(){
        $this->subscriberModel = $this->loadModel('SubscriberModel');
    }
    public function addSubscriber(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = htmlentities($_POST['email']);
            $date_added = date('Y-m-d');
            $add = $this->subscriberModel->add_subscriber($email, $date_added);
            if($add){
                echo json_encode(['status'=>'success', 'message'=>'Email Added successfully']);
            }else{
                echo json_encode(['status'=>'failure', 'message'=>'Email not added. Try Again']);
            }
        }
    }
}

?>