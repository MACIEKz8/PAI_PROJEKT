<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/b5ec5d7eac.js" crossorigin="anonymous"></script>
    <script type="text/javascript" src="./public/js/search.js" defer></script>
    <title>WYSZUKAJ PRZEJAZD</title>
</head>
<body>
    <div class="base-container">
        <?php include('nav.php')?>
        <main>
            <header class="headers">Wyszukaj przejazd</header>
            <section class="searchRides">

                    <div class="find-ride">
                        <input name="miasto-startowe" type="text" placeholder="Wpisz miasto startowe">
                    </div>
                <div class="find-content-table">
                    <table class="tables">
                        <tr>
                            <th class="table-content" id="header_start_city">Miasto wyjazdu</th>
                            <th class="table-content" id="header_destination">Miasto docelowe</th>
                            <th class="table-content" id="header_date">Data przejazdu</th>
                            <th class="table-content" id="header_package_size">Akceptowane rozmiary przesyłek</th>
                            <th class="table-content" id="header_package_size">Identyfikator realizującego przejazd</th>
                        </tr>
                        <?php foreach ($rides as $ride): ?>
                            <tr class = "rides">
                                <td class="table-content" id="start_city"><?= $ride -> getStartCity()?></td>
                                <td class="table-content" id="destination"><?= $ride -> getDestination()?></td>
                                <td class="table-content" id="date"><?= $ride -> getDate()?></td>
                                <td class="table-content" id="package_size"><?= $ride -> getAcceptedPackageSizes()?></td>
                                <td class="table-content" id="added_by"><?= $ride -> getIdAddedBy()?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </section>
        </main>
    </div>
</body>

<template id="ride-template">
    <tr>
        <td id="start_city" class="table-content">startCity</td>
        <td id="destination" class="table-content">destination</td>
        <td id="date" class="table-content">date</td>
        <td id="package_size" class="table-content">packageSize</td>
        <td class="table-content" id="added_by"></td>

    </tr>
</template>

<template id="header-template">
    <tr>
        <th class="table-content" id="header_start_city">Miasto wyjazdu</th>
        <th class="table-content" id="header_destination">Miasto docelowe</th>
        <th class="table-content" id="header_date">Data przejazdu</th>
        <th class="table-content" id="header_package_size">Akceptowane rozmiary przesyłek</th>
        <th class="table-content" id="header_added_by">Identyfikator realizującego przejazd</th>
    </tr>
</template>