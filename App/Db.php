<?php

/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.04.2017
 * Time: 22:19
 */

namespace App;

class Db
{
    protected $dbh;

    function __construct()
    {
        $this->dbh = new \PDO('mysql:host=localhost;dbname=test','root',''); //слеш перед PDO - потому что пространство имен!
    }

    public function execute($sql) //передаем запрос в метод
    {
        $sth = $this->dbh->prepare($sql); //готовим запрос
        $res = $sth->execute(); //выполняем запрос
        return $res;
    }

    public function query($sql, $class)
    {
        $sth = $this->dbh->prepare($sql); //готовим запрос
        $res = $sth->execute(); //выполняем запрос
        if (false !== $res) {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class); //если данные есть, вернем данные запроса
        }
        return []; //если данных нет, вернем пустой массив
    }
}