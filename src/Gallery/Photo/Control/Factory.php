<?php

namespace WebEdit\Gallery\Photo\Control;

use WebEdit\Gallery\Photo;

interface Factory {

    /**
     * @return Photo\Control
     */
    public function create();
}
