Verify
======

BDD Assertions for PHPUnit and Codeception

This is very tiny wrapper for PHPUnit assertions, that are aimed to make tests a bit more readable.
With BDD assertions influenced by Chai, Jasmine, and RSpec your assertions would be a bit closer to natural language.

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
verify($rate)->lessThen(10);
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
verify($user->getPosts())->notEmpty();
?>
```

## Installation

With Composer:

```
"require-dev": {
    "codeception/verify": "*"
}
```

**License: MIT**
