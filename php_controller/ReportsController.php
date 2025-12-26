<?php



include("ConnectController.php");
class Reports extends connect_DataBase{
 
    public function Add(){
        $invoices = [];
   

            
        if($_SERVER['REQUEST_METHOD'] == "POST"){

            $radio = $_POST['radio']??null;
            $type = $_POST['type']??null;
            $start_at = $_POST["start_at"];
            $end_at = $_POST['end_at'];
            if($radio == 1 ){
                
                if($type == 'الكل'||empty($type) && empty($start_at) && empty($end_at)){

                    $sql_report = "
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
          WHERE invoices.id
          ";

                }else{
                    $start_at = date("Y-m-d",strtotime($start_at));
                     $end_at = date("Y-m-d",strtotime($end_at));
                     $sql_report = "SELECT
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
           WHERE Status =  '$type'
                     AND invoice_date BETWEEN '$start_at' and '$end_at'";
                    
                }
                 $result = mysqli_query($this->connect , $sql_report);
                     while($row = mysqli_fetch_assoc($result)) {
                     $invoices[] = $row;
                }
            }else{
                $invoice_number = $_POST['invoice_number'];
                $search_number ="SELECT invoices.*,  sections.section_name 
            FROM invoices 
            LEFT JOIN sections ON invoices.section_id = sections.id
            WHERE invoices.invoice_number = '$invoice_number'";
            $result_rearch = mysqli_query($this->connect , $search_number);
              while($row = mysqli_fetch_assoc($result_rearch)) {
                     $invoices[] = $row;
              }
            }
           
        }
         return $invoices;
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

    public function show_customer_reports(){
        $shows = [];
        if($_SERVER['REQUEST_METHOD'] == "POST"){
            $section_id = $_POST['section_id'];
            $product = $_POST['product'];
              $start_at = $_POST["start_at"];
            $end_at = $_POST['end_at'];
            if($section_id && $product &&  empty($start_at) && empty($end_at)){
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
            WHERE invoices.section_id = '$section_id'
                AND invoices.product = '$product'";
           $results = mysqli_query($this->connect , $show_query);
                     while($rows = mysqli_fetch_assoc($results)) {
                     $shows[] = $rows;


            }

        }else{
              $start_at = date("Y-m-d",strtotime($start_at));
                $end_at = date("Y-m-d",strtotime($end_at));
                $Select = "SELECT
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
             WHERE invoices.section_id = '$section_id'
                AND invoices.product = '$product'
                     AND invoice_date BETWEEN '$start_at' and '$end_at'";
                     $result_query = mysqli_query($this->connect , $Select);
                       while($rows = mysqli_fetch_assoc($result_query)) {
                     $shows[] = $rows;
        }
        return $shows;
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
}

$reports = new Reports();
$invoices = $reports->Add();
$shows = $reports->show_customer_reports();
$products = $reports->GetProduct();
$sections = $reports->showSections();

?>