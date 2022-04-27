<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../assets/style.css">
    <title>Login</title>
</head>
<body>
    <div class="wrapper">
        <header class = "flex jcc">
            <div class="container flex aic" style = "justify-content: space-between;">
                <div class="header__logo">
                    <a href = "/"><h2>PromoCodes</h2></a>
                </div>
            </div>
        </header>
        <div class="container flex jcc" style="min-height: 90vh;">
            <div class="signup flex jcc aic">
                <div class="prewiew__login">
                    <form action="getRequest.php" method="post" class = "prewiew__form">
                        <p class = "form__label">Username</p>
                        <input class = "form__input" name = "login">
                        <p class = "form__label mar20">Password</p>
                        <input name = "password" type = "password" class = "form__input">
                        <button name= "submit" class = "form__button mar20">Войти</button>
                        <?php
                            
                        ?>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>