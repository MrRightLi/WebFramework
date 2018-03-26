<?php

namespace IMooc;

class Factory
{
    static function createDataBase()
    {
        $db =new Database();
        return $db;
    }
}