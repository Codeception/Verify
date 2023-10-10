<?php
declare(strict_types=1);

include_once __DIR__.'/../src/Codeception/bootstrap.php';

use PHPUnit\Framework\ExpectationFailedException;
use PHPUnit\Framework\TestCase;

final class ExpectTest extends TestCase
{

    public function testObjectToHaveProperty(): void
    {
        $object = new \Stdclass();
        $object->bar = 'baz';

        expect($object)->baseObjectToHaveProperty('bar');

        verify(function () use ($object): void {
            expect($object)->baseObjectToHaveProperty('foo', 'foobar');
        })->callableThrows(new ExpectationFailedException("foobar\nFailed asserting that object of class \"stdClass\" has property \"foo\"."));
    }

    public function testObjectNotToHaveProperty(): void
    {
        $object = new \Stdclass();
        $object->bar = 'baz';

        expect($object)->baseObjectNotToHaveProperty('foo');

        verify(function () use ($object): void {
            expect($object)->baseObjectNotToHaveProperty('bar', 'foobar');
        })->callableThrows(new ExpectationFailedException("foobar\nFailed asserting that object of class \"stdClass\" does not have property \"bar\"."));
    }
}
