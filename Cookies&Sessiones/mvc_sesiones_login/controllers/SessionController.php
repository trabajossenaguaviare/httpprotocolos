<?php
require_once 'models/UserSession.php';
require_once 'views/login_view.php';
require_once 'views/welcome_view.php';

class SessionController
{
    private $userSession;
    private $loginView;
    private $welcomeView;

    public function __construct()
    {
        $this->userSession = new UserSession();
        $this->loginView = new LoginView();
        $this->welcomeView = new WelcomeView();
    }

    public function login()
    {

        if ($this->userSession->isUserLoggedIn()) {

            $this->welcomeView->render();
        } else {

            $this->loginView->render();
        }
    }
    public function logout()
    {
        $this->userSession->logout();
        header('Location: index.php');
    }
}

