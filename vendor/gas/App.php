<?php

namespace gas;

class App
{
    public static Registry $app;

    public function __construct()
    {
        // Создаем экземпляр класса
        self::$app = Registry::getInstance();
        // Заполняем параметры из файла
        $this->getParams();
    }

    protected function getParams()
    {
        $params = require_once CONFIG . '/params.php';

        if(!empty($params))
            foreach ($params as $k=>$v) {
                self::$app->setProperty($k, $v);
            }
    }

}