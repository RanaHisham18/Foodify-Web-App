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

	
	$sql1="update product set productname='$productname', color='$color', price='$price' where id='$id'";
    $edit = mysqli_query($db,$sql1);
	
    if($edit)
    {
        mysqli_close($db); // Close connection
        header("location:allrecords.php"); // redirects to all records page
       
    }
else{
	
echo mysqli_error();
}
}
?>
<h3>Update Data</h3>

<form method="POST">
  <input type="text" name="x" value="<?php echo $data['productname'] ?>" placeholder="Enter Product Name" Required>
  <input type="text" name="color" value="<?php echo $data['color'] ?>"placeholder="Enter color" Required> >
    <input type="text" name="price" value="<?php echo $data['price'] ?>" placeholder="Enter price value" Required>>
  <input type="submit" name="update" value="Edit">
</form>