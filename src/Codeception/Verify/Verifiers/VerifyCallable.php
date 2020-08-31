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
        } catch (Throwable $exception) {
            if (!$throws) {
                return $this; // it throws
            }

            $actualThrows = get_class($exception);
            $actualMessage = $exception->getMessage();

            Assert::assertSame($throws, $actualThrows, sprintf('exception \'%s\' was expected, but \'%s\' was thrown', $throws, $actualThrows));

            if ($message) {
                Assert::assertSame($message, $actualMessage, sprintf('exception message \'%s\' was expected, but \'%s\' was received', $message, $actualMessage));
            }
        }

        if (!isset($exception)) {
            throw new ExpectationFailedException(sprintf('exception \'%s\' was not thrown as expected', $throws));
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
        } catch (Throwable $exception) {
            if (!$throws) {
                throw new ExpectationFailedException('exception was not expected to be thrown');
            }

            $actualThrows = get_class($exception);
            $actualMessage = $exception->getMessage();

            if ($throws !== $actualThrows) {
                return $this;
            }

            if (!$message) {
                throw new ExpectationFailedException(sprintf('exception \'%s\' was not expected to be thrown', $throws));
            }

            if ($message === $actualMessage) {
                throw new ExpectationFailedException(sprintf('exception \'%s\' with message \'%s\' was not expected to be thrown', $throws, $message));
            }
        }

        return $this;
    }
}