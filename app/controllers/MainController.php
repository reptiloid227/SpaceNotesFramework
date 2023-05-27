<?php

namespace App\controllers;

use SNFW\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->setMeta('Главная страница', 'Description', 'key, word');
        $this->set(['test' => 'test']);
    }
}