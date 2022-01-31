<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <title>LOGIN</title>
</head>
<body>
    <div class="login-register-container">
        <div class="login-logo">
            <img src="public/img/logo.svg">
        </div>
        <div class="login-container">
            <form class="login-form" action="login" method="POST">
                <div class="messages">
                    <?php if(isset($messages)){
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>
                </div>
                <input class="login-input" name="email" type="text" placeholder="Adres e-mail">
                <input class="login-input" name="password" type="password" placeholder="Hasło">
                <button id="log-in" type="submit">ZALOGUJ SIĘ <i class="fas fa-sign-in-alt"></i></button>
                <label>Jeśli nie posiadasz jeszcze konta</label>
                <a id="sign-up" href="register">ZAREJESTRUJ SIĘ</a>
            </form>
        </div>
        
    </div>
</body>