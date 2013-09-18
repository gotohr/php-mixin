<?php

namespace Mix\Mixins;

use Mix\Internals\Mixin;

class Content extends Mixin {

    public function getContent() {
        return $this->container->content;
    }

    public function setContent($content) {
        $this->container->content = $content;
    }
}