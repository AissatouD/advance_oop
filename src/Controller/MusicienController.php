<?php

declare(strict_type=1);

namespace Controller;


use MyClass\MusicienClass;

class MusicienController
{
    public function createMusicien(){

        $newMusicien = new MusicienClass();

        return $newMusicien;

    }
}