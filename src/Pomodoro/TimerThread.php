<?php


namespace MarcosSegovia\Pomodoro;


class TimerThread extends \Thread
{
    private $timer;
    private $duration;

    public function __construct($duration)
    {
        $this->timer = new \PHP_Timer();
        $this->duration = $duration;

    }

    public function run()
    {
        $this->timer->start();
        //while (true) {
        //if ($duration == ) {


        //}
        echo $this->timer->pause();
        sleep(1);
        echo $this->timer->pause();
        // }
    }
}