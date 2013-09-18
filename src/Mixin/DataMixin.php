<?php

namespace Mixin;

use Mixin\Internals\Mixin;

class DataMixin extends Mixin {

    public function getData() {
        return $this->container->data;
    }

    public function setData($data) {
        $this->container->data = $data;
    }
}