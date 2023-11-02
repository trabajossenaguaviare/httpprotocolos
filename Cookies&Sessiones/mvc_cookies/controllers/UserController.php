<?php
require_once 'models/User.php';
require_once 'views/user_view.php';

class UserController
{
    private $user;
    private $view;

    public function __construct()
    {
        $this->user = new User();
        $this->view = new UserView();
    }


    public function handleCookie()
    {
        if (isset($_COOKIE['username'])) {
            $this->user->setName($_COOKIE['username']);
        } else {
            setcookie('username', 'Guest', time() + (86400 * 30), "/"); // 86400 segundos = 1 día
            $this->user->setName('Guest');
        }

        $this->view->render($this->user);
    }
}
