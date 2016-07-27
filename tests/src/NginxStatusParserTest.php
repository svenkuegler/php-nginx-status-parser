<?php

/**
 * Class NginxStatusParserTest
 */
class NginxStatusParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @throws NginxStatusException
     */
    public function testCompleteDynamic() {

        $parser = new NginxStatusParser(__DIR__ . '/../files/nginx-status.txt');
        $result = $parser->parse();

        $this->assertTrue($result instanceof NginxStatus);

        $this->assertEquals( 7, $result->getActiveConnections());
        $this->assertEquals( 360, $result->getAcceptedRequests());
        $this->assertEquals( 1677, $result->getHandledRequests());
        $this->assertEquals( 0, $result->getStatusReading());
        $this->assertEquals( 1, $result->getStatusWriting());
        $this->assertEquals( 1, $result->getStatusWaiting());
        $this->assertEquals( 0.215, $result->getRequestsPerConnection());

    }

    /**
     * @covers NginxStatusParser
     * @covers NginxStatusParser::__construct
     * @covers NginxStatusParser::parse
     */
    public function testException1() {
        try {
            $parser = new NginxStatusParser(__DIR__ . '/../files/nginx-status-empty.txt');
            $parser->parse();
        } catch (NginxStatusException $e) {
            $this->assertEquals("NginxStatusException: [1]: Could not parse given page\n", $e->getExceptionMessage());
        }
    }

    /**
     * @covers NginxStatusParser
     * @covers NginxStatusParser::__construct
     * @covers NginxStatusParser::parse
     */
    public function testException2() {
        try {
            $parser = new NginxStatusParser(null);
            $parser->parse();
        } catch (NginxStatusException $e) {
            $this->assertEquals("NginxStatusException: [2]: Result seems to be invalid!\n", $e->getExceptionMessage());
        }
    }
}
