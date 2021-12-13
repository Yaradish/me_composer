<?php
/**
 * Created by PhpStorm
 * User: YCG
 * Date: 2021/12/13
 * Time: 16:27
 **/
require_once __DIR__ . '/vendor/autoload.php';
use Ycg\MeComposer\Yy;

$obj = new Yy();

$msg = $obj->hello();
var_dump($msg);