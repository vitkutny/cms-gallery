<?php

namespace WebEdit\Gallery\Photo\Model;

use WebEdit\Model;
use WebEdit\Gallery\Photo;

class Facade extends Model\Facade {

    public $repository;

    public function __construct(Photo\Model\Repository $repository) {
        $this->repository = $repository;
    }

    public function addPhoto($data) {
        return $this->repository->insert($data);
    }

    public function editPhoto($photo, $data) {
        return $this->repository->update($photo, $data);
    }

    public function deletePhoto($photo) {
        return $this->repository->remove($photo);
    }

}
