<?php

namespace WebEdit\Gallery\Form;

use WebEdit\Form;
use WebEdit\Gallery\Photo;

final class Container extends Form\Container {

    protected function configure() {
        $this['photo'] = new Photo\Form\Container;
        //TODO: Video
    }

}
