<?php

namespace WebEdit\Gallery;

use WebEdit\Entity;
use WebEdit\Gallery\Photo;

final class Control extends Entity\Control {

    private $photoControl;

    public function __construct(Photo\Control\Factory $photoControl) {
        $this->photoControl = $photoControl;
    }

    protected function createComponentPhoto() {
        $photoControl = $this->photoControl->create();
        $photoControl->setEntity($this->entity->gallery_photo);
        return $photoControl;
    }

}
