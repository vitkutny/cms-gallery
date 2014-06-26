<?php

namespace WebEdit\Gallery;

use WebEdit\DI;

final class Extension extends DI\Extension {

    private $defaults = [
        'photo' => [
            'upload' => '%application.private.upload.directory%/gallery/photo',
            'cache' => '%application.public.cache.directory%/gallery/photo',
            'default' => '%application.public.directory%/images/gallery/photo.jpg'
        ]
    ];

    public function loadConfiguration() {
        $config = $this->getConfig($this->defaults);
        $builder = $this->getContainerBuilder();
        $builder->addDefinition($this->prefix('repository'))
                ->setClass('WebEdit\Gallery\Repository');
        $builder->addDefinition($this->prefix('facade'))
                ->setClass('WebEdit\Gallery\Facade');
        $builder->addDefinition($this->prefix('control'))
                ->setImplement('WebEdit\Gallery\Control\Factory');
        $builder->addDefinition($this->prefix('photo.repository'))
                ->setClass('WebEdit\Gallery\Photo\Repository');
        $builder->addDefinition($this->prefix('photo.facade'))
                ->setClass('WebEdit\Gallery\Photo\Facade')
                ->setArguments([$config['photo']['upload']]);
        $builder->addDefinition($this->prefix('photo.presenter'))
                ->setClass('WebEdit\Gallery\Photo\Presenter')
                ->setArguments([$config['photo']]);
        $builder->addDefinition($this->prefix('photo.control'))
                ->setImplement('WebEdit\Gallery\Photo\Control\Factory');
    }

}
