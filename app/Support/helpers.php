<?php

function startTimer()
{
    Timer::$starttime = microtime(true);
}

function endTimer()
{
    Timer::$endtime = microtime(true);

    return Timer::$endtime - Timer::$starttime;
}

function toBoolean($boolean)
{
    return $boolean === 'true' || $boolean === '1' || $boolean === 1 || $boolean === true;
}

class Timer
{
    public static $starttime;
    public static $endtime;
}
