<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin</title>
</head>
<body>
    <header><h2>admin interface</h2></header>
    <form method="POST">
        <label>look for something</label>
        <input type="text" name="search" placeholder="search by ID" autocomplete="off" required> 
        <input type="submit" name="submit" value="serach !">

    </form>
<?php 

include 'server1.php';
$con = 'server1.php';
if(isset($_POST['submit'])){
    $ss = $_POST['search'];
    $query= "SELECT * FROM `products` WHERE `id`='$ss'";
    $ress = mysqli_query($query);

if ($roww = mysqli_fetch_array($ress)){

?>
    <br/><br/>
    <center> 
    <table border="2">
    <tr>
        <th>Name</th>
        <th>ID</th>
        <th>color</th>
        <th>price</th>
        <th>Image</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>           

    <tr>
        <Td><?php echo $roww['name'] ?> </Td>
        <Td><?php echo $roww['id'] ?> </Td>
        <Td><?php echo $roww['category'] ?> </Td>
        <td><img src=" <?php echo $roww['image']; ?>"/> </td>
        <td><a href=" update.php?id= <?php echo $roww['id']; ?>">Edit</a></td>
        <td><a href=" delete.php?id= <?php echo $roww['id']; ?>">Delete</a></td>




    </tr>
    </table>
    </center>
    <?php
}
else{
    echo "Name not found";


} }
?>


</body>
</html>