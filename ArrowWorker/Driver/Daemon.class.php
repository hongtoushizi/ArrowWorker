<?php
/**
 * User: Arrow
 * Date: 2016/8/1
 * Time: 19:49
 */

namespace ArrowWorker\Driver;


class Daemon
{
    //服务配置
    protected static $config = [];
    //服务对象
    protected static $daemonObj;

    protected function __construct($config)
    {
        self::$config = $config;
    }


}