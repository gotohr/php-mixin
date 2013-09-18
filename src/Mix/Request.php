<?php

namespace Mix;

use Mix\Internals\Mixable;

/**
 * @method mixed getData() gets data
 * @method mixed setData() sets data
 * @method mixed getContent() gets data
 * @method mixed setContent() sets data
 */
class Request extends Mixable {

    public $data;
    public $content;

    protected function mixins() {
        return array(
            new Mixins\Data($this),
            new Mixins\Content($this)
        );
    }
}