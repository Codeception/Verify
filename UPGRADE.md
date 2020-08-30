UPGRADE FROM 1.X TO 2.X
=======================


PHP version
------

 * Removed support for `PHP 7.1` & `PHP 7.2`.


Verify function
-------

 * `Verify` no longer receives a `string $message` as a parameter, now each _**verifier**_ fulfills this function.
 * `verify_that` was deleted. Use `VerifyThat` instead.
 * `verify_not` was deleted. Use `Verify()->empty` instead.
 * `expect_that` and `expect_not` were deleted. Use `Expect()->notEmpty` and `Expect()->empty` instead.
 * `expect_file` and `setIsFileExpectation` were deleted. Use `Verify::File()` instead.

Verifiers
-------

|                  Verify 1.x                     |                    Verify 2.x                     |
|-------------------------------------------------|---------------------------------------------------|
| `verify()->array`                               | `Verify()->isArray`                               |
| `verify()->bool`                                | `Verify()->isBool`                                |
| `verify()->callable`                            | `Verify()->isCallable`                            |
| `verify()->float`                               | `Verify()->isFloat`                               |
| `verify()->greaterOrEquals`                     | `Verify()->greaterThanOrEqual`                    |
| `verify()->int`                                 | `Verify()->isInt`                                 |
| `verify()->isEmpty`                             | `Verify()->empty`                                 |
| `verify()->isInstanceOf`                        | `Verify()->instanceOf`                            |
| `verify()->isNotInstanceOf`                     | `Verify()->notInstanceOf`                         |
| `verify()->lessOrEquals`                        | `Verify()->lessThanOrEqual`                       |
| `verify()->notArray`                            | `Verify()->isNotArray`                            |
| `verify()->notBool`                             | `Verify()->isNotBool`                             |
| `verify()->notCallable`                         | `Verify()->isNotCallable`                         |
| `verify()->notFloat`                            | `Verify()->isNotFloat`                            |
| `verify()->notInt`                              | `Verify()->isNotInt`                              |
| `verify()->notNumeric`                          | `Verify()->isNotNumeric`                          |
| `verify()->notObject`                           | `Verify()->isNotObject`                           |
| `verify()->notResource`                         | `Verify()->isNotResource`                         |
| `verify()->notScalar`                           | `Verify()->isNotScalar`                           |
| `verify()->notString`                           | `Verify()->isNotString`                           |
| `verify()->numeric`                             | `Verify()->isNumeric`                             |
| `verify()->object`                              | `Verify()->isObject`                              |
| `verify()->resource`                            | `Verify()->isResource`                            |
| `verify()->scalar`                              | `Verify()->isScalar`                              |
| `verify()->string`                              | `Verify()->isString`                              |
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
