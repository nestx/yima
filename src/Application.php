<?php
/**
 * Created by PhpStorm.
 * User: 10000814
 * Date: 2017/10/11
 * Time: 10:28
 */
namespace Yima;

class Application
{
    static private $app;

    private function __construct()
    {
        if(!defined('APP_PATH')) throw new \Exception('Use of undefined constant APP_PATH - assumed \'APP_PATH\'');
        if(!defined('INC_PATH')) throw new \Exception('Use of undefined constant INC_PATH - assumed \'INC_PATH\'');
        if(!defined('CFG_PATH')) throw new \Exception('Use of undefined constant CFG_PATH - assumed \'CFG_PATH\'');
        if(!defined('LIB_PATH')) throw new \Exception('Use of undefined constant LIB_PATH - assumed \'LIB_PATH\'');


    }

    static public function getApp()
    {
         if(!isset(self::$app))
         {
             self::$app = new self();
         }

         return self::$app;
    }

    public function run()
    {

    }
}

