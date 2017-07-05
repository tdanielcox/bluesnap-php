<?php

namespace tdanielcox\Bluesnap;

class Bluesnap
{
    private static $environment;
    private static $api_key;
    private static $password;
    private static $base_url;

    public static function init($environment, $api_key, $password)
    {
        self::$environment = $environment;
        self::$api_key = $api_key;
        self::$password = $password;

        if ($environment === 'production')
        {
            self::$base_url = 'https://ws.bluesnap.com/services/2/';
        }
        else
        {
            self::$base_url = 'https://sandbox.bluesnap.com/services/2/';
        }
    }

    public static function getCredentials()
    {
        if (!self::$api_key || !self::$password)
        {
            return null;
        }

        return [ self::$api_key, self::$password ];
    }

    public static function getEnvironment()
    {
        return self::$environment;
    }

    public static function getBaseUrl()
    {
        return self::$base_url;
    }
}