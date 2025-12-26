<?php
require_once("ConnectController.php"); 
class notification extends connect_DataBase{

    public function show(){
     $notifications = [];
        $show_notfy = "SELECT * FROM notifications";
        $result_show = mysqli_query($this->connect, $show_notfy);
        if (mysqli_num_rows($result_show) > 0) {
            while ($rows = mysqli_fetch_assoc($result_show)) {
                $notifications[] = $rows;
            }
        }

        return $notifications;

    }
public function show_count()
{
   $sql = "SELECT COUNT(*) AS unread_count 
            FROM notifications 
            WHERE read_at ";

    $result = mysqli_query($this->connect, $sql);
    $row = mysqli_fetch_assoc($result);

    return $row['unread_count'];
   
}
}







$notify = new notification();
$notifications = $notify->show();
$unreadCount = $notify->show_count();


?>