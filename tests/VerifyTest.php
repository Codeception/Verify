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
        verify(array(3, 2))->contains(3);
        verify("user have 5 posts", array(3, 2))->notContains(5);
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
        verify('something should be false', false)->false();
        verify('something should be true', true)->true();
    }

    public function testEmptyNotEmpty()
    {
        verify(array('3', '5'))->notEmpty();
        verify(array())->isEmpty();
    }

    public function testVerifyThat()
    {
        verify_that(12);
        verify_that('hello world');
        verify_that(array('hello'));
    }

    public function testVerifyNot()
    {
        verify_not(false);
        verify_not(null);
        verify_not(array());
    }

    public function testExpectFunctions()
    {
        expect(12)->equals(12);
        expect_that(true);
        expect_not(false);
    }

    public function testArrayHasKey()
    {
        $errors = array('title' => 'You should add title');
        expect($errors)->hasKey('title');
        expect($errors)->hasntKey('body');
    }

    public function testIsInstanceOf()
    {
        $testClass = new DateTime();
        expect($testClass)->isInstanceOf('DateTime');
        expect($testClass)->isNotInstanceOf('DateTimeZone');
    }

    public function testInternalType()
    {
        $testVar = array();
        expect($testVar)->internalType('array');
        expect($testVar)->notInternalType('boolean');
    }

    public function testClassHasAttribute()
    {
        expect('Exception')->classHasAttribute('message');
        expect('Exception')->classNotHasAttribute('fakeproperty');
    }

    public function testClassHasStaticAttribute()
    {
        expect('FakeClassForTesting')->classHasStaticAttribute('staticProperty');
        expect('FakeClassForTesting')->classNotHasStaticAttribute('fakeProperty');
    }

    public function testContainsOnly()
    {
        expect(array('1', '2', '3'))->containsOnly('string');
        expect(array('1', '2', 3))->notContainsOnly('string');
    }

    public function testContainsOnlyInstancesOf()
    {
        expect(array(new FakeClassForTesting(), new FakeClassForTesting(), new FakeClassForTesting()))
            ->containsOnlyInstancesOf('FakeClassForTesting');
    }

    public function testCount()
    {
        expect(array(1,2,3))->count(3);
        expect(array(1,2,3))->notCount(2);
    }

}



class FakeClassForTesting
{
    static $staticProperty;
}