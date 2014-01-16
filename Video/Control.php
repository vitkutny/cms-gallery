<?php

namespace WebEdit\Gallery\Video;

use WebEdit;

final class Control extends WebEdit\Control {

    public function render($video) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/gallery.latte');
        $template->render();
    }

}
