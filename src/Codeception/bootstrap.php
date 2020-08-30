<?php declare(strict_types=1);

use Codeception\Verify\Verifiers\VerifyMixed;

if (!function_exists('verify'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function verify($actual): VerifyMixed
    {
        return new VerifyMixed($actual);
    }
}

if (!function_exists('verify_that'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function verify_that($actual): VerifyMixed
    {
        return new VerifyMixed($actual);
    }
}

if (!function_exists('expect'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function expect($actual): VerifyMixed {
        return new VerifyMixed($actual);
    }
}