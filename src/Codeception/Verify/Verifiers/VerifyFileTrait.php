<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use Exception;

trait VerifyFileTrait
{
    /**
     * @param boolean $isFileExpectation
     */
    public function setIsFileExpectation(bool $isFileExpectation)
    {
        $this->isFileExpectation = $isFileExpectation;
    }

    public function equals($expected, $delta = 0)
    {
        if ( ! $this->isFileExpectation ) {
            TestCase::assertEqualsWithDelta($expected, $this->actual, $delta, $this->message);
        } else {
            TestCase::assertFileEquals($expected, $this->actual, $this->message);
        }
        // TestCase::assertEquals($expected, $actual, $message);
    }

    public function notEquals($expected, $delta = 0)
    {
        if ( ! $this->isFileExpectation ) {
            TestCase::assertNotEqualsWithDelta($expected, $this->actual, $delta, $this->message);
        } else {
            TestCase::assertFileNotEquals($expected, $this->actual, $this->message);
        }
        // TestCase::assertNotEquals($expected, $actual, $message);
    }

    public function exists()
    {
        if (!$this->isFileExpectation ) {
            throw new Exception('exists() expectation should be called with expect_file()');
        }
        TestCase::assertFileExists($this->actual, $this->message);
    }

    public function notExists()
    {
        if (!$this->isFileExpectation ) {
            throw new Exception('notExists() expectation should be called with expect_file()');
        }
        TestCase::assertFileNotExists($this->actual, $this->message);
    }

    public function equalsJsonFile($file)
    {
        if (!$this->isFileExpectation ) {
            TestCase::assertJsonStringEqualsJsonFile($file, $this->actual, $this->message);
        } else {
            TestCase::assertJsonFileEqualsJsonFile($file, $this->actual, $this->message);
        }
    }

    public function equalsXmlFile($file)
    {
        if (!$this->isFileExpectation ) {
            TestCase::assertXmlStringEqualsXmlFile($file, $this->actual, $this->message);
        } else {
            TestCase::assertXmlFileEqualsXmlFile($file, $this->actual, $this->message);
        }
    }

    /**
     * Verifies that the contents of one file is equal to the contents of another file (canonicalizing).
     *
     * @param $expected
     */
    public function fileEqualsCanonicalizing($expected)
    {
        if (is_string($this->actual)) {
            TestCase::assertFileEqualsCanonicalizing($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of one file is equal to the contents of another file (ignoring case).
     *
     * @param $expected
     */
    public function fileEqualsIgnoringCase($expected)
    {
        if (is_string($this->actual)) {
            TestCase::assertFileEqualsIgnoringCase($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file exists and is not readable.
     */
    public function fileIsNotReadable()
    {
        if (is_string($this->actual)) {
            TestCase::assertFileIsNotReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file exists and is not writable.
     */
    public function fileIsNotWritable()
    {
        if (is_string($this->actual)) {
            TestCase::assertFileIsNotWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file exists and is readable.
     */
    public function fileIsReadable()
    {
        if (is_string($this->actual)) {
            TestCase::assertFileIsReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file exists and is writable.
     */
    public function fileIsWritable()
    {
        if (is_string($this->actual)) {
            TestCase::assertFileIsWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of one file is not equal to the contents of another file (canonicalizing).
     *
     * @param $expected
     */
    public function fileNotEqualsCanonicalizing($expected)
    {
        if (is_string($this->actual)) {
            TestCase::assertFileNotEqualsCanonicalizing($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the contents of one file is not equal to the contents of another file (ignoring case).
     *
     * @param $expected
     */
    public function fileNotEqualsIgnoringCase($expected)
    {
        if (is_string($this->actual)) {
            TestCase::assertFileNotEqualsIgnoringCase($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two JSON files are not equal.
     *
     * @param string $expectedFile
     */
    public function jsonFileNotEqualsJsonFile(string $expectedFile)
    {
        if (is_string($this->actual)) {
            TestCase::assertJsonFileNotEqualsJsonFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @param string $expectedFile
     */
    public function jsonStringNotEqualsJsonFile(string $expectedFile)
    {
        if (is_string($this->actual)) {
            TestCase::assertJsonStringNotEqualsJsonFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}