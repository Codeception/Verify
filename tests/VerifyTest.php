<?php
include __DIR__.'/../src/Codeception/function.php';

class VerifyTest extends PHPUnit_Framework_TestCase {

    public function testEquals()
    {
        verify(5)->equals(5);
        verify("hello")->equals("hello");
        verify("user have 5 posts", 5)->equals(5);
        verify(3)->notEquals(5);
    }

    public function testContains()
    {
        verify([3, 2])->contains(3);
        verify("user have 5 posts", [3, 2])->notContains(5);
    }

    public function testGreaterLowerThen()
    {
        verify(7)->greaterThan(5);
        verify(7)->lessThen(10);
        verify(7)->lessOrEquals(7);
        verify(7)->lessOrEquals(8);
        verify(7)->greaterOrEquals(7);
        verify(7)->greaterOrEquals(5);
    }

    public function testTrueFalseNull()
    {
        verify(true)->true();
        verify(false)->false();
        verify(null)->null();
        verify(true)->notNull();
    }
}