<?php

namespace WebEdit\Gallery\Video;

use WebEdit;
use WebEdit\Gallery\Video;

class Facade extends WebEdit\Facade {

    public $repository;

    public function __construct(Video\Repository $repository) {
        $this->repository = $repository;
    }

    public function addVideo($data) {
        return $this->repository->insert($data);
    }

    public function editVideo($video, $data) {
        return $this->repository->update($video, $data);
    }

    public function deleteVideo($video) {
        return $this->repository->remove($video);
    }

}
