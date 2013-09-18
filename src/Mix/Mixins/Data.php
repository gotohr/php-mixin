<?php

namespace Mix\Mixins;

use Mix\Internals\Mixin;

class Data extends Mixin {

    public function getData() {
        return $this->container->data;
    }

    public function setData($data) {
        $this->container->data = $data;
    }
}