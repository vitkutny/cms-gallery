<?php

namespace WebEdit\Gallery\Model;

use WebEdit\Model;
use WebEdit\Gallery;

class Facade extends Model\Facade {

    public $repository;

    public function __construct(Gallery\Model\Repository $repository) {
        $this->repository = $repository;
    }

    public function addGallery($data) {
        return $this->repository->insert($data);
    }

    public function editGallery($gallery, $data) {
        return $this->repository->update($gallery, $data);
    }

    public function deleteGallery($gallery) {
        return $this->repository->remove($gallery);
    }

}
