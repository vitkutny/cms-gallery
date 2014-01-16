<?php

namespace WebEdit\Gallery\Video\Model;

use WebEdit\Database;

final class Repository extends Database\Repository {

    protected $table = "video";

    public function getVideo($id) {
        return $this->getOne($id);
    }

}
