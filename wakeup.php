<?php

class Test {

    public $method;

    public function __destruct()
    {
        if(function_exists($this->method)) {
            ($this->method)();
        }
    }

    public function __wakeup()
    {
        throw new Error("Test class should never be unserialize");
    }

}
$data = new Test;
$data->method = 'phpinfo';
$serialize = serialize($data);
@unserialize($serialize);
