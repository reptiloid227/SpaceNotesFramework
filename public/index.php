<?php

if (PHP_MAJOR_VERSION < 8){
    die('Необходима версия PHP от 8.0 и выше');
}

require_once dirname(__DIR__) . '/config/init.php';

new \SNFW\App();

echo "Ку";