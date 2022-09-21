<?php

namespace App;

class Postcard
{
    protected static function resolveFacade($name)
    {
        return app()[$name];
    }
    // Magic methods grab any call to any static method that does not exist on the class by calling __callStatic
    public static function __callStatic($method, $arguments)
    {
        // TODO: Implement __callStatic() method.

        return (self::resolveFacade('Postcard'))
                ->$method(...$arguments);
    }
}
