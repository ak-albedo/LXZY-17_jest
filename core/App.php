<?php

namespace App\core;

class App
{
    protected static $registry = [];

    /**
     * @param  string  $key
     * @param  mixed  $value
     * @return void
     */
    public static function bind($key, $value)
    {
        static::$registry[$key] = $value;
    }

    /**
     * @param  string  $key
     * @return mixed
     * @throws Exception
     */
    public static function get($key)
    {
        if (!array_key_exists($key, static::$registry)) {
            throw new Exception("Parameter {$key} not found");
        }

        return static::$registry[$key];
    }
}