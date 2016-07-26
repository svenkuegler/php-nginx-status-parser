<?php

/**
 * Class NginxStatusExceptionTest
 */
class NginxStatusExceptionTest extends PHPUnit_Framework_TestCase
{
    /**
     * @throws NginxStatusException
     * @expectedException NginxStatusException
     */
    public function testException() {
        throw new NginxStatusException("Test Exception", 999);
    }

    /**
     * @covers NginxStatusException::getExceptionMessage
     */
    public function testExceptionMessage() {
        try {
            throw new NginxStatusException("Test Exception", 999);
        } catch (NginxStatusException $e) {
            $message = $e->getExceptionMessage();
        }

        $this->assertEquals("NginxStatusException: [999]: Test Exception\n", $message);
    }
}
