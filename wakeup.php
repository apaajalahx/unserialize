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

@unserialize('O:4:"Test":1:{s:6:"method";s:7:"phpinfo";}');
