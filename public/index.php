<?php
/**
 * ВХОДНАЯ ТОЧКА
 */


if(PHP_MAJOR_VERSION < 8)
    die('Для работы необходима версия PHP 8.0 или выше');

require_once dirname(__DIR__) . '/config/init.php';

// Инициализируем класс
new \gas\App();

var_dump(\gas\App::$app->getProperties());