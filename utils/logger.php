<?php 

class Logger
{
    public function write(string $msg) : void
    {
        file_put_contents('log.txt', "$msg\n");
    }
}