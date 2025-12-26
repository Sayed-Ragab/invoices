<?php
require('ConnectController.php');
class Status extends connect_DataBase{
public function Show(){
    $id  = $_GET['id'];  
    $show_Alls = [];
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
          FROM invoices Left join sections ON invoices.section_id  = sections.id
          WHERE invoices.id = '$id'
          ";
          
        $result_show = mysqli_query($this->connect, $show_query);
        while ($show_alls =  mysqli_fetch_assoc($result_show)) {
            $show_Alls[] = $show_alls;
        }
        return $show_Alls;
    }
    public function Status_Upate(){
        
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['status_update'])){
            $id = $_POST['id'];
           $invoice_number = $_POST['invoice_number'];
           $product = $_POST['product'];
           $section_id = $_POST['section_id'];
           $Note = $_POST['Note'];
           $Status = $_POST['Status'];
        
          session_start();
          $users = $_SESSION['name'] ?? 'غير معروف';
           $payment_date = $_POST['Payment_Date'];

            if($Status === "مدفوعة"){
              
               $sql_query_status = "UPDATE invoices set Status = '$Status' , Value_Status = 1 , Payment_Date = '$payment_date'  WHERE id = '$id'";
              $result_update_query =  mysqli_query($this->connect , $sql_query_status);
              if($result_update_query){
                
                $insert_stauts = "INSERT INTO invoices_details(invoice_number , invoices_id , product, section , value_status , Note , status ,Payment_Date , users)
                Values('$invoice_number','$id','$product','$section_id',1,'$Note','$Status','$payment_date','$users')";
                 mysqli_query($this->connect , $insert_stauts);

              }


            }else{
                $sql_query_status = "UPDATE invoices set Status = '$Status' , Value_Status = 3 , Payment_Date = '$payment_date' WHERE id = '$id'";
              $result_update_query =  mysqli_query($this->connect , $sql_query_status);
              if($result_update_query){
                

                $users = $_SESSION['name'] ?? 'غير معروف';
                $insert_stauts = "INSERT INTO invoices_details(invoice_number , invoices_id , product, section , value_status , Note , status ,Payment_Date , users)
                Values('$invoice_number','$id','$product','$section_id',3,'$Note','$Status','$payment_date','$users')";
                mysqli_query($this->connect , $insert_stauts);
                 

            }
            

        }
         header("Location: ../invoices/show_status_payment.php?id=$id");
                    exit;
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
    public function invoices_paid(){
        $invoices = [];
        $query = "SELECT  invoices.id ,
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
           FROM invoices  join sections ON invoices.section_id  = sections.id
          WHERE Value_Status = 1  AND deleted_at IS NULL ";
        $result_invoices =  mysqli_query($this->connect, $query);
        if($result_invoices){
            while ($invo = mysqli_fetch_assoc($result_invoices)) {
                    $invoices[] = $invo;
                }
        }
        return $invoices;
    }
      public function invoices_Unpaid(){
        $uppaids = [];
        $query = "SELECT  invoices.id ,
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
           FROM invoices  join sections ON invoices.section_id  = sections.id
          WHERE Value_Status = 2  AND deleted_at IS NULL";
        $result_invoices =  mysqli_query($this->connect, $query);
        if($result_invoices){
            while ($invos = mysqli_fetch_assoc($result_invoices)) {
                    $uppaids[] = $invos;
                }
        }
        return $uppaids;
    }
     public function invoices_paid_partly(){
        $parts = [];
        $query = "SELECT  invoices.id ,
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
           FROM invoices  join sections ON invoices.section_id  = sections.id
          WHERE Value_Status = 3  AND deleted_at IS NULL";
        $result_invoices =  mysqli_query($this->connect, $query);
        if($result_invoices){
            while ($p = mysqli_fetch_assoc($result_invoices)) {
                    $parts[] = $p;
                }
        }
        return $parts;
    }
    public function Archive(){
        $Archives = [];
        $query = "SELECT  invoices.id ,
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
           FROM invoices  join sections ON invoices.section_id  = sections.id
           WHERE  invoices.deleted_at IS NOT NULL";
        $result_Archive =  mysqli_query($this->connect, $query);
        if($result_Archive){
            while ($A = mysqli_fetch_assoc($result_Archive)) {
                    $Archives[] = $A;
                }
        }
        return $Archives;
    }
    public function DeleteAll(){
        
        if($_SERVER['REQUEST_METHOD']=="POST" && isset($_POST['destroy'])){
             $id = $_POST['id'];
              $get_fetch_query = "SELECT * FROM invoice_attachments WHERE invoices_id = '$id'";
        $get_query = mysqli_query($this->connect , $get_fetch_query);
        if($get_query && mysqli_num_rows($get_query)>0){
            $rows = mysqli_fetch_assoc($get_query);
             $path = "./invoices_upload/".$rows['invoice_number'];
              if(is_dir($path)){
             $files = glob($path . '/*');
            foreach($files as $file){
            if(is_file($file)){
              unlink($file);
            }
             }
             
                rmdir($path);
            }
               
            
         }
         $sql_delete = "DELETE FROM  invoices WHERE id = '$id'";
              mysqli_query($this->connect , $sql_delete);
               header("Location: ".$_SERVER['PHP_SELF']);
                  exit;

        }
        


    }

    public function Cancel_archiving(){
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['id'])) {

        $id = $_POST['id'];
        $archve = "UPDATE invoices SET deleted_at = NULL WHERE id = '$id'";
        mysqli_query($this->connect , $archve);   
        header("Location: Archives.php?restored=$id");
        exit;

    }
    }
    
     

}
 


$status = new Status();
$show_Alls = $status->show();
$status->Status_Upate();
$shows = $status->showSections();
$products = $status->GetProduct();
$invoices = $status->invoices_paid();
$uppaids = $status->invoices_Unpaid();
$parts = $status->invoices_paid_partly();
$Archives = $status->Archive();
$status->DeleteAll();
$status->Cancel_archiving();

?>