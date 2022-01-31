<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Ride.php';
require_once __DIR__.'/../repository/RideRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';


class RideController extends AppController
{
    private $rideRepository;

    public function __construct()
    {
        parent::__construct();
        $this->rideRepository = new RideRepository();
        $this->userRepository = new UserRepository();
    }

    public function findRide(){
        session_start();
        if(isset($_SESSION['email']))
        {
            $rides = $this ->rideRepository->getAllRides();
            $users = $this ->userRepository->getAllUsers();
            $this->render('wyszukajPrzejazd', ['rides' => $rides, 'users' => $users]);
        }else
            $this->render('login');
    }

    public function myRides() {
        session_start();
        if(isset($_SESSION['email'])) {
            $user = $this->userRepository->getUser($_SESSION['email']);
            $idAddedBy = $this->userRepository->getUserDetailsId($user);
            $rides = $this->rideRepository->getRides($idAddedBy);
            $this->render('mojePrzejazdy', ['rides' => $rides]);
        }else
            $this->render('login');
    }

    public function newRide(){
        session_start();
        if(isset($_SESSION['email'])) {
            if ($this->isPost()) {
                $user = $this->userRepository->getUser($_SESSION['email']);
                $idAddedBy = $this->userRepository->getUserDetailsId($user) + 1;
                $ride = new Ride($_POST['miasto-startowe'], $_POST['miasto-docelowe'], $_POST['data'], $_POST['godzina'], $_POST['samochod'], $_POST['rozmiary'], $idAddedBy);
                $this->rideRepository->newRide($ride, $idAddedBy);
                return $this->render('mojePrzejazdy', ['rides' => $this->rideRepository->getRides($idAddedBy), 'messages' => ['Pomyślnie dodano przejazd!'], 'ride' => $ride]);
            }
            return $this->render('nowyPrzejazd');
        }else
            $this->render('login');
    }

    public function search(){
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if($contentType === "application/json"){
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application.json');
            http_response_code(200);

            echo json_encode($this->rideRepository->getRideByStartCity($decoded['searchStartCity']));
        }
    }
}