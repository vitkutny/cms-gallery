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
        $config = $this->getConfig($this->defaults);
        $builder = $this->getContainerBuilder();
        $builder->addDefinition($this->prefix('repository'))
                ->setClass('WebEdit\Gallery\Repository');
        $builder->addDefinition($this->prefix('facade'))
                ->setClass('WebEdit\Gallery\Facade');
        $builder->addDefinition($this->prefix('control'))
                ->setImplement('WebEdit\Gallery\Control\Factory')
                ->setParameters(['gallery'])
                ->setArguments([new \Nette\PhpGenerator\PhpLiteral('$gallery')]); //TODO
        $builder->addDefinition($this->prefix('photo.repository'))
                ->setClass('WebEdit\Gallery\Photo\Repository');
        $builder->addDefinition($this->prefix('photo.facade'))
                ->setClass('WebEdit\Gallery\Photo\Facade')
                ->setArguments([$config['photo']['upload']]);
        $builder->addDefinition($this->prefix('photo.presenter'))
                ->setClass('WebEdit\Gallery\Photo\Presenter')
                ->setArguments([$config['photo']]);
        $builder->addDefinition($this->prefix('photo.control'))
                ->setImplement('WebEdit\Gallery\Photo\Control\Factory')
                ->setParameters(['photo'])
                ->setArguments([new \Nette\PhpGenerator\PhpLiteral('$photo')]); //TODO
    }

}