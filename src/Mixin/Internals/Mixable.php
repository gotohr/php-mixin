<?php

namespace Mixin\Internals;

use Mixin\Internals\Mixin;

class Mixable {

    protected $_methods = array();

    public function __construct() {
        foreach($this->mixins() as $mixin) {
            foreach($mixin::provides() as $method) {
                $this->_methods[$method] = $mixin;
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
        if (array_key_exists($method, $this->_methods)) {
            return call_user_func_array(array($this->_methods[$method], $method), $args);
        }
    }

}