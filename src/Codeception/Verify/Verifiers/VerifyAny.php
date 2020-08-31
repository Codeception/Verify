<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

/**
 * Class VerifyAny
 *
 * @internal
 */
final class VerifyAny extends VerifyMixed
{
    public function arrayContains($needle, string $message = ''): self
    {
        self::Array($this->actual)->contains($needle, $message);
        return $this;
    }

    public function arrayContainsEquals($needle, string $message = ''): self
    {
        self::Array($this->actual)->containsEquals($needle, $message);
        return $this;
    }

    public function arrayContainsOnly($type, $isNativeType = null, string $message = ''): self
    {
        self::Array($this->actual)->containsOnly($type, $isNativeType, $message);
        return $this;
    }

    public function arrayContainsOnlyInstancesOf($className, string $message = ''): self
    {
        self::Array($this->actual)->containsOnlyInstancesOf($className, $message);
        return $this;
    }

    public function arrayCount($expectedCount, string $message = ''): self
    {
        self::Array($this->actual)->count($expectedCount, $message);
        return $this;
    }

    public function arrayHasKey($key, string $message = ''): self
    {
        self::Array($this->actual)->hasKey($key, $message);
        return $this;
    }

    public function arrayHasNotKey($key, string $message = ''): self
    {
        self::Array($this->actual)->hasNotKey($key, $message);
        return $this;
    }

    public function arrayNotContains($needle, string $message = ''): self
    {
        self::Array($this->actual)->notContains($needle, $message);
        return $this;
    }

    public function arrayNotContainsEquals($needle, string $message = ''): self
    {
        self::Array($this->actual)->notContainsEquals($needle, $message);
        return $this;
    }

    public function arrayNotContainsOnly($type, $isNativeType = null, string $message = ''): self
    {
        self::Array($this->actual)->notContainsOnly($type, $isNativeType, $message);
        return $this;
    }

    public function arrayNotCount($expectedCount, string $message = ''): self
    {
        self::Array($this->actual)->notCount($expectedCount, $message);
        return $this;
    }

    public function arrayNotSameSize($expected, string $message = ''): self
    {
        self::Array($this->actual)->notSameSize($expected, $message);
        return $this;
    }

    public function arraySameSize($expected, string $message = ''): self
    {
        self::Array($this->actual)->sameSize($expected, $message);
        return $this;
    }

    public function baseObjectHasAttribute($attributeName, string $message = ''): self
    {
        self::BaseObject($this->actual)->hasAttribute($attributeName, $message);
        return $this;
    }

    public function baseObjectNotHasAttribute($attributeName, string $message = ''): self
    {
        self::BaseObject($this->actual)->notHasAttribute($attributeName, $message);
        return $this;
    }

    public function callableThrows($throws = null, string $message = ''): self
    {
        self::Callable($this->actual)->throws($throws, $message);
        return $this;
    }

    public function callableDoesNotThrow($throws = null, string $message = ''): self
    {
        self::Callable($this->actual)->doesNotThrow($throws, $message);
        return $this;
    }

    public function classHasAttribute($attributeName, string $message = ''): self
    {
        self::Class($this->actual)->hasAttribute($attributeName, $message);
        return $this;
    }

    public function classHasStaticAttribute($attributeName, string $message = ''): self
    {
        self::Class($this->actual)->hasStaticAttribute($attributeName, $message);
        return $this;
    }

    public function classNotHasAttribute($attributeName, string $message = ''): self
    {
        self::Class($this->actual)->notHasAttribute($attributeName, $message);
        return $this;
    }

    public function classNotHasStaticAttribute($attributeName, string $message = ''): self
    {
        self::Class($this->actual)->notHasStaticAttribute($attributeName, $message);
        return $this;
    }

    public function directoryDoesNotExist(string $message = ''): self
    {
        self::Directory($this->actual)->doesNotExist($message);
        return $this;
    }

    public function directoryExists(string $message = ''): self
    {
        self::Directory($this->actual)->exists($message);
        return $this;
    }

    public function directoryIsNotReadable(string $message = ''): self
    {
        self::Directory($this->actual)->isNotReadable($message);
        return $this;
    }

    public function directoryIsNotWritable(string $message = ''): self
    {
        self::Directory($this->actual)->isNotWritable($message);
        return $this;
    }

    public function directoryIsReadable(string $message = ''): self
    {
        self::Directory($this->actual)->isReadable($message);
        return $this;
    }

    public function directoryIsWritable(string $message = ''): self
    {
        self::Directory($this->actual)->isWritable($message);
        return $this;
    }

    public function fileDoesNotExists(string $message = ''): self
    {
        self::File($this->actual)->doesNotExists($message);
        return $this;
    }

    public function fileEquals($expected, string $message = ''): self
    {
        self::File($this->actual)->equals($expected, $message);
        return $this;
    }

    public function fileEqualsCanonicalizing($expected, string $message = ''): self
    {
        self::File($this->actual)->equalsCanonicalizing($expected, $message);
        return $this;
    }

    public function fileEqualsIgnoringCase($expected, string $message = ''): self
    {
        self::File($this->actual)->equalsIgnoringCase($expected, $message);
        return $this;
    }

    public function fileExists(string $message = ''): self
    {
        self::File($this->actual)->exists($message);
        return $this;
    }

    public function fileIsNotReadable(string $message = ''): self
    {
        self::File($this->actual)->isNotReadable($message);
        return $this;
    }

    public function fileIsNotWritable(string $message = ''): self
    {
        self::File($this->actual)->isNotWritable($message);
        return $this;
    }

    public function fileIsReadable(string $message = ''): self
    {
        self::File($this->actual)->isReadable($message);
        return $this;
    }

    public function fileIsWritable(string $message = ''): self
    {
        self::File($this->actual)->isWritable($message);
        return $this;
    }

    public function fileNotEquals($expected, string $message = ''): self
    {
        self::File($this->actual)->notEquals($expected, $message);
        return $this;
    }

    public function fileNotEqualsCanonicalizing($expected, string $message = ''): self
    {
        self::File($this->actual)->notEqualsCanonicalizing($expected, $message);
        return $this;
    }

    public function fileNotEqualsIgnoringCase($expected, string $message = ''): self
    {
        self::File($this->actual)->notEqualsIgnoringCase($expected, $message);
        return $this;
    }

    public function jsonFileEqualsJsonFile($expectedFile, string $message = ''): self
    {
        self::JsonFile($this->actual)->equalsJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonFileNotEqualsJsonFile($expectedFile, string $message = ''): self
    {
        self::JsonFile($this->actual)->notEqualsJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringEqualsJsonFile($expectedFile, string $message = ''): self
    {
        self::JsonString($this->actual)->equalsJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringEqualsJsonString($expectedJson, string $message = ''): self
    {
        self::JsonString($this->actual)->equalsJsonString($expectedJson, $message);
        return $this;
    }

    public function jsonStringNotEqualsJsonFile($expectedFile, string $message = ''): self
    {
        self::JsonString($this->actual)->notEqualsJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringNotEqualsJsonString($expectedJson, string $message = ''): self
    {
        self::JsonString($this->actual)->notEqualsJsonString($expectedJson, $message);
        return $this;
    }

    public function stringContainsString($needle, string $message = ''): self
    {
        self::String($this->actual)->containsString($needle, $message);
        return $this;
    }

    public function stringContainsStringIgnoringCase($needle, string $message = ''): self
    {
        self::String($this->actual)->containsStringIgnoringCase($needle, $message);
        return $this;
    }

    public function stringDoesNotMatchRegExp($pattern, string $message = ''): self
    {
        self::String($this->actual)->doesNotMatchRegExp($pattern, $message);
        return $this;
    }

    public function stringEndsWith($suffix, string $message = ''): self
    {
        self::String($this->actual)->endsWith($suffix, $message);
        return $this;
    }

    public function stringEqualsFile($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->equalsFile($expectedFile, $message);
        return $this;
    }

    public function stringEqualsFileCanonicalizing($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->equalsFileCanonicalizing($expectedFile, $message);
        return $this;
    }

    public function stringEqualsFileIgnoringCase($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->equalsFileIgnoringCase($expectedFile, $message);
        return $this;
    }

    public function stringJson(string $message = ''): self
    {
        self::String($this->actual)->json($message);
        return $this;
    }

    public function stringMatchesFormat($format, string $message = ''): self
    {
        self::String($this->actual)->matchesFormat($format, $message);
        return $this;
    }

    public function stringMatchesFormatFile($formatFile, string $message = ''): self
    {
        self::String($this->actual)->matchesFormatFile($formatFile, $message);
        return $this;
    }

    public function stringMatchesRegExp($pattern, string $message = ''): self
    {
        self::String($this->actual)->matchesRegExp($pattern, $message);
        return $this;
    }

    public function stringNotContainsString($needle, string $message = ''): self
    {
        self::String($this->actual)->notContainsString($needle, $message);
        return $this;
    }

    public function stringNotContainsStringIgnoringCase($needle, string $message = ''): self
    {
        self::String($this->actual)->notContainsStringIgnoringCase($needle, $message);
        return $this;
    }

    public function stringNotEndsWith($suffix, string $message = ''): self
    {
        self::String($this->actual)->notEndsWith($suffix, $message);
        return $this;
    }

    public function stringNotEqualsFile($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->notEqualsFile($expectedFile, $message);
        return $this;
    }

    public function stringNotEqualsFileCanonicalizing($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->notEqualsFileCanonicalizing($expectedFile, $message);
        return $this;
    }

    public function stringNotEqualsFileIgnoringCase($expectedFile, string $message = ''): self
    {
        self::String($this->actual)->notEqualsFileIgnoringCase($expectedFile, $message);
        return $this;
    }

    public function stringNotMatchesFormat($format, string $message = ''): self
    {
        self::String($this->actual)->notMatchesFormat($format, $message);
        return $this;
    }

    public function stringNotMatchesFormatFile($formatFile, string $message = ''): self
    {
        self::String($this->actual)->notMatchesFormatFile($formatFile, $message);
        return $this;
    }

    public function stringStartsNotWith($prefix, string $message = ''): self
    {
        self::String($this->actual)->startsNotWith($prefix, $message);
        return $this;
    }

    public function stringStartsWith($prefix, string $message = ''): self
    {
        self::String($this->actual)->startsWith($prefix, $message);
        return $this;
    }

    public function xmlFileEqualsXmlFile($expectedFile, string $message = ''): self
    {
        self::XmlFile($this->actual)->equalsXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlFileNotEqualsXmlFile($expectedFile, string $message = ''): self
    {
        self::XmlFile($this->actual)->notEqualsXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringEqualsXmlFile($expectedFile, string $message = ''): self
    {
        self::XmlString($this->actual)->equalsXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringEqualsXmlString($expectedXml, string $message = ''): self
    {
        self::XmlString($this->actual)->equalsXmlString($expectedXml, $message);
        return $this;
    }

    public function xmlStringNotEqualsXmlFile($expectedFile, string $message = ''): self
    {
        self::XmlString($this->actual)->notEqualsXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringNotEqualsXmlString($expectedXml, string $message = ''): self
    {
        self::XmlString($this->actual)->notEqualsXmlString($expectedXml, $message);
        return $this;
    }
}