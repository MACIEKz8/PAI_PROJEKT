<!DOCTYPE html>
<?php session_start()?>
<nav>
    <ul>
        <li>
            <a href="myAccount" id="username"><i class="fas fa-user fa"></i>
                <?php echo $_SESSION["name"]." ".$_SESSION['surname'];?></a>
<!--            -->
        </li>
        <li>
            <a href="newPackage" class="list">Nowa przesyłka</a>
        </li>
        <li>
            <a href="newRide" class="list">Nowy przejazd</a>
        </li>
        <li>
            <a href="findRide" class="list">Wyszukaj przejazd</a>
        </li>
        <li>
            <a href="myRides" class="list">Moje przejazdy</a>
        </li>
        <li>
            <a href="myPackages" class="list">Moje przesyłki</a>
        </li>
        <li>
            <a href="faq" id="list_last">FAQ</a>
        </li>
    </ul>
</nav>
