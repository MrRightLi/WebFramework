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
} else {
    $strategy = new \IMooc\MaleUserStrategy();
}

$page->setStrage($strategy);
$page->index();


$db = new \IMooc\Database\MySQLi();
$db->connect('127.0.0.1', 'root', '123456', 'test');
$db->query('show databases');
$db->close();
echo '<hr>';

##
$user = new \IMooc\User(1);
$user->mobile = '1762112114';
$user->name = 'test';
$user->regtime = date('Y-m-d H:i:s');
echo '<hr>';


## 观察者模式
class Event extends \IMooc\EventGenerator
{
    /**
     * 时间触发器
     */
    function trigger()
    {
        echo "Event-- 1<br> ";

        $this->notify();

    }
}

class Observer1 implements \IMooc\Observer
{
    function update($event_info = null)
    {
        echo "业务逻辑一";
        var_dump(__METHOD__);
    }
}

$event = new Event();
$observer1 = new Observer1();
$event->addObserver($observer1);
$event->trigger();
echo '<hr>';

