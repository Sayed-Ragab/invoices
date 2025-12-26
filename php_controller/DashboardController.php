<?php
include("ConnectController.php");
abstract class total extends connect_DataBase
{
     
    abstract function total_invoices();
    abstract function total_Paid_Invoices();
    abstract function total_upPaid_Invoices();
    abstract function Partially_Paid_Invoices();
}
class invoices_count extends total
{

    public function total_invoices()
    {
        $sql = "SELECT COUNT(*) AS total FROM invoices";
        $result = mysqli_query($this->connect, $sql);

        if ($row = mysqli_fetch_assoc($result)) {
            return (int) $row['total'];
        }

        return 0;
    }

    public function total_Paid_Invoices()
    {

        $total_Paid_Invoices = "SELECT COUNT(*) as invoices_paid FROM invoices where value_status = 1 ";
        $result_counts = mysqli_query($this->connect, $total_Paid_Invoices);
        if ($rows = mysqli_fetch_assoc($result_counts)) {
            return (int) $rows['invoices_paid'];
        }

        return 0;
    }
    public function total_upPaid_Invoices()
    {

        $total_Paid_Invoices = "SELECT COUNT(*) as invoices_unpaid FROM invoices where value_status = 2 ";
        $result_counts = mysqli_query($this->connect, $total_Paid_Invoices);
        if ($rows = mysqli_fetch_assoc($result_counts)) {
            return (int)  $rows['invoices_unpaid'];
        }
        return 0;
    }

    public function Partially_Paid_Invoices()
    {

        $total_Paid_Invoices = "SELECT COUNT(*) as invoices_part FROM invoices where value_status = 3 ";
        $result_counts = mysqli_query($this->connect, $total_Paid_Invoices);
        if ($part = mysqli_fetch_assoc($result_counts)) {
            return (int) $part['invoices_part'];
        }
        return 0;
    }
    public function invoices()
    {
        $invoices = [];
        $sql_query = "SELECT invoices.*, sections.section_name FROM invoices JOIN sections ON invoices.section_id = sections.id  LIMIT 5 ";
        $result = mysqli_query($this->connect, $sql_query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $invoices[] = $rows;
        }
        return $invoices;
    }

    public function invoices_partly()
    {
        $invoices_parts = [];
        $sql_query = "SELECT invoices.*, sections.section_name FROM invoices JOIN sections ON invoices.section_id = sections.id WHERE Value_Status = 3 LIMIT 5 ";
        $result = mysqli_query($this->connect, $sql_query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $invoices_parts[] = $rows;
        }
        return $invoices_parts;
    }

    public function invoices_paid()
    {
        $invoices_Paids = [];
        $sql_query = "SELECT invoices.*, sections.section_name FROM invoices JOIN sections ON invoices.section_id = sections.id WHERE Value_Status = 1 LIMIT 5 ";
        $result = mysqli_query($this->connect, $sql_query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $invoices_Paids[] = $rows;
        }
        return $invoices_Paids;
    }
    public function invoices_unpaid()
    {
        $invoices_unPaids = [];
        $sql_query = "SELECT invoices.*, sections.section_name FROM invoices JOIN sections ON invoices.section_id = sections.id WHERE Value_Status = 2 LIMIT 5 ";
        $result = mysqli_query($this->connect, $sql_query);
        while ($rows = mysqli_fetch_assoc($result)) {
            $invoices_unPaids[] = $rows;
        }
        return $invoices_unPaids;
    }
}

$totals = new invoices_count();
$counts = $totals->total_invoices();
$totals_paid = $totals->total_Paid_Invoices();
$totals_Unpaid = $totals->total_upPaid_Invoices();
$parts = $totals->Partially_Paid_Invoices();
$invoices = $totals->invoices();
$invoices_Paids = $totals->invoices_paid();
$invoices_parts = $totals->invoices_partly();
$invoices_unPaids = $totals->invoices_unpaid();
