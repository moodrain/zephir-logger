<?php

namespace Logger;

class Log
{

    static private $path = './';


    static private $handlers = array();


    /**
     * @param string $path
     */
    public static function setPath(string $path)
    {
    }


    public static function getPath()
    {
    }

    /**
     * @param string $level
     * @param mixed $callback
     */
    public static function setHandler(string $level, $callback)
    {
    }

    /**
     * @param string $level
     * @param string $message
     */
    public static function write(string $level, string $message)
    {
    }

    /**
     * @param string $message
     */
    public static function debug(string $message)
    {
    }

    /**
     * @param string $message
     */
    public static function info(string $message)
    {
    }

    /**
     * @param string $message
     */
    public static function warn(string $message)
    {
    }

    /**
     * @param string $message
     */
    public static function error(string $message)
    {
    }

}
