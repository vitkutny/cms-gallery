<?php

namespace WebEdit\Gallery\Form;

use WebEdit\Form;
use WebEdit\Gallery\Photo;
use WebEdit\Gallery\Video;

final class Container extends Form\Container {

    protected function configure() {
        $this['photo'] = new Photo\Form\Container;
        $this['video'] = new Video\Form\Container;
    }

}
