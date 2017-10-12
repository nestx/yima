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

    }

    static public function getApp()
    {
         if(!isset(self::$app))
         {
             self::$app = new self();
         }

         return self::$app;
    }
}

