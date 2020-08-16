<?php

use Codeception\Verify\Verify;

if (!function_exists('verify')) {
    /**
     * @param $description
     * @return Verify
     */
    function verify($description) {
        $descriptionGiven = (func_num_args() == 2);
        $class = Verify::$override
            ? Verify::$override
            : Verify::class;

        if ($descriptionGiven) {
            $args = func_get_args();
            return new $class($args[0], $args[1]);
        }
        return new $class($description);
    }

    function verify_that($truth) {
        verify($truth)->notEmpty();
    }

    function verify_not($fallacy) {
        verify($fallacy)->isEmpty();
    }
}

if (!function_exists('expect')) {

    /**
     * @return Verify
     */
    function expect() {
        return call_user_func_array('verify', func_get_args());
     }

    function expect_that($truth) {
        expect($truth)->notEmpty();
    }

    function expect_not($fallacy) {
        expect($fallacy)->isEmpty();
    }

}

if (!function_exists('verify_file')) {

    /**
     * @return Verify
     */
    function verify_file() {
        $verify = call_user_func_array('verify', func_get_args());
        $verify->setIsFileExpectation(true);
        return $verify;
    }
}

if (!function_exists('expect_file')) {
    /**
     * @return Verify
     */
    function expect_file() {
        return call_user_func_array('verify_file', func_get_args());
    }
}
