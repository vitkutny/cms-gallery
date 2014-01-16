<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;

final class Control extends WebEdit\Control {

    public function render($photo) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/photo.latte');
        $template->render();
    }

    public function renderSmall($photo) { //cart
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/photo.latte');
        $template->render();
    }

    public function renderMedium($photo) { //product list
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/photo.latte');
        $template->render();
    }

    public function renderBig($photo) { //product main photo
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/photo.latte');
        $template->render();
    }

}
