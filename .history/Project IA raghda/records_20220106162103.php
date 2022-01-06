<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="records.css" type="text/css">
    <title>displaying records</title>
</head>
<body>

 <!--Navigation Bar-->
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
     <img class="image" src="images/foodify.png" alt="Foodify logo"> 
     
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="container-fluid">
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="register.php">Sign Up</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Log in</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#recipes">Recipes</a>

              </li>
            </ul>
            
          </div>
        </div>
    </nav>
<h2>Recipes Details for Admin</h2>
<center>
    <table border="2">
    <tr class="table">
      
        <th>Name</th>
        
        <th>Category</th>
        <th>Image</th>
        <th>edit</th>
        <th>delete</th>
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
        <Td class="text"><?php echo $data['name'] ?> </Td>
        <Td class="text"><?php echo $data['id'] ?> </Td>
        <Td class="text"><?php echo $data['category'] ?> </Td>
        <td><img src=" <?php echo $data['image']; ?>" width = "200px", height="200px"/> </td>
        <td><a href=" edit.php?id= <?php echo $data['id']; ?>">Edit</a></td>
        <td><a href=" delete.php?id= <?php echo $data['id']; ?>">Delete</a></td>

    </tr>

    <?php
          }
    ?>
</center>
</table>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>