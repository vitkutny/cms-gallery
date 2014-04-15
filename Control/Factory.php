<?php

namespace WebEdit\Gallery\Control;

use WebEdit\Gallery\Control;

interface Factory {

    /**
     * @return Control
     */
    public function create($gallery);
}
