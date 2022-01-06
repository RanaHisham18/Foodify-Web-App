<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="edit.css" type="text/css">

    <title>Update records from database</title>
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
include ('server1.php');

$id = $_GET['id'];
$qury = mysqli_query($db,"SELECT * FROM `reciepes` WHERE  id ='$id'");
$data = mysqli_fetch_array($qury);

if(isset($_POST['uupdate']))
{
    $pronamee = $_POST ['name'];
    $pprice = $_POST ['price'];
    $prodcolor = $_POST ['color'];
    $ssqql = "UPDATE `product` SET `productname`='$pronamee',`price`='$pprice',`color`='$prodcolor' WHERE `id`='$id'";
    $edit = mysqli_query($db,$ssqql);
    if($edit){
        mysqli_close($db);
        echo " edit is successfuly";
        header("location:admin.php");
    }
else{
    echo"An Error Occured";
}
}
?>
<h4>Update Data</h4>
<form method="POST"> 
<input type="text" name="productname" value="<?php echo $data['productname']?>" placeholder="enter name" required>>
<input type="text" name="price" value="<?php echo $data['price']?>" placeholder="enter price" required>>
<input type="text" name="color" value="<?php echo $data['color']?>" placeholder="enter color" required>>
<input type="submit" name="update" value="Update">
</form>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>