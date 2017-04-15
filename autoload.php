<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.04.2017
 * Time: 22:14
 */

function __autoload($class)
{
    require __DIR__ . '/' . str_replace('\\', '/', $class) . '.php';
}

