<?php

namespace WebEdit\Gallery\Photo;

use WebEdit\Gallery\Photo;
use WebEdit\Image;

final class Facade {

    private $upload;
    private $repository;

    public function __construct($upload, Photo\Repository $repository) {
        $this->upload = $upload;
        $this->repository = $repository;
    }

    public function add(array $data) {
        if (!$data['gallery']['photo']['file']->isOk()) {
            return NULL;
        }
        $image = Image::fromFile($data['gallery']['photo']['file']);
        unset($data['gallery']['photo']['file']);
        $photo = $this->repository->insert($data['gallery']['photo']);
        if (!file_exists($this->upload)) {
            mkdir($this->upload, NULL, TRUE);
        }
        $image->save($this->upload . '/' . $photo->id . '.jpg', 100, Image::JPEG);
        return $photo;
    }

    public function edit($photo, array $data) {
        return $this->repository->update($photo, $data);
    }

    public function delete($photo) {
        return $this->repository->remove($photo);
    }

}
