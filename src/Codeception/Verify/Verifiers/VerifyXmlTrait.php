<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use DOMDocument;

trait VerifyXmlTrait
{
    /**
     * Verifies that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     */
    public function equalsXmlString($expectedXml)
    {
        if (is_string($this->actual) || $this->actual instanceof DOMDocument) {
            TestCase::assertXmlStringEqualsXmlString($expectedXml, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two XML files are not equal.
     *
     * @param string $expectedFile
     */
    public function xmlFileNotEqualsXmlFile(string $expectedFile)
    {
        if (is_file($this->actual)) {
            TestCase::assertXmlFileNotEqualsXmlFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two XML documents are not equal.
     *
     * @param string $expectedFile
     */
    public function xmlStringNotEqualsXmlFile(string $expectedFile)
    {
        if (is_string($this->actual) || $this->actual instanceof DOMDocument) {
            TestCase::assertXmlStringNotEqualsXmlFile($expectedFile, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }

    /**
     * Verifies that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     */
    public function xmlStringNotEqualsXmlString($expectedXml)
    {
        if (is_string($this->actual) || $this->actual instanceof DOMDocument) {
            TestCase::assertXmlStringNotEqualsXmlString($expectedXml, $this->actual, $this->message);
            return;
        }
        throw new InvalidVerifyException(__FUNCTION__, $this->actual);
    }
}