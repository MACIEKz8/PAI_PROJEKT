<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>MOJE KONTO</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Moje konto</header>
            <div class="my-account">
                <label>Imię: </label>
                <label>
                    <?php if(isset($user)){
                        echo $user->getName();
                    }?>
                </label>
                <div class="break-row"></div>
                <label>Nazwisko: </label>
                <label>
                    <?php if(isset($user)){
                        echo $user->getSurname();
                    }?>
                </label>
                <div class="break-row"></div>
                <label>Adres email: </label>
                <label>
                    <?php if(isset($user)){
                        echo $user->getEmail();
                    }?>
                </label>
                <div class="break-row"></div>
                <label>Identyfikator użytkownika: </label>
                <label>
                    <?php if(isset($id)){
                        echo $id+1;
                    }?>
                </label>

                <form action="logOut" method="get">
                    <button>Wyloguj się</button>
                </form>
            </div>

        </main>
    </div>
</body>
