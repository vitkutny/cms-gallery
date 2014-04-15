<?php

namespace WebEdit\Gallery;

use WebEdit;
use WebEdit\Gallery\Photo;
use WebEdit\Gallery\Video;

final class Control extends WebEdit\Control {

    private $gallery;
    private $photoRepository;
    private $photoControlFactory;
    private $videoControlFactory;

    public function __construct($gallery, Photo\Repository $photoRepository, Photo\Control\Factory $photoControlFactory, Video\Control\Factory $videoFacade) {
        $this->gallery = $gallery;
        $this->photoRepository = $photoRepository;
        $this->photoControlFactory = $photoControlFactory;
        $this->videoControlFactory = $videoFacade;
    }

    protected function createComponentPhoto() {
        return $this->photoControlFactory->create($this->gallery->gallery_photo);
    }

}
