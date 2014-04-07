<?php

namespace WebEdit\Gallery;

use WebEdit\Gallery;

final class Facade {

    private $repository;

    public function __construct(Gallery\Repository $repository) {
        $this->repository = $repository;
    }

    public function add($data) {
        return $this->repository->insert($data);
    }

    public function edit($gallery, $data) {
        return $this->repository->update($gallery, $data);
    }

    public function delete($gallery) {
        return $this->repository->remove($gallery);
    }

}
