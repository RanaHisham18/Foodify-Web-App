<?php
include "server1.php"; //db connect
$id = $_GET['id'];
$query = "delete from reciepes where id = '$id'";
$del = mysqli_query($db,$query); //del record
if ($del)
{
mysqli_close($db);
header("location:records.php");
}
else {
    echo"error deleting the record"
}








?>