<?php include('server1.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="register.css" type="text/css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Register</title>
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
             
            </ul>
            
          </div>
        </div>
    </nav>


    <form method="post" action="register.php">
      <?php if(count($error)>0);?>
      <div class="error">
        <?php foreach($error as $error1){
          echo $error1;
          echo "<br>";
        }
        ?>
      </div>

      <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>
        <label for="firstname"><b>First Name</b></label>
        <br>

        <input type="text" placeholder="Enter First Name" name="firstname" id="firstname">
        <br>

        <label for="lastname"><b>Last Name</b></label>
        <br>

        <input type="text" placeholder="Enter Last Name" name="lastname" id="lastname">
        <br>

        <label for="email"><b>Email</b></label>
        <br>

        <input type="email" placeholder="Enter Email" name="email" id="email">
        <br>

        <label for="psw"><b>Password</b></label>
        <br>

        <input type="password" placeholder="Enter Password" name="psw1" id="psw1">
        <br>

        <label for="confirmpassword"><b>Confirm Password</b></label>
        <br>

        <input type="password" placeholder="Confirm Password" name="psw2" id="psw2">
        
        <p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
    
       <a href=" <button type="submit" class="registerbtn" name="register">Register</button>
      </div>
      
      <div class=" signin">
        <p>Already have an account? <a href="login.php">Sign in</a>.</p>
      </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>  
</body>
</html>