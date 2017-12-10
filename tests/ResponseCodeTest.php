<?php

use PHPUnit\Framework\TestCase;
use Yangqi\Htmldom\Htmldom;

class ReseponseCodeTest extends TestCase
{

    public function testContinueCode()
    {
        $htmldom = new Htmldom('https://httpstat.us/100');

        $this->assertEquals(100, $htmldom->response_code);
    }

    public function testOKCode()
    {
        $htmldom = new Htmldom('https://httpstat.us/200');

        $this->assertEquals(200, $htmldom->response_code);
    }

    public function testMultipleChoicesCode()
    {
        $htmldom = new Htmldom('https://httpstat.us/300');

        $this->assertEquals(300, $htmldom->response_code);
    }

    public function testBadRequestCode()
    {
        $htmldom = new Htmldom('https://httpstat.us/400');

        $this->assertEquals(400, $htmldom->response_code);
    }

    public function testInternalServerErrorCode()
    {
        $htmldom = new Htmldom('https://httpstat.us/500');

        $this->assertEquals(500, $htmldom->response_code);
    }

}