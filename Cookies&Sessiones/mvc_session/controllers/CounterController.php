<?php
require_once 'models/Counter.php';
require_once 'views/counter_view.php';

class CounterController
{
    private $counter;
    private $view;

    public function __construct()
    {
        $this->counter = new Counter();
        $this->view = new CounterView();
    }

    public function incrementCounter()
    {
        session_start();

        if (!isset($_SESSION['counter'])) {
            $_SESSION['counter'] = 0;
        }

        $_SESSION['counter'] += 1;
        $this->counter->setCount($_SESSION['counter']);

        $this->view->render($this->counter->getCount());
    }
}
