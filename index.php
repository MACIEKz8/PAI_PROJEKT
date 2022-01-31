<?php

require 'routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

routing::get('', 'DefaultController');
routing::get('findRide', 'RideController');
routing::get('myRides', 'RideController');
routing::get('myPackages', 'PackageController');
routing::get('faq', 'DefaultController');
routing::get('myAccount', 'SecurityController');
routing::get('logOut', 'SecurityController');
routing::post('register', 'SecurityController');
routing::post('login', 'SecurityController');
routing::post('newRide', 'RideController');
routing::post('newPackage', 'PackageController');
routing::post('search', 'RideController');


routing::run($path);
 