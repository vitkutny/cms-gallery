<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;

final class Control extends WebEdit\Control {

    private $photo;

    public function __construct($photo) {
        $this->photo = $photo;
    }

    public function render() {
        $template = $this->template;
        $template->photo = $this->photo;
        $template->setFile($this->getTemplateFiles('view'));
        $template->render();
    }

}
