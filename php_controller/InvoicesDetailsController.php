<?php
include("ConnectController.php");
class InvoicesDetails extends connect_DataBase{
    
    public function ShowDetails(){
        $shows = [];
        $id = $_GET['id']?? null;
        $show_invoices_details = "SELECT invoices.id,
        invoices.invoice_number,
        invoices.invoice_date,
        invoices.Due_date,
        invoices.product,
        invoices.Discount,
        invoices.Rate_VAT,
        invoices.Value_VAT,
        invoices.Total,
        invoices.Amount_collection,
        invoices.Amount_Commission,
        invoices.Discount,
        invoices.Status,
        invoices.Note,
        invoices.Value_Status,
        sections.section_name
         FROM invoices join sections ON invoices.section_id = sections.id WHERE invoices.id = '$id'";
        $result_show = mysqli_query($this->connect,$show_invoices_details);
        while($rows = mysqli_fetch_assoc($result_show)){
            $shows[] = $rows;
        }
        return $shows;
    }
    public function show_invoices_details(){

        $details = [];
        $id = $_GET['id'];
        $show_invoices_details = "SELECT invoices_details.id , 
        invoices_details.invoice_number , 
        invoices_details.section ,
         invoices_details.product ,
          invoices_details.value_status ,
           invoices_details.status ,
            invoices_details.users ,
            invoices_details.note,
            invoices_details.Created_at,
             invoices_details.Payment_Date ,
              sections.section_name
               from invoices_details join invoices on invoices_details.invoices_id = invoices.id 
               join sections on invoices.section_id  = sections.id WHERE invoices_details.invoices_id = '$id'
               ORDER BY invoices_details.id ASC";
        $result_invoices_details = mysqli_query($this->connect,$show_invoices_details);
        while($invoices_datails = mysqli_fetch_assoc($result_invoices_details)){
             $details[] = $invoices_datails;
        }
        return $details;
    }
    public function attachment(){
        $Attachments = [];
        $id = $_GET['id'];

        $sql_attachment = "SELECT invoice_attachments.id , invoice_attachments.filename ,invoice_attachments.invoice_number , invoice_attachments.create_by ,invoice_attachments.Created_at from invoice_attachments join invoices on invoice_attachments.invoices_id = invoices.id where invoice_attachments.invoices_id = '$id'";
        $result_Attachment = mysqli_query($this->connect,$sql_attachment);
        while($rows_attachment = mysqli_fetch_assoc($result_Attachment)){
            $Attachments[] = $rows_attachment;
        }
        return $Attachments;
    }
    public function download_file(){
      
        if( isset($_GET['download_id'])){
             $id = $_GET['download_id']; 
        $sql_download = "SELECT invoice_attachments.id , invoice_attachments.filename ,invoice_attachments.invoice_number , invoice_attachments.create_by ,invoice_attachments.Created_at from invoice_attachments join invoices on invoice_attachments.invoices_id = invoices.id where invoice_attachments.id  = '$id'";
        $result_download = mysqli_query($this->connect,$sql_download);
        if($result_download && mysqli_num_rows($result_download) > 0){
             $rows = mysqli_fetch_assoc($result_download);
                $path = "invoices_upload/".$rows['invoice_number']."/".$rows["filename"];
                   if(file_exists($path)){
                       header('Content-Description: File Transfer');
                        header("Content-Type: application/octet-stream");
                          header("Content-Disposition: attachment; filename=\"".$rows['filename']."\"");
                            header("Content-Length: " . filesize($path));
                               readfile($path);
               
                      exit;
                }

        }
        }

    }

    public function destroy(){
        if(isset($_POST['attachment_id'])){
        $id = $_POST['attachment_id'];
        $get_fetch_query = "SELECT * FROM invoice_attachments WHERE id = '$id'";
        $get_query = mysqli_query($this->connect , $get_fetch_query);
        if($get_query && mysqli_num_rows($get_query)>0){
            $rows = mysqli_fetch_assoc($get_query);
              $file_path = "invoices_upload/".$rows['invoice_number']."/".$rows["filename"];
            if(file_exists($file_path)){
                unlink($file_path);
            }

            $delete_query = "DELETE  FROM  invoice_attachments WHERE id = '$id'";
            $this->connect->query($delete_query);
              header("Location: invoicesDetalis.php?id=".$rows['invoices_id']);
                 exit;
         
        }
            
        }

    }
}

$Invoices_Details = new InvoicesDetails();
$Invoices_Details->download_file();

$shows = $Invoices_Details->ShowDetails();
$details = $Invoices_Details->show_invoices_details();

$Attachments = $Invoices_Details->attachment();
$Invoices_Details->destroy();
















?>