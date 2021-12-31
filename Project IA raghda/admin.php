<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="admin.css" type="text/css">
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
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Sign Up</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Log in</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#recipes">Recipes</a>
  
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="login.php?logout='1'">Log Out</a>
                  <?php include('server1.php');
                  ?>
                  <section>
                      <?php
                  if (isset($_SESSION['email'])){
                      echo $_SESSION['email'];
                  }
                  if (isset($_SESSION['success'])){
                      echo $_SESSION['success'];
                      unset($_SESSION['success']);
                  }
                  ?>
              </section>

              <h2>Reciepe details for admin.</h2>

              <center> 
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

              </center>
            </table>
        



              ?>
  
                </li>
              </ul>
              
            </div>
          </div>
      </nav>

</body>
</html>