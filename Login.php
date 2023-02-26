<?php

$server = "localhost";
$username = "root";
$password = '';
$database = "ThinkingCube";

$data=mysqli_connect($server,$username,$password,$database);

if($data===false){
  die("connection error");
}

if($_SERVER["REQUEST_METHOD"]=="POST"){
  $username=$_POST["username"];
  $password=$_POST["password"];

  $sql="SELECT * FROM users WHERE username='".$username."' AND password='".$password."' ";

  $result=mysqli_query($data,$sql);

  $row = mysqli_fetch_array($result);


  if($row["usertype"]=="user"){

    $_SESSION["username"]=$username;
    header("location:home.php");

  }

  elseif($row["usertype"]=="admin"){

    $_SESSION["username"]=$username;
    header("location:dashboard.php");
    
  }

  // if(isset($_POST["submit"])){
  //   $myInput=$_POST["username"];
  //   if(preg_match("/^[A-Za-z][A-Za-z0-9_]{7,29}$/", $myInput)){
  //     echo "Valid Name";
  //   }else{
  //     echo"Enter Valid Name";
  //   }
  // }
 

}

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style1.css">
  <title>Login</title>
</head>


<body>
  <div class="container" >
    <div class="card-login">
      <form action="#" method="POST">
        <h1 class="header-main">Login</h1>

        <div class="input-container">
          <ion-icon name="people-outline"></ion-icon>
          <input type="text" name="username" id="username" placeholder="Username" />
        </div>
        <p id="username-error">Please enter a valid Username!</p>

        <div class="input-container">
          <ion-icon name="lock-closed-outline"></ion-icon>
          <input type="password" name="password" id="password" placeholder="Password"/>
        </div>
        <p id="password-error">Please enter a valid Passoword!</p>

        <div class="checkbox-container">
          <input type="checkbox" name="check" id="toggle" />
          <label for="toggle">
            <div class="checkbox-border-button">
              <div>
                <ion-icon name="checkmark-outline" class="tick"></ion-icon>
              </div>
            </div>
            <p>Remember me</p>
          </label>
        </div>

        <input type="submit" value="Login" name="submit" class="button"/>

        <div class="register-text">
          <p>Don't have an account?<a href="Register.php"> Register Now!</a></p>
        </div>

      </form>

    </div>
  </div>

  <script>

    var username = document.getElementById("username");
    var usernameError = document.getElementById("username-error");

username.addEventListener('input', function (e){

    var userpattern = /^[A-Za-z][A-Za-z0-9_]{7,29}$/;
    var currentValue = e.target.value;
    var vlera = userpattern.test(currentValue);

    if(vlera){
        usernameError.style.display = 'none';
    }else{
        usernameError.style.display  = 'block';
    }
    })





    var password = document.getElementById("password");
    var passwordError = document.getElementById("password-error");

password.addEventListener('input', function (e){

    var userpattern1 = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;
    var currentValue1 = e.target.value;
    var vlera1 = userpattern1.test(currentValue1);


    if(vlera1){
        passwordError.style.display = 'none';
    }else{
        passwordError.style.display  = 'block';
    }
    })

  </script>

  <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>


</body>

</html>