<?php
namespace Codeception;

use \PHPUnit_Framework_Assert as a;

class Verify {

    protected $actual = null;
    protected $description = '';

    public function __construct($description)
    {
        $descriptionGiven = (func_num_args() == 2);

        if (!$descriptionGiven) {
            $this->actual = $description;
        } else {
            $actual = func_get_args();
            $this->actual = $actual[1];
            $this->description = $description;
        }
    }    

    public function equals($expected)
    {
        a::assertEquals($expected, $this->actual, $this->description);
    }

    public function notEquals($expected)
    {
        a::assertNotEquals($expected, $this->actual, $this->description);
    }

    public function contains($needle)
    {
        a::assertContains($needle, $this->actual, $this->description);
    }

    public function notContains($needle)
    {
        a::assertNotContains($needle, $this->actual, $this->description);
    }

    public function greaterThan($expected)
    {
        a::assertGreaterThan($expected, $this->actual, $this->description);
    }

    public function lessThen($expected)
    {
        a::assertLessThan($expected, $this->actual, $this->description);
    }

    public function greaterOrEquals($expected)
    {
        a::assertGreaterThanOrEqual($expected, $this->actual, $this->description);
    }

    public function lessOrEquals($expected)
    {
        a::assertLessThanOrEqual($expected, $this->actual, $this->description);
    }

    public function true()
    {
        a::assertTrue($this->actual, $this->description);
    }

    public function false()
    {
        a::assertFalse($this->actual, $this->description);
    }

    public function null()
    {
        a::assertNull($this->actual, $this->description);
    }

    public function notNull()
    {
        a::assertNotNull($this->actual, $this->description);
    }

    public function isEmpty()
    {
        a::assertEmpty($this->actual, $this->description);
    }

    public function notEmpty()
    {
        a::assertNotEmpty($this->actual, $this->description);
    }

    public function hasKey($key)
    {
        a::assertArrayHasKey($key, $this->actual, $this->description);
    }

    public function hasntKey($key)
    {
        a::assertArrayNotHasKey($key, $this->actual, $this->description);
    }

    public function isInstanceOf($key)
    {
        a::assertInstanceOf($key, $this->actual, $this->description);
    }

    public function isNotInstanceOf($key)
    {
        a::assertNotInstanceOf($key, $this->actual, $this->description);
    }

    public function internalType($key)
    {
        a::assertInternalType($key, $this->actual, $this->description);
    }

    public function notInternalType($key)
    {
        a::assertNotInternalType($key, $this->actual, $this->description);
    }

    public function classHasAttribute($key)
    {
        a::assertClassHasAttribute($key, $this->actual, $this->description);
    }

    public function classNotHasAttribute($key)
    {
        a::assertClassNotHasAttribute($key, $this->actual, $this->description);
    }

    public function classHasStaticAttribute($key)
    {
        a::assertClassHasStaticAttribute($key, $this->actual, $this->description);
    }

    public function classNotHasStaticAttribute($key)
    {
        a::assertClassNotHasStaticAttribute($key, $this->actual, $this->description);
    }

    public function containsOnly($key, $isNativeType = NULL)
    {
        a::assertContainsOnly($key, $this->actual, $isNativeType, $this->description);
    }

    public function notContainsOnly($key, $isNativeType = NULL)
    {
        a::assertNotContainsOnly($key, $this->actual, $isNativeType, $this->description);
    }

    public function containsOnlyInstancesOf($key)
    {
        a::assertContainsOnlyInstancesOf($key, $this->actual, $this->description);
    }

    public function count($key)
    {
        a::assertCount($key, $this->actual, $this->description);
    }

    public function notCount($key)
    {
        a::assertNotCount($key, $this->actual, $this->description);
    }

}

