<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\PHPUnit\TestCase;
use Exception;

trait VerifyFileTrait
{
    /**
     * @param boolean $isFileExpectation
     */
    public function setIsFileExpectation($isFileExpectation)
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
    }

    public function notEquals($expected, $delta = 0)
    {
        if ( ! $this->isFileExpectation ) {
            TestCase::assertNotEqualsWithDelta($expected, $this->actual, $delta, $this->message);
        } else {
            TestCase::assertFileNotEquals($expected, $this->actual, $this->message);
        }
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
}