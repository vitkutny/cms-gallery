<?php

namespace WebEdit\Gallery\Photo\Form;

use WebEdit\Form;

final class Container extends Form\Container {

    protected function configure() {
        $this->addUpload('source', 'gallery.photo.form.source.label');
        $this->addText('description', 'gallery.photo.form.description.label');
    }

}
