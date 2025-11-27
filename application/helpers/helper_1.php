<?php

function check_login($email){
    if($_SESSION['email'] != ''){
        //user is logged in
        return true;
    }else{
        return false;
    }
}

function check_admin_login($email){
    if($_SESSION['email'] == $email && $_SESSION['is_admin'] == true){
        return true;
    }else{
        return false;
    }
}

?>