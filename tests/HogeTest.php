<?php

namespace App;

use PHPUnit\Framework\TestCase;

class HogeTest extends TestCase
{
    public function testHoge()
    {
        $this->assertEquals('very overweight', Hoge::fuga(1.60, 70));
        $this->assertEquals('overweight', Hoge::fuga(1.60, 65));
        $this->assertEquals('normal', Hoge::fuga(1.60, 60));
        $this->assertEquals('lean', Hoge::fuga(1.60, 50));
        $this->assertEquals('very lean', Hoge::fuga(1.60, 40));
    }
}