<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

             <table border="2">
            <tr>
                <td>id</td>
                <td>name</td> 
                <td>category</td> 
                <td>image</td>
            </tr>
              <?php include "server1.php";
              $records = mysqli_query($db, "select * from products");
            while ($data = mysqli_fetch_array($records)){ ?> 
           <tr>

           <td><?php echo $data['id'];?></td>
           <td><?php echo $data['reciepename'];?></td>
           <td><?php echo $data['category'];?></td>
           <td>
               <img src = "<?php echo $data ['image'];?>"/>
           </td>

           <td><a href ="edit.php?id=<?php echo $data ['id']; ?>"> Edit </td>
           <td><a href ="delete.php?id=<?php echo $data ['id']; ?>"> Delete </td>
           </tr>
           
           <?php } ?>

            
            </table>
</body>
</html>