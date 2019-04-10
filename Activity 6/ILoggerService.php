<?php
namespace App\Services\Utility;

interface ILoggerService
{
    public static function debug($message, $data=array());
    public static function info($message, $data=array());
    public static function warning($message, $data=array());
    public static function error($message, $data=array());
}

