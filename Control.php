<?php

namespace WebEdit\Gallery;

use WebEdit;
use WebEdit\Gallery\Photo;
use WebEdit\Gallery\Video;

final class Control extends WebEdit\Control {

    private $photoFacade;
    private $videoFacade;

    public function __construct(Photo\Model\Facade $photoFacade, Video\Model\Facade $videoFacade) {
        $this->photoFacade = $photoFacade;
        $this->videoFacade = $videoFacade;
    }

    public function render($gallery) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/gallery.latte');
        $template->render();
    }

    public function renderPhoto($gallery) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/photo.latte');
        $template->render();
    }

    public function renderVideo($gallery) {
        $template = $this->template;
        $template->setFile(__DIR__ . '/templates/video.latte');
        $template->render();
    }

}
