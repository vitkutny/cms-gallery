<?php

namespace WebEdit\Gallery;

use WebEdit\Gallery;
use WebEdit\Gallery\Photo;

final class Facade {

    private $repository;
    private $photoFacade;

    public function __construct(Gallery\Repository $repository, Photo\Facade $photoFacade) {
        $this->repository = $repository;
        $this->photoFacade = $photoFacade;
    }

    public function add(array $data) {
        $gallery = $this->repository->insert();
        $data['gallery']['photo']['gallery_id'] = $gallery->id;
        $default = $data['gallery']['photo']['default'];
        unset($data['gallery']['photo']['default']);
        $photo = $this->photoFacade->add($data);
        if ($photo && $default) {
            $this->repository->update($gallery, ['gallery_photo_id' => $photo->id]);
        }
        return $gallery;
    }

    public function edit($gallery, array $data) {
        exit; //TODO
        return $this->repository->update($gallery, $data);
    }

    public function delete($gallery) {
        foreach ($gallery->related('gallery_photo') as $photo) {
            $this->photoFacade->delete($photo);
        }
        return $this->repository->remove($gallery);
    }

}
