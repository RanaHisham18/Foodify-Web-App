<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="edit.css" type="text/css">
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
    $queryselect = 'select*from reciepes';
    $records=mysqli_query($db,$queryselect); //fetch data
    //$data = $records;

    while ($data = mysqli_fetch_array($records))
{
    ?>
    <tr>
        <Td><?php echo $data['name'] ?> </Td>
        <Td><?php echo $data['id'] ?> </Td>
        <Td><?php echo $data['category'] ?> </Td>
        <td><img src=" <?php echo $data['image']; ?>"/> </td>
        <td><a href=" edit.php?id= <?php echo $data['id']; ?>">Edit</a></td>
        <td><a href=" delete.php?id= <?php echo $data['id']; ?>">Delete</a></td>

    </tr>

    <?php
          }
    ?>
</center>
</table>



</body>
</html>