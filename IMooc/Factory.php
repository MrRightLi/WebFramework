<?php

namespace IMooc;

class Factory
{
    static function createDataBase()
    {
        $db = Database::getInstance();
        return $db;
    }
}