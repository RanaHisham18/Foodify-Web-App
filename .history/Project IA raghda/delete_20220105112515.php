<?php
include "server1.php"; //db connect
$id = $_GET['id'];
$query = "delete from reciepes where id = '$id'";
$del = mysqli_query($db,$q)








?>