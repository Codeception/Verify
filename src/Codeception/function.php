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
}
