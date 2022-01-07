<?php 
if(!isset($_SESSION)){
    session_start();
} 

$error=array();
$db=mysqli_connect('localhost','root','','section');


if(isset($_POST['register'])){
    $firstname=mysqli_real_escape_string($db,$_POST['firstname']);
    $lastname=mysqli_real_escape_string($db,$_POST['lastname']);
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password1=mysqli_real_escape_string($db,$_POST['psw1']);
    $password2=mysqli_real_escape_string($db,$_POST['psw2']);
    if(empty($firstname)){
        array_push($error,"Firstname is required");
    }
    if(empty($lastname)){
        array_push($error,"Lastname is required");
    }
    if(empty($email)){
        array_push($error,"Email is required");
    }
    if(empty($password1)){
        array_push($error,"Password is required");
    }
    if(empty($password2)){
        array_push($error,"Confirm password is required");
    }
    if($password1!=$password2){
        array_push($error,"Passwords do not match");
    }
    if(count($error)==0){
        $sql="INSERT INTO users(firstname,lastname,email,password,confirmpassword) Values('$firstname','$lastname','$email','$password1','$password2')";
        mysqli_query($db,$sql);

        header('location:login.php');
    }
    
}
//login
if(isset($_POST['login'])){
    $email=mysqli_real_escape_string($db,$_POST['email']);
    $password=mysqli_real_escape_string($db,$_POST['psw']);
    if(empty($email)){
        array_push($error,"Email is required");
    }
    if(empty($password)){
        array_push($error,"Password is required");
    }
    if(count($error)==0){
        $query="SELECT * FROM users WHERE email='$email' AND password='$password'";
        $result=mysqli_query($db,$query);
        if(mysqli_num_rows($result)==1){
            $_SESSION['email']=$email;
            $_SESSION['success']="Welcome you are logged in";
            
            //redirect user to recipes page
          //  header('Location:records.php');
        }
    }
}
//logout
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['email']);
    header('location:login.php');
}