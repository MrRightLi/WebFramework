<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

### 策略模式
class Page
{
    protected $strategy;

    function index()
    {
        echo 'AD:';
        $this->strategy->showAd();

        echo '<hr>';

        echo 'Category';
        $this->strategy->showCategory();
    }

    function setStrage(\IMooc\UserStrategy $strategy)
    {
        $this->strategy = $strategy;
    }
}

$page = new Page();
if (isset($_GET['strategy']) && $_GET['strategy'] == 'famale') {
    $strategy = new \IMooc\FemaleUserStrategy();
} else{
    $strategy =  new \IMooc\MaleUserStrategy();
}

$page->setStrage($strategy);
$page->index();


$db = new \IMooc\Database\MySQLi();
$db->connect('127.0.0.1', 'root', '123456', 'test');
$db->query('show databases');
$db->close();

##
$user = new \IMooc\User(1);
$user->mobile = '1762112114';
$user->name = 'test';
$user->regtime = date('Y-m-d H:i:s');

