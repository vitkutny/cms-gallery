<?php

namespace CMS\Gallery\Video\Model;

use CMS\Model;
use CMS\Gallery\Video;

class Facade extends Model\Facade {

    public $repository;

    public function __construct(Video\Model\Repository $repository) {
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
