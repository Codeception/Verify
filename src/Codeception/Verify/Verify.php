<?php declare(strict_types=1);

namespace Codeception\Verify;

use ArrayAccess;
use Codeception\Verify\Verifiers\VerifyArray;
use Codeception\Verify\Verifiers\VerifyCallable;
use Codeception\Verify\Verifiers\VerifyClass;
use Codeception\Verify\Verifiers\VerifyFile;
use Codeception\Verify\Verifiers\VerifyJsonFile;
use Codeception\Verify\Verifiers\VerifyJsonString;
use Codeception\Verify\Verifiers\VerifyObject;
use Codeception\Verify\Verifiers\VerifyString;
use Codeception\Verify\Verifiers\VerifyXmlFile;
use Codeception\Verify\Verifiers\VerifyXmlString;
use Countable;

abstract class Verify
{
    /** @var mixed */
    protected $actual = null;

    /**
     * Verify constructor
     *
     * @param mixed $actual
     */
    protected function __construct($actual)
    {
        $this->actual = $actual;
    }

    public static function File(string $filename): VerifyFile
    {
        return new VerifyFile($filename);
    }

    public static function JsonFile(string $filename): VerifyJsonFile
    {
        return new VerifyJsonFile($filename);
    }

    public static function JsonString(string $json): VerifyJsonString
    {
        return new VerifyJsonString($json);
    }

    public static function XmlFile(string $filename): VerifyXmlFile
    {
        return new VerifyXmlFile($filename);
    }

    public static function XmlString(string $xml): VerifyXmlString
    {
        return new VerifyXmlString($xml);
    }

    public static function Object(object $object): VerifyObject
    {
        return new VerifyObject($object);
    }

    public static function Class(string $className): VerifyClass
    {
        return new VerifyClass($className);
    }

    public static function Directory(string $directory): VerifyClass
    {
        return new VerifyClass($directory);
    }

    /**
     * @param array|ArrayAccess|Countable|iterable $array
     * @return VerifyArray
     */
    public static function Array($array): VerifyArray
    {
        return new VerifyArray($array);
    }

    public static function String(string $string): VerifyString
    {
        return new VerifyString($string);
    }

    public static function Callable(callable $callable): VerifyCallable
    {
        return new VerifyCallable($callable);
    }
}