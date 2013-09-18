<?php

namespace Mixin;
use Mixin\Internals\Mixable;
use Mixin\Internals\Mixin;

/**
 * @method mixed getData() gets data
 * @method mixed setData() sets data
 * @method mixed getContent() gets data
 * @method mixed setContent() sets data
 */
class Request extends Mixable {

    public $data;
    public $content;

    /**
     * @return Mixin[]
     */
    protected function mixins() {
        return array(
            new DataMixin($this),
            new ContentMixin($this)
        );
    }
}