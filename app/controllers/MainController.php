<?php

namespace app\controllers;


use app\models\Main;
use SNFW\Controller;

class MainController extends Controller
{
    public function indexAction()
    {
        /** @property Main $model */
        $names = $this->model->getNames();
        $this->setMeta('Главная страница', 'Description', 'key, word');
        $this->set(compact('names'));
    }
}