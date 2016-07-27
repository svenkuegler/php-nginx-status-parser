<?php

/**
 * Class NginxStatusTest
 */
class NginxStatusTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var NginxStatus
     */
    protected static $status;

    /**
     * @covers NginxStatus::__construct
     */
    public static function setUpBeforeClass()
    {
        self::$status = new NginxStatus();
    }

    /**
     * @covers NginxStatus::setActiveConnections
     * @covers NginxStatus::setAcceptedRequests
     * @covers NginxStatus::setHandledRequests
     * @covers NginxStatus::setStatusReading
     * @covers NginxStatus::setStatusWriting
     * @covers NginxStatus::setStatusWaiting
     * @covers NginxStatus::setRequestsPerConnection
     */
    public function testSetter() {
        $this->assertTrue(self::$status->setActiveConnections(1) instanceof NginxStatus);
        self::$status->setAcceptedRequests(2);
        self::$status->setHandledRequests(3);
        self::$status->setStatusReading(4);
        self::$status->setStatusWriting(5);
        self::$status->setStatusWaiting(6);
        self::$status->setRequestsPerConnection(7.123);
    }

    /**
     * @covers NginxStatus::getActiveConnections
     * @covers NginxStatus::getAcceptedRequests
     * @covers NginxStatus::getHandledRequests
     * @covers NginxStatus::getStatusReading
     * @covers NginxStatus::getStatusWriting
     * @covers NginxStatus::getStatusWaiting
     * @covers NginxStatus::getRequestsPerConnection
     */
    public function testGetter() {
        $this->assertEquals( 1, self::$status->getActiveConnections());
        $this->assertEquals( 2, self::$status->getAcceptedRequests());
        $this->assertEquals( 3, self::$status->getHandledRequests());
        $this->assertEquals( 4, self::$status->getStatusReading());
        $this->assertEquals( 5, self::$status->getStatusWriting());
        $this->assertEquals( 6, self::$status->getStatusWaiting());
        $this->assertEquals( 7.123, self::$status->getRequestsPerConnection());
    }
}
