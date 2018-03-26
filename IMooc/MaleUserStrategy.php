<?php
/**
 * Created by PhpStorm.
 * User: 20160911
 * Date: 2018/3/26
 * Time: 22:15
 */

namespace IMooc;


class MaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo 'IPhone6';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '电子产品';
    }
}