<?php

namespace CMS\Gallery\Model;

use CMS\Database;

final class Repository extends Database\Repository {

    protected $table = "gallery";

    public function getGallery($id) {
        return $this->getOne($id);
    }

}
