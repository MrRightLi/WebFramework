<?php
/**
 * Created by PhpStorm.
 * User: 20160911
 * Date: 2018/3/26
 * Time: 22:12
 */

namespace IMooc;


class FemaleUserStrategy implements UserStrategy
{
    function showAd()
    {
        // TODO: Implement showAd() method.
        echo '2018年新款';
    }

    function showCategory()
    {
        // TODO: Implement showCategory() method.
        echo '女装';
    }

}