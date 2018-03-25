<?php
/**
 * Created by PhpStorm.
 * User: 20160911
 * Date: 2018/3/25
 * Time: 15:25
 */

namespace IMooc;

class Loader
{
    static function autoload($class)
    {
        require BASEDIR.'/'.str_replace('\\', '/', $class) .'.php';

    }
}