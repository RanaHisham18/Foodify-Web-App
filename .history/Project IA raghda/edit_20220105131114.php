<!DOCTYPE html>
<html>
<head>
  <title>Update all records from Database</title>
</head>
<body>
<?php

include "server1.php"; // Using database connection file here

 // get id through query string
$id = $_GET['id'];

$qry1 = mysqli_query($db,"select * from product where id='$id'"); // select query

$data = mysqli_fetch_array($qry1); // fetch data

if(isset($_POST['update'])) // when click on Update button
{
  $reciepename = $_POST['name'];
  $category = $_POST['category'];

	
	$sql1="update product set name='$productname', category = '$category', where id = '$id'";
    $edit = mysqli_query($db,$sql1);
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:records.php"); // redirects to all records page
       
    }
else{
	
  echo"An Error Occured";
}
}
?>
<h3>Update Data</h3>

<form method="POST">
<input type="text" name="name" value="<?php echo $data ['name'] ?>" placeholder="Enter reciepe name" required> <br><br>
<input type="text" name="category" value="<?php echo $data ['category'] ?>" placeholder="Enter category" required> <br><br>
<input type="submit" name="update" value="Update">
</form>