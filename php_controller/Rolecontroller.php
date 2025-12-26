<?php
include('ConnectController.php');
Class Role extends connect_DataBase{
  public  function Add()
  {
     if($_SERVER['REQUEST_METHOD'] == "POST"){
       $role_name = $_POST['role_name'];
       $insert_role = "INSERT INTO roles(role_name)values('$role_name')";
       $result_role = mysqli_query($this->connect, $insert_role);
       if($result_role){
          $role_id = mysqli_insert_id($this->connect);
          if(!empty($_POST['permission_id'])){
            foreach($_POST["permission_name"] as $permission_id){
               $insert_permission = "INSERT INTO role_premetion (role_id, permission_id)VALUES ('$role_id', '$permission_id')";
                     mysqli_query($this->connect, $insert_permission);

            }
          }
         header("Location: index.php");
         exit;
       }

     }
  }

  public function show_Role(){
    $roles = [];
      $show_Role = "SELECT * FROM roles";
      $result_roles = mysqli_query($this->connect , $show_Role);
      while($rwos = mysqli_fetch_assoc($result_roles)){
        $roles[] = $rwos;

      }


    return $roles;
  }
}

$roles = new Role();
$roles->Add();

$show_Roles = $roles->show_Role();









?>
