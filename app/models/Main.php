<?php

namespace App\models;
use RedBeanPHP\R;

class Main extends \SNFW\Model
{
    public function getNames(): array{
        return R::findAll('name');
    }
}