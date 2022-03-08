<?php

namespace gas;

trait TSingleton
{
    private static ?self $instance = null;

    /**
     * Блокируем доступ к конструктору
     */
    private function __construct()
    {

    }

    /**
     * Создаем или возрващаем уже созданный экземпляр класса
     */
    public static function getInstance() : static
    {
        return  static::$instance ?? static::$instance = new static();
    }
}