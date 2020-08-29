## Verifiers List

### Array
```
contains
containsEquals
containsOnly
containsOnlyInstancesOf
count
hasKey
hasNotKey
notContains
notContainsEquals
notContainsOnly
notCount
notSameSize
sameSize
```

### Directory
```
directoryDoesNotExist
directoryExists
directoryIsNotReadable
directoryIsNotWritable
directoryIsReadable
directoryIsWritable
```
### File
```
setIsFileExpectation
equals
notEquals
exists
notExists
equalsJsonFile
equalsXmlFile
fileEqualsCanonicalizing
fileEqualsIgnoringCase
fileIsNotReadable
fileIsNotWritable
fileIsReadable
fileIsWritable
fileNotEqualsCanonicalizing
fileNotEqualsIgnoringCase
jsonFileNotEqualsJsonFile
jsonStringNotEqualsJsonFile
```

### Mixed
```
isEmpty
equalsCanonicalizing
equalsIgnoringCase
equalsWithDelta
false
finite
greaterThan
greaterOrEquals
infinite
isInstanceOf
array
bool
callable
isClosedResource
float
int
isIterable
notArray
notBool
notCallable
isNotClosedResource
notFloat
notInt
isNotIterable
notNumeric
notObject
notResource
notScalar
notString
numeric
object
resource
scalar
string
lessThan
lessOrEquals
nan
notEmpty
notEqualsCanonicalizing
notEqualsIgnoringCase
notEqualsWithDelta
notFalse
isNotInstanceOf
notNull
notSame
notTrue
null
same
that
true
```

### String
```
hasStaticAttribute
notHasStaticAttribute
json
jsonStringNotEqualsJsonString
notRegExp
equalsJsonString
regExp
stringContainsString
stringContainsStringIgnoringCase
stringEqualsFileCanonicalizing
stringEqualsFileIgnoringCase
stringNotEqualsFileCanonicalizing
stringNotEqualsFileIgnoringCase
notEndsWith
endsWith
equalsFile
matchesFormat
matchesFormatFile
stringNotContainsString
stringNotContainsStringIgnoringCase
notMatchesFormat
notMatchesFormatFile
notStartsWith
startsWith
notEqualsFile
```

### Union
##### Object/String
```
hasAttribute
notHasAttribute
```
##### File/Directory
```
isNotReadable
isNotWritable
```

### Throwable
```
throws
doesNotThrow
```

### Xml
```
equalsXmlString
xmlFileNotEqualsXmlFile
xmlStringNotEqualsXmlFile
xmlStringNotEqualsXmlString
```