<?php

namespace App\controllers;

use RedBeanPHP\R;
use SNFW\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        $names = R::findAll('name');
        $this->setMeta('Главная страница', 'Description', 'key, word');
        $this->set(compact($names));
    }
}