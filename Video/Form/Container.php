<?php

namespace WebEdit\Gallery\Video\Form;

use WebEdit\Form;

final class Container extends Form\Container {

    protected function configure() {
        $this->addText('a', 'Video TODO');
    }

}
