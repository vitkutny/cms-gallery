<?php

namespace WebEdit\Gallery\Model;

use WebEdit\Database;

final class Repository extends Database\Repository {

    protected $table = "gallery";

    public function getGallery($id) {
        return $this->getOne($id);
    }

}
