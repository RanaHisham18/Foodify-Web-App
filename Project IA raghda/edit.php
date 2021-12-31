<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update records from databse</title>
</head>
<body>
 <?php
 include "server1.php";
 $id = $_GET ['id'] ?? null;
 //null collapse operator is used to eliminate a warning concern the id

 $qry1 = mysqli_query($db, "select * from reciepes where id ='$id'") or die( mysqli_error($db));
 $data = mysqli_fetch_array($qry1);

////////////////////////

if(isset($_POST['update']))
    {  
         //can not update the id 
 $reciepename = $_POST['name'];
 $category = $_POST['category'];
 $image = $_POST['image'];
 $sql1= "update reciepe set reciepe name = '$reciepename', category = '$category', image = '$image', where id = '$id'";
 $edit = mysqli_query($db, $sqli1); 

    if ($edit){
mysqli_close ($db);
header('location:records.php'); }

 else{
    echo"An Error Occured";
 }
    }
 ?> 
 

 <h3> Update Data</h3>
 <form method="POST">
<input type="text" name="rname" value="<?php echo $data ['name'] ?>" placeholder="Enter reciepe name" required> <br><br>
<input type="text" name="rcategory" value="<?php echo $data ['category'] ?>" placeholder="Enter category" required> <br><br>
<input type="text" name="image" value="<?php echo $data ['image'] ?>" placeholder="Choose image" required> 

 </form>
</body>
</html>