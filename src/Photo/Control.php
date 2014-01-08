<?php

namespace CMS\Gallery\Photo;

use CMS;

final class Control extends CMS\Control {

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
