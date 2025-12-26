<?php

class connect_DataBase
{
    public $localhost = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "invoices";
    public $connect;
    public function __construct()
    {
        $this->connect = mysqli_connect($this->localhost, $this->username, $this->password,$this->db_name);
        if (!$this->connect) {
            echo "Field Connect " . mysqli_connect_error();
        } 
    }
}

$connect_DB = new connect_DataBase();