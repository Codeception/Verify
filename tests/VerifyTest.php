<?php
include __DIR__.'/../src/Codeception/function.php';

class VerifyTest extends PHPUnit_Framework_TestCase {

    protected $xml;

    protected function setUp()
    {
        $this->xml = new DomDocument;
        $this->xml->loadXML('<foo><bar>Baz</bar><bar>Baz</bar></foo>');
    }
    public function testEquals()
    {
        verify(5)->equals(5);
        verify("hello")->equals("hello");
        verify("user have 5 posts", 5)->equals(5);
        verify(3)->doesNotEqual(5);
        verify_file(__FILE__)->equals(__FILE__);
        verify_file(__FILE__)->doesNotEqual(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'composer.json');
    }

    public function testContains()
    {
        verify(array(3, 2))->contains(3);
        verify("user have 5 posts", array(3, 2))->doesNotContain(5);
    }

    public function testGreaterLowerThen()
    {
        verify(7)->isGreaterThan(5);
        verify(7)->isLessThan(10);
        verify(7)->isLessOrEqualTo(7);
        verify(7)->isLessOrEqualTo(8);
        verify(7)->isGreaterOrEqualTo(7);
        verify(7)->isGreaterOrEqualTo(5);
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
        verify(array('3', '5'))->isNotEmpty();
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
        expect($errors)->doesNotHaveKey('body');
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
        expect($testVar)->isInternalType('array');
        expect($testVar)->isNotInternalType('boolean');
    }

    public function testHasAttribute()
    {
        expect('Exception')->hasAttribute('message');
        expect('Exception')->doesNotHaveAttribute('fakeproperty');
    }

    public function testHasStaticAttribute()
    {
        expect('FakeClassForTesting')->hasStaticAttribute('staticProperty');
        expect('FakeClassForTesting')->doesNotHaveStaticAttribute('fakeProperty');
    }

    public function testContainsOnly()
    {
        expect(array('1', '2', '3'))->containsOnly('string');
        expect(array('1', '2', 3))->doesNotContainOnly('string');
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

    public function testEqualXMLStructure()
    {
        $expected = new DOMElement('foo');
        $actual = new DOMElement('foo');

        expect($expected)->xmlStructurEquals($actual);
    }

    public function testFileExists()
    {
        expect_file(__FILE__)->exists();
        expect_file('completelyrandomfilename.txt')->doesNotExist();
    }

    public function testEqualsJsonFile()
    {
        expect_file(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'json-test-file.json')
            ->equalsJsonFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'equal-json-test-file.json');
        expect('{"some" : "data"}')->equalsJsonFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'equal-json-test-file.json');
    }

    public function testEqualsJsonString()
    {
        expect('{"some" : "data"}')->equalsJsonString('{"some" : "data"}');
    }

    public function testRegExp()
    {
        expect('somestring')->matchesRegExp('/string/');
    }

    public function testMatchesFormat()
    {
        expect('somestring')->matchesFormat('%s');
        expect('somestring')->doesNotMatchFormat('%i');
    }

    public function testMatchesFormatFile()
    {
        expect('23')->matchesFormatFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'format-file.txt');
        expect('asdfas')->doesNotMatchFormatFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'format-file.txt');
    }

    public function testSame()
    {
        expect(1)->same(0+1);
        expect(1)->notSame(true);
    }

    public function testSelectCount()
    {
        expect($this->xml)->selectorCount('foo bar', true);
        expect($this->xml)->selectorCount('foo bar', 2);
    }

    public function testSelectEquals()
    {
        expect($this->xml)->selectorEquals('foo bar', 'Baz', true);
        expect($this->xml)->selectorEquals('foo bar', 'Baz', 2);
    }

    public function testSelectRegExp()
    {
        expect($this->xml)->selectorMatchesRegExp('foo bar', '/Ba.*/', true);
        expect($this->xml)->selectorMatchesRegExp('foo bar', '/Ba.*/', 2);
    }

    public function testEndsWith()
    {
        expect('A completely not funny string')->endsWith('ny string');
        expect('A completely not funny string')->doesNotEndWith('A completely');
    }

    public function testEqualsFile()
    {
        expect('%i')->equalsFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'format-file.txt');
        expect('Another string')->doesNotEqualFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'format-file.txt');
    }

    public function testStartsWith()
    {
        expect('A completely not funny string')->startsWith('A completely');
        expect('A completely not funny string')->doesNotStartWith('string');
    }

    public function testTag()
    {
        $matcher = array(
            'tag' => 'bar',
            'parent' => array('tag' => 'foo')
        );
        expect($this->xml)->matchesTag($matcher);
    }

    public function testEqualsXmlFile()
    {
        expect_file(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'xml-test-file.xml')
            ->equalsXmlFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'xml-test-file.xml');
        expect('<foo><bar>Baz</bar><bar>Baz</bar></foo>')
            ->equalsXmlFile(__DIR__ . DIRECTORY_SEPARATOR . 'assets' . DIRECTORY_SEPARATOR . 'xml-test-file.xml');
    }

    public function testEqualsXmlString()
    {
        expect('<foo><bar>Baz</bar><bar>Baz</bar></foo>')
            ->equalsXmlString('<foo><bar>Baz</bar><bar>Baz</bar></foo>');
    }

}



class FakeClassForTesting
{
    static $staticProperty;
}