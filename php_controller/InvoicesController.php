<?php
include('ConnectController.php');
  session_start();
class invoices extends connect_DataBase
{

    public function add_invoices()
    {
        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['add'])) {
            $invoice_number = $_POST['invoice_number'];
            $invoice_date = $_POST['invoice_date'];
            $Due_date = $_POST['Due_date'];
            $product = $_POST['product'];
            $section_id = $_POST['section_id'];
            $Amount_collection = $_POST['Amount_collection'];
            $Amount_Commission = $_POST['Amount_Commission'];
            $Discount = $_POST['Discount'];
            $Value_VAT = $_POST['Value_VAT'];
            $Rate_VAT = $_POST['Rate_VAT'];
            $Total = $_POST['Total'];
            $Note = $_POST['Note'];
            $fileName = $_FILES['pic']['name'];
            $imagetemp = $_FILES['pic']['tmp_name'];

            $sql_query_add = "INSERT INTO invoices(invoice_number,invoice_date,Due_date,product,section_id,Amount_collection,Amount_Commission,Discount,Value_VAT,Rate_VAT,Total,Note,Status,Value_Status)values('$invoice_number','$invoice_date','$Due_date','$product','$section_id','$Amount_collection','$Amount_Commission','$Discount','$Value_VAT','$Rate_VAT',' $Total','$Note','غير مدفوعه','2')";
            $result_query = mysqli_query($this->connect, $sql_query_add);
            if ($result_query) {

                $invoices_id = mysqli_insert_id($this->connect);


              

                $users = $_SESSION['name'] ?? 'غير معروف';
                $sql_inset_details = "INSERT INTO invoices_details(invoice_number,invoices_id,product,section,value_status,Note,status,users)
                                   VALUES ('$invoice_number','$invoices_id','$product','$section_id','2','$Note','غير مدفوعه','$users')";

                $result_invoices_details = mysqli_query($this->connect, $sql_inset_details);
                if ($result_invoices_details) {

                    $newfile = './invoices_upload/' . $invoice_number;
                    $create_by = $_SESSION['name'] ?? 'غير معرف';

                    $sqL_image = "INSERT INTO invoice_attachments(filename,invoice_number,create_by,invoices_id)Values('$fileName','$invoice_number','$create_by','$invoices_id')";
                    $sql_query = mysqli_query($this->connect,  $sqL_image);
                    if ($sql_query) {
                        if (!is_dir($newfile)) {
                            mkdir($newfile, 0777, true);
                        }
                        move_uploaded_file($imagetemp, "$newfile/$fileName");

                        
   $data = json_encode([
    'model' => 'invoice',
    'model_id' => $invoices_id
]);
                         $notification_type = "InvoiceAdded";
                         $create_by = $_SESSION['name'] ?? 'غير معرف';
                         $notification_message = "تم إضافة فاتورة جديده بواسطة $create_by";
                         $role = "admin";
                         $sql_notification = "INSERT INTO notifications(type,message,data,item_id,type_key,create_by,role)Values('$notification_type','$notification_message','$data','$invoices_id','invoice','$create_by','$role')";
                         mysqli_query($this->connect , $sql_notification);   

                        header("Location: index.php");
                    }
                }
            }
        }
    }
    public function showSections()
    {
        $sections = [];
        $sql_show = "SELECT id,section_name FROM sections";
        $result_show = mysqli_query($this->connect, $sql_show);
        if (mysqli_num_rows($result_show) > 0) {
            while ($rows = mysqli_fetch_assoc($result_show)) {
                $sections[] = $rows;
            }
        }

        return $sections;
    }
    public function GetProduct()
    {
        $products = [];
        if (isset($_GET['id'])) {
            $sectionId = $_GET['id'] ?? '';
            $sql_product = "SELECT * FROM products WHERE section_id = '$sectionId'";
            $result_product = mysqli_query($this->connect, $sql_product);
            if ($result_product) {
                while ($rows = mysqli_fetch_assoc($result_product)) {
                    $products[] = $rows;
                }
            }
        }
        echo json_encode($products);
    }
    public function Show()
    {
        $showAll = [];
        $show_query = "
         SELECT
         invoices.id ,
          invoices.invoice_number , 
          invoices.invoice_date,
          invoices.Due_date , 
          invoices.product ,
          invoices.Value_Status,
          invoices.Amount_collection , 
          invoices.Amount_Commission ,
          invoices.Discount , 
          invoices.Value_VAT ,
          invoices.Rate_VAT , 
          invoices.Total ,
          invoices.Status , 
          invoices.Note  ,
          sections.section_name

          FROM invoices join sections ON invoices.section_id  = sections.id
           WHERE invoices.deleted_at IS NULL";
        $result_show = mysqli_query($this->connect, $show_query);
        while ($show_all =  mysqli_fetch_assoc($result_show)) {
            $showAll[] = $show_all;
        }
        return $showAll;
    }

    public function edit()
    {
        $updates = [];
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $update = "SELECT * FROM invoices Where id = '$id'";
            $result_update = mysqli_query($this->connect, $update);
            if ($result_update && mysqli_num_rows($result_update) > 0) {
                while ($rows =  mysqli_fetch_assoc($result_update)) {
                    $updates[] = $rows;
                }
            }
        }
        return $updates;
    }


    public function Attachment()
    {
        $attachments = [];
        $id = $_GET['id']?? null;
        $update = "SELECT filename FROM invoice_attachments Where invoices_id  = '$id'";
        $result_update = mysqli_query($this->connect, $update);
        while ($rows =  mysqli_fetch_assoc($result_update)) {
            $attachments[] = $rows['filename'] ?? '';
        }
        return $attachments;
    }
    public function update()
    {

        if ($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['update'])) {
            $id = $_POST['id']??null;
            $invoice_number = $_POST['invoice_number'];
            $invoice_date = $_POST['invoice_date'];
            $Due_date = $_POST['Due_date'];
            $product = $_POST['product'];
            $section_id = $_POST['section_id'];
            $Amount_collection = $_POST['Amount_collection'];
            $Amount_Commission = $_POST['Amount_Commission'];
            $Discount = $_POST['Discount'];
            $Value_VAT = $_POST['Value_VAT'];
            $Rate_VAT = $_POST['Rate_VAT'];
            $Total = $_POST['Total'];
            $Note = $_POST['Note'];
        
         $fileName = $_FILES['pic']['name'];
        $imagetemp = $_FILES['pic']['tmp_name'];


            mysqli_begin_transaction($this->connect);
            try {
                  $sql_query_update = "UPDATE invoices SET invoice_number =  '$invoice_number',
                 invoice_date = '$invoice_date',
                 Due_date = '$Due_date',
                product = '$product',
                section_id = '$section_id',
                Amount_collection = '$Amount_collection',
                Amount_Commission = '$Amount_Commission',
                Discount = '$Discount',
                Value_VAT = '$Value_VAT',
                Rate_VAT = '$Rate_VAT',
                Total =  '$Total',
                Note =  '$Note'
                WHERE id = '$id'";

                mysqli_query($this->connect, $sql_query_update);
                $sql_update_2 = "UPDATE invoices_details SET 
               invoice_number = '$invoice_number',
               product = '$product',
               section = '$section_id',
               Note = '$Note'
               WHERE invoices_id = '$id'";
                mysqli_query($this->connect, $sql_update_2);

                $get_sql_attachmet = "SELECT * FROM invoice_attachments WHERE invoices_id = '$id'";
                $result_get_query = mysqli_query($this->connect, $get_sql_attachmet);
                $rows = mysqli_fetch_assoc($result_get_query);

                
             $old_invoice_number = $rows['invoice_number'];
             $old_file_name = $rows['filename'];
           
               

                $old_folder = "./invoices_upload/" . $old_invoice_number;
                $new_folder = "./invoices_upload/" . $invoice_number;

                if (is_dir($old_folder)) {
                    rename($old_folder, $new_folder);
                }

            if (empty($fileName)) {
                $fileName = $old_file_name;
            }


                 if (!empty($imagetemp)) {
                
                    if (!is_dir($new_folder)){
                     mkdir($new_folder, 0777, true);
                }

               if (file_exists("$new_folder/$old_file_name")) {
                  unlink("$new_folder/$old_file_name");
    }

                move_uploaded_file($imagetemp, "$new_folder/$fileName");
            }

                $sql_update_3 = "UPDATE invoice_attachments SET invoice_number = '$invoice_number' , filename = '$fileName' WHERE invoices_id = '$id'";
                 mysqli_query($this->connect, $sql_update_3);
                mysqli_commit($this->connect);
                header("Location: edit_invoices.php?id=$id");
                exit;
            } catch (Exception $e) {
                mysqli_rollback($this->connect);
                echo "Error Updating Data: " . $e->getMessage();
            }
        }
    }
    public function Delete(){
        
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['delete'])){
             $id = $_POST['id'];
              $get_fetch_query = "SELECT * FROM invoice_attachments WHERE invoices_id = '$id'";
        $get_query = mysqli_query($this->connect , $get_fetch_query);
        if($get_query && mysqli_num_rows($get_query)>0){
            $rows = mysqli_fetch_assoc($get_query);
             $path = "./invoices_upload/".$rows['invoice_number'];
             $files = glob($path . '/*');
            foreach($files as $file){
            if(is_file($file)) unlink($file);
             }
              if(is_dir($path)){
                rmdir($path);
            }
               
            
         }
         $sql_delete = "DELETE FROM  invoices WHERE id = '$id'";
              mysqli_query($this->connect , $sql_delete);
                header("Location: ".$_SERVER['PHP_SELF']);
                  exit;

        }
        


    }

    public function archve(){
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['id'])){
        $id = $_POST['id'];
        $archve = "UPDATE invoices SET deleted_at = NOW() WHERE id = '$id'";
        $result_archve = mysqli_query($this->connect , $archve);
        if($result_archve){
            header("Location: index.php?id=$id");
            exit;
        }


    }
}
public function print_invoices(){
    $id = $_GET['id'] ??null;
    $prints = [];
        $show_query = "
         SELECT
         invoices.id ,
          invoices.invoice_number , 
          invoices.invoice_date,
          invoices.Due_date , 
          invoices.product ,
          invoices.Value_Status,
          invoices.Amount_collection , 
          invoices.Amount_Commission ,
          invoices.Discount , 
          invoices.Value_VAT ,
          invoices.Rate_VAT , 
          invoices.Total ,
          invoices.Status , 
          invoices.Note  ,
          sections.section_name
          FROM invoices join sections ON invoices.section_id  = sections.id
           WHERE invoices.id = '$id'";
        $result_show = mysqli_query($this->connect, $show_query);
        while ($show_all =  mysqli_fetch_assoc($result_show)) {
            $prints[] = $show_all;
        }
        return $prints;
    }
}
    

$invoices = new invoices();
$invoices->add_invoices();

$shows = $invoices->showSections();
$products = $invoices->GetProduct();
$showAll = $invoices->Show();
$updates = $invoices->edit();
$attachments = $invoices->Attachment();
$invoices->update();
$invoices->Delete();
$invoices->archve();
$prints = $invoices->print_invoices();