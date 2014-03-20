<?php

namespace WebEdit\Gallery\Photo\Control;

use WebEdit\Gallery\Photo\Control;

interface Factory {

    /**
     * @return Control
     */
    public function create();
}
