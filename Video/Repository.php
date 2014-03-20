<?php

namespace WebEdit\Gallery\Video;

use WebEdit\Database;

final class Repository extends Database\Repository {

    public function getVideo($id) {
        return $this->storage()->get($id);
    }

}
