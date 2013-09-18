<?php

namespace Mixin\Internals;

class Mixin {

    protected $container;

    protected static $_provides = array();

    function __construct($container) {
        $this->container = $container;

    }

    public static function provides() {
        $class = get_called_class();
        if (!isset(static::$_provides[$class])) {
            static::$_provides[$class] = get_class_methods($class);
        }
        return static::$_provides[$class];
    }
}