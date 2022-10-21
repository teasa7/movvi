<!DOCTYPE html>
<html>
    <head>
        <title>Регистрация</title>
        <meta charset="utf-8">
        <link href="css/registration.css" type="text/css" rel="stylesheet" media="screen,projection">

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
                <form class="formRegistration">
                    <div class="blockPadding">
                        <label>Имя <span class="redText">*</span></label><br>
                        <input type="text"><br>
                        <label>Фамилия<span class="redText">*</span></label><br>
                        <input type="text"><br>
                        <label>Электронная почта<span class="redText">*</span></label><br>
                        <input type="email" pattern="^(?=.{1,64}@)[A-Za-z0-9_-]+(\\.[A-Za-z0-9_-]+)*@[^-][A-Za-z0-9-]+"><br>
                        <label>Номер телефона</label><br>
                        <input type="tel"><br>
                        <label>Пароль<span class="redText">*</span></label></label><br>
                        <input type="password"><br>
                        <label>Повтор пароля <span class="redText">*</span></label></label><br>
                        <input type="password"><br>
                        <div class="acceptData">
                            <input type="checkbox"><a>Принять согласие на обработку персональных данных</a><span class="redText">*</span></label>
                        </div>
                    </div>
                    <input type="button" value="Далее">  
                </form>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>