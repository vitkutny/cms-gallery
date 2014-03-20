<?php

namespace WebEdit\Gallery;

use WebEdit\Database;

final class Repository extends Database\Repository {

    public function getGallery($id) {
        return $this->storage()->get($id);
    }

}
