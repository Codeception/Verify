<?php

declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Verify\Verify;
use PHPUnit\Framework\Assert;

class VerifyBaseObject extends Verify
{
    use VerifyDataTrait;

    /**
     * VerifyBaseObject constructor
     *
     * @param object $object
     */
    public function __construct(object $object)
    {
        parent::__construct($object);
    }

    /**
     * Verifies that an object has a specified attribute.
     *
     * @deprecated Deprecated in favour of hasProperty
     *
     * @param string $attributeName
     * @param string $message
     * @return self
     */
    public function hasAttribute(string $attributeName, string $message = ''): self
    {
        Assert::assertObjectHasProperty($attributeName, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that an object does not have a specified attribute.
     *
     * @deprecated Deprecated in favour of notHasProperty
     *
     * @param string $attributeName
     * @param string $message
     * @return self
     */
    public function notHasAttribute(string $attributeName, string $message = ''): self
    {
        Assert::assertObjectNotHasProperty($attributeName, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that an object has a specified property.
     *
     * @param string $propertyName
     * @param string $message
     * @return self
     */
    public function hasProperty(string $propertyName, string $message = ''): self
    {
        Assert::assertObjectHasProperty($propertyName, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that an object does not have a specified property.
     *
     * @param string $propertyName
     * @param string $message
     * @return self
     */
    public function notHasProperty(string $propertyName, string $message = ''): self
    {
        Assert::assertObjectNotHasProperty($propertyName, $this->actual, $message);
        return $this;
    }
}