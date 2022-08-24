<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Aqua</title>
    <style>
        @font-face {
            font-family: Proxima-nova-regular;
            src: url(fonts/proximanova_regular.ttf)
        }
        @font-face {
            font-family: Proxima-nova-semibold;
            src: url(fonts/proxima_nova.ttf)
        }
        @font-face {
            font-family: ElMessiri-Bold;
            src: url(fonts/ElMessiri-Bold.ttf)
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="content">
            <?php
            require_once "blocks/header.php";
            ?>
            <div class="description">
                <div class="description__container container">
                    <div class="description__content">
                        <div class="description__row">
                            <img src="img/decoration_description.svg" alt="">
                            <p class="description__text">Укрепление здоровья</p>
                            <img class="rotate_right" src="img/decoration_description.svg" alt="">
                        </div>
                        <div class="description__title">Акватерапия <br> RitmStyle</div>
                    </div>
                </div>  
            </div>
            <div class="sessions">
                <div class="sessions__container container"> 
                    <div class="title__row">
                        <img src="img/decoration_title.svg" alt="">
                        <p class="sessions__title title__text">Сеансы RitmStyle</p>
                        <img class="rotate_right" src="img/decoration_title.svg" alt="">
                    </div>
                    <div class="sessions__content"> 
                        <div class="sessions__row">
                            <div class="sessions__maincard">
                                <div class="card__text">Стандартный RitmStyle</div>
                            </div>
                            <div class="sessions__colum">
                                <div class="sessions__card card">
                                    <div class="card__text">RitmStyle для пар</div>
                                </div>
                                <div class="sessions__card card">
                                    <div class="card__text">RitmStyle для беременных</div>
                                </div>
                            </div>
                            <div class="sessions__colum">
                                <div class="sessions__card card">
                                    <div class="card__text">RitmStyle с полным <br> погружением под воду</div>
                                </div>
                                <div class="sessions__card card">
                                    <div class="card__text">RitmStyle + красочная <br> подводная фотосессия</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
        <footer class="footer">
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src = "js/script.js"></script>
</body>
</html>
