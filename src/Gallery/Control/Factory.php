<?php

namespace WebEdit\Gallery\Control;

use WebEdit\Gallery;

interface Factory {

    /**
     * @return Gallery\Control
     */
    public function create();
}
