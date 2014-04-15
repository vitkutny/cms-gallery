<?php

namespace WebEdit\Gallery;

use WebEdit;
use WebEdit\Gallery\Photo;

final class Control extends WebEdit\Control {

    private $gallery;
    private $photoControlFactory;

    public function __construct($gallery, Photo\Control\Factory $photoControlFactory) {
        $this->gallery = $gallery;
        $this->photoControlFactory = $photoControlFactory;
    }

    protected function createComponentPhoto() {
        return $this->photoControlFactory->create($this->gallery->gallery_photo);
    }

}
