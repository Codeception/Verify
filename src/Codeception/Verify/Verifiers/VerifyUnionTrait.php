<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;

trait VerifyUnionTrait
{
    /**
     * Asserts that a class has a specified attribute.
     *
     * @param string $attributeName
     */
    public function hasAttribute($attributeName)
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
     * Asserts that a class does not have a specified attribute.
     *
     * @param string $attributeName
     */
    public function notHasAttribute($attributeName)
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
}