<?php
namespace Codeception;

use \PHPUnit_Framework_Assert as a;

class Verify {

    protected $actual = null;
    protected $description = '';
    protected $isFileExpectation = false;

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

    /**
     * @param boolean $isFileExpectation
     */
    public function setIsFileExpectation($isFileExpectation)
    {
        $this->isFileExpectation = $isFileExpectation;
    }

    public function equals($expected)
    {
        if ( ! $this->isFileExpectation ) {
            a::assertEquals($expected, $this->actual, $this->description);
        } else {
            a::assertFileEquals($expected, $this->actual, $this->description);
        }
    }

    public function doesNotEqual($expected)
    {
        if ( ! $this->isFileExpectation ) {
            a::assertNotEquals($expected, $this->actual, $this->description);
        } else {
            a::assertFileNotEquals($expected, $this->actual, $this->description);
        }
    }

    public function contains($needle)
    {
        a::assertContains($needle, $this->actual, $this->description);
    }

    public function doesNotContain($needle)
    {
        a::assertNotContains($needle, $this->actual, $this->description);
    }

    public function isGreaterThan($expected)
    {
        a::assertGreaterThan($expected, $this->actual, $this->description);
    }

    public function isLessThan($expected)
    {
        a::assertLessThan($expected, $this->actual, $this->description);
    }

    public function isGreaterOrEqualTo($expected)
    {
        a::assertGreaterThanOrEqual($expected, $this->actual, $this->description);
    }

    public function isLessOrEqualTo($expected)
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

    public function isNotEmpty()
    {
        a::assertNotEmpty($this->actual, $this->description);
    }

    public function hasKey($key)
    {
        a::assertArrayHasKey($key, $this->actual, $this->description);
    }

    public function doesNotHaveKey($key)
    {
        a::assertArrayNotHasKey($key, $this->actual, $this->description);
    }

    public function isInstanceOf($class)
    {
        a::assertInstanceOf($class, $this->actual, $this->description);
    }

    public function isNotInstanceOf($class)
    {
        a::assertNotInstanceOf($class, $this->actual, $this->description);
    }

    public function isInternalType($type)
    {
        a::assertInternalType($type, $this->actual, $this->description);
    }

    public function isNotInternalType($type)
    {
        a::assertNotInternalType($type, $this->actual, $this->description);
    }

    public function hasAttribute($attribute)
    {
        if ( is_string($attribute)) {
            a::assertClassHasAttribute($attribute, $this->actual, $this->description);
        } else {
            a::assertObjectHasAttribute($attribute, $this->actual, $this->description);
        }
    }

    public function doesNotHaveAttribute($attribute)
    {
        if ( is_string($attribute)) {
            a::assertClassNotHasAttribute($attribute, $this->actual, $this->description);
        } else {
            a::assertObjectNotHasAttribute($attribute, $this->actual, $this->description);
        }
    }

    public function hasStaticAttribute($attribute)
    {
        a::assertClassHasStaticAttribute($attribute, $this->actual, $this->description);
    }

    public function doesNotHaveStaticAttribute($attribute)
    {
        a::assertClassNotHasStaticAttribute($attribute, $this->actual, $this->description);
    }

    public function containsOnly($type, $isNativeType = NULL)
    {
        a::assertContainsOnly($type, $this->actual, $isNativeType, $this->description);
    }

    public function doesNotContainOnly($type, $isNativeType = NULL)
    {
        a::assertNotContainsOnly($type, $this->actual, $isNativeType, $this->description);
    }

    public function containsOnlyInstancesOf($class)
    {
        a::assertContainsOnlyInstancesOf($class, $this->actual, $this->description);
    }

    public function count($array)
    {
        a::assertCount($array, $this->actual, $this->description);
    }

    public function notCount($array)
    {
        a::assertNotCount($array, $this->actual, $this->description);
    }

    public function xmlStructurEquals($xml, $checkAttributes = FALSE)
    {
        a::assertEqualXMLStructure($xml, $this->actual, $checkAttributes, $this->description);
    }

    public function exists()
    {
        if ( ! $this->isFileExpectation ) {
            throw new \Exception('exists() expectation should be called with expect_file()');
        }
        a::assertFileExists($this->actual, $this->description);
    }

    public function doesNotExist()
    {
        if ( ! $this->isFileExpectation ) {
            throw new \Exception('doesNotExist() expectation should be called with expect_file()');
        }
        a::assertFileNotExists($this->actual, $this->description);
    }

    public function equalsJsonFile($file)
    {
        if ( ! $this->isFileExpectation ) {
            a::assertJsonStringEqualsJsonFile($file, $this->actual, $this->description);
        } else {
            a::assertJsonFileEqualsJsonFile($file, $this->actual, $this->description);
        }
    }

    public function equalsJsonString($string)
    {
        a::assertJsonStringEqualsJsonString($string, $this->actual, $this->description);
    }

    public function matchesRegExp($expression)
    {
        a::assertRegExp($expression, $this->actual, $this->description);
    }

    public function matchesFormat($format)
    {
        a::assertStringMatchesFormat($format, $this->actual, $this->description);
    }

    public function doesNotMatchFormat($format)
    {
        a::assertStringNotMatchesFormat($format, $this->actual, $this->description);
    }

    public function matchesFormatFile($formatFile)
    {
        a::assertStringMatchesFormatFile($formatFile, $this->actual, $this->description);
    }

    public function doesNotMatchFormatFile($formatFile)
    {
        a::assertStringNotMatchesFormatFile($formatFile, $this->actual, $this->description);
    }

    public function same($expected)
    {
        a::assertSame($expected, $this->actual, $this->description);
    }

    public function notSame($expected)
    {
        a::assertNotSame($expected, $this->actual, $this->description);
    }

    public function selectorCount($selector, $count)
    {
        a::assertSelectCount($selector, $count, $this->actual, $this->description);
    }

    public function selectorEquals($selector, $content, $count)
    {
        a::assertSelectEquals($selector, $content,  $count, $this->actual, $this->description);
    }

    public function selectorMatchesRegExp($selector, $pattern, $count)
    {
        a::assertSelectRegExp($selector, $pattern,  $count, $this->actual, $this->description);
    }

    public function endsWith($suffix)
    {
        a::assertStringEndsWith($suffix, $this->actual, $this->description);
    }

    public function doesNotEndWith($suffix)
    {
        a::assertStringEndsNotWith($suffix, $this->actual, $this->description);
    }

    public function equalsFile($file)
    {
        a::assertStringEqualsFile($file, $this->actual, $this->description);
    }

    public function doesNotEqualFile($file)
    {
        a::assertStringNotEqualsFile($file, $this->actual, $this->description);
    }

    public function startsWith($prefix)
    {
        a::assertStringStartsWith($prefix, $this->actual, $this->description);
    }

    public function doesNotStartWith($prefix)
    {
        a::assertStringStartsNotWith($prefix, $this->actual, $this->description);
    }

    public function matchesTag($matcher)
    {
        a::assertTag($matcher, $this->actual, $this->description);
    }

    public function equalsXmlFile($file)
    {
        if ( ! $this->isFileExpectation ) {
            a::assertXmlStringEqualsXmlFile($file, $this->actual, $this->description);
        } else {
            a::assertXmlFileEqualsXmlFile($file, $this->actual, $this->description);
        }
    }

    public function equalsXmlString($xmlString)
    {
        a::assertXmlStringEqualsXmlString($xmlString, $this->actual, $this->description);
    }

}

