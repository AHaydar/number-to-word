<?php
/**
 * Created by PhpStorm.
 * User: ahaydar
 * Date: 7/27/18
 * Time: 6:16 AM
 */

namespace App\Core;

class Request
{
    public static function uri()
    {
        return trim(parse_url(
            $_SERVER['REQUEST_URI'],
            PHP_URL_PATH
        ), '/');
    }

    public static function method()
    {
        return $_SERVER['REQUEST_METHOD'];
    }

}