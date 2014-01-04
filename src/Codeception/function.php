<?php
if (!function_exists('verify')) {
    /**
     * @param $description
     * @param null $actual
     * @return Codeception\Verify
     */
    function verify($description) {
        include_once __DIR__.'/Verify.php';

        $reflect  = new ReflectionClass('\Codeception\Verify');
        return $reflect->newInstanceArgs(func_get_args());
    }

    function verify_that($truth) {
        verify($truth)->notEmpty();
    }

    function verify_not($fallacy) {
        verify($fallacy)->isEmpty();
    }
}

if (!function_exists('v')) {
    /**
     * @param $description
     * @param mixed $actual
     * @return Codeception\Verify
     */
    function v() {
        return call_user_func_array('verify', func_get_args());
    }

}

if (!function_exists('expect')) {
    // alias methods
    function expect() {
        include_once __DIR__.'/Verify.php';
        return call_user_func_array('verify', func_get_args());
     }

    function expect_that($truth) {
        expect($truth)->notEmpty();
    }

    function expect_not($fallacy) {
        expect($fallacy)->isEmpty();
    }

}

if (!function_exists('e')) {
    /**
     * @param $description
     * @param null $actual
     * @return Codeception\Verify
     */
    function e() {
        return call_user_func_array('verify', func_get_args());
    }

}

