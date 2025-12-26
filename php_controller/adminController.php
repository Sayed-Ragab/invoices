<?php

require('ConnectController.php');
class Singup extends connect_DataBase
{

  public function Register()
  {


    if ($_SERVER['REQUEST_METHOD'] == "POST") {
      $name = $_POST['name'] ?? null;
      $Email = $_POST['email'] ?? null;
      $status = $_POST['status'] ?? "active";
      $password = $_POST['password'] ?? null;
      $hashed_password  = password_hash($password, PASSWORD_DEFAULT);

     
      $sql_query = "INSERT into Admin(name,EMAIL,status,password)values('$name','$Email','$status','$hashed_password')";
      $result =  mysqli_query($this->connect, $sql_query);
      if ($result) {
         $_SESSION['EMAIL'] = $Email;
          $_SESSION['name'] = $name;
             $_SESSION['type'] = 'admin';
           
        header("Location: ../Dashboard/AdminPanal.php");
        exit;

        }
      }
      
      }
    
  

  public function show_Role()
  {
    $roles = [];
    $show_Role = "SELECT * FROM roles";
    $result_roles = mysqli_query($this->connect, $show_Role);
    while ($rwos = mysqli_fetch_assoc($result_roles)) {
      $roles[] = $rwos;
    }


    return $roles;
  }
  public function show()
  {

    $datas = [];
    $id = $_GET['id'] ?? null;
    $sql_show = "SELECT * FROM admin WHERE id = '$id'";
    $mysql_query = mysqli_query($this->connect, $sql_show);
    if ($mysql_query) {
      while ($data = mysqli_fetch_assoc($mysql_query)) {
        $datas[] = $data;
      }
    }
    return $datas;
  }
  public function getUsers()
  {
    $users = [];
    $sql = "SELECT * FROM admin ORDER BY id ASC";
    $result = mysqli_query($this->connect, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $users[] = $row;
    }
    return $users;
  }
    public function allModules(){
    $modules = [];
    $show = "SELECT * FROM modules";
      $result_role = mysqli_query($this->connect, $show);
      while($rwos = mysqli_fetch_assoc($result_role)){
        $modules [] = $rwos;

      }
      return $modules;
  }
  
}









$register = new Singup();
$register->Register();
$roles = $register->show_Role();

$users = $register->getUsers();
$modules = $register->allModules(); 
