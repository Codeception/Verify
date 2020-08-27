<?php

use Codeception\PHPUnit\TestCase;
use Codeception\Verify\Verify;

include __DIR__.'/../vendor/autoload.php';

class OverrideTest extends TestCase
{
    protected function _setUp()
    {

    }

    protected function _tearDown()
    {
        Verify::$override = false;
    }

    public function testVerifyCanBeOverridden()
    {
        Verify::$override = MyVerify::class;
        $this->assertInstanceOf(MyVerify::class, verify(null));
    }

}

class MyVerify extends Verify {

}