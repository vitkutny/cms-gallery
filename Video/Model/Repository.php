<?php

namespace CMS\Gallery\Video\Model;

use CMS\Database;

final class Repository extends Database\Repository {

    protected $table = "video";

    public function getVideo($id) {
        return $this->getOne($id);
    }

}
