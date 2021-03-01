<?php

use PHPUnit\Framework\TestCase;

require_once(__DIR__ . '/../questions/find_total.php');

class FindTotalTest extends TestCase
{
    public function testSum()
    {
        $this->assertEquals(80, findTotal([80, 30, 30]));
        $this->assertEquals(2, findTotal([1, 2, 3]));
        $this->assertEquals(0, findTotal([100, 100]));
    }
}
