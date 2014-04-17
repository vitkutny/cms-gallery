<?php

namespace WebEdit\Gallery\Photo;

use WebEdit;
use WebEdit\Image;

final class Presenter extends WebEdit\Presenter {

    private $upload;
    private $cache;
    private $empty;

    public function __construct(array $settings) {
        $this->upload = $settings['upload'];
        $this->cache = $settings['cache'];
        $this->empty = $settings['default'];
    }

    public function actionView($id = NULL) {
        $file = $id ? $this->upload . '/' . $id . '.jpg' : $this->empty;
        if (!file_exists($file)) {
            $this->error();
        }
        $image = Image::fromFile($file);
        //TODO: watermark and default size
        if (!file_exists($this->cache)) {
            mkdir($this->cache, NULL, TRUE);
        }
        $image->save($this->cache . ($id ? '/' . $id : NULL) . '.jpg');
        $image->send();
    }

}
