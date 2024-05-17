<?php
// include ("config/app.php");
include_once("controllers/RegisterController.php");

if (isset($_POST['register_btn'])) {
    $fname = validate_input($db->conn, $_POST['fname']);
    $lname = validate_input($db->conn, $_POST['lname']);
    $email = validate_input($db->conn, $_POST['email']);
    $password = validate_input($db->conn, $_POST['password']);
    $confirm_password = validate_input($db->conn, $_POST['confirm_password']);

    $register = new RegisterController;

    $result_password = $register->confirmPassword($password, $confirm_password);
    
    if($result_password){

        $result_user = $register->isUserExists($email);

        if($result_user){

            redirect("Email Already Exists", "register.php");

        }else {
            $register_query = $register->registration($fname, $lname, $email, $password);

            if($register_query){
                redirect("Registered Successfully", "login.php");
            }else {
                redirect("Somehting Went Wrong", "register.php");
            }
        }
    }else {
        redirect("Password and Confirm Password Does not match", "register.php");
    }
}

?>