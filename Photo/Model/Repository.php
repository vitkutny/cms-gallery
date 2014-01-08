<?php

namespace CMS\Gallery\Photo\Model;

use CMS\Database;

final class Repository extends Database\Repository {

    protected $table = "photo";

    public function getPhoto($id) {
        return $this->getOne($id);
    }

}
