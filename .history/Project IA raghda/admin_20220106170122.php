<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="admin.css">
    <title>Admin Search</title>
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
    <header><h3>Admin interface</h3></header>
    <form method="POST">
        <label class="label">look for something</label>
        <input type="text" name="search" placeholder="search by ID" autocomplete="off" required>  <br> <br>
        <input type="submit" name="submit" value="search !">
    </form>
    <h6> To display all reciepes from database click here </h6>
 <a href="records.php" > See more</a>
<?php 

include 'server1.php';
$con = 'server1.php';
if(isset($_POST['submit'])){
    $ss = $_POST['search'];
    $query= "SELECT * FROM `reciepes` WHERE `id`='$ss'";
    $ress = mysqli_query($db,$query);

if ($roww = mysqli_fetch_array($ress)){

?>
    <br/><br/>
    <center> 
    <table border="2">
    <tr class="table">
        <th>Name</th>
        <th>ID</th>
        <th>color</th>
        <th>Edit</th>
        <th>Delete</th>


    </tr>           

    <tr>
        <Td><?php echo $roww['name'] ?> </Td>
        <Td><?php echo $roww['id'] ?> </Td>
        <Td><?php echo $roww['category'] ?> </Td>
        <td><a href=" edit.php?id= <?php echo $roww['id']; ?>">Edit</a></td>
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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>