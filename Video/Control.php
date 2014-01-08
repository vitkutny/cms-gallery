<?php

namespace CMS\Gallery\Video;

use CMS;

final class Control extends CMS\Control {

    public function render($video) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/gallery.latte');
        $template->render();
    }

}
