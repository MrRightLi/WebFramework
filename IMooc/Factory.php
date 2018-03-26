<?php

namespace IMooc;

class Factory
{
    static function createDataBase()
    {
        $db = Database::getInstance();
        Register::set('db1', $db);
        return $db;
    }
}