<?php
/**
 * Created by PhpStorm.
 * User: Anton
 * Date: 14.04.2017
 * Time: 22:10
 */

require __DIR__ . '/autoload.php';

$db = new \App\Db();
//$res = $db->execute('CREATE TABLE foo (id SERIAL)');
//print_r($res);

$data = $db->query('SELECT * FROM foo');

var_dump($data);