<?php
define('BASEDIR', __DIR__);
include BASEDIR . '/IMooc/Loader.php';
spl_autoload_register('\\IMooc\\Loader::autoload');

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