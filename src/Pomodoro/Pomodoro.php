<?php


namespace MarcosSegovia\Pomodoro;

class Pomodoro
{
    private $duration;

    public function __construct($duration)
    {
        $this->duration = $duration;
    }

    public function getDuration()
    {
        return $this->duration;
    }


}