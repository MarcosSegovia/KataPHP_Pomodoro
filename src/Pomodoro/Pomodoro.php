<?php

namespace MarcosSegovia\Pomodoro;

class Pomodoro
{
    const DEFAULT_DURATION = 25;

    private $duration;
    private $status;
    private $numInterruptions;
    private $timer;


    public function __construct($duration = self::DEFAULT_DURATION)
    {
        if ($duration > self::DEFAULT_DURATION) {
            $this->duration = self::DEFAULT_DURATION;
        } else {
            $this->duration = $duration;
        }

        $this->status = 'stop';
        $this->timer = new TimerThread($this->duration);
    }

    public function play()
    {
        try {
            if (strcmp($this->getStatus(), 'stop') != 0) {
                throw new \Exception('Pomodoro is not stop !');
            } else {
                $this->status = 'play';
                $this->timer->run();

            }
        } catch (\Exception $e) {

            echo $e->getMessage();
        }
    }

    public function stop()
    {
        try {
            if (strcmp($this->getStatus(), 'play') != 0) {
                throw new \Exception('Pomodoro is not played !');
            } else {
                $this->status = 'stop';
                $this->timer->stop();
                $this->numInterruptions++;
            }
        } catch (\Exception $e) {

            echo $e->getMessage();
        }
    }

    public function reset()
    {
        try {
            if (strcmp($this->getStatus(), 'stop') != 0) {
                throw new \Exception('Pomodoro need to be stop, to proceed with the reset');
            } else {
                $this->status = 'stop';
                $this->numInterruptions = 0;
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

    public function getNumInterruptions()
    {
        return $this->numInterruptions;
    }

}