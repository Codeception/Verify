<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use ArrayAccess;
use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use Countable;

trait VerifyArrayTrait
{
    /**
     * Verifies that a haystack contains a needle.
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

    public function containsEquals($needle)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContainsEquals($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param bool|null $isNativeType
     */
    public function containsOnly(string $type, $isNativeType = null)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContainsOnly($type, $this->actual, $isNativeType, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a haystack contains only instances of a given class name.
     *
     * @param string $className
     */
    public function containsOnlyInstancesOf(string $className)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertContainsOnlyInstancesOf($className, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     */
    public function count(int $expectedCount)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertCount($expectedCount, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that an array has a specified key.
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
     * Verifies that an array does not have a specified key.
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
     * Verifies that a haystack does not contain a needle.
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

    public function notContainsEquals($needle)
    {
        if (is_iterable($this->actual)) {
            TestCase::assertNotContainsEquals($needle, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a haystack does not contain only values of a given type.
     *
     * @param string $type
     * @param bool|null $isNativeType
     */
    public function notContainsOnly(string $type, $isNativeType = null)
    {
        if(is_iterable($this->actual)) {
            TestCase::assertNotContainsOnly($type, $this->actual, $isNativeType, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies the number of elements of an array, Countable or Traversable.
     *
     * @param int $expectedCount
     */
    public function notCount(int $expectedCount)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertNotCount($expectedCount, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the size of two arrays (or `Countable` or `Traversable` objects) is not the same.
     *
     * @param Countable|iterable $expected
     */
    public function notSameSize($expected)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertNotSameSize($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that the size of two arrays (or `Countable` or `Traversable` objects) is the same.
     *
     * @param Countable|iterable $expected
     */
    public function sameSize($expected)
    {
        if(is_iterable($this->actual) || $this->actual instanceof Countable) {
            TestCase::assertSameSize($expected, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}