<?php declare(strict_types=1);

use Codeception\Verify\Verify;
use PHPUnit\Framework\TestCase;

include __DIR__.'/../vendor/autoload.php';

final class InheritanceTest extends TestCase
{
    public function testVerifyCanBeExtended(): void
    {
        Verify(new MyVerify())->instanceOf(Verify::class);
    }
}


final class MyVerify extends Verify
{
    public function __construct($actual = null)
    {
        parent::__construct($actual);
    }
}