<?php

declare(strict_type=1);

namespace Controller;




use classes\MusicienClass;

class MusicienController
{
    public function __construct()
    {

    }

    public function createMusicien(){

        return new MusicienClass();

    }
}