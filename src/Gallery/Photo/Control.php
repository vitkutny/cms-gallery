<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;

final class Control extends WebEdit\Control { //TODO entity control

    private $photo;

    public function __construct($photo) {
        $this->photo = $photo;
    }

    protected function render() {
        $this->template->photo = $this->photo;
        parent::render();
    }

}
