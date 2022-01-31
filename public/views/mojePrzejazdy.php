<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <title>MOJE PRZEJAZDY</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Moje przejazdy</header>
            <section class="my-rides">
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
                            <th class="table-content">Miasto docelowe</th>
                            <th class="table-content">Data przejazdu</th>
                            <th class="table-content">Godzina wyjazdu</th>
                        </tr>
                        <?php foreach ($rides as $ride): ?>
                        <tr>
                            <td class="table-content"><?= $ride -> getStartCity()?></td>
                            <td class="table-content"><?= $ride -> getDestination()?></td>
                            <td class="table-content"><?= $ride -> getDate()?></td>
                            <td class="table-content"><?= $ride -> getTime()?></td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php include('footer.php')?>
            </section>
        </main>
    </div>
</body>