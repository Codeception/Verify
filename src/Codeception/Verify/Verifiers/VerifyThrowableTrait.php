<?php declare(strict_types=1);

namespace Codeception\Verify\Verifiers;

use Codeception\PHPUnit\TestCase;
use Exception;
use PHPUnit\Framework\ExpectationFailedException;
use Throwable;

trait VerifyThrowableTrait
{
    /**
     * @param Exception|string|null $throws
     * @param string|false $message
     * @throws Throwable
     */
    public function throws($throws = null, $message = false)
    {
        if ($throws instanceof Exception) {
            $message = $throws->getMessage();
            $throws = get_class($throws);
        }

        try {
            call_user_func($this->actual);
        } catch (Throwable $e) {
            if (!$throws) {
                return; // it throws
            }

            $actualThrows = get_class($e);
            $actualMessage = $e->getMessage();

            TestCase::assertSame($throws, $actualThrows, "exception '$throws' was expected, but '$actualThrows' was thrown");

            if ($message) {
                TestCase::assertSame($message, $actualMessage, "exception message '$message' was expected, but '$actualMessage' was received");
            }
        }

        if (!isset($e)) {
            throw new ExpectationFailedException("exception '$throws' was not thrown as expected");
        }
    }

    public function doesNotThrow($throws = null, $message = false)
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
                return;
            }

            if (!$message) {
                throw new ExpectationFailedException("exception '$throws' was not expected to be thrown");
            } elseif ($message === $actualMessage) {
                throw new ExpectationFailedException("exception '$throws' with message '$message' was not expected to be thrown");
            }
        }
    }
}