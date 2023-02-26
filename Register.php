<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Register</title>
</head>

<body>
    <div class="container">
        <div class="card-login">
            
            <?php
            include 'Model.php';
            $model = new Model();
            $insert = $model->insert();
            ?>
             
            <form action="" method="post">
                <h1 class="header-main">Signup</h1>
                <div class="input-container">
                    <ion-icon name="people-outline"></ion-icon>
                    <input type="text" name="name" id="username" placeholder="Username" required/>
                </div>
                <p id="username-error">Please enter a valid Username!</p>

                <div class="input-container">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" id="email" placeholder="Email" required/>
                </div>
                <p id="email-error">Please enter a valid Email!</p>

                <div class="input-container">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="password" id="password" placeholder="Password" required/>
                </div>
                <p id="password-error">Please enter a valid Passowrd!</p>


                <input type="submit" name="submit" value="Signup" class="button" />
                <div class="signup-text">
                    <p>Already a Member?<a href="Login.php"> Login Here!</a></p>
                </div>
            </form>

        </div>

    </div>

    <script src="https://unpkg.com/ionicons@5.2.3/dist/ionicons.js"></script>

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

        var email = document.getElementById("email");
        var emailError = document.getElementById("email-error");
    
    email.addEventListener('input', function (e){
    
        var userpattern2 = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        var currentValue2 = e.target.value;
        var vlera2 = userpattern2.test(currentValue2);
    
    
        if(vlera2){
            emailError.style.display = 'none';
        }else{
            emailError.style.display  = 'block';
        }
        })
    
      </script>
</body>

</html>