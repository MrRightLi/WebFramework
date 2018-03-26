<?php

namespace IMooc;

class Database
{
    static protected $db;

    /**
     *  private 不允许外部 new
     * Database constructor.
     */
    private function __construct()
    {

    }

    static function getInstance()
    {
        if (!self::$db) {
            return self::$db = new self();
        } else {
            return self::$db;
        }
    }

    static function test()
    {
        echo __METHOD__;
    }
}