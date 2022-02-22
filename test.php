<?php

$myarray['test'] = 123;
$myarray['test2'] = 23423;
$myarray['test4'] = 23423;
$myarray['test3'] = 23423;
$myarray['test5'] = 23423;

var_dump($myarray);

unset($myarray['test']);

var_dump($myarray);