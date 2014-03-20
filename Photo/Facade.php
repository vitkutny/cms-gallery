<?php

namespace WebEdit\Gallery\Photo;

use WebEdit\Gallery\Photo;

class Facade {

    public $repository;

    public function __construct(Photo\Repository $repository) {
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
