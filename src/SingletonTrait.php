<?php

trait SingletonTrait
{
    private static $instance;

    final public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }

        return static::$instance;
    }
}
