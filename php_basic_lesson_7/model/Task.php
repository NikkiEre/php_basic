<?php

class Task
{
    private string $description;
    private bool $isDone = false;

    function __construct(string $description) 
    {
        $this->description = $description;
    }

    public function getIsDone()
    {
        return $this->isDone;
    }

    public function setIsDone()
    {
        $this->isDone = true;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
}