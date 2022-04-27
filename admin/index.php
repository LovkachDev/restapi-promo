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
                    <form action="http://localhost:8888/rest/?request=login" method="post" class = "prewiew__form">
                        <p class = "form__label">Username</p>
                        <input class = "form__input" name = "login">
                        <p class = "form__label mar20">Password</p>
                        <input name = "password" type = "password" class = "form__input">
                        <button name= "submit" class = "form__button mar20">Войти</button>
                        <?php
                            $data = $_POST;
                            $submit = $data['submit'];
                            $url = 'http://localhost:8888/rest/?request=login';
                            if(isset($submit))
                            {
                                $params = array(
                                    'login' => $data['login'], // в http://localhost/post.php это будет $_POST['param1'] == '123'
                                    'password' => $data['password'], // в http://localhost/post.php это будет $_POST['param2'] == 'abc'
                                );
                                $result = file_get_contents($url, false, stream_context_create(array(
                                    'http' => array(
                                        'method'  => 'POST',
                                        'header'  => 'Content-type: application/form-data',
                                        'content' => http_build_query($params)
                                    )
                                )));
                            }

                            print_r($result);
                        ?>
                    </form>
                </div>
            </div>
            
        </div>
    </div>
</body>
</html>