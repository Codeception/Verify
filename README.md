Verify
======

BDD Assertions for [PHPUnit][1] or [Codeception][2]

[![Latest Stable Version](https://poser.pugx.org/codeception/verify/v/stable)](https://packagist.org/packages/codeception/verify)
[![Total Downloads](https://poser.pugx.org/codeception/verify/downloads)](https://packagist.org/packages/codeception/verify)
[![Build Status](https://travis-ci.org/Codeception/Verify.png?branch=master)](https://travis-ci.org/Codeception/Verify)
[![License](https://poser.pugx.org/codeception/specify/license)](https://packagist.org/packages/codeception/verify)

This is very tiny wrapper for PHPUnit assertions, that are aimed to make tests a bit more readable.
With [BDD][3] assertions influenced by [Chai][4], [Jasmine][5], and [RSpec][6] your assertions would be a bit closer to natural language.

## Installation

*Requires PHP  7.1 or higher*

```
composer require codeception/verify --dev
```

## Usage

Use in any test `verify` function instead of `$this->assert*` methods:

```php
$user = User::find(1);

// equal
verify($user->getName())->equals('davert');
verify("user have 5 posts", $user->getNumPosts())->equals(5);
verify($user->getNumPosts())->notEquals(3);

// contains
verify('first user is admin', $user->getRoles())->contains('admin');
verify("first user is not banned", $user->getRoles())->notContains('banned');

// greater / less
$rate = $user->getRate();
verify('first user rate is 7', $rate)->equals(7);

verify($rate)->greaterThan(5);
verify($rate)->lessThan(10);
verify($rate)->lessOrEquals(7);
verify($rate)->greaterOrEquals(5);

// true / false / null
verify($user->isAdmin())->true();
verify($user->isBanned())->false();
verify($user->invitedBy)->null();
verify($user->getPosts())->notNull();

// empty
verify($user->getComments())->isEmpty();
verify($user->getRoles())->notEmpty();

// throws
verify($callback)->throws();
verify($callback)->throws(Exception::class);
verify($callback)->throws(Exception::class, 'exception message');
verify($callback)->throws(new Exception());
verify($callback)->throws(new Exception('message'));

// does not throw
verify($callback)->doesNotThrow();
verify($callback)->throws(Exception::class);
verify($callback)->doesNotThrow(new Exception());

// and many more !
```

> ##### :page_facing_up: See Verifiers full list [here.][7]

Shorthands for testing truth/fallacy:

```php
verify_that($user->isActivated());
verify_not($user->isBanned());
```

These two functions don't check for strict true/false matching, rather `empty` function is used.
`verify_that` checks that result is not empty value, `verify_not` does the opposite.

## Alternative Syntax

If you follow TDD/BDD you'd rather use `expect` instead of `verify`. Which are just an alias functions:

```php
expect("user have 5 posts", $user->getNumPosts())->equals(5);
expect_that($user->isActive());
expect_not($user->isBanned());
```

## Extending

In order to add more assertions you can override `Codeception\Verify` class:

```php
class MyVerify extends \Codeception\Verify {

    public function success()
    {
    }

}
```

Set the class name to `Codeception\Verify::$override` property to `verify` function use it:
  
```php

\Codeception\Verify::$override = MyVerify::class;

// access overridden class
verify('it works')->success();
```

## License

Verify is open-sourced software licensed under the [MIT][8] License.
© Codeception PHP Testing Framework

[1]: https://phpunit.de/
[2]: http://codeception.com/
[3]: https://en.wikipedia.org/wiki/Behavior-driven_development
[4]: http://chaijs.com/
[5]: http://jasmine.github.io/
[6]: http://rspec.info/
[7]: /docs/supported_verifiers.md
[8]: /LICENSE
