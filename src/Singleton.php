<?php

trait Singleton
{
    /**
     * The singleton instance.
     *
     * @var 
     */
    protected static $instance;

    /**
     * Get the singleton instance.
     *
     * @param  array  $arguments
     * @return object
     */
    final public static function getInstance(array $arguments = [])
    {
        if (static::$instance === null) {
            static::$instance = new static(...$arguments);
        }

        return static::$instance;
    }
}
