<?php

namespace Mixin;

use Mixin\Internals\Mixin;

class ContentMixin extends Mixin {

    public function getContent() {
        return $this->container->content;
    }

    public function setContent($content) {
        $this->container->content = $content;
    }
}