<?php

namespace WebEdit\Gallery\Photo\Form;

use WebEdit\Form;

final class Container extends Form\Container {

    protected function configure() {
        $this->addUpload('file', 'gallery.photo.form.file.label');
        $this->addText('description', 'gallery.photo.form.description.label');
        $this->addCheckBox('default', 'gallery.photo.form.default.label');
    }

}
