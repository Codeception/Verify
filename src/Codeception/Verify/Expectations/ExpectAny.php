<?php declare(strict_types=1);

namespace Codeception\Verify\Expectations;

use Codeception\Verify\Expect;

class ExpectAny extends ExpectMixed
{
    public function arrayToContain($needle, string $message = ''): self
    {
        Expect::Array($this->actual)->toContain($needle, $message);
        return $this;
    }

    public function arrayToContainEqual($needle, string $message = ''): self
    {
        Expect::Array($this->actual)->toContainEqual($needle, $message);
        return $this;
    }

    public function arrayToContainOnly($type, $isNativeType = null, string $message = ''): self
    {
        Expect::Array($this->actual)->toContainOnly($type, $isNativeType, $message);
        return $this;
    }

    public function arrayToContainOnlyInstancesOf($className, string $message = ''): self
    {
        Expect::Array($this->actual)->toContainOnlyInstancesOf($className, $message);
        return $this;
    }

    public function arrayToHaveCount($expectedCount, string $message = ''): self
    {
        Expect::Array($this->actual)->toHaveCount($expectedCount, $message);
        return $this;
    }

    public function arrayToHaveKey($key, string $message = ''): self
    {
        Expect::Array($this->actual)->toHaveKey($key, $message);
        return $this;
    }

    public function arrayNotToHaveKey($key, string $message = ''): self
    {
        Expect::Array($this->actual)->notToHaveKey($key, $message);
        return $this;
    }

    public function arrayNotToContain($needle, string $message = ''): self
    {
        Expect::Array($this->actual)->notToContain($needle, $message);
        return $this;
    }

    public function arrayNotToContainEqual($needle, string $message = ''): self
    {
        Expect::Array($this->actual)->notToContainEqual($needle, $message);
        return $this;
    }

    public function arrayNotToContainOnly($type, $isNativeType = null, string $message = ''): self
    {
        Expect::Array($this->actual)->notToContainOnly($type, $isNativeType, $message);
        return $this;
    }

    public function arrayNotToHaveCount($expectedCount, string $message = ''): self
    {
        Expect::Array($this->actual)->notToHaveCount($expectedCount, $message);
        return $this;
    }

    public function arrayNotToHaveSameSizeAs($expected, string $message = ''): self
    {
        Expect::Array($this->actual)->notToHaveSameSizeAs($expected, $message);
        return $this;
    }

    public function arrayToHaveSameSizeAs($expected, string $message = ''): self
    {
        Expect::Array($this->actual)->toHaveSameSizeAs($expected, $message);
        return $this;
    }

    public function baseObjectToHaveAttribute($attributeName, string $message = ''): self
    {
        Expect::BaseObject($this->actual)->toHaveAttribute($attributeName, $message);
        return $this;
    }

    public function baseObjectNotToHaveAttribute($attributeName, string $message = ''): self
    {
        Expect::BaseObject($this->actual)->notToHaveAttribute($attributeName, $message);
        return $this;
    }

    public function callableToThrow($throws = null, string $message = ''): self
    {
        Expect::Callable($this->actual)->toThrow($throws, $message);
        return $this;
    }

    public function callableNotToThrow($throws = null, string $message = ''): self
    {
        Expect::Callable($this->actual)->notToThrow($throws, $message);
        return $this;
    }

    public function classToHaveAttribute($attributeName, string $message = ''): self
    {
        Expect::Class($this->actual)->toHaveAttribute($attributeName, $message);
        return $this;
    }

    public function classToHaveStaticAttribute($attributeName, string $message = ''): self
    {
        Expect::Class($this->actual)->toHaveStaticAttribute($attributeName, $message);
        return $this;
    }

    public function classNotToHaveAttribute($attributeName, string $message = ''): self
    {
        Expect::Class($this->actual)->notToHaveAttribute($attributeName, $message);
        return $this;
    }

    public function classNotToHaveStaticAttribute($attributeName, string $message = ''): self
    {
        Expect::Class($this->actual)->notToHaveStaticAttribute($attributeName, $message);
        return $this;
    }

    public function directoryNotToExist(string $message = ''): self
    {
        Expect::Directory($this->actual)->notToExist($message);
        return $this;
    }

    public function directoryToExist(string $message = ''): self
    {
        Expect::Directory($this->actual)->toExist($message);
        return $this;
    }

    public function directoryNotToBeReadable(string $message = ''): self
    {
        Expect::Directory($this->actual)->notToBeReadable($message);
        return $this;
    }

    public function directoryNotToBeWritable(string $message = ''): self
    {
        Expect::Directory($this->actual)->notToBeWritable($message);
        return $this;
    }

    public function directoryToBeReadable(string $message = ''): self
    {
        Expect::Directory($this->actual)->toBeReadable($message);
        return $this;
    }

    public function directoryToBeWritable(string $message = ''): self
    {
        Expect::Directory($this->actual)->toBeWritable($message);
        return $this;
    }

    public function fileNotToExist(string $message = ''): self
    {
        Expect::File($this->actual)->notToExist($message);
        return $this;
    }

    public function fileToBeEqual($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toBeEqual($expected, $message);
        return $this;
    }

    public function fileToBeEqualCanonicalizing($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toBeEqualCanonicalizing($expected, $message);
        return $this;
    }

    public function fileToBeEqualIgnoringCase($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toBeEqualIgnoringCase($expected, $message);
        return $this;
    }

    public function fileToExist(string $message = ''): self
    {
        Expect::File($this->actual)->toExist($message);
        return $this;
    }

    public function fileNotToBeReadable(string $message = ''): self
    {
        Expect::File($this->actual)->notToBeReadable($message);
        return $this;
    }

    public function fileNotToBeWritable(string $message = ''): self
    {
        Expect::File($this->actual)->notToBeWritable($message);
        return $this;
    }

    public function fileToBeReadable(string $message = ''): self
    {
        Expect::File($this->actual)->toBeReadable($message);
        return $this;
    }

    public function fileToBeWritable(string $message = ''): self
    {
        Expect::File($this->actual)->toBeWritable($message);
        return $this;
    }

    public function fileToNotEqual($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toNotEqual($expected, $message);
        return $this;
    }

    public function fileToNotEqualCanonicalizing($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toNotEqualCanonicalizing($expected, $message);
        return $this;
    }

    public function fileToNotEqualIgnoringCase($expected, string $message = ''): self
    {
        Expect::File($this->actual)->toNotEqualIgnoringCase($expected, $message);
        return $this;
    }

    public function jsonFileToEqualJsonFile($expectedFile, string $message = ''): self
    {
        Expect::JsonFile($this->actual)->toEqualJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonFileNotToEqualJsonFile($expectedFile, string $message = ''): self
    {
        Expect::JsonFile($this->actual)->notToEqualJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringToEqualJsonFile($expectedFile, string $message = ''): self
    {
        Expect::JsonString($this->actual)->toEqualJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringToEqualJsonString($expectedJson, string $message = ''): self
    {
        Expect::JsonString($this->actual)->toEqualJsonString($expectedJson, $message);
        return $this;
    }

    public function jsonStringNotToEqualJsonFile($expectedFile, string $message = ''): self
    {
        Expect::JsonString($this->actual)->notToEqualJsonFile($expectedFile, $message);
        return $this;
    }

    public function jsonStringNotToEqualJsonString($expectedJson, string $message = ''): self
    {
        Expect::JsonString($this->actual)->notToEqualJsonString($expectedJson, $message);
        return $this;
    }

    public function stringToContainString($needle, string $message = ''): self
    {
        Expect::String($this->actual)->toContainString($needle, $message);
        return $this;
    }

    public function stringToContainStringIgnoringCase($needle, string $message = ''): self
    {
        Expect::String($this->actual)->toContainStringIgnoringCase($needle, $message);
        return $this;
    }

    public function stringNotToMatchRegExp($pattern, string $message = ''): self
    {
        Expect::String($this->actual)->notToMatchRegExp($pattern, $message);
        return $this;
    }

    public function stringToEndWith($suffix, string $message = ''): self
    {
        Expect::String($this->actual)->toEndWith($suffix, $message);
        return $this;
    }

    public function stringToEqualFile($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->toEqualFile($expectedFile, $message);
        return $this;
    }

    public function stringToEqualFileCanonicalizing($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->toEqualFileCanonicalizing($expectedFile, $message);
        return $this;
    }

    public function stringToEqualFileIgnoringCase($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->toEqualFileIgnoringCase($expectedFile, $message);
        return $this;
    }

    public function stringToBeJson(string $message = ''): self
    {
        Expect::String($this->actual)->toBeJson($message);
        return $this;
    }

    public function stringToMatchFormat($format, string $message = ''): self
    {
        Expect::String($this->actual)->toMatchFormat($format, $message);
        return $this;
    }

    public function stringToMatchFormatFile($formatFile, string $message = ''): self
    {
        Expect::String($this->actual)->toMatchFormatFile($formatFile, $message);
        return $this;
    }

    public function stringToMatchRegExp($pattern, string $message = ''): self
    {
        Expect::String($this->actual)->toMatchRegExp($pattern, $message);
        return $this;
    }

    public function stringNotToContainString($needle, string $message = ''): self
    {
        Expect::String($this->actual)->notToContainString($needle, $message);
        return $this;
    }

    public function stringNotToContainStringIgnoringCase($needle, string $message = ''): self
    {
        Expect::String($this->actual)->notToContainStringIgnoringCase($needle, $message);
        return $this;
    }

    public function stringNotToEndWith($suffix, string $message = ''): self
    {
        Expect::String($this->actual)->notToEndWith($suffix, $message);
        return $this;
    }

    public function stringNotToEqualFile($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->notToEqualFile($expectedFile, $message);
        return $this;
    }

    public function stringNotToEqualFileCanonicalizing($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->notToEqualFileCanonicalizing($expectedFile, $message);
        return $this;
    }

    public function stringNotToEqualFileIgnoringCase($expectedFile, string $message = ''): self
    {
        Expect::String($this->actual)->notToEqualFileIgnoringCase($expectedFile, $message);
        return $this;
    }

    public function stringNotToMatchFormat($format, string $message = ''): self
    {
        Expect::String($this->actual)->notToMatchFormat($format, $message);
        return $this;
    }

    public function stringNotToMatchFormatFile($formatFile, string $message = ''): self
    {
        Expect::String($this->actual)->notToMatchFormatFile($formatFile, $message);
        return $this;
    }

    public function stringNotToStartWith($prefix, string $message = ''): self
    {
        Expect::String($this->actual)->notToStartWith($prefix, $message);
        return $this;
    }

    public function stringToStartWith($prefix, string $message = ''): self
    {
        Expect::String($this->actual)->toStartWith($prefix, $message);
        return $this;
    }

    public function xmlFileToEqualXmlFile($expectedFile, string $message = ''): self
    {
        Expect::XmlFile($this->actual)->toEqualXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlFileNotToEqualXmlFile($expectedFile, string $message = ''): self
    {
        Expect::XmlFile($this->actual)->notToEqualXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringToEqualXmlFile($expectedFile, string $message = ''): self
    {
        Expect::XmlString($this->actual)->toEqualXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringToEqualXmlString($expectedXml, string $message = ''): self
    {
        Expect::XmlString($this->actual)->toEqualXmlString($expectedXml, $message);
        return $this;
    }

    public function xmlStringNotToEqualXmlFile($expectedFile, string $message = ''): self
    {
        Expect::XmlString($this->actual)->notToEqualXmlFile($expectedFile, $message);
        return $this;
    }

    public function xmlStringNotToEqualXmlString($expectedXml, string $message = ''): self
    {
        Expect::XmlString($this->actual)->notToEqualXmlString($expectedXml, $message);
        return $this;
    }
}
