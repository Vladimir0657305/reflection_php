<?php
include_once 'contracts/storage.php';

class Session implements Storage
{
    public function __construct()
    {
        session_start();
    }

    public function set(string $name, mixed $value)
    {
        $_SESSION[$name] = $value;
    }
    public function get(string $name): mixed
    {
        return $_SESSION[$name] ?? null;
    }
    public function slice(string $name): mixed
    {
        $val = null;
        if (isset($_SESSION[$name])) {
            $val = $_SESSION[$name];
            unset($_SESSION[$name]);
        }
        return $val;
    }

}