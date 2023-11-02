<?php

class WelcomeView
{
    public function render()
    {
        echo "Bienvenido Usuario!  " . $_SESSION['user'] . " <a href='logout.php'>Log out</a>";
    }
}
