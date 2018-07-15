<?php

namespace IsolatedByInheritanceAndOverride;

class Response
{
    private $body;

    private $code;

    public function __construct($body = '', $code = 200)
    {
        $this->body = $body;
        $this->code = $code;
    }

    public function body()
    {
        return $this->body;
    }

    public function statusCode()
    {
        return $this->code;
    }
}
