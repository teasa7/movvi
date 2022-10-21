<!DOCTYPE html>
<html>
    <head>
        <title>Авторизация</title>
        <meta charset="utf-8">
        <link href="css/autorization.css" type="text/css" rel="stylesheet" media="screen,projection">

        <!-- Шрифты -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Jura:wght@300;700&display=swap" rel="stylesheet">
    </head>
    <body>
        <header>

        </header>
        <main>
            <div class="blockOpacity">
                <table class="headlines">
                    <tr>
                        <td><h1><a href="autorization.php">Вход</a></h1></td>
                        <td><h1><a href="registration.php">Регистрация</a></h1></td>
                    </tr>
                </table>    
                <form class="formAutorization">
                    <div class="blockPadding">
                        <label>Электронная почта/номер телефона</label><br>
                        <input type="email"><br>
                        <label>Пароль</label><br>
                        <input type="password"><br>
                        <div class="rememberMe">
                            <input type="checkbox"><a>Запомнить меня</a>
                        </div>
                    </div>
                    <input type="button" value="Войти">  
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>