<?php

namespace WebEdit\Gallery\Photo;

use WebEdit\Database;

final class Repository extends Database\Repository {

    public function getPhoto($id) {
        return $this->storage()->get($id);
    }

}
