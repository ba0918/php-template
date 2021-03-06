<?php

namespace ba0918\skeleton;

class Message
{
    protected $value;

    public function __construct($value)
    {
        $this->value = (string)$value;
    }

    public function getValue()
    {
        return $this->value;
    }

    public function __toString()
    {
        return $this->value;
    }
}