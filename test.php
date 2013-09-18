<?php

require_once './vendor/autoload.php';

$r = new \Mixin\Request();
$d = $r->getData();
print_r($d);

$r->setData("Hello");
$r->setContent("world");
print_r($r->getData());
print_r($r->getContent());
