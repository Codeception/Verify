<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use ArrayAccess;
use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use Countable;

trait VerifyArrayTrait
{
    /**
     * Asserts that a haystack contains a needle.
     *
     * @param $needle
     */
    public function contains($needle)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContains($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param bool|null $isNativeType
     */
    public function containsOnly($type, $isNativeType = null)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContainsOnly($type, $this->actual, $isNativeType, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @param string $className
     */
    public function containsOnlyInstancesOf($className)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContainsOnlyInstancesOf($className, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     */
    public function count($expectedCount)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertCount($expectedCount, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that an array has a specified key.
     *
     * @param int|string $key
     */
    public function hasKey($key)
    {
        if (is_array($this->actual) || $this->actual instanceof ArrayAccess) {
            TestCase::assertArrayHasKey($key, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string $key
     */
    public function hasNotKey($key)
    {
        if (is_array($this->actual) || $this->actual instanceof ArrayAccess) {
            TestCase::assertArrayNotHasKey($key, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }


    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @param $needle
     */
    public function notContains($needle)
    {
        if (is_iterable($this->actual)) {
            TestCase::assertNotContains($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @param string $type
     * @param bool|null $isNativeType
     */
    public function notContainsOnly($type, $isNativeType = null)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertNotContainsOnly($type, $this->actual, $isNativeType, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     */
    public function notCount($expectedCount)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertNotCount($expectedCount, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

}