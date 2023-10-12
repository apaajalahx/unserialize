<?php

class Test {

    public $method;

    public function __destruct()
    {
        if(function_exists($this->method)) {
            ($this->method)();
        }
    }

    #[ReturnTypeWillChange]
    public function __unserialize(array $data) {}

}

@unserialize('O:4:"Test":1:{s:6:"method";s:7:"phpinfo";}');
