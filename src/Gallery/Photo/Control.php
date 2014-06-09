<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;

final class Control extends WebEdit\Control { //TODO entity control

    private $photo;

    public function __construct($photo) {
        $this->photo = $photo;
    }

    public function render($type = 'view') {
        $this->template->photo = $this->photo;
        parent::render($type);
    }

}
