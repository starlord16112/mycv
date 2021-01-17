<?php

//xử lí đăng nhập
    session_start();
include 'connect.php';
$email = $_POST['email'];
$pass = $_POST['pass'];
if (!isset($_POST['email']))
{//không phải là sự kiện đăng nhập thì điều hướng về trang index    
    header('Location: http://localhost:81/mycv');
    exit;
}
else{
    if($email == "manhnguyen16112@gmail.com" && $pass == "111")
    {
         $_SESSION['admin'] = 'login';
         header('Location: http://localhost:81/mycv/admin/');
   
    
    }
    else
    {
        header('Location: http://localhost:81/mycv?login=fail');
        $_POST['email'] = NULL;
        exit;


    }
   
}

?>