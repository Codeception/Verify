<?php
if (!function_exists('verify')) {
    /**
     * @param $description
     * @param null $actual
     * @return Codeception\Verify
     */
    function verify($description) {
        include_once __DIR__.'/Verify.php';

        $descriptionGiven = (func_num_args() == 2);

        if (!$descriptionGiven) {
            return new Codeception\Verify($description);
        } else {
            $actual = func_get_args()[1];
            return new Codeception\Verify($description, $actual);			
        }
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
    function v($description) {

       $descriptionGiven = (func_num_args() == 2);

        if (!$descriptionGiven) {
            return verify($description);
        } else {
            $actual = func_get_args()[1];
            return verify($description, $actual);			
        }
    }

}

if (!function_exists('expect')) {
    // alias methods
    function expect($description) {
         include_once __DIR__.'/Verify.php';

        $descriptionGiven = (func_num_args() == 2);

        if (!$descriptionGiven) {
            return verify($description);
        } else {
            $actual = func_get_args()[1];
            return verify($description, $actual);			
        }
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
    function e($description) {

       $descriptionGiven = (func_num_args() == 2);

        if (!$descriptionGiven) {
            return verify($description);
        } else {
            $actual = func_get_args()[1];
            return verify($description, $actual);			
        }
    }

}

