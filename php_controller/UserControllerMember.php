
<?php
session_start();
include("ConnectController.php");

class show extends connect_DataBase{
public function show_modules(){

$user_id = $_SESSION['user_id'];

    $userModules = [];
    $sql = "SELECT modules.module_name FROM  modules  join user_module on module_id = modules.id where user_module.user_id = '$user_id'";
   $result =  mysqli_query($this->connect , $sql);
    while($rows = mysqli_fetch_assoc($result)){
      $userModules[] = $rows['module_name'];
    }
    $_SESSION['user_permissions'] = array_fill_keys($userModules, true);
     return $userModules;
  }
}
$show = new show();
$userModules = $show->show_modules();





?>