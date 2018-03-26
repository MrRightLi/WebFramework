<?php

namespace IMooc;

class Register
{
    protected static $objects;
    static function set($alias, $object)
    {
        self::$objects[$alias] = $object;
    }

    function _unset($alias)
    {
        unset(self::$objects[$alias]);
    }

    static function get($alias)
    {
        return self::$objects[$alias];
    }
}
