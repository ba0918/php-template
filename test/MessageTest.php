<?php

namespace ba0918\skeleton\test;

use PHPUnit\Framework\TestCase;
use ba0918\skeleton\Message;

class MessageTest extends TestCase
{
    private $message;

    public function setUp()
    {
        $this->message = new Message('hello world');
    }

    public function testGetValue()
    {
        $this->assertEquals('hello world', $this->message->getValue());
    }

    public function test__toString()
    {
        $this->assertEquals('hello world', $this->message);
    }
}