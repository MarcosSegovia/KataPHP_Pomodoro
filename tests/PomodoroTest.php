<?php

namespace MarcosSegovia\PomodoroTest;

use MarcosSegovia\Pomodoro\Pomodoro;

class PomodoroTest extends \PHPUnit_Framework_TestCase
{

    public function testHasDurationUnder25()
    {
        $pomodoro = new Pomodoro(15);
        $result = $pomodoro->getDuration() <= 25 ? true : false;
        $this->assertEquals(true, $result);
    }

    public function testHasByDefault25Minutes()
    {
        $pomodoro = new Pomodoro();
        $result = $pomodoro->getDuration() <= 25 ? true : false;
        $this->assertEquals(true, $result);
    }

    public function testPomodoroIsStopWhenIsCreated()
    {
        $pomodoro = new Pomodoro();
        $result = strcmp($pomodoro->getStatus(), 'stop') == 0 ? true : false;
        $this->assertEquals(true, $result);
    }

    public function testPomodoroIsPlayed()
    {
        $pomodoro = new Pomodoro();
        $pomodoro->play();
        $result = strcmp($pomodoro->getStatus(), 'play') == 0 ? true : false;
        $this->assertEquals(true, $result);
    }


}
