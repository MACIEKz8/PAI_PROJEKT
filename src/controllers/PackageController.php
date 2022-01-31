<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Package.php';
require_once __DIR__.'/../repository/PackageRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class PackageController extends AppController
{
    private $packageRepository;

    public function __construct()
    {
        parent::__construct();
        $this->packageRepository = new PackageRepository();
        $this->userRepository = new UserRepository();
    }

    public function myPackages(){
        session_start();
        if(isset($_SESSION['email'])) {
            $user = $this->userRepository->getUser($_SESSION['email']);
            $idAddedBy = $this->userRepository->getUserDetailsId($user);
            $packages = $this->packageRepository->getPackages($idAddedBy);
            $this->render('mojePrzesylki', ['packages' => $packages]);
        }else
            $this->render('login');
    }

    public function newPackage(){
        session_start();
        if(isset($_SESSION['email'])) {
            if ($this->isPost()) {
                $user = $this->userRepository->getUser($_SESSION['email']);
                $idAddedBy = $this->userRepository->getUserDetailsId($user);
                $package = new Package($_POST['miasto-wysylki'], $_POST['miasto-cel'], $_POST['start-adres'], $_POST['cel-adres'], $_POST['start-kod-pocztowy'], $_POST['cel-kod-pocztowy'], $_POST['wymiary'], $_POST['data'], $_POST['godzina']);
                $this->packageRepository->newPackage($package, $idAddedBy);
                return $this->render('mojePrzesylki', ['packages' => $this->packageRepository->getPackages($idAddedBy), 'messages' => ['Pomyślnie dodano przesyłkę!'], 'package' => $package]);
            }
            return $this->render('nowaPrzesylka');
        }else
            $this->render('login');
    }
}