<?php

namespace Mixin\Internals;

class Mixin {

    protected $container;

    protected static $_providedMethods = array();

    function __construct($container) {
        $this->container = $container;

    }

    public static function providedMethods() {
        $class = get_called_class();
        if (!isset(static::$_providedMethods[$class])) {
            static::$_providedMethods[$class] = array_diff(
                get_class_methods($class),
                array('__construct', 'providedMethods')
            );
        }
        return static::$_providedMethods[$class];
    }
}