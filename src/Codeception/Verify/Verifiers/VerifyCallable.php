<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\Verify\Verify;
use Exception;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\ExpectationFailedException;
use Throwable;

class VerifyCallable extends Verify
{
    public function __construct(callable $callable)
    {
        parent::__construct($callable);
    }

    /**
     * @param Exception|string|null $throws
     * @param string|false $message
     * @return VerifyCallable
     * @throws Throwable
     */
    public function throws($throws = null, $message = false): self
    {
        if ($throws instanceof Exception) {
            $message = $throws->getMessage();
            $throws = get_class($throws);
        }

        try {
            call_user_func($this->actual);
        } catch (Throwable $e) {
            if (!$throws) {
                return $this; // it throws
            }

            $actualThrows = get_class($e);
            $actualMessage = $e->getMessage();

            Assert::assertSame($throws, $actualThrows, "exception '$throws' was expected, but '$actualThrows' was thrown");

            if ($message) {
                Assert::assertSame($message, $actualMessage, "exception message '$message' was expected, but '$actualMessage' was received");
            }
        }

        if (!isset($e)) {
            throw new ExpectationFailedException("exception '$throws' was not thrown as expected");
        }

        return $this;
    }

    /**
     * @param Exception|string|null $throws
     * @param string|false $message
     * @return $this
     */
    public function doesNotThrow($throws = null, $message = false): self
    {
        if ($throws instanceof Exception) {
            $message = $throws->getMessage();
            $throws = get_class($throws);
        }

        try {
            call_user_func($this->actual);
        } catch (Throwable $e) {
            if (!$throws) {
                throw new ExpectationFailedException("exception was not expected to be thrown");
            }

            $actualThrows = get_class($e);
            $actualMessage = $e->getMessage();

            if ($throws !== $actualThrows) {
                return $this;
            }

            if (!$message) {
                throw new ExpectationFailedException("exception '$throws' was not expected to be thrown");
            } elseif ($message === $actualMessage) {
                throw new ExpectationFailedException("exception '$throws' with message '$message' was not expected to be thrown");
            }
        }

        return $this;
    }
}