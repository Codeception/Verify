<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Exception\InvalidVerifyException;
use Codeception\PHPUnit\TestCase;
use DOMDocument;

trait VerifyXmlTrait
{
    /**
     * Asserts that two XML documents are equal.
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
}