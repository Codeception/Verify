<?php declare(strict_types=1);

namespace Codeception\Verify;

use Codeception\Verify\Verifiers\VerifyArrayTrait;
use Codeception\Verify\Verifiers\VerifyDirectoryTrait;
use Codeception\Verify\Verifiers\VerifyFileTrait;
use Codeception\Verify\Verifiers\VerifyMixedTrait;
use Codeception\Verify\Verifiers\VerifyStringTrait;
use Codeception\Verify\Verifiers\VerifyThrowableTrait;
use Codeception\Verify\Verifiers\VerifyUnionTrait;
use Codeception\Verify\Verifiers\VerifyXmlTrait;

class Verify
{
    use
        VerifyArrayTrait,
        VerifyDirectoryTrait,
        VerifyFileTrait,
        VerifyMixedTrait,
        VerifyStringTrait,
        VerifyThrowableTrait,
        VerifyUnionTrait,
        VerifyXmlTrait
    ;

    public static $override = false;

    protected $actual = null;
    protected $message = '';
    protected $isFileExpectation = false;

    public function __construct($message)
    {
        $messageGiven = (func_num_args() == 2);

        if (!$messageGiven) {
            $this->actual = $message;
            return;
        }

        $actual = func_get_args();
        $this->actual = $actual[1];
        $this->message = $message;
    }
}
