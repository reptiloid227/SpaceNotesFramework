<?php

namespace App\controllers;

use SNFW\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->layout = 'default';
    }
}