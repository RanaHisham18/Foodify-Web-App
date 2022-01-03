<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>displaying records</title>
</head>
<body>

<h2>Recipes Details</h2>
<center>
    <table border="2">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Image</th>
    </tr>

    <?php

    include "server1.php"; //database connection
$queryselect = select*from recie
    $records=mysqli_query($db,"select*from reciepes") //fetch data

    if ($roww=mysqli_fetch_array($records))
{
    ?>
    <tr>
        <Td><?php echo $roww['name'] ?> </Td>
        <Td><?php echo $roww['id'] ?> </Td>
        <Td><?php echo $roww['category'] ?> </Td>
        <td><img src=" <?php echo $roww['image']; ?>"/> </td>
        <td><a href=" edit.php?id= <?php echo $roww['id']; ?>">Edit</a></td>
        <td><a href=" delete.php?id= <?php echo $roww['id']; ?>">Delete</a></td>

    </tr>

    <?php
          }
    ?>
</center>
</table>



</body>
</html>