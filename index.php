<?php
    $json = file_get_contents('http://localhost:8888/rest/?request=posts');
    $response = json_decode($json, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "assets/style.css">
    <link rel = "stylesheet" href = "assets/media/container.css">
    <link rel = "stylesheet" href = "assets/media/prewiew.css">
    <title>PromoCodes</title>
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
        <div class="container flex" style="min-height: 90vh;">
            <div class="card__area">
                <?php
                    foreach($response as $responsed):
                ?>
                    <div class="card">
                        <div class="card__title"><?= $responsed->title ?></div>
                        <div class="card__content"><?= $responsed->content ?></div>
                        <div class="card__promo flex jcc"><?= $responsed->promo ?></div>
                    </div>
                <?php
                    endforeach;
                ?>
            </div>
        </div>
    </div>
</body>
</html>