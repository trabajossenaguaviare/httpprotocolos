<?php

class UserSession
{
    public function isUserLoggedIn()
    {
        return isset($_SESSION['user']);
    }

    public function logout()
    {
        session_unset();
        session_destroy();
    }
}
