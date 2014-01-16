<?php

namespace WebEdit\Gallery\Photo\Model;

use WebEdit\Database;

final class Repository extends Database\Repository {

    protected $table = "photo";

    public function getPhoto($id) {
        return $this->getOne($id);
    }

}
