<?php

namespace WebEdit\Gallery\Photo;

use WebEdit\Application;

final class Presenter extends Application\Presenter {

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
        $image = WebEdit\Image::fromFile($file);
        //TODO: watermark and default size
        if (!file_exists($this->cache)) {
            mkdir($this->cache, NULL, TRUE);
        }
        $image->save($this->cache . '/' . ($id ? : 0) . '.jpg');
        $image->send();
    }

}
