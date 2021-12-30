<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
     <link rel="stylesheet" href="home.css">
     <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
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
    
      <!--About Us-->
      
      <div class="scroll">
          <h1>Mouth Watering Hot Recipes</h1> <br>
          <p class="size">Welcome in our promising website, it's designed to help you<br> 
            catch what you need to eat, find its recipe, take instructions <br>
            to cook it and finally enjoy the hot taste.<br>
            You'll find recipes for all what you want; desserts, meals,<br>
             bakery,snacks and main dishes from all over the world.</p>
            <h2> Recipes</h2> <br>
        <!--Description Recipes-->
<div class= "reciepe-container">
        <div class="flex">
        
            <table class="item">
                <tr>
                  <td>
                    <ul class="list-group">
                     <li class="list-group-item"><img src="images/breakfast.png" width="40px"><a class="one" href="#"> Breakfast</a></li>
                    <li class="list-group-item"><img src="images/lunch.png" width="40px"><a class="one" href="#"> Lunch</a></li>
                    <li class="list-group-item"><img src="images/dinner.png" width="40px"><a class="one" href="#"> Dinner</a></li>
                  </ul></td> 
                  </tr> 

                </table>
               
         
                
                  <table  class="item">
                    <tr>
                  <td>
                    <ul class="list-group">
                    <li class="list-group-item"><img src="images/dessert.png" width="40px"><a class="one" href="#"> Desserts</a></li>
                    <li class="list-group-item"><img src="images/popcorn.png" width="40px"><a class="one" href="#"> Snacks</a></li>
                    <li class="list-group-item"><img src="images/salad.png" width="40px"><a class="one" href="#"> Appetizers</a></li>
                  </ul></td>
                </tr>
              </table>
        
              
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>