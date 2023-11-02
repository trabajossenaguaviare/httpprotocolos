<?php

class UserView
{
    public function render($user)
    {
        echo "Hello, " . $user->getName();
    }
}
