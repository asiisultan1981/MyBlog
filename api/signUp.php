<?php

include "functions.php";

if (empty($_REQUEST['name']) || empty($_REQUEST['email']) || empty($_REQUEST['password'])){
    header('Location: ../index.php');
}
else{

    $name = $_REQUEST['name'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $created_Date = date('d-m-Y H:i:s');

    $emailExists = isEmailExist($email);
    if ($emailExists){
        echo "Email already exists";
    }else{
        $result = signUp($name,$email,$password,$created_Date);
        if ($result){
            echo json_encode($result);
        }
    }

}