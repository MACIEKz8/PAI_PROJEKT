<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }

    public function faq() {
        session_start();
        if(isset($_SESSION['email'])) {
            $this->render('faq');
        }else
            $this->render('login');
    }
}