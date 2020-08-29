<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;

trait VerifyDirectoryTrait
{
    /**
     * Verifies that a directory does not exist.
     */
    public function directoryDoesNotExist()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryDoesNotExist($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a directory exists.
     */
    public function directoryExists()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryExists($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a directory exists and is not readable.
     */
    public function directoryIsNotReadable()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryIsNotReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a directory exists and is not writable.
     */
    public function directoryIsNotWritable()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryIsNotWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a directory exists and is readable.
     */
    public function directoryIsReadable()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryIsReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a directory exists and is writable.
     */
    public function directoryIsWritable()
    {
        if(is_string($this->actual)) {
            TestCase::assertDirectoryIsWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}