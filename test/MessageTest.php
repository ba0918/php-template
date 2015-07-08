<?php

namespace ba0918\skeleton\test;

use ba0918\skeleton\Message;

class MessageTest extends \PHPUnit_Framework_TestCase
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