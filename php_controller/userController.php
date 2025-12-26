<?php
require('ConnectController.php');
class users extends connect_DataBase
{
  public function addUsers()
  {


    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add'])) {
      $name =  $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $status = $_POST['status'] ?? 'active';
      $modules = $_POST['module_name'];
      $hashed_password  = password_hash($password, PASSWORD_DEFAULT);

      $sql_usr = "INSERT INTO users(name,email,password,status)Values('$name','$email','$hashed_password','$status')";
      $result =   mysqli_query($this->connect, $sql_usr);

      if ($result) {
        $user_id = mysqli_insert_id($this->connect);
        foreach ($modules as $module) {
          $sql_perm = "INSERT INTO user_module(user_id,module_id) VALUES('$user_id','$module')";
          mysqli_query($this->connect, $sql_perm);
        }

        header("Location: index.php");
        exit();
      }
    }
  }


  public function show()
  {

    $datas = [];
    $id = $_GET['id'] ?? null;
    $sql_show = "SELECT * FROM users WHERE id = '$id'";
    $mysql_query = mysqli_query($this->connect, $sql_show);
    if ($mysql_query) {
      while ($data = mysqli_fetch_assoc($mysql_query)) {
        $datas[] = $data;
      }
    }
    return $datas;
  }
  public function Show_Users()
  {
    $users = [];
    $sql = "SELECT * FROM users";
    $result = mysqli_query($this->connect, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
      $users[] = $row;
    }
    return $users;
  }

  public function allModules()
  {
    $modules = [];
    $show = "SELECT * FROM modules";
    $result_role = mysqli_query($this->connect, $show);
    while ($rwos = mysqli_fetch_assoc($result_role)) {
      $modules[] = $rwos;
    }
    return $modules;
  }

  public function edit()
  {


    $datas = [];
    $id = $_GET['id'] ?? null;
    $sql_show = "SELECT * FROM users WHERE id = '$id'";
    $mysql_query = mysqli_query($this->connect, $sql_show);
    if ($mysql_query) {
      while ($data = mysqli_fetch_assoc($mysql_query)) {
        $datas[] = $data;
      }
    }
    return $datas;
  }

  public function update()
  {

    if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['edit'])) {
      $user_id = $_POST['user_id'];
      $name = $_POST['name'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $status = $_POST['status'] ?? 'active';
      $modules = $_POST['module_name'];


      if (!empty($password)) {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $update_sql = "UPDATE users SET
                           name='$name',
                           email='$email',
                           status='$status',
                           password='$hashed_password'
                           WHERE id='$user_id'";
      } else {
        $update_sql = "UPDATE users SET
                           name='$name',
                           email='$email',
                           status='$status'
                           WHERE id='$user_id'";
      }
      mysqli_query($this->connect, $update_sql);

      $sql_perm = "DELETE FROM user_module WHERE user_id = '$user_id'";
      mysqli_query($this->connect, $sql_perm);

      foreach ($modules as $module) {

        $sql_add = "INSERT INTO user_module(user_id,module_id) VALUES('$user_id','$module')";
        mysqli_query($this->connect, $sql_add);
      }
      header("Location: index.php");
    }
  }

  public function Get_modules()
  {
    $user_id = $_GET['id'] ?? null;

    $userModules = [];
    $sql = "SELECT module_id FROM user_module WHERE user_id = '$user_id'";
    $result = mysqli_query($this->connect, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
      $userModules[] = $row['module_id'];
    }

    return $userModules;
  }
}

$user = new users();
$add = $user->addUsers();
$users = $user->Show_Users();

$modules = $user->allModules();
$edits = $user->edit();
$update = $user->update();
$userModules = $user->Get_modules();
