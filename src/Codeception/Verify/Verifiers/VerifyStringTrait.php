<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;

trait VerifyStringTrait
{
    /**
     * Asserts that a class has a specified static attribute.
     *
     * @param string $attributeName
     */
    public function hasStaticAttribute($attributeName)
    {
        if (is_string($this->actual)) {
            TestCase::assertClassHasStaticAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a class does not have a specified static attribute.
     *
     * @param string $attributeName
     */
    public function notHasStaticAttribute($attributeName)
    {
        if (is_string($this->actual)) {
            TestCase::assertClassNotHasStaticAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }


    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @param $string
     */
    public function equalsJsonString($string)
    {
        if (is_string($this->actual)) {
            TestCase::assertJsonStringEqualsJsonString($string, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string matches a given regular expression.
     *
     * @param string $pattern
     */
    public function regExp($pattern)
    {
        if (is_string($this->actual)) {
            TestCase::assertRegExp($pattern, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }


    /**
     * @param string $needle
     */
    public function stringContainsString($needle)
    {
        if (is_string($this->actual)) {
            TestCase::assertStringContainsString($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    public function stringContainsStringIgnoringCase($needle)
    {
        if (is_string($this->actual)) {
            TestCase::assertStringContainsStringIgnoringCase($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string ends not with a given suffix.
     *
     * @param string $suffix
     */
    public function notEndsWith($suffix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringEndsNotWith($suffix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string ends with a given suffix.
     *
     * @param string $suffix
     */
    public function endsWith($suffix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringEndsWith($suffix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that the contents of a string is equal to the contents of a file.
     *
     * @param string $expectedFile
     */
    public function equalsFile(string $expectedFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringEqualsFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string matches a given format string.
     *
     * @param string $format
     */
    public function matchesFormat($format)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringMatchesFormat($format, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string matches a given format file.
     *
     * @param string $formatFile
     */
    public function matchesFormatFile($formatFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringMatchesFormatFile($formatFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * @param string $needle
     */
    public function stringNotContainsString($needle)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotContainsString($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * @param string $needle
     */
    public function stringNotContainsStringIgnoringCase($needle)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotContainsStringIgnoringCase($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }



    public function notMatchesFormat($format)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotMatchesFormat($format, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string does not match a given format string.
     *
     * @param string $formatFile
     */
    public function notMatchesFormatFile($formatFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotMatchesFormatFile($formatFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     */
    public function notStartsWith($prefix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringStartsNotWith($prefix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a string starts with a given prefix.
     *
     * @param string $prefix
     */
    public function startsWith($prefix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringStartsWith($prefix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that the contents of a string is not equal to the contents of a file.
     *
     * @param string $expectedFile
     */
    public function notEqualsFile(string $expectedFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotEqualsFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}