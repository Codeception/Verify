<?php
if (!function_exists('verify')) {
    /**
     * @param $description
     * @param null $actual
     * @return Codeception\Verify
     */
    function verify($description, $actual = null)
    {
        include_once __DIR__.'/Verify.php';
        return new Codeception\Verify($description, $actual);
    }

    function verify_that($truth)
    {
        verify($truth)->notEmpty();
    }

    function verify_not($fallacy)
    {
        verify($fallacy)->isEmpty();
    }

}

if (!function_exists('expect')) {
    // alias methods
    function expect($description, $actual = null)
     {
         include_once __DIR__.'/Verify.php';
         return new Codeception\Verify($description, $actual);
     }

    function expect_that($truth)
    {
        expect($truth)->notEmpty();
    }

    function expect_not($fallacy)
    {
        expect($fallacy)->isEmpty();
    }
}