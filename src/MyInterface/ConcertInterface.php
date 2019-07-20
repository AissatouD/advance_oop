<?php

declare(strict_type=1);

namespace MyInterface;


interface ConcertInterface
{

    public function setConcertName();

    public function setConcertDate($concertName);

    public function setConcertLocation($concertName);
}