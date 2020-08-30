<?php declare(strict_types=1);

use Codeception\Verify\Verifiers\VerifyMixed;

if (!function_exists('Verify'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function Verify($actual): VerifyMixed
    {
        return new VerifyMixed($actual);
    }
}

if (!function_exists('VerifyThat'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function VerifyThat($actual): VerifyMixed
    {
        return new VerifyMixed($actual);
    }
}

if (!function_exists('Expect'))
{
    /**
     * @param mixed $actual
     * @return VerifyMixed
     */
    function Expect($actual): VerifyMixed {
        return new VerifyMixed($actual);
    }
}