<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\Verify\Verify;
use DOMDocument;
use PHPUnit\Framework\Assert;

class VerifyXmlString extends Verify
{
    /**
     * VerifyXmlString constructor
     *
     * @param DOMDocument|string $actualXml
     */
    public function __construct($actualXml)
    {
        if (is_string($actualXml) || $actualXml instanceof DOMDocument) {
            parent::__construct($actualXml);
            return;
        }
        throw new InvalidVerifyException(basename(__CLASS__), $actualXml);
    }

    /**
     * Verifies that two XML documents are equal.
     *
     * @param string $expectedFile
     * @param string $message
     * @return self
     */
    public function equalsXmlFile(string $expectedFile, string $message = ''): self
    {
        Assert::assertXmlStringEqualsXmlFile($expectedFile, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param string $message
     * @return self
     */
    public function equalsXmlString($expectedXml, string $message = ''): self
    {
        Assert::assertXmlStringEqualsXmlString($expectedXml, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that two XML documents are not equal.
     *
     * @param string $expectedFile
     * @param string $message
     * @return self
     */
    public function notEqualsXmlFile(string $expectedFile, string $message = ''): self
    {
        Assert::assertXmlStringNotEqualsXmlFile($expectedFile, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param string $message
     * @return self
     */
    public function notEqualsXmlString($expectedXml, string $message = ''): self
    {
        Assert::assertXmlStringNotEqualsXmlString($expectedXml, $this->actual, $message);
        return $this;
    }
}