<?php

namespace Mixin\Internals;

use Mixin\Internals\Mixin;

class Mixable {

    protected $_mixedMethods = array();

    public function __construct() {
        foreach($this->mixins() as $mixin) {
            foreach($mixin::providedMethods() as $method) {
                $this->_mixedMethods[$method] = $mixin;
            }
        }
    }

    /**
     * @return Mixin[]
     */
    protected function mixins() {
        return array();
    }

    public function __call($method, $args) {
        if (array_key_exists($method, $this->_mixedMethods)) {
            $mixin = $this->_mixedMethods[$method];
            return call_user_func_array(array($mixin, $method), $args);
        }
    }

}