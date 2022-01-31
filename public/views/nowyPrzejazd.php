<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <title>NOWY PRZEJAZD</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Dodaj nowy przejazd</header>
            <section>
                <form action="newRide" method="POST">
                    <?php if(isset($messages)){
                        foreach ($messages as $message){
                            echo $message;
                        }
                    }
                    ?>

                    <div class="new-ride">
                        <div>
                            <input name="miasto-startowe" type="text" placeholder="Miasto startowe">
                            <input name="miasto-docelowe" type="text" placeholder="Miasto docelowe">
                            <input name="data" type="text" placeholder="Data przejazdu" onfocus="this.type='date'">
                            <input name="godzina" type="text" placeholder="Godzina wyjazdu" onfocus="this.type='time'">
                        </div>
                    </div>

                    <div class="break-row"></div>

                    <div class="new-ride-car-packages">
                        <div id="new-ride">
                            <input id="new-ride-input1" name="samochod" type="text" placeholder="Typ samochodu">
                        </div>
                        <div class="break-column"></div>
                        <div id="new-ride">
                            <input id="new-ride-input2" name="rozmiary" type="text" placeholder="Akceptowane rozmiary przesyłek">
                        </div>
                    </div>

                    <div class="break-row"></div>
                    <div class="break-row"></div>

                    <div class="new-ride-car-packages">
                        <div class="break-column"></div>
                        <div id="new-ride">
                            <button id="new-ride-button" type="submit">
                                <i class="fas fa-plus"></i>
                                Dodaj przejazd
                            </button>
                        </div>
                    </div>

                </form>

                <?php include('footer.php')?>
            </section>
        </main>
    </div>
</body>