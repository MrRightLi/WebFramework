<?php
define('BASEDIR', __DIR__);
include BASEDIR.'/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

IMooc\Object::test();
App\Controller\Home\Index::test();
echo "<hr>";

$db = IMooc\Factory::createDataBase();
$db::test();
echo "<hr>";