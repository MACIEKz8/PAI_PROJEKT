<!DOCTYPE html>

<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <script type="text/javascript" src="./public/js/script.js" defer></script>
    <title>REGISTER</title>
</head>

<body>
<div class="login-register-container">
    <div class="register-logo">
        <img class="register-img" src="public/img/logo.svg">
    </div>
    <div class="register-div">
        <form class="register-form" action="register" method="POST">
            <div class="messages">
                <?php if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
            </div>
            <input class="login-input" name="email" type="text" placeholder="email@email.com">
            <input class="login-input" name="password" type="password" placeholder="password">
            <input class="login-input" name="confirmedPassword" type="password" placeholder="confirm password">
            <input class="login-input" name="name" type="text" placeholder="name">
            <input class="login-input" name="surname" type="text" placeholder="surname">
            <input class="login-input" name="phone" type="text" placeholder="phone">
            <button id="new-ride-button" type="submit">ZAREJESTUJ SIĘ</button>
        </form>
    </div>
</div>
</body>
