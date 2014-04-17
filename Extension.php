<?php

namespace WebEdit\Gallery;

use WebEdit;

final class Extension extends WebEdit\Extension {

    private $defaults = [
        'photo' => [
            'upload' => '%private.upload.directory%/gallery/photo',
            'cache' => '%public.cache.directory%/gallery/photo',
            'default' => '%public.directory%/images/gallery/photo.jpg'
        ]
    ];

    public function loadConfiguration() {
        parent::loadConfiguration();
        $config = $this->getConfig($this->defaults);
        $builder = $this->getContainerBuilder();
        $builder->getDefinition($this->prefix('photo.facade'))
                ->setArguments([$config['photo']['upload']]);
        $builder->getDefinition($this->prefix('photo.presenter'))
                ->setArguments([$config['photo']]);
    }

}
