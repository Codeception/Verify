<?php

declare(strict_types=1);

namespace Codeception\Verify\Expectations;

use Codeception\Verify\Expect;
use PHPUnit\Framework\Assert;

class ExpectBaseObject extends Expect
{
    use ExpectDataTrait;

    /**
     * ExpectBaseObject constructor
     *
     * @param object $object
     */
    public function __construct(object $object)
    {
        parent::__construct($object);
    }

    /**
     * Expect that an object does not have a specified attribute.
     *
     * @deprecated Deprecated in favour of notToHaveProperty
     *
     * @param string $attributeName
     * @param string $message
     * @return self
     */
    public function notToHaveAttribute(string $attributeName, string $message = ''): self
    {
        Assert::assertObjectNotHasProperty($attributeName, $this->actual, $message);
        return $this;
    }

    /**
     * Expect that an object has a specified attribute.
     *
     * @deprecated Deprecated in favour of toHaveProperty
     *
     * @param string $attributeName
     * @param string $message
     * @return self
     */
    public function toHaveAttribute(string $attributeName, string $message = ''): self
    {
        Assert::assertObjectHasProperty($attributeName, $this->actual, $message);
        return $this;
    }

    /**
     * Expect that an object does not have a specified property.
     *
     * @param string $propertyName
     * @param string $message
     * @return self
     */
    public function notToHaveProperty(string $propertyName, string $message = ''): self
    {
        Assert::assertObjectNotHasProperty($propertyName, $this->actual, $message);
        return $this;
    }

    /**
     * Expect that an object has a specified property.
     *
     * @param string $propertyName
     * @param string $message
     * @return self
     */
    public function toHaveProperty(string $propertyName, string $message = ''): self
    {
        Assert::assertObjectHasProperty($propertyName, $this->actual, $message);
        return $this;
    }
}