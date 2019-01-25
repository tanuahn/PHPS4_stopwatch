<?php

class StopWatch
{
    private $startTime;
    private $endTime;

    public function __construct()
    {
        $this->startTime = date('h:m:s');
        //$this->endTime = date('h:m:i');
    }

    function getStartTime (){
        return $this->startTime;
    }

    function getEndTime(){
        return $this->endTime;
    }

    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    public function setEndTime($endTime)
    {
        $this->endTime = $endTime;
    }

    function start(){
        $this->startTime = date('h:m:s');
    }

    function stop(){
        $this->endTime = date('h:m:s');
    }

    function getElapsedTime(){
        return strtotime($this->endTime) - strtotime($this->startTime);
    }
}
?>