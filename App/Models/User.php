<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 16.04.2017
 * Time: 14:54
 */

namespace App\Models;


use App\Db;

class User
{
    public $email;
    public $name;

    public static function findAll() {
        $db = new Db();
        return $db->query(
            'SELECT * FROM users',
            'App\Models\User'
        );
    }
}