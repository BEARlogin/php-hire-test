<?php
use PHPUnit\Framework\TestCase;
require_once(__DIR__.'/../questions/generators.php');

class Generators extends TestCase
{
    public function testPushAndPop()
    {
        $result = run();
        $this->assertEquals([0,1,2,3,4,5], $result);
    }
}
