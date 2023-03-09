<?php 
    class Login {

        private $servername = "localhost";
        private $username  = "root";
        private $password  = "";
        private $database  = "amanda";

        public $conn;

        public function __construct() {
            session_start();
            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);

            if(mysqli_connect_error()){
                trigger_error("Failed to Connect to MySQL:". mysqli_connect_error());
            }else{
                return $this->conn;
            }
        }

        // public function select($table_name)  
        // {  
        //      $array = array();  
        //      $query = "SELECT * FROM ".$table_name."";  
        //      $result = mysqli_query($this->con, $query);  
        //      while($row = mysqli_fetch_assoc($result))  
        //      {  
        //           $array[] = $row;  
        //      }  
        //      return $array;  
        // }  


        public function user_login($post)
        {
            $email = $_POST['login-email'];
            $password = $_POST['login-password'];

            $login_user = "SELECT id, email, password FROM user WHERE email = '$email' AND password = '$password'";

            $sql = $this->conn->query($login_user);

            if($sql->num_rows > 0){
            while($row = mysqli_fetch_assoc($sql))  
                {  
                
                    $_SESSION['user_id'] = $row['id'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['password'] = $row['password'];
                
                header('Location: http://localhost/amanda/admin/dashboard.php');  
             }
            }else{
                echo "Please enter valid Email and Password";
             }
        }
      
    }
?>