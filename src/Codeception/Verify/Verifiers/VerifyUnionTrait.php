<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;

trait VerifyUnionTrait
{
    /**
     * Verifies that a class has a specified attribute.
     *
     * @param string $attributeName
     */
    public function hasAttribute(string $attributeName)
    {
        if (is_object($this->actual)) {
            TestCase::assertObjectHasAttribute($attributeName, $this->actual, $this->message);
            return;
        } elseif (is_string($this->actual)) {
            TestCase::assertClassHasAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a class does not have a specified attribute.
     *
     * @param string $attributeName
     */
    public function notHasAttribute(string $attributeName)
    {
        if (is_string($this->actual)) {
            TestCase::assertClassNotHasAttribute($attributeName, $this->actual, $this->message);
            return;
        } elseif (is_object($this->actual)) {
            TestCase::assertObjectNotHasAttribute($attributeName, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file/dir exists and is not readable.
     */
    public function isNotReadable()
    {
        if (is_string($this->actual)) {
            TestCase::assertIsNotReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file/dir exists and is not writable.
     */
    public function isNotWritable()
    {
        if (is_string($this->actual)) {
            TestCase::assertIsNotWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a file/dir is readable.
     */
    public function isReadable()
    {
        if (is_string($this->actual)) {
            TestCase::assertIsReadable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a file/dir exists and is writable.
     */
    public function isWritable()
    {
        if (is_string($this->actual)) {
            TestCase::assertIsWritable($this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}