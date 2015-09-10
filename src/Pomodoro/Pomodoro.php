<?php

namespace MarcosSegovia\Pomodoro;

class Pomodoro
{
    const DEFAULT_DURATION = 25;

    private $duration;
    private $status;


    public function __construct($duration = self::DEFAULT_DURATION)
    {
        if ($duration > self::DEFAULT_DURATION) {
            $this->duration = self::DEFAULT_DURATION;
        } else {
            $this->duration = $duration;
        }

        $this->status = 'stop';
    }

    public function play()
    {
        try {
            if (strcmp($this->getStatus(), 'stop') != 0) {
                throw new \Exception('Pomodoro is not stop !');
            } else {
                $this->status = 'play';
            }
        } catch (\Exception $e) {

            echo $e->getMessage();
        }
    }


    public function getDuration()
    {
        return $this->duration;
    }

    public function getStatus()
    {
        return $this->status;
    }

}