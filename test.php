<?php

use Mix\Mixins\Data;
use Mix\Request;

require_once './vendor/autoload.php';

$r = new Request();
$d = $r->getData();
print_r($d);

$r->setData("Hello");
$r->setContent("world");

print_r($r->getData());
print_r($r->getContent());

print_r(Data::providedMethods());