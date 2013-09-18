<?php

use Mixin\DataMixin;
use Mixin\Request;

require_once './vendor/autoload.php';

$r = new Request();
$d = $r->getData();
print_r($d);

$r->setData("Hello");
$r->setContent("world");
print_r($r->getData());
print_r($r->getContent());

print_r(DataMixin::providedMethods());