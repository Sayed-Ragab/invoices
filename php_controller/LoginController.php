<?php 
session_start();

include("ConnectController.php");
class signin extends connect_DataBase{
public function Login(){

          if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signin'])){   
             $email = $_POST['email']??null;
             $password = $_POST['password']??null; 
          
             $sql_login = "SELECT * FROM Admin where email = '$email' ";
            
             $result_login = mysqli_query($this->connect,$sql_login);
             if(mysqli_num_rows($result_login)>0){
               $row = mysqli_fetch_assoc($result_login);
               if(password_verify($password,$row['password'])){
                  $_SESSION['EMAIL'] = $email;
                  $_SESSION['name'] = $row['name'];
                    $_SESSION['type'] = 'admin';
                    header("Location: AdminPanal.php");
                    exit();
               }else{
                header("Location: signin.php");
                
               }
              
             }
                
             
        }
  }
}

$signin = new signin();
$signin->Login(); 
?>