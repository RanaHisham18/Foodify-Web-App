<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include "server1.php";
    $id = $_GET ['id'];
    $qry1 = mysqli_query($db, "selsect * from reciepes where id ='$id");
    $data = mysqli_fetch_array($qry1);

//click on update btn
    if(isset($_POST['update']))
    {
        //can not update the id 
        $reciepename = $_POST['name'];
        $category = $_POST['category'];
        $image = $_POST['image'];
        $sql1= "update reciepe set reciepe name = '$reciepename', category = '$category', image = '$image', where id = '$id';
        $edit = mysqli_query($db, $sqli1)

    }
    
    if ($edit){
        mysqli_close($db);
        //close db connection 
        header("location:records.php");
    }

    else {
        echo mysqli_error()
    }
    ?>
</body>
</html>