<?php

use \MarcosSegovia\Pomodoro\Pomodoro;

class PomodoroTest extends PHPUnit_Framework_TestCase
{
    private $pomodoro;

    public function setUp()
    {
        $this->pomodoro = new Pomodoro(25);
    }

    public function testHasDurationUnder25()
    {
        $result = $this->pomodoro->getDuration() <= 25 ? true : false;
        $this->assertEquals(true, $result);
    }


}
