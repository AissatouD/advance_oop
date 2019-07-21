<?php

require_once 'bootstrap.php';
declare(strict_type=1);

use Controller\MusicienController;


$musicien1 = (new MusicienController()) ->createMusicien();
var_dump($musicien1);