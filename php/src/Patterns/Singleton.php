<?php
namespace Katas\Patterns;
class Singleton
{
    static $instance = null;

    private function __construct()
    {
        //gfy
    }

    static function GetInstance()
    {
        if (self::$instance == null)
            self::$instance = new Singleton();

        return self::$instance;
    }
}