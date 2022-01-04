<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="edit.css" type="text/css">

    <title>Update records from databse</title>
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
 <?php
 include "server1.php";
 $id = $_GET ['Id'] ;
 $selectall =  "select * from reciepes where Id ='$id'";
 $qry1 = mysqli_query($db, $selectall);
 $data = mysqli_fetch_array($qry1);

////////////////////////

if(isset($_POST['update']))
    {  
         //can not update the id 
 $reciepename = $_POST['name'];
 $category = $_POST['category'];
 $image = $_POST['image'];
 /* $id = $_POST['Id'];*/
 $sql1= "update reciepes set name = '$reciepename', category = '$category', image = '$image', where Id = '$id'";
 $edit = mysqli_query($db, $sql1); 

    if ($edit){
mysqli_close ($db);
header('location:records.php'); }

 else{
    echo"An Error Occured";
 }
    }
 ?> 

 <h3> Update Data of the reciepes.</h3>
 <form method="POST">
<input type="text" name="name" value="<?php echo $data ['name'] ?>" placeholder="Enter reciepe name" required> <br><br>
<input type="text" name="category" value="<?php echo $data ['category'] ?>" placeholder="Enter category" required> <br><br>
<input type="text" name="image" value="<?php echo $data ['image'] ?>" placeholder="Choose image" required> <br>
<input type="submit" name="update" value="Update">

 </form>
 
</body>
</html>