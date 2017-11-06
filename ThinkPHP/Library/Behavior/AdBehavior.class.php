<?php
/**
 * Created by PhpStorm.
 * User: mouthliu
 * Email:mouthliu@foxmail.com
 * Date: 2017/11/6
 * Time: 17:06
 */

namespace Behavior;


class AdBehavior
{
    public function run($tag){
        echo "我是一条{$tag['ad']}广告，由{$tag['name']}代言！";
    }
}