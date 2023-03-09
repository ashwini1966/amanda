<?php 
include('common/config.php'); 
    class Login {

        public function user_login($post)
        {
            global $conn;
            $email = $_POST['login-email'];
            $password = md5($_POST['login-password']);

            $query      = mysqli_query($conn, "SELECT * FROM users WHERE  password='$password' and email='$email'");
            $num_row    = mysqli_num_rows($query);

            if($num_row > 0){
                while($row = mysqli_fetch_assoc($query)){  
                    
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                
                    header('location:dashboard.php'); 
                    $data = array('success'=>"Login Successfully");
                    return $data;
                }
            }else{
                $data = array('error'=>"Please enter valid Email and Password");
                return $data;
            }
           
        }


         public function logout()
        {
            session_destroy();
            header('Location: http://localhost/amanda/admin/index.php');
        }
      
    }
?>