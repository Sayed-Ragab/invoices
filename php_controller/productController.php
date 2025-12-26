<?php
include('ConnectController.php');
session_start();
class products extends connect_DataBase
{
    public function show_section()
    {
        $sections = [];
        $show_sql = "SELECT id , section_name from sections";
        $result_show = mysqli_query($this->connect, $show_sql);
        if (mysqli_num_rows($result_show) > 0) {
            while ($rows = mysqli_fetch_assoc($result_show)) {
                $sections[] = $rows;
            }
        }
        return $sections;
    }
    public function Add()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add'])) {
            $product_name = $_POST['product_name'];
            $Note = $_POST['Note'];
            $section_id = $_POST['section_id'];

            $sql_add = "INSERT INTO products(product_name,Note,section_id)VALUES('$product_name','$Note','$section_id')";
            mysqli_query($this->connect, $sql_add);  
            header("Location: " . $_SERVER['PHP_SELF']);
            exit;
        }
    }
    public function show()
    {
        $shows = [];
        $fetch_data = "SELECT 
    products.id,
    products.product_name,
    products.Note,
    products.section_id,  
    sections.section_name
    FROM products 
    JOIN sections ON products.section_id = sections.id";
        $result = mysqli_query($this->connect, $fetch_data);
        if (mysqli_num_rows($result) > 0) {
            while ($rows = mysqli_fetch_assoc($result)) {
                $shows[] = $rows;
            }
        }
        return $shows;
    }
    public function Update()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
            $id = $_POST['id'];
            $product_name = $_POST['product_name'];
            $Note = $_POST['Note'];
            $section_id = $_POST['section_id'];

            $sql_update = "UPDATE products SET product_name =  '$product_name' , Note = '$Note' , section_id = '$section_id' WHERE id = $id";
            $result_update = mysqli_query($this->connect, $sql_update);
            if (mysqli_affected_rows($this->connect) > 0) {
                header("Location: " . $_SERVER['PHP_SELF']);
                exit;
            }
        }
    }
    public function destroy() {
        $id = $_POST['id'];
        $sql_delete = "DELETE FROM products WHERE id = $id";
        $result_delete = mysqli_query($this->connect,$sql_delete);
        if($result_delete && mysqli_affected_rows($this->connect)>0){
            header("Location: " . $_SERVER['PHP_SELF']);
                exit;
        }
    }
}



$product = new products();
$sections = $product->show_section();
$product->Add();
$shows = $product->show();
$product->Update();
$product->destroy();
