<?php
/**
 * Created by PhpStorm.
 * User: mouthliu
 * Email:mouthliu@foxmail.com
 * Date: 2017/11/6
 * Time: 17:43
 */
function hook($tag, &$params=NULL) {
    \Think\Hook::listen($tag,$params);
}