<?php

$myarray['test'] = 123;
$myarray['test2'] = 23423;

var_dump($myarray);

unset($myarray['test']);

var_dump($myarray);