<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;
use WebEdit\Image;

final class Presenter extends WebEdit\Presenter {

    private $upload;
    private $cache;

    public function __construct(array $settings) {
        $this->upload = $settings['upload']['directory'];
        $this->cache = $settings['cache']['directory'];
    }

    public function actionView($id) {
        $image = Image::fromFile($this->upload . '/' . $id);
        //TODO: watermark and default size
        if (!file_exists($this->cache)) {
            mkdir($this->cache, NULL, TRUE);
        }
        $image->save($this->cache . '/' . $id, NULL, Image::JPEG);
        $image->send();
    }

}
