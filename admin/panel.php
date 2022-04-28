<?php
    session_start();
    require "../session/isAdmin.php";
    require "./panelActions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "../assets/style.css">
    <title>Promo Admin</title>
</head>
<body>
    <div class="wrapper">
        <header class = "flex jcc">
            <div class="container flex aic" style = "justify-content: space-between;">
                <div class="header__logo">
                    <a href = "panel.php"><h2>Admin Panel</h2></a>
                </div>
                <ul class = "header__navigation">
                    
                </ul>
            </div>
        </header>
        <div class="container flex jcc" style="width: 100%;">
            <div class="admin__rows">
                <div class="admin__col">
                    <form action = "panel.php" method = "POST" class = "prewiew__form">
                        <p class = "form__label">Название</p>
                        <input class = "form__input" name = "title">
                        <p class = "form__label mar20">Контент</p>
                        <input name = "content" type = "text" class = "form__input">
                        <p class = "form__label mar20">Промо</p>
                        <input name = "promo" type = "text" class = "form__input">
                        <button onclick = '<?= createPost(); ?>' name= "submit" class = "form__button mar20">Создать</button>
                    </form> 
                </div>
                <div class="admin__col">
                    <form action = "panel.php" method = "POST" class = "prewiew__form">
                        <p class = "form__label">ID</p>
                        <input name = "id" type = "text" class = "form__input">
                        <button onclick = '<?= deletePost(); ?>' name= "submit" class = "form__button mar20">Удалить</button>
                    </form> 
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>