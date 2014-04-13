<?php

namespace WebEdit\Gallery\Photo;

use WebEdit\Gallery\Photo;
use WebEdit\Image;

final class Facade {

    private $directory;
    private $repository;

    public function __construct(array $settings, Photo\Repository $repository) {
        $this->directory = $settings['upload']['directory'];
        $this->repository = $repository;
    }

    public function add(array $data) {
        $image = Image::fromFile($data['gallery']['photo']['file']);
        unset($data['gallery']['photo']['file']);
        $photo = $this->repository->insert($data['gallery']['photo']);
        if (!file_exists($this->directory)) {
            mkdir($this->directory, NULL, TRUE);
        }
        $image->save($this->directory . '/' . $photo->id . '.jpg', 100, Image::JPEG);
        return $photo;
    }

    public function edit($photo, array $data) {
        return $this->repository->update($photo, $data);
    }

    public function delete($photo) {
        return $this->repository->remove($photo);
    }

}
