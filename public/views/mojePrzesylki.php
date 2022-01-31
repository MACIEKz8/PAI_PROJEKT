<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <title>MOJE PRZESYLKI</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Moje przesyłki</header>
            <section>
                <?php if(isset($messages)){
                    foreach ($messages as $message){
                        echo $message;
                    }
                }
                ?>
                <div class="content-with-table">
                    <table class="tables">
                        <tr>
                            <th class="table-content">Miasto wyjazdu</th>
                            <th class="table-content">Adres wyjazdu</th>
                            <th class="table-content">Miasto docelowe</th>
                            <th class="table-content">Adres docelowy</th>
                            <th class="table-content">Data wysyłki</th>
                            <th class="table-content">Preferowana godzina wysyłki</th>
                            <th class="table-content">Rozmiar przesyłki</th>
                        </tr>
                        <?php foreach ($packages as $package):?>
                        <tr>
                            <td class="table-content"> <?= $package -> getStartCity()?></td>
                            <td class="table-content"> <?= $package -> getStartAddress()?></td>
                            <td class="table-content"> <?= $package -> getDestination()?></td>
                            <td class="table-content"> <?= $package -> getDestinationAddress()?></td>
                            <td class="table-content"> <?= $package -> getDate()?></td>
                            <td class="table-content"> <?= $package -> getTime()?></td>
                            <td class="table-content"> <?= $package -> getPackageSize()?></td>
                        </tr>
                        <?php endforeach;?>
                    </table>
                </div>
                <?php include('footer.php')?>
            </section>
        </main>
    </div>
</body>