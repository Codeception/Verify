<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use PHPUnit\Framework\Constraint\Constraint;

trait VerifyMixedTrait
{
    /**
     * Verifies that a variable is empty.
     */
    public function isEmpty()
    {
        TestCase::assertEmpty($this->actual, $this->message);
    }

    /**
     * Verifies that two variables are equal (canonicalizing).
     *
     * @param $expected
     */
    public function equalsCanonicalizing($expected)
    {
        TestCase::assertEqualsCanonicalizing($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that two variables are equal (ignoring case).
     *
     * @param $expected
     */
    public function equalsIgnoringCase($expected)
    {
        TestCase::assertEqualsIgnoringCase($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that two variables are equal (with delta).
     *
     * @param $expected
     * @param float $delta
     */
    public function equalsWithDelta($expected, float $delta)
    {
        TestCase::assertEqualsWithDelta($expected, $this->actual, $delta, $this->message);
    }

    /**
     * Verifies that a condition is false.
     */
    public function false()
    {
        TestCase::assertFalse($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is finite.
     */
    public function finite()
    {
        TestCase::assertFinite($this->actual, $this->message);
    }

    /**
     * Verifies that a value is greater than another value.
     *
     * @param $expected
     */
    public function greaterThan($expected)
    {
        TestCase::assertGreaterThan($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a value is greater than or equal to another value.
     *
     * @param $expected
     */
    public function greaterOrEquals($expected)
    {
        TestCase::assertGreaterThanOrEqual($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a variable is infinite.
     */
    public function infinite()
    {
        TestCase::assertInfinite($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of a given type.
     *
     * @param string $expected
     */
    public function isInstanceOf(string $expected)
    {
        TestCase::assertInstanceOf($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type array.
     */
    public function array()
    {
        TestCase::assertIsArray($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type bool.
     */
    public function bool()
    {
        TestCase::assertIsBool($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type callable.
     */
    public function callable()
    {
        TestCase::assertIsCallable($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type resource and is closed.
     */
    public function isClosedResource()
    {
        TestCase::assertIsClosedResource($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type float.
     */
    public function float()
    {
        TestCase::assertIsFloat($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type int.
     */
    public function int()
    {
        TestCase::assertIsInt($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type iterable.
     */
    public function isIterable()
    {
        TestCase::assertIsIterable($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type array.
     */
    public function notArray()
    {
        TestCase::assertIsNotArray($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type bool.
     */
    public function notBool()
    {
        TestCase::assertIsNotBool($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type callable.
     */
    public function notCallable()
    {
        TestCase::assertIsNotCallable($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type resource.
     */
    public function isNotClosedResource()
    {
        TestCase::assertIsNotClosedResource($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type float.
     */
    public function notFloat()
    {
        TestCase::assertIsNotFloat($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type int.
     */
    public function notInt()
    {
        TestCase::assertIsNotInt($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type iterable.
     */
    public function isNotIterable()
    {
        TestCase::assertIsNotIterable($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type numeric.
     */
    public function notNumeric()
    {
        TestCase::assertIsNotNumeric($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type object.
     */
    public function notObject()
    {
        TestCase::assertIsNotObject($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type resource.
     */
    public function notResource()
    {
        TestCase::assertIsNotResource($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type scalar.
     */
    public function notScalar()
    {
        TestCase::assertIsNotScalar($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not of type string.
     */
    public function notString()
    {
        TestCase::assertIsNotString($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type numeric.
     */
    public function numeric()
    {
        TestCase::assertIsNumeric($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type object.
     */
    public function object()
    {
        TestCase::assertIsObject($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type resource.
     */
    public function resource()
    {
        TestCase::assertIsResource($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type scalar.
     */
    public function scalar()
    {
        TestCase::assertIsScalar($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is of type string.
     */
    public function string()
    {
        TestCase::assertIsString($this->actual, $this->message);
    }

    /**
     * Verifies that a value is smaller than another value.
     *
     * @param $expected
     */
    public function lessThan($expected)
    {
        TestCase::assertLessThan($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a value is smaller than or equal to another value.
     *
     * @param $expected
     */
    public function lessOrEquals($expected)
    {
        TestCase::assertLessThanOrEqual($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a variable is nan.
     */
    public function nan()
    {
        TestCase::assertNan($this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not empty.
     */
    public function notEmpty()
    {
        TestCase::assertNotEmpty($this->actual, $this->message);
    }

    /**
     * Verifies that two variables are not equal (canonicalizing).
     *
     * @param $expected
     */
    public function notEqualsCanonicalizing($expected)
    {
        TestCase::assertNotEqualsCanonicalizing($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that two variables are not equal (ignoring case).
     *
     * @param $expected
     */
    public function notEqualsIgnoringCase($expected)
    {
        TestCase::assertNotEqualsIgnoringCase($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that two variables are not equal (with delta).
     *
     * @param $expected
     * @param float $delta
     */
    public function notEqualsWithDelta($expected, float $delta)
    {
        TestCase::assertNotEqualsWithDelta($expected, $this->actual, $delta, $this->message);
    }

    /**
     * Verifies that a condition is not false.
     *
     * @param $condition
     */
    public function notFalse($condition)
    {
        TestCase::assertNotFalse($condition, $this->message);
    }

    /**
     * Verifies that a variable is not of a given type.
     *
     * @param string $expected
     */
    public function isNotInstanceOf(string $expected)
    {
        TestCase::assertNotInstanceOf($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a variable is not null.
     */
    public function notNull()
    {
        TestCase::assertNotNull($this->actual, $this->message);
    }

    /**
     * Verifies that two variables do not have the same type and value.
     *
     * @param $expected
     */
    public function notSame($expected)
    {
        TestCase::assertNotSame($expected, $this->actual, $this->message);
    }

    /**
     * Verifies that a condition is not true.
     *
     * @param $condition
     */
    public function notTrue($condition)
    {
        TestCase::assertNotTrue($condition, $this->message);
    }

    /**
     * Verifies that a variable is null.
     */
    public function null()
    {
        TestCase::assertNull($this->actual, $this->message);
    }

    /**
     * Verifies that two variables have the same type and value.
     *
     * @param $expected
     */
    public function same($expected)
    {
        TestCase::assertSame($expected, $this->actual, $this->message);
    }

    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param $value
     */
    public function that($value)
    {
        if ($this->actual instanceof Constraint) {
            TestCase::assertThat($value, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that a condition is true.
     */
    public function true()
    {
        TestCase::assertTrue($this->actual, $this->message);
    }
}