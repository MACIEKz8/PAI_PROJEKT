<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <title>NOWA PRZESYLKA</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Dodaj nową przesyłkę</header>
            <section class="section">
                <form action="newPackage" method="POST">
                    <div class="content-new-package">
                        <div>
                            <input class="input" name="miasto-wysylki" type="text" placeholder="Miasto wysyłki">
                        </div>

                        <div>
                            <input class="input" name="miasto-cel" type="text" placeholder="Miasto odbioru">
                        </div>

                        <div>
                            <input class="input" name="start-adres" type="text" placeholder="Ulica i numer domu wysyłki">
                        </div>

                        <div>
                            <input class="input" name="cel-adres" type="text" placeholder="Ulica i numer domu odbioru">
                        </div>

                        <div>
                            <input class="input" name="start-kod-pocztowy" type="text" placeholder="Kod pocztowy wysyłki">
                        </div>

                        <div>
                            <input class="input" name="cel-kod-pocztowy" type="text" placeholder="Kod pocztowy odbioru">
                        </div>

                        <div>
                            <input class="input" name="wymiary" type="text" placeholder="Rozmiar paczki">
                        </div>
                        <div>
                            <input class="input" name="data" type="text" placeholder="Data wysyłki" onfocus="this.type='date'">
                        </div>
                        <div>
                            <input class="input" name="godzina" type="text" placeholder="Preferowana godzina wysyłki" onfocus="this.type='time'">
                        </div>

                        <div class="add-button">
                            <button type="submit">
                                <i class="fas fa-plus"></i>
                                Dodaj przesyłkę
                            </button>
                        </div>

                    </div>
                </form>
                <?php include('footer.php')?>
            </section>
        </main>
    </div>
</body>