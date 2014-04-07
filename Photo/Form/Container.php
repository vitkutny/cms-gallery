<?php

namespace WebEdit\Gallery\Photo\Form;

use WebEdit\Form;

final class Container extends Form\Container {

    protected function configure() {
        $this->addUpload('a', 'Abc');
    }

}
