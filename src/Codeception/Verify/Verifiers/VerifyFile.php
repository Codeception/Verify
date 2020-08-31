<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Verify\Verify;
use PHPUnit\Framework\Assert;

class VerifyFile extends Verify
{
    public function __construct(string $actual)
    {
        parent::__construct($actual);
    }

    /**
     * Verifies that a file does not exist.
     *
     * @param string $message
     * @return self
     */
    public function doesNotExists(string $message = ''): self
    {
        Assert::assertFileDoesNotExist($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is equal to the contents of another file.
     *
     * @param string $expected
     * @param string $message
     * @return self
     */
    public function equals(string $expected, string $message = ''): self
    {
        Assert::assertFileEquals($expected, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is equal to the contents of another file (canonicalizing).
     *
     * @param string $expected
     * @param string $message
     * @return self
     */
    public function equalsCanonicalizing(string $expected, string $message = ''): self
    {
        Assert::assertFileEqualsCanonicalizing($expected, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is equal to the contents of another file (ignoring case).
     *
     * @param string $expected
     * @param string $message
     * @return self
     */
    public function equalsIgnoringCase(string $expected, string $message = ''): self
    {
        Assert::assertFileEqualsIgnoringCase($expected, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that a file exists.
     *
     * @param string $message
     * @return self
     */
    public function exists(string $message = ''): self
    {
        Assert::assertFileExists($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that a file exists and is not readable.
     *
     * @param string $message
     * @return self
     */
    public function isNotReadable(string $message = ''): self
    {
        Assert::assertFileIsNotReadable($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that a file exists and is not writable.
     *
     * @param string $message
     * @return self
     */
    public function isNotWritable(string $message = ''): self
    {
        Assert::assertFileIsNotWritable($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that a file exists and is readable.
     *
     * @param string $message
     * @return self
     */
    public function isReadable(string $message = ''): self
    {
        Assert::assertFileIsReadable($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that a file exists and is writable.
     *
     * @param string $message
     * @return self
     */
    public function isWritable(string $message = ''): self
    {
        Assert::assertFileIsWritable($this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is not equal to the contents of another file.
     *
     * @param $expected
     * @param string $message
     * @return self
     */
    public function notEquals(string $expected, string $message = ''): self
    {
        Assert::assertFileNotEquals($expected, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is not equal to the contents of another file (canonicalizing).
     *
     * @param $expected
     * @param string $message
     * @return self
     */
    public function notEqualsCanonicalizing(string $expected, string $message = ''): self
    {
        Assert::assertFileNotEqualsCanonicalizing($expected, $this->actual, $message);
        return $this;
    }

    /**
     * Verifies that the contents of one file is not equal to the contents of another file (ignoring case).
     *
     * @param $expected
     * @param string $message
     * @return self
     */
    public function notEqualsIgnoringCase(string $expected, string $message = ''): self
    {
        Assert::assertFileNotEqualsIgnoringCase($expected, $this->actual, $message);
        return $this;
    }
}