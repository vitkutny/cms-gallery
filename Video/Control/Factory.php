<?php

namespace WebEdit\Gallery\Video\Control;

use WebEdit\Gallery\Video\Control;

interface Factory {

    /**
     * @return Control
     */
    public function create();
}
