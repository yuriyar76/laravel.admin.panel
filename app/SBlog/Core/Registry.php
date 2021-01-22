<?php


namespace App\SBlog\Core;


class Registry
{
    use TSingleton;
    protected static $properties = [];

    public static function setProperty($name, $value){
       self::$properties[$name] = $value;
    }

    public static function getProperty($name){
       return self::$properties[$name];
    }

    public static function getProperties(){
        return self::$properties;
    }





}
