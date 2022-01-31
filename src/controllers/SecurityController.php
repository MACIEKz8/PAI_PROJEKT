<?php

require_once 'AppController.php';
require_once __DIR__."/../models/User.php";
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login(){

        if(!$this->isPost()){
            return $this->render('login');
        }

        $email = $_POST['email'];
        $password = hash("sha512", $_POST['password']);

        $user = $this->userRepository->getUser($email);

        if(!$user){
            return $this->render('login', ['messages' => ['Podany użytkownik nie istnieje!']]);
        }

        if($user->getEmail() !== $email){
            return $this->render('login', ['messages' => ['Błędny adres email!']]);
        }

        if($user->getPassword() !== $password){
            return $this->render('login', ['messages' => ['Błędne hasło!']]);
        }

        session_start();
        $_SESSION['email'] = $user->getEmail();
        $_SESSION['name'] = $user->getName();
        $_SESSION['surname'] = $user->getSurname();

        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/myAccount");
    }

    public function myAccount(){
        session_start();
        $usermail = $_SESSION['email'];
        $user = $this->userRepository->getUser($usermail);
        $id = $this->userRepository->getUserDetailsId($user);
        return $this->render('mojeKonto', ['user' => $user, 'id' => $id]);
    }

    public function logOut(){
        session_start();
        $_SESSION = array();
        session_destroy();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/");
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Podane hasła różnią się!']]);
        }

        $user = new User($email, hash("sha512", $password), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['Zarejestrowałeś się pomyślnie!']]);
    }
}