<?php 

   session_start();
   
   include('../../functions/login_class.php');

   $login_obj = new Login();

   if(isset($_POST['submit'])){

    $email = $_POST['login-email'];
    $password = $_POST['login-password'];

    $auth = $login_obj->user_loginn($email, $password);
    
    if(!$auth){
        $_SESSION['message'] = "Invalid username or Password";
        header('Location: http://localhost/amanda/admin/index.php');
    }else{
        $_SESSION['user'] == $auth;
        header('Location: http://localhost/amanda/admin/dashboard.php');
    }

   }else{
        $_SESSION['message'] = "You need to login first";
        header('Location: http://localhost/amanda/admin/index.php');
   }
?>