<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\PHPUnit\TestCase;

trait VerifyMixedTrait
{
    /**
     * Asserts that a variable is empty.
     */
    public function isEmpty()
    {
        TestCase::assertEmpty($this->actual, $this->message);
    }

    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @param $expected
     */
    public function equalsCanonicalizing($expected)
    {
        TestCase::assertEqualsCanonicalizing($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @param $expected
     */
    public function equalsIgnoringCase($expected)
    {
        TestCase::assertEqualsIgnoringCase($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that two variables are equal (with delta).
     *
     * @param $expected
     * @param float $delta
     */
    public function equalsWithDelta($expected, $delta)
    {
        TestCase::assertEqualsWithDelta($expected, $this->actual, $delta, $this->message);
    }

    /**
     * Asserts that a condition is false.
     */
    public function false()
    {
        TestCase::assertFalse($this->actual, $this->message);
    }

    /**
     * Asserts that a value is greater than another value.
     *
     * @param $expected
     */
    public function greaterThan($expected)
    {
        TestCase::assertGreaterThan($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param $expected
     */
    public function greaterOrEquals($expected)
    {
        TestCase::assertGreaterThanOrEqual($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of a given type.
     *
     * @param string $expected
     */
    public function isInstanceOf($expected)
    {
        TestCase::assertInstanceOf($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type array.
     */
    public function array()
    {
        TestCase::assertIsArray($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type bool.
     */
    public function bool()
    {
        TestCase::assertIsBool($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type callable.
     */
    public function callable()
    {
        TestCase::assertIsCallable($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type float.
     */
    public function float()
    {
        TestCase::assertIsFloat($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type int.
     */
    public function int()
    {
        TestCase::assertIsInt($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type array.
     */
    public function notArray()
    {
        TestCase::assertIsNotArray($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type bool.
     */
    public function notBool()
    {
        TestCase::assertIsNotBool($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type callable.
     */
    public function notCallable()
    {
        TestCase::assertIsNotCallable($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type float.
     */
    public function notFloat()
    {
        TestCase::assertIsNotFloat($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type int.
     */
    public function notInt()
    {
        TestCase::assertIsNotInt($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type numeric.
     */
    public function notNumeric()
    {
        TestCase::assertIsNotNumeric($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type object.
     */
    public function notObject()
    {
        TestCase::assertIsNotObject($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type resource.
     */
    public function notResource()
    {
        TestCase::assertIsNotResource($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type scalar.
     */
    public function notScalar()
    {
        TestCase::assertIsNotScalar($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not of type string.
     */
    public function notString()
    {
        TestCase::assertIsNotString($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type numeric.
     */
    public function numeric()
    {
        TestCase::assertIsNumeric($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type object.
     */
    public function object()
    {
        TestCase::assertIsObject($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type resource.
     */
    public function resource()
    {
        TestCase::assertIsResource($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type scalar.
     */
    public function scalar()
    {
        TestCase::assertIsScalar($this->actual, $this->message);
    }

    /**
     * Asserts that a variable is of type string.
     */
    public function string()
    {
        TestCase::assertIsString($this->actual, $this->message);
    }

    /**
     * Asserts that a value is smaller than another value.
     *
     * @param $expected
     */
    public function lessThan($expected)
    {
        TestCase::assertLessThan($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @param $expected
     */
    public function lessOrEquals($expected)
    {
        TestCase::assertLessThanOrEqual($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not empty.
     */
    public function notEmpty()
    {
        TestCase::assertNotEmpty($this->actual, $this->message);
    }

    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @param $expected
     */
    public function notEqualsCanonicalizing($expected)
    {
        TestCase::assertNotEqualsCanonicalizing($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @param $expected
     */
    public function notEqualsIgnoringCase($expected)
    {
        TestCase::assertNotEqualsIgnoringCase($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @param $expected
     * @param float $delta
     */
    public function notEqualsWithDelta($expected, $delta)
    {
        TestCase::assertNotEqualsWithDelta($expected, $this->actual, $delta, $this->message);
    }

    /**
     * Asserts that a variable is not of a given type.
     *
     * @param string $expected
     */
    public function isNotInstanceOf($expected)
    {
        TestCase::assertNotInstanceOf($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a variable is not null.
     */
    public function notNull()
    {
        TestCase::assertNotNull($this->actual, $this->message);
    }

    /**
     * Asserts that two variables do not have the same type and value.
     *
     * @param $expected
     */
    public function notSame($expected)
    {
        TestCase::assertNotSame($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a variable is null.
     */
    public function null()
    {
        TestCase::assertNull($this->actual, $this->message);
    }

    /**
     * Asserts that two variables have the same type and value.
     *
     * @param $expected
     */
    public function same($expected)
    {
        TestCase::assertSame($expected, $this->actual, $this->message);
    }

    /**
     * Asserts that a condition is true.
     */
    public function true()
    {
        TestCase::assertTrue($this->actual, $this->message);
    }
}