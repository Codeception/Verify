UPGRADE FROM 1.X TO 2.X
=======================


PHP version
------

 * Removed support for `PHP 7.1` & `PHP 7.2`.


Verify function
-------

In version `2.x` the `verifiers` are classes. Each verifier handles a specific type of data.

Thanks to this you can enjoy an autocompletion of your `IDE` much more intelligent than before...

That is why **we have deleted verifiers as global functions** and we have used a new class-based syntax.

According to the above:

 * `verify` no longer receives a `string $message` as a parameter, now each _**verifier**_ fulfills this function.
 * `verify_not` was deleted. Use `verify()->empty` instead.
 * `expect_that` and `expect_not` were deleted. Use `expect()->notEmpty` and `expect()->empty` instead.
 * `expect_file` and `setIsFileExpectation` were deleted. Use `Verify::File()` instead.

Verifiers
-------

|                  Verify 1.x                     |                    Verify 2.x                     |
|-------------------------------------------------|---------------------------------------------------|
| `verify()->array`                               | `verify()->isArray`                               |
| `verify()->bool`                                | `verify()->isBool`                                |
| `verify()->callable`                            | `verify()->isCallable`                            |
| `verify()->float`                               | `verify()->isFloat`                               |
| `verify()->greaterOrEquals`                     | `verify()->greaterThanOrEqual`                    |
| `verify()->int`                                 | `verify()->isInt`                                 |
| `verify()->isEmpty`                             | `verify()->empty`                                 |
| `verify()->isInstanceOf`                        | `verify()->instanceOf`                            |
| `verify()->isNotInstanceOf`                     | `verify()->notInstanceOf`                         |
| `verify()->lessOrEquals`                        | `verify()->lessThanOrEqual`                       |
| `verify()->notArray`                            | `verify()->isNotArray`                            |
| `verify()->notBool`                             | `verify()->isNotBool`                             |
| `verify()->notCallable`                         | `verify()->isNotCallable`                         |
| `verify()->notFloat`                            | `verify()->isNotFloat`                            |
| `verify()->notInt`                              | `verify()->isNotInt`                              |
| `verify()->notNumeric`                          | `verify()->isNotNumeric`                          |
| `verify()->notObject`                           | `verify()->isNotObject`                           |
| `verify()->notResource`                         | `verify()->isNotResource`                         |
| `verify()->notScalar`                           | `verify()->isNotScalar`                           |
| `verify()->notString`                           | `verify()->isNotString`                           |
| `verify()->numeric`                             | `verify()->isNumeric`                             |
| `verify()->object`                              | `verify()->isObject`                              |
| `verify()->resource`                            | `verify()->isResource`                            |
| `verify()->scalar`                              | `verify()->isScalar`                              |
| `verify()->string`                              | `verify()->isString`                              |
| `verify()->hasAttribute`                        | `Verify::BaseObject()->hasAttribute`              |
| `verify()->notHasAttribute`                     | `Verify::BaseObject()->notHasAttribute`           |
| `verify()->throws`                              | `Verify::Callable()->throws`                      |
| `verify()->doesNotThrow`                        | `Verify::Callable()->doesNotThrow`                |
| `verify()->hasStaticAttribute`                  | `Verify::Class()->hasStaticAttribute`             |
| `verify()->notHasStaticAttribute`               | `Verify::Class()->notHasStaticAttribute`          |
| `verify()->hasAttribute`                        | `Verify::Class()->hasAttribute`                   |
| `verify()->notHasAttribute`                     | `Verify::Class()->notHasAttribute`                |
| `verify()->directoryDoesNotExist`               | `Verify::Directory()->doesNotExist`               |
| `verify()->directoryExists`                     | `Verify::Directory()->exists`                     |
| `verify()->directoryIsNotReadable`              | `Verify::Directory()->isNotReadable`              |
| `verify()->directoryIsNotWritable`              | `Verify::Directory()->isNotWritable`              |
| `verify()->notExists`                           | `Verify::File()->doesNotExists`                   |
| `verify()->fileEqualsCanonicalizing`            | `Verify::File()->equalsCanonicalizing`            |
| `verify()->fileEqualsIgnoringCase`              | `Verify::File()->equalsIgnoringCase`              |
| `verify()->fileIsNotReadable`                   | `Verify::File()->isNotReadable`                   |
| `verify()->fileIsNotWritable`                   | `Verify::File()->isNotWritable`                   |
| `verify()->fileIsReadable`                      | `Verify::File()->isReadable`                      |
| `verify()->fileIsWritable`                      | `Verify::File()->isWritable`                      |
| `verify()->fileNotEqualsCanonicalizing`         | `Verify::File()->notEqualsCanonicalizing`         |
| `verify()->fileNotEqualsIgnoringCase`           | `Verify::File()->notEqualsIgnoringCase`           |
| `verify()->jsonFileNotEqualsJsonFile`           | `Verify::JsonFile()->notEqualsJsonFile`           |
| `verify()->jsonStringNotEqualsJsonFile`         | `Verify::JsonString()->notEqualsJsonFile`         |
| `verify()->jsonStringNotEqualsJsonString`       | `Verify::JsonString()->otEqualsJsonString`        |
| `verify()->regExp`                              | `Verify::String()->matchesRegExp`                 |
| `verify()->stringContainsString`                | `Verify::String()->containsString`                |
| `verify()->stringContainsStringIgnoringCase`    | `Verify::String()->containsStringIgnoringCase`    |
| `verify()->stringEqualsFileCanonicalizing`      | `Verify::String()->equalsFileCanonicalizing`      |
| `verify()->stringEqualsFileIgnoringCase`        | `Verify::String()->equalsFileIgnoringCase`        |
| `verify()->stringNotEqualsFileCanonicalizing`   | `Verify::String()->notEqualsFileCanonicalizing`   |
| `verify()->stringNotEqualsFileIgnoringCase`     | `Verify::String()->notEqualsFileIgnoringCase`     |
| `verify()->notRegExp`                           | `Verify::String()->doesNotMatchRegExp`            |
| `verify()->stringNotContainsString`             | `Verify::String()->notContainsString`             |
| `verify()->stringNotContainsStringIgnoringCase` | `Verify::String()->notContainsStringIgnoringCase` |
| `verify()->notStartsWith`                       | `Verify::String()->notStartsWith`                 |
| `verify()->xmlFileNotEqualsXmlFile`             | `Verify::XmlFile()->notEqualsXmlFile`             |
| `verify()->xmlStringNotEqualsXmlFile`           | `Verify::XmlString()->notEqualsXmlFile`           |
| `verify()->xmlStringNotEqualsXmlString`         | `Verify::XmlString()->notEqualsXmlString`         |


Extending
-------

 * `Codeception\Verify::$override` was removed, extend from abstract `Codeception\Verify\Verify` class instead.
