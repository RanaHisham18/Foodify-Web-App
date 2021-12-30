<?php include('server1.php');?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Foodify</title>
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
            </ul>
            
          </div>
        </div>
    </nav>


    <form method="post" action="login.php">
      <?php if(count($error)>0);?>
      <div class="error">
        <?php foreach($error as $error1){
          echo $error1;
          echo "<br>";
        }
        ?>
      </div>
      <div class="container">
        <h1>Log in</h1>
        <p>Please fill in this form to enter your account and view recipes.</p>
        <hr>
       
        <label for="email"><b>Email</b></label>
        <br>

        <input type="text" placeholder="Enter Email" name="email" id="email" required>
        <br>

        <label for="psw"><b>Password</b></label>
        <br>

        <input type="password" placeholder="Enter Password" name="psw" id="psw" required>
        <br>

        <input type="checkbox" name="Status" value="Admin">Admin</input>
        <input type="checkbox" name="Status" value="user">User</input>
        <?php
          if (isset($_POST['status'])){
            if($_POST['status'] == "user"){
            /* header('location:')*/
            }
            else {
               /* header('location:')*/
            }
         // echo $_POST['gender']; // Displays value of checked checkbox.

                  }
                    ?>
        <button type="submit" name="login" class="loginbtn">Log In</button>
      </div>
      <p>Not yet a member?<a href="register.php">Sign up</a></p>
    </form>
    
</body>
</html>
