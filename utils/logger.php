<?php

class Logger
{
    public function write($msg)
    {
        file_put_contents('log.txt', "$msg\n");
    }
}