<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;

trait VerifyStringTrait
{
    /**
     * Verifies that a class has a specified static attribute.
     *
     * @param string $attributeName
     */
    public function hasStaticAttribute(string $attributeName)
    {
        if (is_string($this->actual)) {
            TestCase::assertClassHasStaticAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a class does not have a specified static attribute.
     *
     * @param string $attributeName
     */
    public function notHasStaticAttribute(string $attributeName)
    {
        if (is_string($this->actual)) {
            TestCase::assertClassNotHasStaticAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string is a valid JSON string.
     */
    public function json()
    {
        if (is_string($this->actual)) {
            TestCase::assertJson($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     */
    public function jsonStringNotEqualsJsonString(string $expectedJson)
    {
        TestCase::assertJsonStringNotEqualsJsonString($expectedJson, $this->actual, $this->message);
    }

    /**
     * Verifies that a string does not match a given regular expression.
     *
     * @param string $pattern
     */
    public function notRegExp(string $pattern)
    {
        if (is_string($this->actual)) {
            TestCase::assertNotRegExp($pattern, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two given JSON encoded objects or arrays are equal.
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
     * Verifies that a string matches a given regular expression.
     *
     * @param string $pattern
     */
    public function regExp(string $pattern)
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
    public function stringContainsString(string $needle)
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
     * Verifies that the contents of a string is equal to the contents of a file (canonicalizing).
     *
     * @param string $expectedFile
     */
    public function stringEqualsFileCanonicalizing(string $expectedFile)
    {
        if (is_string($this->actual)) {
            TestCase::assertStringEqualsFileCanonicalizing($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of a string is equal to the contents of a file (ignoring case).
     *
     * @param string $expectedFile
     */
    public function stringEqualsFileIgnoringCase(string $expectedFile)
    {
        if (is_string($this->actual)) {
            TestCase::assertStringEqualsFileIgnoringCase($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string ends not with a given suffix.
     *
     * @param string $suffix
     */
    public function notEndsWith(string $suffix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringEndsNotWith($suffix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string ends with a given suffix.
     *
     * @param string $suffix
     */
    public function endsWith(string $suffix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringEndsWith($suffix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of a string is equal to the contents of a file.
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
     * Verifies that a string matches a given format string.
     *
     * @param string $format
     */
    public function matchesFormat(string $format)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringMatchesFormat($format, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string matches a given format file.
     *
     * @param string $formatFile
     */
    public function matchesFormatFile(string $formatFile)
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
    public function stringNotContainsString(string $needle)
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
    public function stringNotContainsStringIgnoringCase(string $needle)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotContainsStringIgnoringCase($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of a string is not equal to the contents of a file (canonicalizing).
     *
     * @param string $expectedFile
     */
    public function stringNotEqualsFileCanonicalizing(string $expectedFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotEqualsFileCanonicalizing($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of a string is not equal to the contents of a file (ignoring case).
     *
     * @param string $expectedFile
     */
    public function stringNotEqualsFileIgnoringCase(string $expectedFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotEqualsFileIgnoringCase($expectedFile, $this->actual, $this->message);
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
     * Verifies that a string does not match a given format string.
     *
     * @param string $formatFile
     */
    public function notMatchesFormatFile(string $formatFile)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringNotMatchesFormatFile($formatFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string starts not with a given prefix.
     *
     * @param string $prefix
     */
    public function notStartsWith(string $prefix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringStartsNotWith($prefix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a string starts with a given prefix.
     *
     * @param string $prefix
     */
    public function startsWith(string $prefix)
    {
        if(is_string($this->actual)) {
            TestCase::assertStringStartsWith($prefix, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of a string is not equal to the contents of a file.
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