Verify
======

BDD Assertions for PHPUnit and Codeception

This is very tiny wrapper for PHPUnit assertions, that are aimed to make tests a bit more readable.
With BDD assertions influenced by Chai, Jasmine, and RSpec your assertions would be a bit closer to natural language.

[![Build Status](https://travis-ci.org/Codeception/Verify.png?branch=master)](https://travis-ci.org/Codeception/Verify) [![Latest Stable Version](https://poser.pugx.org/codeception/verify/v/stable.png)](https://packagist.org/packages/codeception/verify)


``` php
<?php
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
verify($rate)->lessOrEquals(8);
verify($rate)->greaterOrEquals(7);
verify($rate)->greaterOrEquals(5);

// true/false/null
verify($user->isAdmin())->true();
verify($user->isBanned())->false();
verify($user->invitedBy)->null();
verify($user->getPosts())->notNull();

// empty
verify($user->getComments())->isEmpty();
verify($user->getRoles())->notEmpty();
?>
```

Shorthands for testing truth/fallacy:

``` php
<?php
verify_that($user->isActivated());
verify_not($user->isBanned());
?>
```

This 2 functions doesn't check for strict true/false matching, rather `empty` function is used.
`verify_that` checks that result is not empty value, `verify_not` does the opposite.

## Alternative Syntax

If you follow TDD/BDD you'd rather use `expect` instead of `verify`. Which is just an alias functions:

``` php
expect("user have 5 posts", $user->getNumPosts())->equals(5);
expect_that($user->isActive());
expect_not($user->isBanned());
```


## Installation

With Composer:

```
"require-dev": {
    "codeception/verify": "^1.0"
}
```

## Usage

Use in any test `verify` function instead of `$this->assert*` methods.

## Extending

In order to add more assertions you can override `Codeception\Verify` class:

```php
class MyVerify extends \Codeception\Verify {

    public function success()
    {
    }

}
```

Set the class name to `Codeception\Verify::override` property to `verify` function use it:
  
```php

\Codeception\Verify::override = MyVerify::class;

// access overridden class
verify('it works')->success();
```


**License: MIT**
