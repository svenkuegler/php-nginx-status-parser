<?php

/**
 * Class NginxStatusParserTest
 */
class NginxStatusParserTest extends PHPUnit_Framework_TestCase
{
    public function testCompleteDynamic() {

        $parser = new NginxStatusParser(__DIR__ . '/../files/nginx-status.txt');
        $result = $parser->parse();


        $this->assertEquals($result instanceof NginxStatus, true);
    }
}
