<?php
require('ConnectController.php');
session_start();
class Section extends connect_DataBase
{

    public function Add_section()
    {

        if (isset($_POST['add'])) {

            $section_name = trim($_POST['section_name']);
            $Note = trim($_POST['Note']);
            $sql_qurey = "INSERT INTO sections(section_name,Note)Values('$section_name','$Note')";
                mysqli_query($this->connect, $sql_qurey);
         
                header("Location: " . $_SERVER['PHP_SELF']);
            }
        }
         

    public function show()
    {
        $showData = [];
        $fetch_data = "select * from sections ";
        $result = mysqli_query($this->connect, $fetch_data);
        if(mysqli_num_rows($result)){   
        while ($rows = mysqli_fetch_assoc($result)) {
            $showData[] = $rows;
        }
    }
        return $showData;
    }
    public function edit()
    {
        $edits = [];
        if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql_edit = "SELECT * FROM sections WHERE id = '$id'";
        $sql_resul = mysqli_query($this->connect, $sql_edit);
        if (mysqli_num_rows($sql_resul) > 0) {
            while ($rows = mysqli_fetch_assoc($sql_resul)) {
                $edits[] = $rows;
            }
        }
    }
        return $edits;
    }
    public function update()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['edit'])) {
            $id = $_POST['id'];
            $section_name = $_POST['section_name'];
            $Note = $_POST['Note'];

            $update_sql = "UPDATE sections SET section_name = '$section_name' , Note = '$Note' where id = '$id'";
            $result = mysqli_query($this->connect, $update_sql);
            if (mysqli_affected_rows($this->connect) > 0) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            } 
            
        }
    }
    public function Delete(){
        $id = $_POST['id'];
        $delete_query = "DELETE  FROM sections WHERE id = $id";
        $delet_result = mysqli_query($this->connect,$delete_query);
        if(  $delet_result && mysqli_affected_rows($this->connect)>0){
             header("Location: " . $_SERVER['PHP_SELF']);
                exit;
        }
    }
}

$sections = new Section();
$sections->Add_section();
$shows = $sections->show();
$sections->update();
$sqlis = $sections->edit();
$sections->Delete();
