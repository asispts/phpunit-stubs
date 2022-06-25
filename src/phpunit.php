<?php

namespace PHPUnit\Framework {
    /**
     * A Test can be run and collect its results.
     */
    interface Test extends \Countable
    {
        /**
         * Runs a test and collects its result in a TestResult instance.
         *
         * @param TestResult $result
         *
         * @return TestResult
         */
        public function run(\PHPUnit\Framework\TestResult $result = null);
    }
    /**
     * Interface for classes that can return a description of itself.
     */
    interface SelfDescribing
    {
        /**
         * Returns a string representation of the object.
         *
         * @return string
         */
        public function toString();
    }
    /**
     * A set of assertion methods.
     */
    abstract class Assert
    {
        /**
         * @var int
         */
        private static $count = 0;
        /**
         * Asserts that an array has a specified key.
         *
         * @param mixed             $key
         * @param array|ArrayAccess $array
         * @param string            $message
         */
        public static function assertArrayHasKey($key, $array, $message = '')
        {
        }
        /**
         * Asserts that an array has a specified subset.
         *
         * @param array|ArrayAccess $subset
         * @param array|ArrayAccess $array
         * @param bool              $strict  Check for object identity
         * @param string            $message
         */
        public static function assertArraySubset($subset, $array, $strict = false, $message = '')
        {
        }
        /**
         * Asserts that an array does not have a specified key.
         *
         * @param mixed             $key
         * @param array|ArrayAccess $array
         * @param string            $message
         */
        public static function assertArrayNotHasKey($key, $array, $message = '')
        {
        }
        /**
         * Asserts that a haystack contains a needle.
         *
         * @param mixed  $needle
         * @param mixed  $haystack
         * @param string $message
         * @param bool   $ignoreCase
         * @param bool   $checkForObjectIdentity
         * @param bool   $checkForNonObjectIdentity
         */
        public static function assertContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object contains a needle.
         *
         * @param mixed         $needle
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         * @param bool          $ignoreCase
         * @param bool          $checkForObjectIdentity
         * @param bool          $checkForNonObjectIdentity
         */
        public static function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Asserts that a haystack does not contain a needle.
         *
         * @param mixed  $needle
         * @param mixed  $haystack
         * @param string $message
         * @param bool   $ignoreCase
         * @param bool   $checkForObjectIdentity
         * @param bool   $checkForNonObjectIdentity
         */
        public static function assertNotContains($needle, $haystack, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object does not contain a needle.
         *
         * @param mixed         $needle
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         * @param bool          $ignoreCase
         * @param bool          $checkForObjectIdentity
         * @param bool          $checkForNonObjectIdentity
         */
        public static function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = false, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Asserts that a haystack contains only values of a given type.
         *
         * @param string $type
         * @param mixed  $haystack
         * @param bool   $isNativeType
         * @param string $message
         */
        public static function assertContainsOnly($type, $haystack, $isNativeType = null, $message = '')
        {
        }
        /**
         * Asserts that a haystack contains only instances of a given classname
         *
         * @param string             $classname
         * @param array|\Traversable $haystack
         * @param string             $message
         */
        public static function assertContainsOnlyInstancesOf($classname, $haystack, $message = '')
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object contains only values of a given type.
         *
         * @param string        $type
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param bool          $isNativeType
         * @param string        $message
         */
        public static function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
        {
        }
        /**
         * Asserts that a haystack does not contain only values of a given type.
         *
         * @param string $type
         * @param mixed  $haystack
         * @param bool   $isNativeType
         * @param string $message
         */
        public static function assertNotContainsOnly($type, $haystack, $isNativeType = null, $message = '')
        {
        }
        /**
         * Asserts that a haystack that is stored in a static attribute of a class
         * or an attribute of an object does not contain only values of a given
         * type.
         *
         * @param string        $type
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param bool          $isNativeType
         * @param string        $message
         */
        public static function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = null, $message = '')
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable.
         *
         * @param int    $expectedCount
         * @param mixed  $haystack
         * @param string $message
         */
        public static function assertCount($expectedCount, $haystack, $message = '')
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable
         * that is stored in an attribute.
         *
         * @param int           $expectedCount
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         */
        public static function assertAttributeCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable.
         *
         * @param int    $expectedCount
         * @param mixed  $haystack
         * @param string $message
         */
        public static function assertNotCount($expectedCount, $haystack, $message = '')
        {
        }
        /**
         * Asserts the number of elements of an array, Countable or Traversable
         * that is stored in an attribute.
         *
         * @param int           $expectedCount
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         */
        public static function assertAttributeNotCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that two variables are equal.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         * @param float  $delta
         * @param int    $maxDepth
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that a variable is equal to an attribute of an object.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         * @param float         $delta
         * @param int           $maxDepth
         * @param bool          $canonicalize
         * @param bool          $ignoreCase
         */
        public static function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that two variables are not equal.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         * @param float  $delta
         * @param int    $maxDepth
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that a variable is not equal to an attribute of an object.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         * @param float         $delta
         * @param int           $maxDepth
         * @param bool          $canonicalize
         * @param bool          $ignoreCase
         */
        public static function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that a variable is empty.
         *
         * @param mixed  $actual
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertEmpty($actual, $message = '')
        {
        }
        /**
         * Asserts that a static attribute of a class or an attribute of an object
         * is empty.
         *
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         */
        public static function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a variable is not empty.
         *
         * @param mixed  $actual
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertNotEmpty($actual, $message = '')
        {
        }
        /**
         * Asserts that a static attribute of a class or an attribute of an object
         * is not empty.
         *
         * @param string        $haystackAttributeName
         * @param string|object $haystackClassOrObject
         * @param string        $message
         */
        public static function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a value is greater than another value.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertGreaterThan($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is greater than another value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a value is greater than or equal to another value.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertGreaterThanOrEqual($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is greater than or equal to another value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a value is smaller than another value.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertLessThan($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is smaller than another value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a value is smaller than or equal to another value.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertLessThanOrEqual($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is smaller than or equal to another value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that the contents of one file is equal to the contents of another
         * file.
         *
         * @param string $expected
         * @param string $actual
         * @param string $message
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertFileEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that the contents of one file is not equal to the contents of
         * another file.
         *
         * @param string $expected
         * @param string $actual
         * @param string $message
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that the contents of a string is equal
         * to the contents of a file.
         *
         * @param string $expectedFile
         * @param string $actualString
         * @param string $message
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that the contents of a string is not equal
         * to the contents of a file.
         *
         * @param string $expectedFile
         * @param string $actualString
         * @param string $message
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         */
        public static function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Asserts that a file/dir is readable.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertIsReadable($filename, $message = '')
        {
        }
        /**
         * Asserts that a file/dir exists and is not readable.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertNotIsReadable($filename, $message = '')
        {
        }
        /**
         * Asserts that a file/dir exists and is writable.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertIsWritable($filename, $message = '')
        {
        }
        /**
         * Asserts that a file/dir exists and is not writable.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertNotIsWritable($filename, $message = '')
        {
        }
        /**
         * Asserts that a directory exists.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryExists($directory, $message = '')
        {
        }
        /**
         * Asserts that a directory does not exist.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryNotExists($directory, $message = '')
        {
        }
        /**
         * Asserts that a directory exists and is readable.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryIsReadable($directory, $message = '')
        {
        }
        /**
         * Asserts that a directory exists and is not readable.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryNotIsReadable($directory, $message = '')
        {
        }
        /**
         * Asserts that a directory exists and is writable.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryIsWritable($directory, $message = '')
        {
        }
        /**
         * Asserts that a directory exists and is not writable.
         *
         * @param string $directory
         * @param string $message
         */
        public static function assertDirectoryNotIsWritable($directory, $message = '')
        {
        }
        /**
         * Asserts that a file exists.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertFileExists($filename, $message = '')
        {
        }
        /**
         * Asserts that a file does not exist.
         *
         * @param string $filename
         * @param string $message
         */
        public static function assertFileNotExists($filename, $message = '')
        {
        }
        /**
         * Asserts that a file exists and is readable.
         *
         * @param string $file
         * @param string $message
         */
        public static function assertFileIsReadable($file, $message = '')
        {
        }
        /**
         * Asserts that a file exists and is not readable.
         *
         * @param string $file
         * @param string $message
         */
        public static function assertFileNotIsReadable($file, $message = '')
        {
        }
        /**
         * Asserts that a file exists and is writable.
         *
         * @param string $file
         * @param string $message
         */
        public static function assertFileIsWritable($file, $message = '')
        {
        }
        /**
         * Asserts that a file exists and is not writable.
         *
         * @param string $file
         * @param string $message
         */
        public static function assertFileNotIsWritable($file, $message = '')
        {
        }
        /**
         * Asserts that a condition is true.
         *
         * @param bool   $condition
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertTrue($condition, $message = '')
        {
        }
        /**
         * Asserts that a condition is not true.
         *
         * @param bool   $condition
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertNotTrue($condition, $message = '')
        {
        }
        /**
         * Asserts that a condition is false.
         *
         * @param bool   $condition
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertFalse($condition, $message = '')
        {
        }
        /**
         * Asserts that a condition is not false.
         *
         * @param bool   $condition
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function assertNotFalse($condition, $message = '')
        {
        }
        /**
         * Asserts that a variable is null.
         *
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNull($actual, $message = '')
        {
        }
        /**
         * Asserts that a variable is not null.
         *
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNotNull($actual, $message = '')
        {
        }
        /**
         * Asserts that a variable is finite.
         *
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertFinite($actual, $message = '')
        {
        }
        /**
         * Asserts that a variable is infinite.
         *
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertInfinite($actual, $message = '')
        {
        }
        /**
         * Asserts that a variable is nan.
         *
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNan($actual, $message = '')
        {
        }
        /**
         * Asserts that a class has a specified attribute.
         *
         * @param string $attributeName
         * @param string $className
         * @param string $message
         */
        public static function assertClassHasAttribute($attributeName, $className, $message = '')
        {
        }
        /**
         * Asserts that a class does not have a specified attribute.
         *
         * @param string $attributeName
         * @param string $className
         * @param string $message
         */
        public static function assertClassNotHasAttribute($attributeName, $className, $message = '')
        {
        }
        /**
         * Asserts that a class has a specified static attribute.
         *
         * @param string $attributeName
         * @param string $className
         * @param string $message
         */
        public static function assertClassHasStaticAttribute($attributeName, $className, $message = '')
        {
        }
        /**
         * Asserts that a class does not have a specified static attribute.
         *
         * @param string $attributeName
         * @param string $className
         * @param string $message
         */
        public static function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
        {
        }
        /**
         * Asserts that an object has a specified attribute.
         *
         * @param string $attributeName
         * @param object $object
         * @param string $message
         */
        public static function assertObjectHasAttribute($attributeName, $object, $message = '')
        {
        }
        /**
         * Asserts that an object does not have a specified attribute.
         *
         * @param string $attributeName
         * @param object $object
         * @param string $message
         */
        public static function assertObjectNotHasAttribute($attributeName, $object, $message = '')
        {
        }
        /**
         * Asserts that two variables have the same type and value.
         * Used on objects, it asserts that two variables reference
         * the same object.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertSame($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that a variable and an attribute of an object have the same type
         * and value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that two variables do not have the same type and value.
         * Used on objects, it asserts that two variables do not reference
         * the same object.
         *
         * @param mixed  $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNotSame($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that a variable and an attribute of an object do not have the
         * same type and value.
         *
         * @param mixed         $expected
         * @param string        $actualAttributeName
         * @param string|object $actualClassOrObject
         * @param string        $message
         */
        public static function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
        {
        }
        /**
         * Asserts that a variable is of a given type.
         *
         * @param string $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertInstanceOf($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param string        $expected
         * @param string        $attributeName
         * @param string|object $classOrObject
         * @param string        $message
         */
        public static function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
        {
        }
        /**
         * Asserts that a variable is not of a given type.
         *
         * @param string $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNotInstanceOf($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param string        $expected
         * @param string        $attributeName
         * @param string|object $classOrObject
         * @param string        $message
         */
        public static function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
        {
        }
        /**
         * Asserts that a variable is of a given type.
         *
         * @param string $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertInternalType($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param string        $expected
         * @param string        $attributeName
         * @param string|object $classOrObject
         * @param string        $message
         */
        public static function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
        {
        }
        /**
         * Asserts that a variable is not of a given type.
         *
         * @param string $expected
         * @param mixed  $actual
         * @param string $message
         */
        public static function assertNotInternalType($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that an attribute is of a given type.
         *
         * @param string        $expected
         * @param string        $attributeName
         * @param string|object $classOrObject
         * @param string        $message
         */
        public static function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
        {
        }
        /**
         * Asserts that a string matches a given regular expression.
         *
         * @param string $pattern
         * @param string $string
         * @param string $message
         */
        public static function assertRegExp($pattern, $string, $message = '')
        {
        }
        /**
         * Asserts that a string does not match a given regular expression.
         *
         * @param string $pattern
         * @param string $string
         * @param string $message
         */
        public static function assertNotRegExp($pattern, $string, $message = '')
        {
        }
        /**
         * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
         * is the same.
         *
         * @param array|\Countable|\Traversable $expected
         * @param array|\Countable|\Traversable $actual
         * @param string                        $message
         */
        public static function assertSameSize($expected, $actual, $message = '')
        {
        }
        /**
         * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
         * is not the same.
         *
         * @param array|\Countable|\Traversable $expected
         * @param array|\Countable|\Traversable $actual
         * @param string                        $message
         */
        public static function assertNotSameSize($expected, $actual, $message = '')
        {
        }
        /**
         * Asserts that a string matches a given format string.
         *
         * @param string $format
         * @param string $string
         * @param string $message
         */
        public static function assertStringMatchesFormat($format, $string, $message = '')
        {
        }
        /**
         * Asserts that a string does not match a given format string.
         *
         * @param string $format
         * @param string $string
         * @param string $message
         */
        public static function assertStringNotMatchesFormat($format, $string, $message = '')
        {
        }
        /**
         * Asserts that a string matches a given format file.
         *
         * @param string $formatFile
         * @param string $string
         * @param string $message
         */
        public static function assertStringMatchesFormatFile($formatFile, $string, $message = '')
        {
        }
        /**
         * Asserts that a string does not match a given format string.
         *
         * @param string $formatFile
         * @param string $string
         * @param string $message
         */
        public static function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
        {
        }
        /**
         * Asserts that a string starts with a given prefix.
         *
         * @param string $prefix
         * @param string $string
         * @param string $message
         */
        public static function assertStringStartsWith($prefix, $string, $message = '')
        {
        }
        /**
         * Asserts that a string starts not with a given prefix.
         *
         * @param string $prefix
         * @param string $string
         * @param string $message
         */
        public static function assertStringStartsNotWith($prefix, $string, $message = '')
        {
        }
        /**
         * Asserts that a string ends with a given suffix.
         *
         * @param string $suffix
         * @param string $string
         * @param string $message
         */
        public static function assertStringEndsWith($suffix, $string, $message = '')
        {
        }
        /**
         * Asserts that a string ends not with a given suffix.
         *
         * @param string $suffix
         * @param string $string
         * @param string $message
         */
        public static function assertStringEndsNotWith($suffix, $string, $message = '')
        {
        }
        /**
         * Asserts that two XML files are equal.
         *
         * @param string $expectedFile
         * @param string $actualFile
         * @param string $message
         */
        public static function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
        {
        }
        /**
         * Asserts that two XML files are not equal.
         *
         * @param string $expectedFile
         * @param string $actualFile
         * @param string $message
         */
        public static function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are equal.
         *
         * @param string             $expectedFile
         * @param string|DOMDocument $actualXml
         * @param string             $message
         */
        public static function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param string             $expectedFile
         * @param string|DOMDocument $actualXml
         * @param string             $message
         */
        public static function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are equal.
         *
         * @param string|DOMDocument $expectedXml
         * @param string|DOMDocument $actualXml
         * @param string             $message
         */
        public static function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param string|DOMDocument $expectedXml
         * @param string|DOMDocument $actualXml
         * @param string             $message
         */
        public static function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that a hierarchy of DOMElements matches.
         *
         * @param DOMElement $expectedElement
         * @param DOMElement $actualElement
         * @param bool       $checkAttributes
         * @param string     $message
         */
        public static function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, $checkAttributes = false, $message = '')
        {
        }
        /**
         * Evaluates a PHPUnit\Framework\Constraint matcher object.
         *
         * @param mixed      $value
         * @param Constraint $constraint
         * @param string     $message
         */
        public static function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, $message = '')
        {
        }
        /**
         * Asserts that a string is a valid JSON string.
         *
         * @param string $actualJson
         * @param string $message
         */
        public static function assertJson($actualJson, $message = '')
        {
        }
        /**
         * Asserts that two given JSON encoded objects or arrays are equal.
         *
         * @param string $expectedJson
         * @param string $actualJson
         * @param string $message
         */
        public static function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
        {
        }
        /**
         * Asserts that two given JSON encoded objects or arrays are not equal.
         *
         * @param string $expectedJson
         * @param string $actualJson
         * @param string $message
         */
        public static function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message = '')
        {
        }
        /**
         * Asserts that the generated JSON encoded object and the content of the given file are equal.
         *
         * @param string $expectedFile
         * @param string $actualJson
         * @param string $message
         */
        public static function assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message = '')
        {
        }
        /**
         * Asserts that the generated JSON encoded object and the content of the given file are not equal.
         *
         * @param string $expectedFile
         * @param string $actualJson
         * @param string $message
         */
        public static function assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message = '')
        {
        }
        /**
         * Asserts that two JSON files are equal.
         *
         * @param string $expectedFile
         * @param string $actualFile
         * @param string $message
         */
        public static function assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message = '')
        {
        }
        /**
         * Asserts that two JSON files are not equal.
         *
         * @param string $expectedFile
         * @param string $actualFile
         * @param string $message
         */
        public static function assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message = '')
        {
        }
        /**
         * @return LogicalAnd
         */
        public static function logicalAnd()
        {
        }
        /**
         * @return LogicalOr
         */
        public static function logicalOr()
        {
        }
        /**
         * @param Constraint $constraint
         *
         * @return LogicalNot
         */
        public static function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint)
        {
        }
        /**
         * @return LogicalXor
         */
        public static function logicalXor()
        {
        }
        /**
         * @return IsAnything
         */
        public static function anything()
        {
        }
        /**
         * @return IsTrue
         */
        public static function isTrue()
        {
        }
        /**
         * @param callable $callback
         *
         * @return Callback
         */
        public static function callback($callback)
        {
        }
        /**
         * @return IsFalse
         */
        public static function isFalse()
        {
        }
        /**
         * @return IsJson
         */
        public static function isJson()
        {
        }
        /**
         * @return IsNull
         */
        public static function isNull()
        {
        }
        /**
         * @return IsFinite
         */
        public static function isFinite()
        {
        }
        /**
         * @return IsInfinite
         */
        public static function isInfinite()
        {
        }
        /**
         * @return IsNan
         */
        public static function isNan()
        {
        }
        /**
         * @param Constraint $constraint
         * @param string     $attributeName
         *
         * @return Attribute
         */
        public static function attribute(\PHPUnit\Framework\Constraint\Constraint $constraint, $attributeName)
        {
        }
        /**
         * @param mixed $value
         * @param bool  $checkForObjectIdentity
         * @param bool  $checkForNonObjectIdentity
         *
         * @return TraversableContains
         */
        public static function contains($value, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * @param string $type
         *
         * @return TraversableContainsOnly
         */
        public static function containsOnly($type)
        {
        }
        /**
         * @param string $classname
         *
         * @return TraversableContainsOnly
         */
        public static function containsOnlyInstancesOf($classname)
        {
        }
        /**
         * @param mixed $key
         *
         * @return ArrayHasKey
         */
        public static function arrayHasKey($key)
        {
        }
        /**
         * @param mixed $value
         * @param float $delta
         * @param int   $maxDepth
         * @param bool  $canonicalize
         * @param bool  $ignoreCase
         *
         * @return IsEqual
         */
        public static function equalTo($value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @param string $attributeName
         * @param mixed  $value
         * @param float  $delta
         * @param int    $maxDepth
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         *
         * @return Attribute
         */
        public static function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @return IsEmpty
         */
        public static function isEmpty()
        {
        }
        /**
         * @return IsWritable
         */
        public static function isWritable()
        {
        }
        /**
         * @return IsReadable
         */
        public static function isReadable()
        {
        }
        /**
         * @return DirectoryExists
         */
        public static function directoryExists()
        {
        }
        /**
         * @return FileExists
         */
        public static function fileExists()
        {
        }
        /**
         * @param mixed $value
         *
         * @return GreaterThan
         */
        public static function greaterThan($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @return LogicalOr
         */
        public static function greaterThanOrEqual($value)
        {
        }
        /**
         * @param string $attributeName
         *
         * @return ClassHasAttribute
         */
        public static function classHasAttribute($attributeName)
        {
        }
        /**
         * @param string $attributeName
         *
         * @return ClassHasStaticAttribute
         */
        public static function classHasStaticAttribute($attributeName)
        {
        }
        /**
         * @param string $attributeName
         *
         * @return ObjectHasAttribute
         */
        public static function objectHasAttribute($attributeName)
        {
        }
        /**
         * @param mixed $value
         *
         * @return IsIdentical
         */
        public static function identicalTo($value)
        {
        }
        /**
         * @param string $className
         *
         * @return IsInstanceOf
         */
        public static function isInstanceOf($className)
        {
        }
        /**
         * @param string $type
         *
         * @return IsType
         */
        public static function isType($type)
        {
        }
        /**
         * @param mixed $value
         *
         * @return LessThan
         */
        public static function lessThan($value)
        {
        }
        /**
         * @param mixed $value
         *
         * @return LogicalOr
         */
        public static function lessThanOrEqual($value)
        {
        }
        /**
         * @param string $pattern
         *
         * @return RegularExpression
         */
        public static function matchesRegularExpression($pattern)
        {
        }
        /**
         * @param string $string
         *
         * @return StringMatchesFormatDescription
         */
        public static function matches($string)
        {
        }
        /**
         * @param mixed $prefix
         *
         * @return StringStartsWith
         */
        public static function stringStartsWith($prefix)
        {
        }
        /**
         * @param string $string
         * @param bool   $case
         *
         * @return StringContains
         */
        public static function stringContains($string, $case = true)
        {
        }
        /**
         * @param mixed $suffix
         *
         * @return StringEndsWith
         */
        public static function stringEndsWith($suffix)
        {
        }
        /**
         * @param int $count
         *
         * @return Count
         */
        public static function countOf($count)
        {
        }
        /**
         * Fails a test with the given message.
         *
         * @param string $message
         *
         * @throws AssertionFailedError
         */
        public static function fail($message = '')
        {
        }
        /**
         * Returns the value of an attribute of a class or an object.
         * This also works for attributes that are declared protected or private.
         *
         * @param string|object $classOrObject
         * @param string        $attributeName
         *
         * @return mixed
         *
         * @throws Exception
         */
        public static function readAttribute($classOrObject, $attributeName)
        {
        }
        /**
         * Returns the value of a static attribute.
         * This also works for attributes that are declared protected or private.
         *
         * @param string $className
         * @param string $attributeName
         *
         * @return mixed
         *
         * @throws Exception
         */
        public static function getStaticAttribute($className, $attributeName)
        {
        }
        /**
         * Returns the value of an object's attribute.
         * This also works for attributes that are declared protected or private.
         *
         * @param object $object
         * @param string $attributeName
         *
         * @return mixed
         *
         * @throws Exception
         */
        public static function getObjectAttribute($object, $attributeName)
        {
        }
        /**
         * Mark the test as incomplete.
         *
         * @param string $message
         *
         * @throws IncompleteTestError
         */
        public static function markTestIncomplete($message = '')
        {
        }
        /**
         * Mark the test as skipped.
         *
         * @param string $message
         *
         * @throws SkippedTestError
         */
        public static function markTestSkipped($message = '')
        {
        }
        /**
         * Return the current assertion count.
         *
         * @return int
         */
        public static function getCount()
        {
        }
        /**
         * Reset the assertion counter.
         */
        public static function resetCount()
        {
        }
    }
    /**
     * A TestCase defines the fixture to run multiple tests.
     *
     * To define a TestCase
     *
     *   1) Implement a subclass of PHPUnit\Framework\TestCase.
     *   2) Define instance variables that store the state of the fixture.
     *   3) Initialize the fixture state by overriding setUp().
     *   4) Clean-up after a test by overriding tearDown().
     *
     * Each test runs in its own fixture so there can be no side effects
     * among test runs.
     *
     * Here is an example:
     *
     * <code>
     * <?php
     * class MathTest extends PHPUnit\Framework\TestCase
     * {
     *     public $value1;
     *     public $value2;
     *
     *     protected function setUp()
     *     {
     *         $this->value1 = 2;
     *         $this->value2 = 3;
     *     }
     * }
     * ?>
     * </code>
     *
     * For each test implement a method which interacts with the fixture.
     * Verify the expected results with assertions specified by calling
     * assert with a boolean.
     *
     * <code>
     * <?php
     * public function testPass()
     * {
     *     $this->assertTrue($this->value1 + $this->value2 == 5);
     * }
     * ?>
     * </code>
     */
    abstract class TestCase extends \PHPUnit\Framework\Assert implements \PHPUnit\Framework\Test, \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Enable or disable the backup and restoration of the $GLOBALS array.
         * Overwrite this attribute in a child class of TestCase.
         * Setting this attribute in setUp() has no effect!
         *
         * @var bool
         */
        protected $backupGlobals;
        /**
         * @var array
         */
        protected $backupGlobalsBlacklist = [];
        /**
         * Enable or disable the backup and restoration of static attributes.
         * Overwrite this attribute in a child class of TestCase.
         * Setting this attribute in setUp() has no effect!
         *
         * @var bool
         */
        protected $backupStaticAttributes;
        /**
         * @var array
         */
        protected $backupStaticAttributesBlacklist = [];
        /**
         * Whether or not this test is to be run in a separate PHP process.
         *
         * @var bool
         */
        protected $runTestInSeparateProcess;
        /**
         * Whether or not this class is to be run in a separate PHP process.
         *
         * @var bool
         */
        private $runClassInSeparateProcess;
        /**
         * Whether or not this test should preserve the global state when
         * running in a separate PHP process.
         *
         * @var bool
         */
        protected $preserveGlobalState = true;
        /**
         * Whether or not this test is running in a separate PHP process.
         *
         * @var bool
         */
        private $inIsolation = false;
        /**
         * @var array
         */
        private $data;
        /**
         * @var string
         */
        private $dataName;
        /**
         * @var bool
         */
        private $useErrorHandler;
        /**
         * The name of the expected Exception.
         *
         * @var null|string
         */
        private $expectedException;
        /**
         * The message of the expected Exception.
         *
         * @var string
         */
        private $expectedExceptionMessage;
        /**
         * The regex pattern to validate the expected Exception message.
         *
         * @var string
         */
        private $expectedExceptionMessageRegExp;
        /**
         * The code of the expected Exception.
         *
         * @var null|int|string
         */
        private $expectedExceptionCode;
        /**
         * The name of the test case.
         *
         * @var string
         */
        private $name;
        /**
         * @var string[]
         */
        private $dependencies = [];
        /**
         * @var array
         */
        private $dependencyInput = [];
        /**
         * @var array
         */
        private $iniSettings = [];
        /**
         * @var array
         */
        private $locale = [];
        /**
         * @var array
         */
        private $mockObjects = [];
        /**
         * @var MockGenerator
         */
        private $mockObjectGenerator;
        /**
         * @var int
         */
        private $status;
        /**
         * @var string
         */
        private $statusMessage = '';
        /**
         * @var int
         */
        private $numAssertions = 0;
        /**
         * @var TestResult
         */
        private $result;
        /**
         * @var mixed
         */
        private $testResult;
        /**
         * @var string
         */
        private $output = '';
        /**
         * @var string
         */
        private $outputExpectedRegex;
        /**
         * @var string
         */
        private $outputExpectedString;
        /**
         * @var mixed
         */
        private $outputCallback = false;
        /**
         * @var bool
         */
        private $outputBufferingActive = false;
        /**
         * @var int
         */
        private $outputBufferingLevel;
        /**
         * @var Snapshot
         */
        private $snapshot;
        /**
         * @var Prophecy\Prophet
         */
        private $prophet;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState = false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = false;
        /**
         * @var string[]
         */
        private $warnings = [];
        /**
         * @var array
         */
        private $groups = [];
        /**
         * @var bool
         */
        private $doesNotPerformAssertions = false;
        /**
         * @var Comparator[]
         */
        private $customComparators = [];
        /**
         * Constructs a test case with the given name.
         *
         * @param string $name
         * @param array  $data
         * @param string $dataName
         */
        public function __construct($name = null, array $data = [], $dataName = '')
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of test cases executed by run(TestResult result).
         *
         * @return int
         */
        public function count()
        {
        }
        public function getGroups()
        {
        }
        /**
         * @param array $groups
         */
        public function setGroups(array $groups)
        {
        }
        /**
         * Returns the annotations for this test.
         *
         * @return array
         */
        public function getAnnotations()
        {
        }
        /**
         * Gets the name of a TestCase.
         *
         * @param bool $withDataSet
         *
         * @return string
         */
        public function getName($withDataSet = true)
        {
        }
        /**
         * Returns the size of the test.
         *
         * @return int
         */
        public function getSize()
        {
        }
        /**
         * @return bool
         */
        public function hasSize()
        {
        }
        /**
         * @return bool
         */
        public function isSmall()
        {
        }
        /**
         * @return bool
         */
        public function isMedium()
        {
        }
        /**
         * @return bool
         */
        public function isLarge()
        {
        }
        /**
         * @return string
         */
        public function getActualOutput()
        {
        }
        /**
         * @return bool
         */
        public function hasOutput()
        {
        }
        /**
         * @return bool
         */
        public function doesNotPerformAssertions()
        {
        }
        /**
         * @param string $expectedRegex
         *
         * @throws Exception
         */
        public function expectOutputRegex($expectedRegex)
        {
        }
        /**
         * @param string $expectedString
         */
        public function expectOutputString($expectedString)
        {
        }
        /**
         * @return bool
         */
        public function hasExpectationOnOutput()
        {
        }
        /**
         * @return null|string
         */
        public function getExpectedException()
        {
        }
        /**
         * @return null|int|string
         */
        public function getExpectedExceptionCode()
        {
        }
        /**
         * @return string
         */
        public function getExpectedExceptionMessage()
        {
        }
        /**
         * @return string
         */
        public function getExpectedExceptionMessageRegExp()
        {
        }
        /**
         * @param string $exception
         */
        public function expectException($exception)
        {
        }
        /**
         * @param int|string $code
         *
         * @throws Exception
         */
        public function expectExceptionCode($code)
        {
        }
        /**
         * @param string $message
         *
         * @throws Exception
         */
        public function expectExceptionMessage($message)
        {
        }
        /**
         * @param string $messageRegExp
         *
         * @throws Exception
         */
        public function expectExceptionMessageRegExp($messageRegExp)
        {
        }
        /**
         * Sets up an expectation for an exception to be raised by the code under test.
         * Information for expected exception class, expected exception message, and
         * expected exception code are retrieved from a given Exception object.
         */
        public function expectExceptionObject(\Exception $exception)
        {
        }
        /**
         * @param bool $flag
         */
        public function setRegisterMockObjectsFromTestArgumentsRecursively($flag)
        {
        }
        protected function setExpectedExceptionFromAnnotation()
        {
        }
        /**
         * @param bool $useErrorHandler
         */
        public function setUseErrorHandler($useErrorHandler)
        {
        }
        protected function setUseErrorHandlerFromAnnotation()
        {
        }
        protected function checkRequirements()
        {
        }
        /**
         * Returns the status of this test.
         *
         * @return int
         */
        public function getStatus()
        {
        }
        public function markAsRisky()
        {
        }
        /**
         * Returns the status message of this test.
         *
         * @return string
         */
        public function getStatusMessage()
        {
        }
        /**
         * Returns whether or not this test has failed.
         *
         * @return bool
         */
        public function hasFailed()
        {
        }
        /**
         * Runs the test case and collects the results in a TestResult object.
         * If no TestResult object is passed a new one will be created.
         *
         * @param TestResult $result
         *
         * @return TestResult
         *
         * @throws Exception
         */
        public function run(\PHPUnit\Framework\TestResult $result = null)
        {
        }
        /**
         * Runs the bare test sequence.
         */
        public function runBare()
        {
        }
        /**
         * Override to run the test and assert its state.
         *
         * @return mixed
         *
         * @throws Exception|Exception
         * @throws Exception
         */
        protected function runTest()
        {
        }
        /**
         * Verifies the mock object expectations.
         */
        protected function verifyMockObjects()
        {
        }
        /**
         * Sets the name of a TestCase.
         *
         * @param  string
         */
        public function setName($name)
        {
        }
        /**
         * Sets the dependencies of a TestCase.
         *
         * @param string[] $dependencies
         */
        public function setDependencies(array $dependencies)
        {
        }
        /**
         * Returns true if the tests has dependencies
         *
         * @return bool
         */
        public function hasDependencies()
        {
        }
        /**
         * Sets
         *
         * @param array $dependencyInput
         */
        public function setDependencyInput(array $dependencyInput)
        {
        }
        /**
         * @param bool $beStrictAboutChangesToGlobalState
         */
        public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState)
        {
        }
        /**
         * Calling this method in setUp() has no effect!
         *
         * @param bool $backupGlobals
         */
        public function setBackupGlobals($backupGlobals)
        {
        }
        /**
         * Calling this method in setUp() has no effect!
         *
         * @param bool $backupStaticAttributes
         */
        public function setBackupStaticAttributes($backupStaticAttributes)
        {
        }
        /**
         * @param bool $runTestInSeparateProcess
         *
         * @throws Exception
         */
        public function setRunTestInSeparateProcess($runTestInSeparateProcess)
        {
        }
        /**
         * @param bool $runClassInSeparateProcess
         *
         * @throws Exception
         */
        public function setRunClassInSeparateProcess($runClassInSeparateProcess)
        {
        }
        /**
         * @param bool $preserveGlobalState
         *
         * @throws Exception
         */
        public function setPreserveGlobalState($preserveGlobalState)
        {
        }
        /**
         * @param bool $inIsolation
         *
         * @throws Exception
         */
        public function setInIsolation($inIsolation)
        {
        }
        /**
         * @return bool
         */
        public function isInIsolation()
        {
        }
        /**
         * @return mixed
         */
        public function getResult()
        {
        }
        /**
         * @param mixed $result
         */
        public function setResult($result)
        {
        }
        /**
         * @param callable $callback
         *
         * @throws Exception
         */
        public function setOutputCallback($callback)
        {
        }
        /**
         * @return TestResult
         */
        public function getTestResultObject()
        {
        }
        /**
         * @param TestResult $result
         */
        public function setTestResultObject(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param MockObject $mockObject
         */
        public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject)
        {
        }
        /**
         * This method is a wrapper for the ini_set() function that automatically
         * resets the modified php.ini setting to its original value after the
         * test is run.
         *
         * @param string $varName
         * @param string $newValue
         *
         * @throws Exception
         */
        protected function iniSet($varName, $newValue)
        {
        }
        /**
         * This method is a wrapper for the setlocale() function that automatically
         * resets the locale to its original value after the test is run.
         *
         * @param int    $category
         * @param string $locale
         *
         * @throws Exception
         */
        protected function setLocale()
        {
        }
        /**
         * Returns a builder object to create mock objects using a fluent interface.
         *
         * @param string|string[] $className
         *
         * @return MockBuilder
         */
        public function getMockBuilder($className)
        {
        }
        /**
         * Returns a test double for the specified class.
         *
         * @param string $originalClassName
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function createMock($originalClassName)
        {
        }
        /**
         * Returns a configured test double for the specified class.
         *
         * @param string $originalClassName
         * @param array  $configuration
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function createConfiguredMock($originalClassName, array $configuration)
        {
        }
        /**
         * Returns a partial test double for the specified class.
         *
         * @param string   $originalClassName
         * @param string[] $methods
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function createPartialMock($originalClassName, array $methods)
        {
        }
        /**
         * Returns a test proxy for the specified class.
         *
         * @param string $originalClassName
         * @param array  $constructorArguments
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function createTestProxy($originalClassName, array $constructorArguments = [])
        {
        }
        /**
         * Mocks the specified class and returns the name of the mocked class.
         *
         * @param string $originalClassName
         * @param array  $methods
         * @param array  $arguments
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param bool   $cloneArguments
         *
         * @return string
         *
         * @throws Exception
         */
        protected function getMockClass($originalClassName, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = false, $callOriginalClone = true, $callAutoload = true, $cloneArguments = false)
        {
        }
        /**
         * Returns a mock object for the specified abstract class with all abstract
         * methods of the class mocked. Concrete methods are not mocked by default.
         * To mock concrete methods, use the 7th parameter ($mockedMethods).
         *
         * @param string $originalClassName
         * @param array  $arguments
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function getMockForAbstractClass($originalClassName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false)
        {
        }
        /**
         * Returns a mock object based on the given WSDL file.
         *
         * @param string $wsdlFile
         * @param string $originalClassName
         * @param string $mockClassName
         * @param array  $methods
         * @param bool   $callOriginalConstructor
         * @param array  $options                 An array of options passed to SOAPClient::_construct
         *
         * @return MockObject
         */
        protected function getMockFromWsdl($wsdlFile, $originalClassName = '', $mockClassName = '', array $methods = [], $callOriginalConstructor = true, array $options = [])
        {
        }
        /**
         * Returns a mock object for the specified trait with all abstract methods
         * of the trait mocked. Concrete methods to mock can be specified with the
         * `$mockedMethods` parameter.
         *
         * @param string $traitName
         * @param array  $arguments
         * @param string $mockClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         * @param array  $mockedMethods
         * @param bool   $cloneArguments
         *
         * @return MockObject
         *
         * @throws Exception
         */
        protected function getMockForTrait($traitName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true, $mockedMethods = [], $cloneArguments = false)
        {
        }
        /**
         * Returns an object for the specified trait.
         *
         * @param string $traitName
         * @param array  $arguments
         * @param string $traitClassName
         * @param bool   $callOriginalConstructor
         * @param bool   $callOriginalClone
         * @param bool   $callAutoload
         *
         * @return object
         *
         * @throws Exception
         */
        protected function getObjectForTrait($traitName, array $arguments = [], $traitClassName = '', $callOriginalConstructor = true, $callOriginalClone = true, $callAutoload = true)
        {
        }
        /**
         * @param string|null $classOrInterface
         *
         * @return \Prophecy\Prophecy\ObjectProphecy
         *
         * @throws \LogicException
         */
        protected function prophesize($classOrInterface = null)
        {
        }
        /**
         * Adds a value to the assertion counter.
         *
         * @param int $count
         */
        public function addToAssertionCount($count)
        {
        }
        /**
         * Returns the number of assertions performed by this test.
         *
         * @return int
         */
        public function getNumAssertions()
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * zero or more times.
         *
         * @return AnyInvokedCountMatcher
         */
        public static function any()
        {
        }
        /**
         * Returns a matcher that matches when the method is never executed.
         *
         * @return InvokedCountMatcher
         */
        public static function never()
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at least N times.
         *
         * @param int $requiredInvocations
         *
         * @return InvokedAtLeastCountMatcher
         */
        public static function atLeast($requiredInvocations)
        {
        }
        /**
         * Returns a matcher that matches when the method is executed at least once.
         *
         * @return InvokedAtLeastOnceMatcher
         */
        public static function atLeastOnce()
        {
        }
        /**
         * Returns a matcher that matches when the method is executed exactly once.
         *
         * @return InvokedCountMatcher
         */
        public static function once()
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * exactly $count times.
         *
         * @param int $count
         *
         * @return InvokedCountMatcher
         */
        public static function exactly($count)
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at most N times.
         *
         * @param int $allowedInvocations
         *
         * @return InvokedAtMostCountMatcher
         */
        public static function atMost($allowedInvocations)
        {
        }
        /**
         * Returns a matcher that matches when the method is executed
         * at the given index.
         *
         * @param int $index
         *
         * @return InvokedAtIndexMatcher
         */
        public static function at($index)
        {
        }
        /**
         * @param mixed $value
         *
         * @return ReturnStub
         */
        public static function returnValue($value)
        {
        }
        /**
         * @param array $valueMap
         *
         * @return ReturnValueMapStub
         */
        public static function returnValueMap(array $valueMap)
        {
        }
        /**
         * @param int $argumentIndex
         *
         * @return ReturnArgumentStub
         */
        public static function returnArgument($argumentIndex)
        {
        }
        /**
         * @param mixed $callback
         *
         * @return ReturnCallbackStub
         */
        public static function returnCallback($callback)
        {
        }
        /**
         * Returns the current object.
         *
         * This method is useful when mocking a fluent interface.
         *
         * @return ReturnSelfStub
         */
        public static function returnSelf()
        {
        }
        /**
         * @param Throwable $exception
         *
         * @return ExceptionStub
         */
        public static function throwException(\Throwable $exception)
        {
        }
        /**
         * @param mixed $value , ...
         *
         * @return ConsecutiveCallsStub
         */
        public static function onConsecutiveCalls()
        {
        }
        /**
         * @return bool
         */
        public function usesDataProvider()
        {
        }
        /**
         * @return string
         */
        public function dataDescription()
        {
        }
        /**
         * @return int|string
         */
        public function dataName()
        {
        }
        public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator)
        {
        }
        /**
         * Gets the data set description of a TestCase.
         *
         * @param bool $includeData
         *
         * @return string
         */
        public function getDataSetAsString($includeData = true)
        {
        }
        /**
         * Gets the data set of a TestCase.
         *
         * @return array
         */
        protected function getProvidedData()
        {
        }
        /**
         * Creates a default TestResult object.
         *
         * @return TestResult
         */
        protected function createResult()
        {
        }
        protected function handleDependencies()
        {
        }
        /**
         * This method is called before the first test of this test class is run.
         */
        public static function setUpBeforeClass()
        {
        }
        /**
         * Sets up the fixture, for example, open a network connection.
         * This method is called before a test is executed.
         */
        protected function setUp()
        {
        }
        /**
         * Performs assertions shared by all tests of a test case.
         *
         * This method is called before the execution of a test starts
         * and after setUp() is called.
         */
        protected function assertPreConditions()
        {
        }
        /**
         * Performs assertions shared by all tests of a test case.
         *
         * This method is called after the execution of a test ends
         * and before tearDown() is called.
         */
        protected function assertPostConditions()
        {
        }
        /**
         * Tears down the fixture, for example, close a network connection.
         * This method is called after a test is executed.
         */
        protected function tearDown()
        {
        }
        /**
         * This method is called after the last test of this test class is run.
         */
        public static function tearDownAfterClass()
        {
        }
        /**
         * This method is called when a test method did not execute successfully.
         *
         * @param Throwable $t
         *
         * @throws Throwable
         */
        protected function onNotSuccessfulTest(\Throwable $t)
        {
        }
        /**
         * Performs custom preparations on the process isolation template.
         *
         * @param Text_Template $template
         */
        protected function prepareTemplate(\Text_Template $template)
        {
        }
        /**
         * Get the mock object generator, creating it if it doesn't exist.
         *
         * @return MockGenerator
         */
        private function getMockObjectGenerator()
        {
        }
        private function startOutputBuffering()
        {
        }
        private function stopOutputBuffering()
        {
        }
        private function snapshotGlobalState()
        {
        }
        private function restoreGlobalState()
        {
        }
        /**
         * @param bool $backupGlobals
         *
         * @return Snapshot
         */
        private function createGlobalStateSnapshot($backupGlobals)
        {
        }
        /**
         * @param Snapshot $before
         * @param Snapshot $after
         *
         * @throws RiskyTestError
         */
        private function compareGlobalStateSnapshots(\SebastianBergmann\GlobalState\Snapshot $before, \SebastianBergmann\GlobalState\Snapshot $after)
        {
        }
        /**
         * @param array  $before
         * @param array  $after
         * @param string $header
         *
         * @throws RiskyTestError
         */
        private function compareGlobalStateSnapshotPart(array $before, array $after, $header)
        {
        }
        /**
         * @return Prophecy\Prophet
         */
        private function getProphet()
        {
        }
        /**
         * @param MockObject $mock
         *
         * @return bool
         */
        private function shouldInvocationMockerBeReset(\PHPUnit\Framework\MockObject\MockObject $mock)
        {
        }
        /**
         * @param array $testArguments
         * @param array $visited
         */
        private function registerMockObjectsFromTestArguments(array $testArguments, array &$visited = [])
        {
        }
        private function setDoesNotPerformAssertionsFromAnnotation()
        {
        }
        /**
         * @param MockObject $testArgument
         *
         * @return bool
         */
        private function isCloneable(\PHPUnit\Framework\MockObject\MockObject $testArgument)
        {
        }
        private function unregisterCustomComparators()
        {
        }
        private function cleanupIniSettings()
        {
        }
        private function cleanupLocaleSettings()
        {
        }
        private function checkExceptionExpectations(\Throwable $throwable) : bool
        {
        }
    }
}
namespace {
    class Issue1570Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue322Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @group one
         */
        public function testOne()
        {
        }
        /**
         * @group two
         */
        public function testTwo()
        {
        }
    }
    class Issue1351Test extends \PHPUnit\Framework\TestCase
    {
        protected $instance;
        /**
         * @runInSeparateProcess
         */
        public function testFailurePre()
        {
        }
        public function testFailurePost()
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testExceptionPre()
        {
        }
        public function testExceptionPost()
        {
        }
        public function testPhpCoreLanguageException()
        {
        }
    }
    class ChildProcessClass1351
    {
    }
    class Issue797Test extends \PHPUnit\Framework\TestCase
    {
        protected $preserveGlobalState = \false;
        public function testBootstrapPhpIsExecutedInIsolation()
        {
        }
    }
    /**
     * @runTestsInSeparateProcesses
     * @preserveGlobalState enabled
     */
    class Issue1335Test extends \PHPUnit\Framework\TestCase
    {
        public function testGlobalString()
        {
        }
        public function testGlobalIntTruthy()
        {
        }
        public function testGlobalIntFalsey()
        {
        }
        public function testGlobalFloat()
        {
        }
        public function testGlobalBoolTrue()
        {
        }
        public function testGlobalBoolFalse()
        {
        }
        public function testGlobalNull()
        {
        }
        public function testGlobalArray()
        {
        }
        public function testGlobalNestedArray()
        {
        }
        public function testGlobalObject()
        {
        }
        public function testGlobalObjectWithBackSlashString()
        {
        }
        public function testGlobalObjectWithDoubleBackSlashString()
        {
        }
    }
    class Issue498Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @test
         * @dataProvider shouldBeTrueDataProvider
         * @group falseOnly
         */
        public function shouldBeTrue($testData)
        {
        }
        /**
         * @test
         * @dataProvider shouldBeFalseDataProvider
         * @group trueOnly
         */
        public function shouldBeFalse($testData)
        {
        }
        public function shouldBeTrueDataProvider()
        {
        }
        public function shouldBeFalseDataProvider()
        {
        }
    }
    class Issue2366
    {
        public function foo()
        {
        }
    }
    class Issue2366Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         */
        public function testOne($o)
        {
        }
        public function provider()
        {
        }
    }
}
namespace Issue2972 {
    class Issue2972Test extends \PHPUnit\Framework\TestCase
    {
        public function testHello()
        {
        }
    }
}
namespace {
    class Issue1472Test extends \PHPUnit\Framework\TestCase
    {
        public function testAssertEqualXMLStructure()
        {
        }
    }
    /**
     * @runTestsInSeparateProcesses
     * @preserveGlobalState enabled
     */
    class Issue2591_SeparateFunctionPreserveTest extends \PHPUnit\Framework\TestCase
    {
        public function testChangedGlobalString()
        {
        }
        public function testGlobalString()
        {
        }
    }
    /**
     * @runClassInSeparateProcess
     * @preserveGlobalState enabled
     */
    class Issue2591_SeparateClassPreserveTest extends \PHPUnit\Framework\TestCase
    {
        public function testOriginalGlobalString()
        {
        }
        public function testChangedGlobalString()
        {
        }
        public function testGlobalString()
        {
        }
    }
    /**
     * @runTestsInSeparateProcesses
     * @preserveGlobalState disabled
     */
    class Issue2591_SeparateFunctionNoPreserveTest extends \PHPUnit\Framework\TestCase
    {
        public function testChangedGlobalString()
        {
        }
        public function testGlobalString()
        {
        }
    }
    class Issue1330Test extends \PHPUnit\Framework\TestCase
    {
        public function testTrue()
        {
        }
    }
    /**
     * @runClassInSeparateProcess
     */
    class Issue2830Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider simpleDataProvider
         */
        public function testMethodUsesDataProvider()
        {
        }
        public function simpleDataProvider()
        {
        }
    }
    class Issue1437Test extends \PHPUnit\Framework\TestCase
    {
        public function testFailure()
        {
        }
    }
    class Issue1216Test extends \PHPUnit\Framework\TestCase
    {
        public function testConfigAvailableInBootstrap()
        {
        }
    }
    class Issue74Test extends \PHPUnit\Framework\TestCase
    {
        public function testCreateAndThrowNewExceptionInProcessIsolation()
        {
        }
    }
    class NewException extends \Exception
    {
    }
    class Issue2145Test extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass()
        {
        }
        public function testOne()
        {
        }
        public function testTwo()
        {
        }
    }
    class Issue1265Test extends \PHPUnit\Framework\TestCase
    {
        public function testTrue()
        {
        }
    }
    class Issue433Test extends \PHPUnit\Framework\TestCase
    {
        public function testOutputWithExpectationBefore()
        {
        }
        public function testOutputWithExpectationAfter()
        {
        }
        public function testNotMatchingOutput()
        {
        }
    }
    class Issue445Test extends \PHPUnit\Framework\TestCase
    {
        public function testOutputWithExpectationBefore()
        {
        }
        public function testOutputWithExpectationAfter()
        {
        }
        public function testNotMatchingOutput()
        {
        }
    }
    class Issue1471Test extends \PHPUnit\Framework\TestCase
    {
        public function testFailure()
        {
        }
    }
    class Issue581Test extends \PHPUnit\Framework\TestCase
    {
        public function testExportingObjectsDoesNotBreakWindowsLineFeeds()
        {
        }
    }
    class Issue2137Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provideBrandService
         * @param $provided
         * @param $expected
         */
        public function testBrandService($provided, $expected)
        {
        }
        public function provideBrandService()
        {
        }
        /**
         * @dataProvider provideBrandService
         * @param $provided
         * @param $expected
         */
        public function testSomethingElseInvalid($provided, $expected)
        {
        }
    }
    class Issue503Test extends \PHPUnit\Framework\TestCase
    {
        public function testCompareDifferentLineEndings()
        {
        }
    }
    class Issue2380Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider generatorData
         */
        public function testGeneratorProvider($data)
        {
        }
        /**
         * @return Generator
         */
        public function generatorData()
        {
        }
    }
    /**
     * @group
     */
    class Issue2435Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue1468Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @todo Implement this test
         */
        public function testFailure()
        {
        }
    }
    class Issue244Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode 123StringCode
         */
        public function testWorks()
        {
        }
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode OtherString
         */
        public function testFails()
        {
        }
        /**
         * @expectedException Issue244Exception
         * @expectedExceptionCode 123
         */
        public function testFailsTooIfExpectationIsANumber()
        {
        }
        /**
         * @expectedException Issue244ExceptionIntCode
         * @expectedExceptionCode 123String
         */
        public function testFailsTooIfExceptionCodeIsANumber()
        {
        }
    }
    class Issue244Exception extends \Exception
    {
        public function __construct()
        {
        }
    }
    class Issue244ExceptionIntCode extends \Exception
    {
        public function __construct()
        {
        }
    }
    class Issue1337Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider dataProvider
         */
        public function testProvider($a)
        {
        }
        public function dataProvider()
        {
        }
    }
    class Issue2811Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
}
namespace Issue2725 {
    /**
     * @runClassInSeparateProcess
     */
    class BeforeAfterClassPidTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @beforeClass
         */
        public static function showPidBefore()
        {
        }
        public function testComparePids()
        {
        }
        public function testThatClassDidNotReload()
        {
        }
        /**
         * @afterClass
         */
        public static function showPidAfter()
        {
        }
    }
}
namespace {
    class Issue2731Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue1348Test extends \PHPUnit\Framework\TestCase
    {
        public function testSTDOUT()
        {
        }
        public function testSTDERR()
        {
        }
    }
    /**
     * @requires extension I_DO_NOT_EXIST
     */
    class Issue1374Test extends \PHPUnit\Framework\TestCase
    {
        protected function setUp()
        {
        }
        public function testSomething()
        {
        }
        protected function tearDown()
        {
        }
    }
    class Issue2158Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * Set constant in main process
         */
        public function testSomething()
        {
        }
        /**
         * Constant defined previously in main process constant should be available and
         * no errors should be yielded by reload of included files
         *
         * @runInSeparateProcess
         */
        public function testSomethingElse()
        {
        }
    }
    class Issue765Test extends \PHPUnit\Framework\TestCase
    {
        public function testDependee()
        {
        }
        /**
         * @depends testDependee
         * @dataProvider dependentProvider
         */
        public function testDependent($a)
        {
        }
        public function dependentProvider()
        {
        }
    }
    class Issue1149Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        /**
         * @runInSeparateProcess
         */
        public function testTwo()
        {
        }
    }
    class Issue2382Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider dataProvider
         */
        public function testOne($test)
        {
        }
        public function dataProvider()
        {
        }
    }
    class Issue523Test extends \PHPUnit\Framework\TestCase
    {
        public function testAttributeEquals()
        {
        }
    }
    class Issue523 extends \ArrayIterator
    {
        protected $field = 'foo';
    }
    class Issue578Test extends \PHPUnit\Framework\TestCase
    {
        public function testNoticesDoublePrintStackTrace()
        {
        }
        public function testWarningsDoublePrintStackTrace()
        {
        }
        public function testUnexpectedExceptionsPrintsCorrectly()
        {
        }
    }
    /**
     * @group bar
     */
    class TwoTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething()
        {
        }
    }
    class ChildSuite
    {
        public static function suite()
        {
        }
    }
    class ParentSuite
    {
        public static function suite()
        {
        }
    }
    /**
     * @group foo
     */
    class OneTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething()
        {
        }
    }
    class Foo_Bar_Issue684Test extends \PHPUnit\Framework\TestCase
    {
    }
    class Issue1021Test extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         */
        public function testSomething($data)
        {
        }
        /**
         * @depends testSomething
         */
        public function testSomethingElse()
        {
        }
        public function provider()
        {
        }
    }
}
namespace PHPUnit\Runner\Filter {
    class NameFilterIteratorTest extends \PHPUnit\Framework\TestCase
    {
        public function testCaseSensitiveMatch()
        {
        }
        public function testCaseInsensitiveMatch()
        {
        }
        private function createFilter(string $filter) : \PHPUnit\Runner\Filter\NameFilterIterator
        {
        }
    }
}
namespace PHPUnit\Runner {
    class PhptTestCaseTest extends \PHPUnit\Framework\TestCase
    {
        const EXPECT_CONTENT = <<<EOF
--TEST--
EXPECT test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECT--
Hello PHPUnit!
EOF;
        const EXPECTF_CONTENT = <<<EOF
--TEST--
EXPECTF test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECTF--
Hello %s!
EOF;
        const EXPECTREGEX_CONTENT = <<<EOF
--TEST--
EXPECTREGEX test
--FILE--
<?php echo "Hello PHPUnit!"; ?>
--EXPECTREGEX--
Hello [HPU]{4}[nit]{3}!
EOF;
        const FILE_SECTION = <<<EOF
<?php echo "Hello PHPUnit!"; ?>

EOF;
        /**
         * @var string
         */
        private $dirname;
        /**
         * @var string
         */
        private $filename;
        /**
         * @var PhptTestCase
         */
        private $testCase;
        /**
         * @var AbstractPhpProcess|\PHPUnit\Framework\MockObject\MockObject
         */
        private $phpProcess;
        protected function setUp()
        {
        }
        protected function tearDown()
        {
        }
        /**
         * Defines the content of the current PHPT test.
         *
         * @param string $content
         */
        private function setPhpContent($content)
        {
        }
        /**
         * Ensures the correct line ending is used for comparison
         *
         * @param string $content
         *
         * @return string
         */
        private function ensureCorrectEndOfLine($content)
        {
        }
        public function testShouldRunFileSectionAsTest()
        {
        }
        public function testRenderFileSection()
        {
        }
        public function testRenderSkipifSection()
        {
        }
        public function testShouldRunSkipifSectionWhenExists()
        {
        }
        public function testShouldNotRunTestSectionIfSkipifSectionReturnsOutputWithSkipWord()
        {
        }
        public function testShouldRunCleanSectionWhenDefined()
        {
        }
        public function testShouldThrowsAnExceptionWhenPhptFileIsEmpty()
        {
        }
        public function testShouldThrowsAnExceptionWhenFileSectionIsMissing()
        {
        }
        public function testShouldThrowsAnExceptionWhenThereIsNoExpecOrExpectifOrExpecregexSectionInPhptFile()
        {
        }
        public function testShouldValidateExpectSession()
        {
        }
        public function testShouldValidateExpectfSession()
        {
        }
        public function testShouldValidateExpectregexSession()
        {
        }
    }
}
namespace PHPUnit\Util {
    class ConfigurationGeneratorTest extends \PHPUnit\Framework\TestCase
    {
        public function testGeneratesConfigurationCorrectly()
        {
        }
    }
    class XmlTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider charProvider
         */
        public function testPrepareString($char)
        {
        }
        public function charProvider()
        {
        }
        public function testLoadEmptyString()
        {
        }
        public function testLoadArray()
        {
        }
        public function testLoadBoolean()
        {
        }
        public function testNestedXmlToVariable()
        {
        }
        public function testXmlToVariableCanHandleMultipleOfTheSameArgumentType()
        {
        }
        public function testXmlToVariableCanConstructObjectsWithConstructorArgumentsRecursively()
        {
        }
    }
    class GlobalStateTest extends \PHPUnit\Framework\TestCase
    {
        public function testIncludedFilesAsStringSkipsVfsProtocols()
        {
        }
    }
    class GetoptTest extends \PHPUnit\Framework\TestCase
    {
        public function testItIncludeTheLongOptionsAfterTheArgument()
        {
        }
        public function testItIncludeTheShortOptionsAfterTheArgument()
        {
        }
        public function testShortOptionUnrecognizedException()
        {
        }
        public function testShortOptionRequiresAnArgumentException()
        {
        }
        public function testShortOptionHandleAnOptionalValue()
        {
        }
        public function testLongOptionIsAmbiguousException()
        {
        }
        public function testLongOptionUnrecognizedException()
        {
        }
        public function testLongOptionRequiresAnArgumentException()
        {
        }
        public function testLongOptionDoesNotAllowAnArgumentException()
        {
        }
        public function testItHandlesLongParametesWithValues()
        {
        }
        public function testItHandlesShortParametesWithValues()
        {
        }
    }
}
namespace PHPUnit\Util\PHP {
    class AbstractPhpProcessTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var AbstractPhpProcess|\PHPUnit\Framework\MockObject\MockObject
         */
        private $phpProcess;
        protected function setUp()
        {
        }
        public function testShouldNotUseStderrRedirectionByDefault()
        {
        }
        public function testShouldDefinedIfUseStderrRedirection()
        {
        }
        public function testShouldDefinedIfDoNotUseStderrRedirection()
        {
        }
        public function testShouldThrowsExceptionWhenStderrRedirectionVariableIsNotABoolean()
        {
        }
        public function testShouldUseGivenSettingsToCreateCommand()
        {
        }
        public function testShouldRedirectStderrToStdoutWhenDefined()
        {
        }
        public function testShouldUseArgsToCreateCommand()
        {
        }
        public function testShouldHaveFileToCreateCommand()
        {
        }
        public function testStdinGetterAndSetter()
        {
        }
        public function testArgsGetterAndSetter()
        {
        }
        public function testEnvGetterAndSetter()
        {
        }
        public function testTimeoutGetterAndSetter()
        {
        }
    }
}
namespace PHPUnit\Util {
    class JsonTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider canonicalizeProvider
         */
        public function testCanonicalize($actual, $expected, $expectError)
        {
        }
        /**
         * @return array
         */
        public function canonicalizeProvider()
        {
        }
        /**
         * @dataProvider prettifyProvider
         */
        public function testPrettify($actual, $expected)
        {
        }
        /**
         * @return array
         */
        public function prettifyProvider()
        {
        }
        /**
         * @dataProvider prettifyExceptionProvider
         * @expectedException \PHPUnit\Framework\Exception
         * @expectedExceptionMessage Cannot prettify invalid json
         */
        public function testPrettifyException($json)
        {
        }
        /**
         * @return array
         */
        public function prettifyExceptionProvider()
        {
        }
    }
    class TestTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @todo Split up in separate tests
         */
        public function testGetExpectedException()
        {
        }
        public function testGetExpectedRegExp()
        {
        }
        /**
         * @dataProvider requirementsProvider
         */
        public function testGetRequirements($test, $result)
        {
        }
        public function requirementsProvider()
        {
        }
        /**
         * @dataProvider requirementsWithVersionConstraintsProvider
         */
        public function testGetRequirementsWithVersionConstraints($test, array $result)
        {
        }
        public function requirementsWithVersionConstraintsProvider()
        {
        }
        /**
         * @dataProvider requirementsWithInvalidVersionConstraintsThrowsExceptionProvider
         */
        public function testGetRequirementsWithInvalidVersionConstraintsThrowsException($test)
        {
        }
        public function requirementsWithInvalidVersionConstraintsThrowsExceptionProvider()
        {
        }
        public function testGetRequirementsMergesClassAndMethodDocBlocks()
        {
        }
        /**
         * @dataProvider missingRequirementsProvider
         */
        public function testGetMissingRequirements($test, $result)
        {
        }
        public function missingRequirementsProvider()
        {
        }
        /**
         * @todo   This test does not really test functionality of \PHPUnit\Util\Test
         */
        public function testGetProvidedDataRegEx()
        {
        }
        /**
         * Check if all data providers are being merged.
         */
        public function testMultipleDataProviders()
        {
        }
        public function testMultipleYieldIteratorDataProviders()
        {
        }
        public function testWithVariousIterableDataProviders()
        {
        }
        public function testTestWithEmptyAnnotation()
        {
        }
        public function testTestWithSimpleCase()
        {
        }
        public function testTestWithMultiLineMultiParameterCase()
        {
        }
        public function testTestWithVariousTypes()
        {
        }
        public function testTestWithAnnotationAfter()
        {
        }
        public function testTestWithSimpleTextAfter()
        {
        }
        public function testTestWithCharacterEscape()
        {
        }
        public function testTestWithThrowsProperExceptionIfDatasetCannotBeParsed()
        {
        }
        public function testTestWithThrowsProperExceptionIfMultiLineDatasetCannotBeParsed()
        {
        }
        /**
         * @todo Not sure what this test tests (name is misleading at least)
         */
        public function testParseAnnotation()
        {
        }
        /**
         * @depends Foo
         * @depends ほげ
         *
         * @todo Remove fixture from test class
         */
        public function methodForTestParseAnnotation()
        {
        }
        public function testParseAnnotationThatIsOnlyOneLine()
        {
        }
        /** @depends Bar */
        public function methodForTestParseAnnotationThatIsOnlyOneLine()
        {
        }
        /**
         * @dataProvider getLinesToBeCoveredProvider
         */
        public function testGetLinesToBeCovered($test, $lines)
        {
        }
        public function testGetLinesToBeCovered2()
        {
        }
        public function testGetLinesToBeCovered3()
        {
        }
        public function testGetLinesToBeCovered4()
        {
        }
        public function testGetLinesToBeCoveredSkipsNonExistentMethods()
        {
        }
        public function testTwoCoversDefaultClassAnnotationsAreNotAllowed()
        {
        }
        public function testFunctionParenthesesAreAllowed()
        {
        }
        public function testFunctionParenthesesAreAllowedWithWhitespace()
        {
        }
        public function testMethodParenthesesAreAllowed()
        {
        }
        public function testMethodParenthesesAreAllowedWithWhitespace()
        {
        }
        public function testNamespacedFunctionCanBeCoveredOrUsed()
        {
        }
        public function getLinesToBeCoveredProvider()
        {
        }
        public function testParseTestMethodAnnotationsIncorporatesTraits()
        {
        }
    }
}
namespace PHPUnit\Util\TestDox {
    class NamePrettifierTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var NamePrettifier
         */
        private $namePrettifier;
        protected function setUp()
        {
        }
        public function testTitleHasSensibleDefaults()
        {
        }
        public function testCaterForUserDefinedSuffix()
        {
        }
        public function testCaterForUserDefinedPrefix()
        {
        }
        public function testTestNameIsConvertedToASentence()
        {
        }
        /**
         * @ticket 224
         */
        public function testTestNameIsNotGroupedWhenNotInSequence()
        {
        }
        public function testReturnsEmptyStringForInvalidMethodName()
        {
        }
    }
}
namespace PHPUnit\Util {
    class ConfigurationTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var Configuration
         */
        protected $configuration;
        protected function setUp()
        {
        }
        public function testExceptionIsThrownForNotExistingConfigurationFile()
        {
        }
        public function testShouldReadColorsWhenTrueInConfigurationFile()
        {
        }
        public function testShouldReadColorsWhenFalseInConfigurationFile()
        {
        }
        public function testShouldReadColorsWhenEmptyInConfigurationFile()
        {
        }
        public function testShouldReadColorsWhenInvalidInConfigurationFile()
        {
        }
        public function testFilterConfigurationIsReadCorrectly()
        {
        }
        public function testGroupConfigurationIsReadCorrectly()
        {
        }
        public function testTestdoxGroupConfigurationIsReadCorrectly()
        {
        }
        public function testListenerConfigurationIsReadCorrectly()
        {
        }
        public function testLoggingConfigurationIsReadCorrectly()
        {
        }
        public function testPHPConfigurationIsReadCorrectly()
        {
        }
        /**
         * @backupGlobals enabled
         */
        public function testPHPConfigurationIsHandledCorrectly()
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesNotOverwrittenExistingEnvArrayVariables()
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/2353
         */
        public function testHandlePHPConfigurationDoesForceOverwrittenExistingEnvArrayVariables()
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesNotOverriteVariablesFromPutEnv()
        {
        }
        /**
         * @backupGlobals enabled
         *
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesOverwriteVariablesFromPutEnvWhenForced()
        {
        }
        public function testPHPUnitConfigurationIsReadCorrectly()
        {
        }
        public function testXincludeInConfiguration()
        {
        }
        /**
         * @ticket 1311
         */
        public function testWithEmptyConfigurations()
        {
        }
        /**
         * Asserts that the values in $actualConfiguration equal $expectedConfiguration.
         *
         * @param Configuration $expectedConfiguration
         * @param Configuration $actualConfiguration
         */
        protected function assertConfigurationEquals(\PHPUnit\Util\Configuration $expectedConfiguration, \PHPUnit\Util\Configuration $actualConfiguration)
        {
        }
        public function testGetTestSuiteNamesReturnsTheNamesIfDefined()
        {
        }
        public function testTestSuiteConfigurationForASingleFileInASuite()
        {
        }
    }
    class RegularExpressionTest extends \PHPUnit\Framework\TestCase
    {
        public function validRegexpProvider()
        {
        }
        public function invalidRegexpProvider()
        {
        }
        /**
         * @dataProvider validRegexpProvider
         */
        public function testValidRegex($pattern, $subject, $return)
        {
        }
        /**
         * @dataProvider invalidRegexpProvider
         */
        public function testInvalidRegex($pattern, $subject)
        {
        }
    }
}
namespace PHPUnit\Framework {
    class BaseTestListenerTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestResult
         */
        private $result;
        public function testEndEventsAreCounted()
        {
        }
    }
    class AssertTest extends \PHPUnit\Framework\TestCase
    {
        public function testFail()
        {
        }
        public function testAssertSplObjectStorageContainsObject()
        {
        }
        public function testAssertArrayContainsObject()
        {
        }
        public function testAssertArrayContainsString()
        {
        }
        public function testAssertArrayContainsNonObject()
        {
        }
        public function testAssertContainsOnlyInstancesOf()
        {
        }
        public function testAssertContainsEmptyStringInString()
        {
        }
        public function testAssertArrayHasKeyThrowsExceptionForInvalidFirstArgument()
        {
        }
        public function testAssertArrayHasKeyThrowsExceptionForInvalidSecondArgument()
        {
        }
        public function testAssertArrayHasIntegerKey()
        {
        }
        public function testAssertArraySubset()
        {
        }
        public function testAssertArraySubsetWithDeepNestedArrays()
        {
        }
        public function testAssertArraySubsetWithNoStrictCheckAndObjects()
        {
        }
        public function testAssertArraySubsetWithStrictCheckAndObjects()
        {
        }
        /**
         * @dataProvider assertArraySubsetInvalidArgumentProvider
         */
        public function testAssertArraySubsetRaisesExceptionForInvalidArguments($partial, $subject)
        {
        }
        /**
         * @return array
         */
        public function assertArraySubsetInvalidArgumentProvider()
        {
        }
        public function testAssertArrayNotHasKeyThrowsExceptionForInvalidFirstArgument()
        {
        }
        public function testAssertArrayNotHasKeyThrowsExceptionForInvalidSecondArgument()
        {
        }
        public function testAssertArrayNotHasIntegerKey()
        {
        }
        public function testAssertArrayHasStringKey()
        {
        }
        public function testAssertArrayNotHasStringKey()
        {
        }
        public function testAssertArrayHasKeyAcceptsArrayObjectValue()
        {
        }
        public function testAssertArrayHasKeyProperlyFailsWithArrayObjectValue()
        {
        }
        public function testAssertArrayHasKeyAcceptsArrayAccessValue()
        {
        }
        public function testAssertArrayHasKeyProperlyFailsWithArrayAccessValue()
        {
        }
        public function testAssertArrayNotHasKeyAcceptsArrayAccessValue()
        {
        }
        public function testAssertArrayNotHasKeyPropertlyFailsWithArrayAccessValue()
        {
        }
        public function testAssertContainsThrowsException()
        {
        }
        public function testAssertIteratorContainsObject()
        {
        }
        public function testAssertIteratorContainsString()
        {
        }
        public function testAssertStringContainsString()
        {
        }
        public function testAssertStringContainsStringForUtf8()
        {
        }
        public function testAssertStringContainsStringForUtf8WhenIgnoreCase()
        {
        }
        public function testAssertNotContainsThrowsException()
        {
        }
        public function testAssertSplObjectStorageNotContainsObject()
        {
        }
        public function testAssertArrayNotContainsObject()
        {
        }
        public function testAssertArrayNotContainsString()
        {
        }
        public function testAssertArrayNotContainsNonObject()
        {
        }
        public function testAssertStringNotContainsString()
        {
        }
        public function testAssertStringNotContainsStringForUtf8()
        {
        }
        public function testAssertStringNotContainsStringForUtf8WhenIgnoreCase()
        {
        }
        public function testAssertContainsOnlyThrowsException()
        {
        }
        public function testAssertNotContainsOnlyThrowsException()
        {
        }
        public function testAssertContainsOnlyInstancesOfThrowsException()
        {
        }
        public function testAssertArrayContainsOnlyIntegers()
        {
        }
        public function testAssertArrayNotContainsOnlyIntegers()
        {
        }
        public function testAssertArrayContainsOnlyStdClass()
        {
        }
        public function testAssertArrayNotContainsOnlyStdClass()
        {
        }
        protected function sameValues()
        {
        }
        protected function notEqualValues()
        {
        }
        protected function equalValues()
        {
        }
        public function equalProvider()
        {
        }
        public function notEqualProvider()
        {
        }
        public function sameProvider()
        {
        }
        public function notSameProvider()
        {
        }
        /**
         * @dataProvider equalProvider
         */
        public function testAssertEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @dataProvider notEqualProvider
         */
        public function testAssertEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @dataProvider notEqualProvider
         */
        public function testAssertNotEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @dataProvider equalProvider
         */
        public function testAssertNotEqualsFails($a, $b, $delta = 0.0, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * @dataProvider sameProvider
         */
        public function testAssertSameSucceeds($a, $b)
        {
        }
        /**
         * @dataProvider notSameProvider
         */
        public function testAssertSameFails($a, $b)
        {
        }
        /**
         * @dataProvider notSameProvider
         */
        public function testAssertNotSameSucceeds($a, $b)
        {
        }
        /**
         * @dataProvider sameProvider
         */
        public function testAssertNotSameFails($a, $b)
        {
        }
        public function testAssertXmlFileEqualsXmlFile()
        {
        }
        public function testAssertXmlFileNotEqualsXmlFile()
        {
        }
        public function testAssertXmlStringEqualsXmlFile()
        {
        }
        public function testXmlStringNotEqualsXmlFile()
        {
        }
        public function testAssertXmlStringEqualsXmlString()
        {
        }
        /**
         * @ticket 1860
         */
        public function testAssertXmlStringEqualsXmlString2()
        {
        }
        /**
         * @ticket 1860
         */
        public function testAssertXmlStringEqualsXmlString3()
        {
        }
        public function testAssertXmlStringNotEqualsXmlString()
        {
        }
        public function testXMLStructureIsSame()
        {
        }
        public function testXMLStructureWrongNumberOfAttributes()
        {
        }
        public function testXMLStructureWrongNumberOfNodes()
        {
        }
        public function testXMLStructureIsSameButDataIsNot()
        {
        }
        public function testXMLStructureAttributesAreSameButValuesAreNot()
        {
        }
        public function testXMLStructureIgnoreTextNodes()
        {
        }
        public function testAssertStringEqualsNumeric()
        {
        }
        public function testAssertStringEqualsNumeric2()
        {
        }
        public function testAssertIsReadableThrowsException()
        {
        }
        public function testAssertIsReadable()
        {
        }
        public function testAssertNotIsReadableThrowsException()
        {
        }
        public function testAssertNotIsReadable()
        {
        }
        public function testAssertIsWritableThrowsException()
        {
        }
        public function testAssertIsWritable()
        {
        }
        public function testAssertNotIsWritableThrowsException()
        {
        }
        public function testAssertNotIsWritable()
        {
        }
        public function testAssertDirectoryExistsThrowsException()
        {
        }
        public function testAssertDirectoryExists()
        {
        }
        public function testAssertDirectoryNotExistsThrowsException()
        {
        }
        public function testAssertDirectoryNotExists()
        {
        }
        public function testAssertDirectoryIsReadableThrowsException()
        {
        }
        public function testAssertDirectoryIsReadable()
        {
        }
        public function testAssertDirectoryNotIsReadableThrowsException()
        {
        }
        public function testAssertDirectoryIsWritableThrowsException()
        {
        }
        public function testAssertDirectoryIsWritable()
        {
        }
        public function testAssertDirectoryNotIsWritableThrowsException()
        {
        }
        public function testAssertFileExistsThrowsException()
        {
        }
        public function testAssertFileExists()
        {
        }
        public function testAssertFileNotExistsThrowsException()
        {
        }
        public function testAssertFileNotExists()
        {
        }
        public function testAssertFileIsReadableThrowsException()
        {
        }
        public function testAssertFileIsReadable()
        {
        }
        public function testAssertFileNotIsReadableThrowsException()
        {
        }
        public function testAssertFileIsWritableThrowsException()
        {
        }
        public function testAssertFileIsWritable()
        {
        }
        public function testAssertFileNotIsWritableThrowsException()
        {
        }
        public function testAssertObjectHasAttribute()
        {
        }
        public function testAssertObjectNotHasAttribute()
        {
        }
        public function testAssertFinite()
        {
        }
        public function testAssertInfinite()
        {
        }
        public function testAssertNan()
        {
        }
        public function testAssertNull()
        {
        }
        public function testAssertNotNull()
        {
        }
        public function testAssertTrue()
        {
        }
        public function testAssertNotTrue()
        {
        }
        public function testAssertFalse()
        {
        }
        public function testAssertNotFalse()
        {
        }
        public function testAssertRegExpThrowsException()
        {
        }
        public function testAssertRegExpThrowsException2()
        {
        }
        public function testAssertNotRegExpThrowsException()
        {
        }
        public function testAssertNotRegExpThrowsException2()
        {
        }
        public function testAssertRegExp()
        {
        }
        public function testAssertNotRegExp()
        {
        }
        public function testAssertSame()
        {
        }
        public function testAssertSame2()
        {
        }
        public function testAssertNotSame()
        {
        }
        public function testAssertNotSame2()
        {
        }
        public function testAssertNotSameFailsNull()
        {
        }
        public function testGreaterThan()
        {
        }
        public function testAttributeGreaterThan()
        {
        }
        public function testGreaterThanOrEqual()
        {
        }
        public function testAttributeGreaterThanOrEqual()
        {
        }
        public function testLessThan()
        {
        }
        public function testAttributeLessThan()
        {
        }
        public function testLessThanOrEqual()
        {
        }
        public function testAttributeLessThanOrEqual()
        {
        }
        public function testReadAttribute()
        {
        }
        public function testReadAttribute2()
        {
        }
        public function testReadAttribute3()
        {
        }
        public function testReadAttribute4()
        {
        }
        public function testReadAttribute5()
        {
        }
        public function testReadAttributeIfAttributeNameIsNotValid()
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument()
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument2()
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument()
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument2()
        {
        }
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument3()
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidFirstArgument()
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument()
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument2()
        {
        }
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument3()
        {
        }
        public function testGetObjectAttributeWorksForInheritedAttributes()
        {
        }
        public function testAssertPublicAttributeContains()
        {
        }
        public function testAssertPublicAttributeContainsOnly()
        {
        }
        public function testAssertPublicAttributeNotContains()
        {
        }
        public function testAssertPublicAttributeNotContainsOnly()
        {
        }
        public function testAssertProtectedAttributeContains()
        {
        }
        public function testAssertProtectedAttributeNotContains()
        {
        }
        public function testAssertPrivateAttributeContains()
        {
        }
        public function testAssertPrivateAttributeNotContains()
        {
        }
        public function testAssertAttributeContainsNonObject()
        {
        }
        public function testAssertAttributeNotContainsNonObject()
        {
        }
        public function testAssertPublicAttributeEquals()
        {
        }
        public function testAssertPublicAttributeNotEquals()
        {
        }
        public function testAssertPublicAttributeSame()
        {
        }
        public function testAssertPublicAttributeNotSame()
        {
        }
        public function testAssertProtectedAttributeEquals()
        {
        }
        public function testAssertProtectedAttributeNotEquals()
        {
        }
        public function testAssertPrivateAttributeEquals()
        {
        }
        public function testAssertPrivateAttributeNotEquals()
        {
        }
        public function testAssertPublicStaticAttributeEquals()
        {
        }
        public function testAssertPublicStaticAttributeNotEquals()
        {
        }
        public function testAssertProtectedStaticAttributeEquals()
        {
        }
        public function testAssertProtectedStaticAttributeNotEquals()
        {
        }
        public function testAssertPrivateStaticAttributeEquals()
        {
        }
        public function testAssertPrivateStaticAttributeNotEquals()
        {
        }
        public function testAssertClassHasAttributeThrowsException()
        {
        }
        public function testAssertClassHasAttributeThrowsException2()
        {
        }
        public function testAssertClassHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testAssertClassNotHasAttributeThrowsException()
        {
        }
        public function testAssertClassNotHasAttributeThrowsException2()
        {
        }
        public function testAssertClassNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testAssertClassHasStaticAttributeThrowsException()
        {
        }
        public function testAssertClassHasStaticAttributeThrowsException2()
        {
        }
        public function testAssertClassHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testAssertClassNotHasStaticAttributeThrowsException()
        {
        }
        public function testAssertClassNotHasStaticAttributeThrowsException2()
        {
        }
        public function testAssertClassNotHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testAssertObjectHasAttributeThrowsException()
        {
        }
        public function testAssertObjectHasAttributeThrowsException2()
        {
        }
        public function testAssertObjectHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testAssertObjectNotHasAttributeThrowsException()
        {
        }
        public function testAssertObjectNotHasAttributeThrowsException2()
        {
        }
        public function testAssertObjectNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        public function testClassHasPublicAttribute()
        {
        }
        public function testClassNotHasPublicAttribute()
        {
        }
        public function testClassHasPublicStaticAttribute()
        {
        }
        public function testClassNotHasPublicStaticAttribute()
        {
        }
        public function testObjectHasPublicAttribute()
        {
        }
        public function testObjectNotHasPublicAttribute()
        {
        }
        public function testObjectHasOnTheFlyAttribute()
        {
        }
        public function testObjectNotHasOnTheFlyAttribute()
        {
        }
        public function testObjectHasProtectedAttribute()
        {
        }
        public function testObjectNotHasProtectedAttribute()
        {
        }
        public function testObjectHasPrivateAttribute()
        {
        }
        public function testObjectNotHasPrivateAttribute()
        {
        }
        public function testAssertThatAttributeEquals()
        {
        }
        public function testAssertThatAttributeEquals2()
        {
        }
        public function testAssertThatAttributeEqualTo()
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnything()
        {
        }
        public function testAssertThatIsTrue()
        {
        }
        public function testAssertThatIsFalse()
        {
        }
        public function testAssertThatIsJson()
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingAndAnything()
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingOrAnything()
        {
        }
        /**
         * @doesNotPerformAssertions
         */
        public function testAssertThatAnythingXorNotAnything()
        {
        }
        public function testAssertThatContains()
        {
        }
        public function testAssertThatStringContains()
        {
        }
        public function testAssertThatContainsOnly()
        {
        }
        public function testAssertThatContainsOnlyInstancesOf()
        {
        }
        public function testAssertThatArrayHasKey()
        {
        }
        public function testAssertThatClassHasAttribute()
        {
        }
        public function testAssertThatClassHasStaticAttribute()
        {
        }
        public function testAssertThatObjectHasAttribute()
        {
        }
        public function testAssertThatEqualTo()
        {
        }
        public function testAssertThatIdenticalTo()
        {
        }
        public function testAssertThatIsInstanceOf()
        {
        }
        public function testAssertThatIsType()
        {
        }
        public function testAssertThatIsEmpty()
        {
        }
        public function testAssertThatFileExists()
        {
        }
        public function testAssertThatGreaterThan()
        {
        }
        public function testAssertThatGreaterThanOrEqual()
        {
        }
        public function testAssertThatLessThan()
        {
        }
        public function testAssertThatLessThanOrEqual()
        {
        }
        public function testAssertThatMatchesRegularExpression()
        {
        }
        public function testAssertThatCallback()
        {
        }
        public function testAssertThatCountOf()
        {
        }
        public function testAssertFileEquals()
        {
        }
        public function testAssertFileNotEquals()
        {
        }
        public function testAssertStringEqualsFile()
        {
        }
        public function testAssertStringNotEqualsFile()
        {
        }
        public function testAssertStringStartsWithThrowsException()
        {
        }
        public function testAssertStringStartsWithThrowsException2()
        {
        }
        public function testAssertStringStartsNotWithThrowsException()
        {
        }
        public function testAssertStringStartsNotWithThrowsException2()
        {
        }
        public function testAssertStringEndsWithThrowsException()
        {
        }
        public function testAssertStringEndsWithThrowsException2()
        {
        }
        public function testAssertStringEndsNotWithThrowsException()
        {
        }
        public function testAssertStringEndsNotWithThrowsException2()
        {
        }
        public function testAssertStringStartsWith()
        {
        }
        public function testAssertStringStartsNotWith()
        {
        }
        public function testAssertStringEndsWith()
        {
        }
        public function testAssertStringEndsNotWith()
        {
        }
        public function testAssertStringMatchesFormatRaisesExceptionForInvalidFirstArgument()
        {
        }
        public function testAssertStringMatchesFormatRaisesExceptionForInvalidSecondArgument()
        {
        }
        public function testAssertStringMatchesFormat()
        {
        }
        public function testAssertStringMatchesFormatFailure()
        {
        }
        public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidFirstArgument()
        {
        }
        public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidSecondArgument()
        {
        }
        public function testAssertStringNotMatchesFormat()
        {
        }
        public function testAssertEmpty()
        {
        }
        public function testAssertNotEmpty()
        {
        }
        public function testAssertAttributeEmpty()
        {
        }
        public function testAssertAttributeNotEmpty()
        {
        }
        public function testMarkTestIncomplete()
        {
        }
        public function testMarkTestSkipped()
        {
        }
        public function testAssertCount()
        {
        }
        public function testAssertCountTraversable()
        {
        }
        public function testAssertCountThrowsExceptionIfExpectedCountIsNoInteger()
        {
        }
        public function testAssertCountThrowsExceptionIfElementIsNotCountable()
        {
        }
        public function testAssertAttributeCount()
        {
        }
        public function testAssertNotCount()
        {
        }
        public function testAssertNotCountThrowsExceptionIfExpectedCountIsNoInteger()
        {
        }
        public function testAssertNotCountThrowsExceptionIfElementIsNotCountable()
        {
        }
        public function testAssertAttributeNotCount()
        {
        }
        public function testAssertSameSize()
        {
        }
        public function testAssertSameSizeThrowsExceptionIfExpectedIsNotCountable()
        {
        }
        public function testAssertSameSizeThrowsExceptionIfActualIsNotCountable()
        {
        }
        public function testAssertNotSameSize()
        {
        }
        public function testAssertNotSameSizeThrowsExceptionIfExpectedIsNotCountable()
        {
        }
        public function testAssertNotSameSizeThrowsExceptionIfActualIsNotCountable()
        {
        }
        public function testAssertJsonRaisesExceptionForInvalidArgument()
        {
        }
        public function testAssertJson()
        {
        }
        public function testAssertJsonStringEqualsJsonString()
        {
        }
        /**
         * @dataProvider validInvalidJsonDataprovider
         */
        public function testAssertJsonStringEqualsJsonStringErrorRaised($expected, $actual)
        {
        }
        public function testAssertJsonStringNotEqualsJsonString()
        {
        }
        /**
         * @dataProvider validInvalidJsonDataprovider
         */
        public function testAssertJsonStringNotEqualsJsonStringErrorRaised($expected, $actual)
        {
        }
        public function testAssertJsonStringEqualsJsonFile()
        {
        }
        public function testAssertJsonStringEqualsJsonFileExpectingExpectationFailedException()
        {
        }
        public function testAssertJsonStringEqualsJsonFileExpectingException()
        {
        }
        public function testAssertJsonStringNotEqualsJsonFile()
        {
        }
        public function testAssertJsonStringNotEqualsJsonFileExpectingException()
        {
        }
        public function testAssertJsonFileNotEqualsJsonFile()
        {
        }
        public function testAssertJsonFileEqualsJsonFile()
        {
        }
        public function testAssertInstanceOf()
        {
        }
        public function testAssertInstanceOfThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeInstanceOf()
        {
        }
        public function testAssertNotInstanceOf()
        {
        }
        public function testAssertNotInstanceOfThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeNotInstanceOf()
        {
        }
        public function testAssertInternalType()
        {
        }
        public function testAssertInternalTypeDouble()
        {
        }
        public function testAssertInternalTypeThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeInternalType()
        {
        }
        public function testAssertNotInternalType()
        {
        }
        public function testAssertNotInternalTypeThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeNotInternalType()
        {
        }
        public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument2()
        {
        }
        public function testAssertStringMatchesFormatFile()
        {
        }
        public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument2()
        {
        }
        public function testAssertStringNotMatchesFormatFile()
        {
        }
        /**
         * @return array<string, string[]>
         */
        public static function validInvalidJsonDataprovider()
        {
        }
    }
    class TestImplementorTest extends \PHPUnit\Framework\TestCase
    {
        public function testSuccessfulRun()
        {
        }
    }
    class ConstraintTest extends \PHPUnit\Framework\TestCase
    {
        public function testConstraintArrayNotHasKey()
        {
        }
        public function testConstraintArrayNotHasKey2()
        {
        }
        public function testConstraintFileNotExists()
        {
        }
        public function testConstraintFileNotExists2()
        {
        }
        public function testConstraintNotGreaterThan()
        {
        }
        public function testConstraintNotGreaterThan2()
        {
        }
        public function testConstraintGreaterThanOrEqual()
        {
        }
        public function testConstraintGreaterThanOrEqual2()
        {
        }
        public function testConstraintNotGreaterThanOrEqual()
        {
        }
        public function testConstraintNotGreaterThanOrEqual2()
        {
        }
        public function testConstraintIsAnything()
        {
        }
        public function testConstraintNotIsAnything()
        {
        }
        public function testConstraintIsNotEqual()
        {
        }
        public function testConstraintIsNotEqual2()
        {
        }
        public function testConstraintIsNotIdentical()
        {
        }
        public function testConstraintIsNotIdentical2()
        {
        }
        public function testConstraintIsNotIdentical3()
        {
        }
        public function testConstraintIsInstanceOf()
        {
        }
        public function testConstraintIsInstanceOf2()
        {
        }
        public function testConstraintIsNotInstanceOf()
        {
        }
        public function testConstraintIsNotInstanceOf2()
        {
        }
        public function testConstraintIsNotType()
        {
        }
        public function testConstraintIsNotType2()
        {
        }
        public function testConstraintIsNotNull()
        {
        }
        public function testConstraintIsNotNull2()
        {
        }
        public function testConstraintNotLessThan()
        {
        }
        public function testConstraintNotLessThan2()
        {
        }
        public function testConstraintLessThanOrEqual()
        {
        }
        public function testConstraintLessThanOrEqual2()
        {
        }
        public function testConstraintNotLessThanOrEqual()
        {
        }
        public function testConstraintNotLessThanOrEqual2()
        {
        }
        public function testConstraintClassNotHasAttribute()
        {
        }
        public function testConstraintClassNotHasAttribute2()
        {
        }
        public function testConstraintClassNotHasStaticAttribute()
        {
        }
        public function testConstraintClassNotHasStaticAttribute2()
        {
        }
        public function testConstraintObjectNotHasAttribute()
        {
        }
        public function testConstraintObjectNotHasAttribute2()
        {
        }
        public function testConstraintPCRENotMatch()
        {
        }
        public function testConstraintPCRENotMatch2()
        {
        }
        public function testConstraintStringStartsNotWith()
        {
        }
        public function testConstraintStringStartsNotWith2()
        {
        }
        public function testConstraintStringNotContains()
        {
        }
        public function testConstraintStringNotContainsWhenIgnoreCase()
        {
        }
        public function testConstraintStringNotContainsForUtf8StringWhenNotIgnoreCase()
        {
        }
        public function testConstraintStringNotContains2()
        {
        }
        public function testConstraintStringEndsNotWith()
        {
        }
        public function testConstraintStringEndsNotWith2()
        {
        }
        public function testConstraintArrayNotContains()
        {
        }
        public function testConstraintArrayNotContains2()
        {
        }
        public function testAttributeNotEqualTo()
        {
        }
        public function testAttributeNotEqualTo2()
        {
        }
        public function testConstraintCountWithAnArray()
        {
        }
        public function testConstraintCountWithAnIteratorWhichDoesNotImplementCountable()
        {
        }
        public function testConstraintCountWithAnObjectImplementingCountable()
        {
        }
        public function testConstraintCountFailing()
        {
        }
        public function testConstraintNotCountFailing()
        {
        }
        public function testConstraintNotSameSizeFailing()
        {
        }
        public function testConstraintException()
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    abstract class ConstraintTestCase extends \PHPUnit\Framework\TestCase
    {
        public final function testIsCountable()
        {
        }
        public final function testIsSelfDescribing()
        {
        }
        /**
         * Returns the class name of the constraint.
         *
         * @return string
         */
        protected final function className() : string
        {
        }
    }
    class ClassHasStaticAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintClassHasStaticAttribute()
        {
        }
        public function testConstraintClassHasStaticAttribute2()
        {
        }
    }
    class IsEqualTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsEqual()
        {
        }
        /**
         * @dataProvider isEqualProvider
         */
        public function testConstraintIsEqual2($expected, $actual, $message)
        {
        }
        public function isEqualProvider()
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
    class JsonMatchesTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        /**
         * @dataProvider evaluateDataprovider
         */
        public function testEvaluate($expected, $jsonOther, $jsonValue)
        {
        }
        /**
         * @dataProvider evaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatchDataprovider
         */
        public function testEvaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatch($jsonOther, $jsonValue)
        {
        }
        public function testToString()
        {
        }
        public static function evaluateDataprovider()
        {
        }
        public static function evaluateThrowsExpectationFailedExceptionWhenJsonIsValidButDoesNotMatchDataprovider()
        {
        }
    }
    class CountTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testCount()
        {
        }
        public function testCountDoesNotChangeIteratorKey()
        {
        }
        public function testCountGeneratorsDoNotRewind()
        {
        }
        public function testCountTraversable()
        {
        }
    }
    class IsEmptyTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsEmpty()
        {
        }
        public function testConstraintIsEmpty2()
        {
        }
    }
    class DirectoryExistsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testDefaults()
        {
        }
        public function testEvaluateReturnsFalseWhenDirectoryDoesNotExist()
        {
        }
        public function testEvaluateReturnsTrueWhenDirectoryExists()
        {
        }
        public function testEvaluateThrowsExpectationFailedExceptionWhenDirectoryDoesNotExist()
        {
        }
    }
    class LessThanTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintLessThan()
        {
        }
        public function testConstraintLessThan2()
        {
        }
    }
    class IsIdenticalTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsIdentical()
        {
        }
        public function testConstraintIsIdentical2()
        {
        }
        public function testConstraintIsIdentical3()
        {
        }
    }
    class CallbackTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function callbackReturningTrue()
        {
        }
        public static function staticCallbackReturningTrue()
        {
        }
        public function testConstraintCallback()
        {
        }
        public function testConstraintCallbackFailure()
        {
        }
    }
    class ArraySubsetTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        /**
         * @param bool               $expected
         * @param array|\Traversable $subset
         * @param array|\Traversable $other
         * @param bool               $strict
         * @dataProvider evaluateDataProvider
         */
        public function testEvaluate($expected, $subset, $other, $strict)
        {
        }
        public static function evaluateDataProvider()
        {
        }
        public function testEvaluateWithArrayAccess()
        {
        }
        public function testEvaluateFailMessage()
        {
        }
    }
    class ExceptionMessageRegExpTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @expectedException \Exception
         * @expectedExceptionMessageRegExp /^A polymorphic \w+ message/
         */
        public function testRegexMessage()
        {
        }
        /**
         * @expectedException \Exception
         * @expectedExceptionMessageRegExp /^a poly[a-z]+ [a-zA-Z0-9_]+ me(s){2}age$/i
         */
        public function testRegexMessageExtreme()
        {
        }
        /**
         * @runInSeparateProcess
         * @requires extension xdebug
         * @expectedException \Exception
         * @expectedExceptionMessageRegExp #Screaming preg_match#
         */
        public function testMessageXdebugScreamCompatibility()
        {
        }
        /**
         * @expectedException \Exception variadic
         * @expectedExceptionMessageRegExp /^A variadic \w+ message/
         */
        public function testSimultaneousLiteralAndRegExpExceptionMessage()
        {
        }
    }
    class TraversableContainsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintTraversableCheckForObjectIdentityForDefaultCase()
        {
        }
        public function testConstraintTraversableCheckForObjectIdentityForPrimitiveType()
        {
        }
        public function testConstraintTraversableWithRightValue()
        {
        }
        public function testConstraintTraversableWithFailValue()
        {
        }
        public function testConstraintTraversableCountMethods()
        {
        }
        public function testConstraintTraversableEvaluateMethodWithFailExample()
        {
        }
        public function testConstraintTraversableEvaluateMethodWithFailExampleWithCustomMessage()
        {
        }
        public function testConstraintTraversableToStringMethodsWithStdClass()
        {
        }
        public function testConstraintTraversableToStringMethods()
        {
        }
        public function testConstraintTraversableToStringMethodsWithSplObjectStorage()
        {
        }
        public function testConstraintTraversableStdClassForFailSplObjectStorage()
        {
        }
        public function testConstraintTraversableStdClassForFailSplObjectStorageWithCustomMessage()
        {
        }
    }
}
namespace Framework\Constraint {
    final class LogicalXorTest extends \PHPUnit\Framework\TestCase
    {
        public function testFromConstraintsReturnsConstraint()
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    class IsWritableTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsWritable()
        {
        }
    }
    final class LogicalAndTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testSetConstraintsRejectsInvalidConstraint()
        {
        }
        public function testCountReturnsCountOfComposedConstraints()
        {
        }
        public function testToStringReturnsImplodedStringRepresentationOfComposedConstraintsGluedWithAnd()
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsFalseIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsTrueIfAllOfTheComposedConstraintsEvaluateToTrue(array $constraints)
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionWithCustomMessageIfAnyOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsNothingIfAllOfTheComposedConstraintsEvaluateToTrue(array $constraints)
        {
        }
        public function providerFailingConstraints() : \Generator
        {
        }
        public function providerSucceedingConstraints() : \Generator
        {
        }
        private function stringify(array $constraints) : string
        {
        }
    }
    class ExceptionMessageTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @expectedException \Exception
         * @expectedExceptionMessage A literal exception message
         */
        public function testLiteralMessage()
        {
        }
        /**
         * @expectedException \Exception
         * @expectedExceptionMessage A partial
         */
        public function testPartialMessageBegin()
        {
        }
        /**
         * @expectedException \Exception
         * @expectedExceptionMessage partial exception
         */
        public function testPartialMessageMiddle()
        {
        }
        /**
         * @expectedException \Exception
         * @expectedExceptionMessage exception message
         */
        public function testPartialMessageEnd()
        {
        }
    }
    class StringMatchesFormatDescriptionTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringMatches()
        {
        }
        public function testConstraintStringMatches2()
        {
        }
        public function testConstraintStringMatches3()
        {
        }
        public function testConstraintStringMatches4()
        {
        }
        public function testConstraintStringMatches5()
        {
        }
        public function testConstraintStringMatches6()
        {
        }
    }
    class IsNullTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsNull()
        {
        }
        public function testConstraintIsNull2()
        {
        }
    }
    final class LogicalOrTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testSetConstraintsDecoratesNonConstraintWithIsEqual()
        {
        }
        public function testCountReturnsCountOfComposedConstraints()
        {
        }
        public function testToStringReturnsImplodedStringRepresentationOfComposedConstraintsGluedWithOr()
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsFalseIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsTrueIfAnyOfTheComposedConstraintsEvaluateToTrue(array $constraints)
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerFailingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateThrowsExceptionWithCustomMessageIfAllOfTheComposedConstraintsEvaluateToFalse(array $constraints)
        {
        }
        /**
         * @dataProvider providerSucceedingConstraints
         *
         * @param Constraint[] $constraints
         */
        public function testEvaluateReturnsNothingIfAnyOfTheComposedConstraintsEvaluateToTrue(array $constraints)
        {
        }
        public function providerFailingConstraints() : \Generator
        {
        }
        public function providerSucceedingConstraints() : \Generator
        {
        }
        private function stringify(array $constraints) : string
        {
        }
    }
    class JsonMatchesErrorMessageProviderTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider translateTypeToPrefixDataprovider
         */
        public function testTranslateTypeToPrefix($expected, $type)
        {
        }
        /**
         * @dataProvider determineJsonErrorDataprovider
         */
        public function testDetermineJsonError($expected, $error, $prefix)
        {
        }
        public static function determineJsonErrorDataprovider()
        {
        }
        public static function translateTypeToPrefixDataprovider()
        {
        }
    }
    class ObjectHasAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintObjectHasAttribute()
        {
        }
        public function testConstraintObjectHasAttribute2()
        {
        }
    }
    class IsTypeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsType()
        {
        }
        public function testConstraintIsType2()
        {
        }
        /**
         * @dataProvider resources
         */
        public function testConstraintIsResourceTypeEvaluatesCorrectlyWithResources($resource)
        {
        }
        public function resources()
        {
        }
        /**
         * Removes spaces in front of newlines
         *
         * @param string $string
         *
         * @return string
         */
        private function trimnl($string)
        {
        }
    }
    class StringEndsWithTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringEndsWithCorrectValueAndReturnResult()
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueAndReturnResult()
        {
        }
        public function testConstraintStringEndsWithToStringMethod()
        {
        }
        public function testConstraintStringEndsWithCountMethod()
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueAndExpectation()
        {
        }
        public function testConstraintStringEndsWithNotCorrectValueExceptionAndCustomMessage()
        {
        }
    }
    class GreaterThanTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintGreaterThan()
        {
        }
        public function testConstraintGreaterThan2()
        {
        }
    }
    class SameSizeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintSameSizeWithAnArray()
        {
        }
        public function testConstraintSameSizeWithAnIteratorWhichDoesNotImplementCountable()
        {
        }
        public function testConstraintSameSizeWithAnObjectImplementingCountable()
        {
        }
        public function testConstraintSameSizeFailing()
        {
        }
    }
    class ArrayHasKeyTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintArrayHasKey()
        {
        }
        public function testConstraintArrayHasKey2()
        {
        }
    }
    class FileExistsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintFileExists()
        {
        }
        public function testConstraintFileExists2()
        {
        }
    }
    class IsReadableTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintIsReadable()
        {
        }
    }
    class AttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testAttributeEqualTo()
        {
        }
        public function testAttributeEqualTo2()
        {
        }
    }
    class ClassHasAttributeTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintClassHasAttribute()
        {
        }
        public function testConstraintClassHasAttribute2()
        {
        }
    }
    class RegularExpressionTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintRegularExpression()
        {
        }
        public function testConstraintRegularExpression2()
        {
        }
    }
    class StringContainsTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringContains()
        {
        }
        public function testConstraintStringContainsWhenIgnoreCase()
        {
        }
        public function testConstraintStringContainsForUtf8StringWhenNotIgnoreCase()
        {
        }
        public function testConstraintStringContains2()
        {
        }
    }
    class StringStartsWithTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        public function testConstraintStringStartsWithCorrectValueAndReturnResult()
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueAndReturnResult()
        {
        }
        public function testConstraintStringStartsWithToStringMethod()
        {
        }
        public function testConstraintStringStartsWitCountMethod()
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueAndExpectation()
        {
        }
        public function testConstraintStringStartsWithNotCorrectValueExceptionAndCustomMessage()
        {
        }
    }
    class IsJsonTest extends \PHPUnit\Framework\Constraint\ConstraintTestCase
    {
        /**
         * @dataProvider evaluateDataprovider
         */
        public function testEvaluate($expected, $jsonOther)
        {
        }
        public static function evaluateDataprovider()
        {
        }
    }
}
namespace PHPUnit\Framework {
    /**
     * A Listener for test progress.
     */
    interface TestListener
    {
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time);
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time);
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time);
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time);
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time);
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time);
        /**
         * A test suite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite);
        /**
         * A test suite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite);
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test);
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time);
    }
    class TestListenerTest extends \PHPUnit\Framework\TestCase implements \PHPUnit\Framework\TestListener
    {
        protected $endCount;
        protected $errorCount;
        protected $failureCount;
        protected $warningCount;
        protected $notImplementedCount;
        protected $riskyCount;
        protected $skippedCount;
        protected $result;
        protected $startCount;
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        protected function setUp()
        {
        }
        public function testError()
        {
        }
        public function testFailure()
        {
        }
        public function testStartStop()
        {
        }
    }
    class TestFailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testToString()
        {
        }
        public function testToStringForError()
        {
        }
        public function testgetExceptionAsString()
        {
        }
    }
    class SuiteTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var TestResult
         */
        private $result;
        protected function setUp()
        {
        }
        public static function suite()
        {
        }
        public function testAddTestSuite()
        {
        }
        public function testInheritedTests()
        {
        }
        public function testNoTestCases()
        {
        }
        public function testNoTestCaseClass()
        {
        }
        public function testNotExistingTestCase()
        {
        }
        public function testNotPublicTestCase()
        {
        }
        public function testNotVoidTestCase()
        {
        }
        public function testOneTestCase()
        {
        }
        public function testShadowedTests()
        {
        }
        public function testBeforeClassAndAfterClassAnnotations()
        {
        }
        public function testBeforeClassWithDataProviders()
        {
        }
        public function testBeforeAnnotation()
        {
        }
        public function testTestWithAnnotation()
        {
        }
        public function testSkippedTestDataProvider()
        {
        }
        public function testTestDataProviderDependency()
        {
        }
        public function testIncompleteTestDataProvider()
        {
        }
        public function testRequirementsBeforeClassHook()
        {
        }
        public function testDoNotSkipInheritedClass()
        {
        }
    }
    class TestCaseTest extends \PHPUnit\Framework\TestCase
    {
        protected $backupGlobalsBlacklist = ['i', 'singleton'];
        protected static $testStatic = 0;
        public static function setUpBeforeClass()
        {
        }
        public static function tearDownAfterClass()
        {
        }
        public function testCaseToString()
        {
        }
        public function testSuccess()
        {
        }
        public function testFailure()
        {
        }
        public function testError()
        {
        }
        public function testSkipped()
        {
        }
        public function testIncomplete()
        {
        }
        public function testExceptionInSetUp()
        {
        }
        public function testExceptionInAssertPreConditions()
        {
        }
        public function testExceptionInTest()
        {
        }
        public function testExceptionInAssertPostConditions()
        {
        }
        public function testExceptionInTearDown()
        {
        }
        public function testNoArgTestCasePasses()
        {
        }
        public function testWasRun()
        {
        }
        public function testException()
        {
        }
        public function testExceptionWithEmptyMessage()
        {
        }
        public function testExceptionWithNullMessage()
        {
        }
        public function testExceptionWithMessage()
        {
        }
        public function testExceptionWithWrongMessage()
        {
        }
        public function testExceptionWithRegexpMessage()
        {
        }
        public function testExceptionWithWrongRegexpMessage()
        {
        }
        public function testExceptionWithInvalidRegexpMessage()
        {
        }
        public function testNoException()
        {
        }
        public function testWrongException()
        {
        }
        /**
         * @backupGlobals enabled
         */
        public function testGlobalsBackupPre()
        {
        }
        public function testGlobalsBackupPost()
        {
        }
        /**
         * @backupGlobals enabled
         * @backupStaticAttributes enabled
         *
         * @doesNotPerformAssertions
         */
        public function testStaticAttributesBackupPre()
        {
        }
        /**
         * @depends testStaticAttributesBackupPre
         */
        public function testStaticAttributesBackupPost()
        {
        }
        public function testIsInIsolationReturnsFalse()
        {
        }
        public function testIsInIsolationReturnsTrue()
        {
        }
        public function testExpectOutputStringFooActualFoo()
        {
        }
        public function testExpectOutputStringFooActualBar()
        {
        }
        public function testExpectOutputRegexFooActualFoo()
        {
        }
        public function testExpectOutputRegexFooActualBar()
        {
        }
        public function testSkipsIfRequiresHigherVersionOfPHPUnit()
        {
        }
        public function testSkipsIfRequiresHigherVersionOfPHP()
        {
        }
        public function testSkipsIfRequiresNonExistingOs()
        {
        }
        public function testSkipsIfRequiresNonExistingOsFamily()
        {
        }
        public function testSkipsIfRequiresNonExistingFunction()
        {
        }
        public function testSkipsIfRequiresNonExistingExtension()
        {
        }
        public function testSkipsIfRequiresExtensionWithAMinimumVersion()
        {
        }
        public function testSkipsProvidesMessagesForAllSkippingReasons()
        {
        }
        public function testRequiringAnExistingMethodDoesNotSkip()
        {
        }
        public function testRequiringAnExistingFunctionDoesNotSkip()
        {
        }
        public function testRequiringAnExistingExtensionDoesNotSkip()
        {
        }
        public function testRequiringAnExistingOsDoesNotSkip()
        {
        }
        public function testCurrentWorkingDirectoryIsRestored()
        {
        }
        /**
         * @requires PHP 7
         * @expectedException \TypeError
         */
        public function testTypeErrorCanBeExpected()
        {
        }
        public function testCreateMockFromClassName()
        {
        }
        public function testCreateMockMocksAllMethods()
        {
        }
        public function testCreatePartialMockDoesNotMockAllMethods()
        {
        }
        public function testCreatePartialMockCanMockNoMethods()
        {
        }
        public function testCreateMockSkipsConstructor()
        {
        }
        public function testCreateMockDisablesOriginalClone()
        {
        }
        public function testConfiguredMockCanBeCreated()
        {
        }
        public function testProvidingOfAutoreferencedArray()
        {
        }
        /**
         * @return array<string, array>
         */
        private function getAutoreferencedArray()
        {
        }
        public function testProvidingArrayThatMixesObjectsAndScalars()
        {
        }
    }
}
namespace PHPUnit\TextUI {
    class TestRunnerTest extends \PHPUnit\Framework\TestCase
    {
        public function testTestIsRunnable()
        {
        }
        public function testSuiteIsRunnable()
        {
        }
        /**
         * @return \PHPUnit\TextUI\ResultPrinter
         */
        private function getResultPrinterMock()
        {
        }
        /**
         * @return \PHPUnit\Framework\TestSuite
         */
        private function getSuiteMock()
        {
        }
    }
}
namespace {
    class NotExistingCoveredElementTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers NotExistingClass
         */
        public function testOne()
        {
        }
        /**
         * @covers NotExistingClass::notExistingMethod
         */
        public function testTwo()
        {
        }
        /**
         * @covers NotExistingClass::<public>
         */
        public function testThree()
        {
        }
    }
    class StopOnWarningTestSuite
    {
        public static function suite()
        {
        }
    }
    class TestSkipped extends \PHPUnit\Framework\TestCase
    {
        protected function runTest()
        {
        }
    }
    class TestGeneratorMaker
    {
        public function create($array = [])
        {
        }
    }
    class NothingTest extends \PHPUnit\Framework\TestCase
    {
        public function testNothing()
        {
        }
    }
    class StackTest extends \PHPUnit\Framework\TestCase
    {
        public function testPush()
        {
        }
        /**
         * @depends testPush
         */
        public function testPop(array $stack)
        {
        }
    }
    class DataProviderIncompleteTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider incompleteTestProviderMethod
         */
        public function testIncomplete($a, $b, $c)
        {
        }
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c)
        {
        }
        public function incompleteTestProviderMethod()
        {
        }
        public static function providerMethod()
        {
        }
    }
    class DataProviderDebugTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         */
        public function testProvider()
        {
        }
        public static function provider()
        {
        }
    }
}
namespace Foo\DataProviderIssue2859 {
    class TestWithDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x)
        {
        }
        public function provide()
        {
        }
    }
}
namespace {
    class StopsOnWarningTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
}
namespace Foo {
    class CoveredParentClass
    {
        private function privateMethod()
        {
        }
        protected function protectedMethod()
        {
        }
        public function publicMethod()
        {
        }
    }
    class CoveredClass extends \Foo\CoveredParentClass
    {
        private function privateMethod()
        {
        }
        protected function protectedMethod()
        {
        }
        public function publicMethod()
        {
        }
    }
}
namespace {
    class NotPublicTestCase extends \PHPUnit\Framework\TestCase
    {
        public function testPublic()
        {
        }
        protected function testNotPublic()
        {
        }
    }
    class EmptyTestCaseTest extends \PHPUnit\Framework\TestCase
    {
    }
    class ParentClassWithPrivateAttributes
    {
        private static $privateStaticParentAttribute = 'foo';
        private $privateParentAttribute = 'bar';
    }
    class ParentClassWithProtectedAttributes extends \ParentClassWithPrivateAttributes
    {
        protected static $protectedStaticParentAttribute = 'foo';
        protected $protectedParentAttribute = 'bar';
    }
    class ClassWithNonPublicAttributes extends \ParentClassWithProtectedAttributes
    {
        public static $publicStaticAttribute = 'foo';
        protected static $protectedStaticAttribute = 'bar';
        protected static $privateStaticAttribute = 'baz';
        public $publicAttribute = 'foo';
        public $foo = 1;
        public $bar = 2;
        protected $protectedAttribute = 'bar';
        protected $privateAttribute = 'baz';
        public $publicArray = ['foo'];
        protected $protectedArray = ['bar'];
        protected $privateArray = ['baz'];
    }
    abstract class AbstractTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Failure extends \PHPUnit\Framework\TestCase
    {
        protected function runTest()
        {
        }
    }
    class NamespaceCoverageMethodTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::publicMethod
         */
        public function testSomething()
        {
        }
    }
    class DataProviderDependencyTest extends \PHPUnit\Framework\TestCase
    {
        public function testReference()
        {
        }
        /**
         * @see https://github.com/sebastianbergmann/phpunit/issues/1896
         * @depends testReference
         * @dataProvider provider
         */
        public function testDependency($param)
        {
        }
        public function provider()
        {
        }
    }
    class InheritanceB extends \PHPUnit\Framework\TestCase
    {
        public function testSomething()
        {
        }
    }
    class InheritanceA extends \InheritanceB
    {
    }
    class Struct
    {
        public $var;
        public function __construct($var)
        {
        }
    }
    class NotVoidTestCase extends \PHPUnit\Framework\TestCase
    {
    }
    class BeforeClassWithOnlyDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        public static $setUpBeforeClassWasCalled;
        public static $beforeClassWasCalled;
        public static function resetProperties()
        {
        }
        public static function setUpBeforeClass()
        {
        }
        /**
         * @beforeClass
         */
        public static function someAnnotatedSetupMethod()
        {
        }
        public function dummyProvider()
        {
        }
        /**
         * @dataProvider dummyProvider
         * delete annotation to fail test case
         */
        public function testDummy()
        {
        }
    }
    class CoveragePublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<public>
         */
        public function testSomething()
        {
        }
    }
    /**
     * Tests for the BankAccount class.
     */
    class BankAccountTest extends \PHPUnit\Framework\TestCase
    {
        protected $ba;
        protected function setUp()
        {
        }
        /**
         * @covers BankAccount::getBalance
         * @group balanceIsInitiallyZero
         * @group specification
         */
        public function testBalanceIsInitiallyZero()
        {
        }
        /**
         * @covers BankAccount::withdrawMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative()
        {
        }
        /**
         * @covers BankAccount::depositMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative2()
        {
        }
        /*
         * @covers BankAccount::getBalance
         * @covers BankAccount::depositMoney
         * @covers BankAccount::withdrawMoney
         * @group balanceCannotBecomeNegative
         */
        /*
        public function testDepositingAndWithdrawingMoneyWorks()
        {
            $this->assertEquals(0, $this->ba->getBalance());
            $this->ba->depositMoney(1);
            $this->assertEquals(1, $this->ba->getBalance());
            $this->ba->withdrawMoney(1);
            $this->assertEquals(0, $this->ba->getBalance());
        }
        */
    }
    class FatalTest extends \PHPUnit\Framework\TestCase
    {
        public function testFatalError()
        {
        }
    }
    class NamespaceCoverageNotPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!public>
         */
        public function testSomething()
        {
        }
    }
}
namespace Foo\DataProviderIssue2922 {
    // the name of the class cannot match file name - if they match all is fine
    class SecondHelloWorldTest extends \PHPUnit\Framework\TestCase
    {
        public function testSecond()
        {
        }
    }
    /**
     * @group foo
     */
    class FirstTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x)
        {
        }
        public function provide()
        {
        }
    }
}
namespace {
    class TestIterator implements \Iterator
    {
        protected $array;
        protected $position = 0;
        public function __construct($array = [])
        {
        }
        public function rewind()
        {
        }
        public function valid()
        {
        }
        public function key()
        {
        }
        public function current()
        {
        }
        public function next()
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Utility class that can print to STDOUT or write to a file.
     */
    class Printer
    {
        /**
         * If true, flush output after every write.
         *
         * @var bool
         */
        protected $autoFlush = false;
        /**
         * @var resource
         */
        protected $out;
        /**
         * @var string
         */
        protected $outTarget;
        /**
         * Constructor.
         *
         * @param mixed $out
         *
         * @throws Exception
         */
        public function __construct($out = null)
        {
        }
        /**
         * Flush buffer and close output if it's not to a PHP stream
         */
        public function flush()
        {
        }
        /**
         * Performs a safe, incremental flush.
         *
         * Do not confuse this function with the flush() function of this class,
         * since the flush() function may close the file being written to, rendering
         * the current object no longer usable.
         */
        public function incrementalFlush()
        {
        }
        /**
         * @param string $buffer
         */
        public function write($buffer)
        {
        }
        /**
         * Check auto-flush mode.
         *
         * @return bool
         */
        public function getAutoFlush()
        {
        }
        /**
         * Set auto-flushing mode.
         *
         * If set, *incremental* flushes will be done after each write. This should
         * not be confused with the different effects of this class' flush() method.
         *
         * @param bool $autoFlush
         */
        public function setAutoFlush($autoFlush)
        {
        }
        private function createDirectory(string $directory) : bool
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * Prints the result of a TextUI TestRunner run.
     */
    class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        const EVENT_TEST_START = 0;
        const EVENT_TEST_END = 1;
        const EVENT_TESTSUITE_START = 2;
        const EVENT_TESTSUITE_END = 3;
        const COLOR_NEVER = 'never';
        const COLOR_AUTO = 'auto';
        const COLOR_ALWAYS = 'always';
        const COLOR_DEFAULT = self::COLOR_NEVER;
        /**
         * @var array
         */
        private static $ansiCodes = ['bold' => 1, 'fg-black' => 30, 'fg-red' => 31, 'fg-green' => 32, 'fg-yellow' => 33, 'fg-blue' => 34, 'fg-magenta' => 35, 'fg-cyan' => 36, 'fg-white' => 37, 'bg-black' => 40, 'bg-red' => 41, 'bg-green' => 42, 'bg-yellow' => 43, 'bg-blue' => 44, 'bg-magenta' => 45, 'bg-cyan' => 46, 'bg-white' => 47];
        /**
         * @var int
         */
        protected $column = 0;
        /**
         * @var int
         */
        protected $maxColumn;
        /**
         * @var bool
         */
        protected $lastTestFailed = false;
        /**
         * @var int
         */
        protected $numAssertions = 0;
        /**
         * @var int
         */
        protected $numTests = -1;
        /**
         * @var int
         */
        protected $numTestsRun = 0;
        /**
         * @var int
         */
        protected $numTestsWidth;
        /**
         * @var bool
         */
        protected $colors = false;
        /**
         * @var bool
         */
        protected $debug = false;
        /**
         * @var bool
         */
        protected $verbose = false;
        /**
         * @var int
         */
        private $numberOfColumns;
        /**
         * @var bool
         */
        private $reverse;
        /**
         * @var bool
         */
        private $defectListPrinted = false;
        /**
         * Constructor.
         *
         * @param mixed      $out
         * @param bool       $verbose
         * @param string     $colors
         * @param bool       $debug
         * @param int|string $numberOfColumns
         * @param bool       $reverse
         *
         * @throws Exception
         */
        public function __construct($out = null, $verbose = false, $colors = self::COLOR_DEFAULT, $debug = false, $numberOfColumns = 80, $reverse = false)
        {
        }
        /**
         * @param TestResult $result
         */
        public function printResult(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param array  $defects
         * @param string $type
         */
        protected function printDefects(array $defects, $type)
        {
        }
        /**
         * @param TestFailure $defect
         * @param int         $count
         */
        protected function printDefect(\PHPUnit\Framework\TestFailure $defect, $count)
        {
        }
        /**
         * @param TestFailure $defect
         * @param int         $count
         */
        protected function printDefectHeader(\PHPUnit\Framework\TestFailure $defect, $count)
        {
        }
        /**
         * @param TestFailure $defect
         */
        protected function printDefectTrace(\PHPUnit\Framework\TestFailure $defect)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printErrors(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printFailures(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printWarnings(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printIncompletes(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printRisky(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printSkipped(\PHPUnit\Framework\TestResult $result)
        {
        }
        protected function printHeader()
        {
        }
        /**
         * @param TestResult $result
         */
        protected function printFooter(\PHPUnit\Framework\TestResult $result)
        {
        }
        public function printWaitPrompt()
        {
        }
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        /**
         * @param string $progress
         */
        protected function writeProgress($progress)
        {
        }
        protected function writeNewLine()
        {
        }
        /**
         * Formats a buffer with a specified ANSI color sequence if colors are
         * enabled.
         *
         * @param string $color
         * @param string $buffer
         *
         * @return string
         */
        protected function formatWithColor($color, $buffer)
        {
        }
        /**
         * Writes a buffer out with a color sequence if colors are enabled.
         *
         * @param string $color
         * @param string $buffer
         * @param bool   $lf
         */
        protected function writeWithColor($color, $buffer, $lf = true)
        {
        }
        /**
         * Writes progress with a color sequence if colors are enabled.
         *
         * @param string $color
         * @param string $buffer
         */
        protected function writeProgressWithColor($color, $buffer)
        {
        }
        /**
         * @param int    $count
         * @param string $name
         * @param string $color
         * @param bool   $always
         */
        private function writeCountString($count, $name, $color, $always = false)
        {
        }
    }
}
namespace {
    class CustomPrinter extends \PHPUnit\TextUI\ResultPrinter
    {
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A book.
     */
    class Book
    {
        // the order of properties is important for testing the cycle!
        public $author = \null;
    }
    /**
     * @requires PHP 5.3
     * @requires PHPUnit 4.0
     * @requires OS Linux
     * @requires function testFuncClass
     * @requires extension testExtClass
     */
    class RequirementsClassDocBlockTest
    {
        /**
         * @requires PHP 5.4
         * @requires PHPUnit 3.7
         * @requires OS WINNT
         * @requires function testFuncMethod
         * @requires extension testExtMethod
         */
        public function testMethod()
        {
        }
    }
    class Success extends \PHPUnit\Framework\TestCase
    {
        protected function runTest()
        {
        }
    }
    class DataProviderSkippedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider skippedTestProviderMethod
         */
        public function testSkipped($a, $b, $c)
        {
        }
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c)
        {
        }
        public function skippedTestProviderMethod()
        {
        }
        public static function providerMethod()
        {
        }
    }
    class NamespaceCoverageProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<protected>
         */
        public function testSomething()
        {
        }
    }
    /**
     * @theTraitAnnotation
     */
    trait ParseTestMethodAnnotationsTrait
    {
    }
    /**
     * @theClassAnnotation
     */
    class ParseTestMethodAnnotationsMock
    {
        use \ParseTestMethodAnnotationsTrait;
    }
    class IsolationTest extends \PHPUnit\Framework\TestCase
    {
        public function testIsInIsolationReturnsFalse()
        {
        }
        public function testIsInIsolationReturnsTrue()
        {
        }
    }
    class ExceptionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Exception message
         *
         * @var string
         */
        const ERROR_MESSAGE = 'Exception message';
        /**
         * Exception message
         *
         * @var string
         */
        const ERROR_MESSAGE_REGEX = '#regex#';
        /**
         * Exception code
         *
         * @var int
         */
        const ERROR_CODE = 500;
        /**
         * @expectedException FooBarBaz
         */
        public function testOne()
        {
        }
        /**
         * @expectedException Foo_Bar_Baz
         */
        public function testTwo()
        {
        }
        /**
         * @expectedException Foo\Bar\Baz
         */
        public function testThree()
        {
        }
        /**
         * @expectedException ほげ
         */
        public function testFour()
        {
        }
        /**
         * @expectedException Class Message 1234
         */
        public function testFive()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode 1234
         */
        public function testSix()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode ExceptionCode
         */
        public function testSeven()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage Message
         * @expectedExceptionCode 0
         */
        public function testEight()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionMessage ExceptionTest::ERROR_MESSAGE
         * @expectedExceptionCode ExceptionTest::ERROR_CODE
         */
        public function testNine()
        {
        }
        /** @expectedException Class */
        public function testSingleLine()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode ExceptionTest::UNKNOWN_CODE_CONSTANT
         * @expectedExceptionMessage ExceptionTest::UNKNOWN_MESSAGE_CONSTANT
         */
        public function testUnknownConstants()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp #regex#
         */
        public function testWithRegexMessage()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp ExceptionTest::ERROR_MESSAGE_REGEX
         */
        public function testWithRegexMessageFromClassConstant()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode 1234
         * @expectedExceptionMessage Message
         * @expectedExceptionMessageRegExp ExceptionTest::UNKNOWN_MESSAGE_REGEX_CONSTANT
         */
        public function testWithUnknowRegexMessageFromClassConstant()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * An author.
     */
    class Author
    {
        // the order of properties is important for testing the cycle!
        public $books = [];
        private $name = '';
        public function __construct($name)
        {
        }
    }
    class CoverageFunctionParenthesesWhitespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction ( )
         */
        public function testSomething()
        {
        }
    }
    class ExceptionInTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testSomething()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
    }
    class NamespaceCoverageNotPrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!private>
         */
        public function testSomething()
        {
        }
    }
    /**
     * Tests for the BankAccount class.
     */
    class BankAccountWithCustomExtensionTest extends \PHPUnit\Framework\TestCase
    {
        protected $ba;
        protected function setUp()
        {
        }
        /**
         * @covers BankAccount::getBalance
         * @group balanceIsInitiallyZero
         * @group specification
         */
        public function testBalanceIsInitiallyZero()
        {
        }
        /**
         * @covers BankAccount::withdrawMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative()
        {
        }
        /**
         * @covers BankAccount::depositMoney
         * @group balanceCannotBecomeNegative
         * @group specification
         */
        public function testBalanceCannotBecomeNegative2()
        {
        }
        /*
         * @covers BankAccount::getBalance
         * @covers BankAccount::depositMoney
         * @covers BankAccount::withdrawMoney
         * @group balanceCannotBecomeNegative
         */
        /*
        public function testDepositingAndWithdrawingMoneyWorks()
        {
            $this->assertEquals(0, $this->ba->getBalance());
            $this->ba->depositMoney(1);
            $this->assertEquals(1, $this->ba->getBalance());
            $this->ba->withdrawMoney(1);
            $this->assertEquals(0, $this->ba->getBalance());
        }
        */
    }
    class WasRun extends \PHPUnit\Framework\TestCase
    {
        public $wasRun = \false;
        protected function runTest()
        {
        }
    }
    class CoverageClassExtendedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass<extended>
         */
        public function testSomething()
        {
        }
    }
    class NamespaceCoveragePrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<private>
         */
        public function testSomething()
        {
        }
    }
    class OutputTestCase extends \PHPUnit\Framework\TestCase
    {
        public function testExpectOutputStringFooActualFoo()
        {
        }
        public function testExpectOutputStringFooActualBar()
        {
        }
        public function testExpectOutputRegexFooActualFoo()
        {
        }
        public function testExpectOutputRegexFooActualBar()
        {
        }
    }
    class ArrayAccessible implements \ArrayAccess, \IteratorAggregate
    {
        private $array;
        public function __construct(array $array = [])
        {
        }
        public function offsetExists($offset)
        {
        }
        public function offsetGet($offset)
        {
        }
        public function offsetSet($offset, $value)
        {
        }
        public function offsetUnset($offset)
        {
        }
        public function getIterator()
        {
        }
    }
    class CoverageNotPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!public>
         */
        public function testSomething()
        {
        }
    }
    class IncompleteTest extends \PHPUnit\Framework\TestCase
    {
        public function testIncomplete()
        {
        }
    }
    class NamespaceCoveragePublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<public>
         */
        public function testSomething()
        {
        }
    }
    class FailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testAssertArrayEqualsArray()
        {
        }
        public function testAssertIntegerEqualsInteger()
        {
        }
        public function testAssertObjectEqualsObject()
        {
        }
        public function testAssertNullEqualsString()
        {
        }
        public function testAssertStringEqualsString()
        {
        }
        public function testAssertTextEqualsText()
        {
        }
        public function testAssertStringMatchesFormat()
        {
        }
        public function testAssertNumericEqualsNumeric()
        {
        }
        public function testAssertTextSameText()
        {
        }
        public function testAssertObjectSameObject()
        {
        }
        public function testAssertObjectSameNull()
        {
        }
        public function testAssertFloatSameFloat()
        {
        }
        // Note that due to the implementation of this assertion it counts as 2 asserts
        public function testAssertStringMatchesFormatFile()
        {
        }
    }
    class WrapperIteratorAggregate implements \IteratorAggregate
    {
        /**
         * @var array|\Traversable
         */
        private $baseCollection;
        public function __construct($baseCollection)
        {
        }
        public function getIterator()
        {
        }
    }
    class CoverageProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<protected>
         */
        public function testSomething()
        {
        }
    }
    class BeforeClassAndAfterClassTest extends \PHPUnit\Framework\TestCase
    {
        public static $beforeClassWasRun = 0;
        public static $afterClassWasRun = 0;
        public static function resetProperties()
        {
        }
        /**
         * @beforeClass
         */
        public static function initialClassSetup()
        {
        }
        /**
         * @afterClass
         */
        public static function finalClassTeardown()
        {
        }
        public function test1()
        {
        }
        public function test2()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class BankAccountException extends \RuntimeException
    {
    }
    /**
     * A bank account.
     */
    class BankAccount
    {
        /**
         * The bank account's balance.
         *
         * @var float
         */
        protected $balance = 0;
        /**
         * Returns the bank account's balance.
         *
         * @return float
         */
        public function getBalance()
        {
        }
        /**
         * Sets the bank account's balance.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        protected function setBalance($balance)
        {
        }
        /**
         * Deposits an amount of money to the bank account.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        public function depositMoney($balance)
        {
        }
        /**
         * Withdraws an amount of money from the bank account.
         *
         * @param float $balance
         *
         * @throws BankAccountException
         */
        public function withdrawMoney($balance)
        {
        }
    }
    class CoverageMethodParenthesesWhitespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod ( )
         */
        public function testSomething()
        {
        }
    }
    class CoverageMethodTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         */
        public function testSomething()
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    /**
     * Abstract base class for constraints which can be applied to any value.
     */
    abstract class Constraint implements \Countable, \PHPUnit\Framework\SelfDescribing
    {
        protected $exporter;
        public function __construct()
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * This method can be overridden to implement the evaluation algorithm.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * Throws an exception for the given compared value and test description
         *
         * @param mixed             $other             Evaluated value or object.
         * @param string            $description       Additional information about the test
         * @param ComparisonFailure $comparisonFailure
         *
         * @throws ExpectationFailedException
         */
        protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null)
        {
        }
        /**
         * Return additional failure description where needed
         *
         * The function can be overridden to provide additional failure
         * information like a diff
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function additionalFailureDescription($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * To provide additional failure information additionalFailureDescription
         * can be used.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
}
namespace {
    final class NamedConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        private $name;
        public static function fromName(string $name) : self
        {
        }
        public function matches($other)
        {
        }
        public function toString()
        {
        }
    }
    class Singleton
    {
        private static $uniqueInstance = \null;
        protected function __construct()
        {
        }
        private final function __clone()
        {
        }
        public static function getInstance()
        {
        }
    }
    class DependencySuccessTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo()
        {
        }
        /**
         * @depends DependencySuccessTest::testTwo
         */
        public function testThree()
        {
        }
    }
    class DependencyFailureTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo()
        {
        }
        /**
         * @depends !clone testTwo
         */
        public function testThree()
        {
        }
        /**
         * @depends clone testOne
         */
        public function testFour()
        {
        }
    }
    class NonStatic
    {
        public function suite()
        {
        }
    }
    class CoverageMethodOneLineAnnotationTest extends \PHPUnit\Framework\TestCase
    {
        /** @covers CoveredClass::publicMethod */
        public function testSomething()
        {
        }
    }
    class CoverageFunctionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction
         */
        public function testSomething()
        {
        }
    }
    class TestDoxGroupTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @group one
         */
        public function testOne()
        {
        }
        /**
         * @group two
         */
        public function testTwo()
        {
        }
    }
    class AssertionExampleTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::privateMethod
         * @covers ::protectedMethod
         * @covers ::publicMethod
         * @covers \Foo\CoveredParentClass::privateMethod
         * @covers \Foo\CoveredParentClass::protectedMethod
         * @covers \Foo\CoveredParentClass::publicMethod
         */
        public function testSomething()
        {
        }
    }
    class CoveragePrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<private>
         */
        public function testSomething()
        {
        }
    }
    class DummyBarTest extends \PHPUnit\Framework\TestCase
    {
        public function testBarEqualsBar()
        {
        }
    }
}
namespace vendor\project {
    class StatusTest extends \PHPUnit\Framework\TestCase
    {
        public function testSuccess()
        {
        }
        public function testFailure()
        {
        }
        public function testError()
        {
        }
        public function testIncomplete()
        {
        }
        public function testSkipped()
        {
        }
        public function testRisky()
        {
        }
        public function testWarning()
        {
        }
    }
}
namespace {
    /**
     * Sample class that implements ArrayAccess copied from
     * http://www.php.net/manual/en/class.arrayaccess.php
     * with some minor changes
     * This class required for PHPUnit_Framework_Constraint_ArrayHasKey testing
     */
    class SampleArrayAccess implements \ArrayAccess
    {
        private $container;
        public function __construct()
        {
        }
        public function offsetSet($offset, $value)
        {
        }
        public function offsetExists($offset)
        {
        }
        public function offsetUnset($offset)
        {
        }
        public function offsetGet($offset)
        {
        }
    }
}
namespace PHPUnit\Framework {
    trait TestListenerDefaultImplementation
    {
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
    }
    /**
     * Implementation of the TestListener interface that does not do anything.
     *
     * @deprecated Use TestListenerDefaultImplementation trait instead
     */
    abstract class BaseTestListener implements \PHPUnit\Framework\TestListener
    {
        use \PHPUnit\Framework\TestListenerDefaultImplementation;
    }
}
namespace {
    class BaseTestListenerSample extends \PHPUnit\Framework\BaseTestListener
    {
        public $endCount = 0;
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
    }
    class OneTestCase extends \PHPUnit\Framework\TestCase
    {
        public function noTestCase()
        {
        }
        public function testCase($arg = '')
        {
        }
    }
    class OverrideTestCase extends \OneTestCase
    {
        public function testCase($arg = '')
        {
        }
    }
    class AssertionExample
    {
        public function doSomething()
        {
        }
    }
}
namespace Foo\DataProviderIssue2833 {
    class SecondTest extends \PHPUnit\Framework\TestCase
    {
        const DUMMY = 'dummy';
        public function testSecond()
        {
        }
    }
    class FirstTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provide
         */
        public function testFirst($x)
        {
        }
        public function provide()
        {
        }
    }
}
namespace {
    class SampleClass
    {
        public $a;
        public $b;
        public $c;
        public function __construct($a, $b, $c)
        {
        }
    }
}
namespace My\Space {
    class ExceptionNamespaceTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * Exception message
         *
         * @var string
         */
        const ERROR_MESSAGE = 'Exception namespace message';
        /**
         * Exception code
         *
         * @var int
         */
        const ERROR_CODE = 200;
        /**
         * @expectedException Class
         * @expectedExceptionMessage My\Space\ExceptionNamespaceTest::ERROR_MESSAGE
         * @expectedExceptionCode My\Space\ExceptionNamespaceTest::ERROR_CODE
         */
        public function testConstants()
        {
        }
        /**
         * @expectedException Class
         * @expectedExceptionCode My\Space\ExceptionNamespaceTest::UNKNOWN_CODE_CONSTANT
         * @expectedExceptionMessage My\Space\ExceptionNamespaceTest::UNKNOWN_MESSAGE_CONSTANT
         */
        public function testUnknownConstants()
        {
        }
    }
}
namespace {
    class MultipleDataProviderTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider providerA
         * @dataProvider providerB
         * @dataProvider providerC
         */
        public function testOne()
        {
        }
        /**
         * @dataProvider providerD
         * @dataProvider providerE
         * @dataProvider providerF
         */
        public function testTwo()
        {
        }
        public static function providerA()
        {
        }
        public static function providerB()
        {
        }
        public static function providerC()
        {
        }
        public static function providerD()
        {
        }
        public static function providerE()
        {
        }
        public static function providerF()
        {
        }
    }
    /**
     * @codeCoverageIgnore
     */
    class IgnoreCodeCoverageClass
    {
        public function returnTrue()
        {
        }
        public function returnFalse()
        {
        }
    }
    class VariousIterableDataProviderTest
    {
        /**
         * @dataProvider asArrayProvider
         * @dataProvider asIteratorProvider
         * @dataProvider asTraversableProvider
         */
        public function test()
        {
        }
        public static function asArrayProvider()
        {
        }
        public static function asIteratorProvider()
        {
        }
        public static function asTraversableProvider()
        {
        }
    }
    class IgnoreCodeCoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        public function testReturnTrue()
        {
        }
        public function testReturnFalse()
        {
        }
    }
    class NoArgTestCaseTest extends \PHPUnit\Framework\TestCase
    {
        public function testNothing()
        {
        }
    }
    class TemplateMethodsTest extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass()
        {
        }
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testOne()
        {
        }
        public function testTwo()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
        public static function tearDownAfterClass()
        {
        }
        protected function onNotSuccessfulTest(\Exception $t)
        {
        }
    }
    class ChangeCurrentWorkingDirectoryTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomethingThatChangesTheCwd()
        {
        }
    }
    class ExceptionStackTest extends \PHPUnit\Framework\TestCase
    {
        public function testPrintingChildException()
        {
        }
        public function testNestedExceptions()
        {
        }
    }
    class CoveredParentClass
    {
        private function privateMethod()
        {
        }
        protected function protectedMethod()
        {
        }
        public function publicMethod()
        {
        }
    }
    class CoveredClass extends \CoveredParentClass
    {
        private function privateMethod()
        {
        }
        protected function protectedMethod()
        {
        }
        public function publicMethod()
        {
        }
    }
    class TestWithTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @testWith [0, 0, 0]
         *           [0, 1, 1]
         *           [1, 2, 3]
         *           [20, 22, 42]
         */
        public function testAdd($a, $b, $c)
        {
        }
        public static function providerMethod()
        {
        }
    }
    class InheritedTestCase extends \OneTestCase
    {
        public function test2()
        {
        }
    }
    class CoverageNotProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!protected>
         */
        public function testSomething()
        {
        }
    }
    class ClassWithScalarTypeDeclarations
    {
        public function foo(string $string, int $int)
        {
        }
    }
    class TestIncomplete extends \PHPUnit\Framework\TestCase
    {
        protected function runTest()
        {
        }
    }
    class CoverageNothingTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         * @coversNothing
         */
        public function testSomething()
        {
        }
    }
    class DataProviderTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider providerMethod
         */
        public function testAdd($a, $b, $c)
        {
        }
        public static function providerMethod()
        {
        }
    }
    class ThrowExceptionTestCase extends \PHPUnit\Framework\TestCase
    {
        public function test()
        {
        }
    }
    final class TruthyConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        public function matches($other)
        {
        }
        public function toString()
        {
        }
    }
    class ThrowNoExceptionTestCase extends \PHPUnit\Framework\TestCase
    {
        public function test()
        {
        }
    }
    class ExceptionInTearDownTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testSomething()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
    }
    class CoverageNotPrivateTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::<!private>
         */
        public function testSomething()
        {
        }
    }
    class ClonedDependencyTest extends \PHPUnit\Framework\TestCase
    {
        private static $dependency;
        public static function setUpBeforeClass()
        {
        }
        public function testOne()
        {
        }
        /**
         * @depends testOne
         */
        public function testTwo($dependency)
        {
        }
        /**
         * @depends !clone testOne
         */
        public function testThree($dependency)
        {
        }
        /**
         * @depends clone testOne
         */
        public function testFour($dependency)
        {
        }
        /**
         * @depends !shallowClone testOne
         */
        public function testFive($dependency)
        {
        }
        /**
         * @depends shallowClone testOne
         */
        public function testSix($dependency)
        {
        }
    }
    /* This class is used for testing a chain of IteratorAggregate objects, since
     * PHP does allow IteratorAggregate::getIterator() to return an instance of the
     * same class. */
    class TestIteratorAggregate2 implements \IteratorAggregate
    {
        private $traversable;
        public function __construct(\Traversable $traversable)
        {
        }
        public function getIterator()
        {
        }
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A class with a __toString() method.
     */
    class ClassWithToString
    {
        public function __toString()
        {
        }
    }
    class ExceptionInAssertPostConditionsTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testSomething()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
    }
    class CoverageFunctionParenthesesTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::globalFunction()
         */
        public function testSomething()
        {
        }
    }
}
namespace PHPUnit\Runner {
    /**
     * Base class for all test runners.
     */
    abstract class BaseTestRunner
    {
        const STATUS_PASSED = 0;
        const STATUS_SKIPPED = 1;
        const STATUS_INCOMPLETE = 2;
        const STATUS_FAILURE = 3;
        const STATUS_ERROR = 4;
        const STATUS_RISKY = 5;
        const STATUS_WARNING = 6;
        const SUITE_METHODNAME = 'suite';
        /**
         * Returns the loader to be used.
         *
         * @return TestSuiteLoader
         */
        public function getLoader()
        {
        }
        /**
         * Returns the Test corresponding to the given suite.
         * This is a template method, subclasses override
         * the runFailed() and clearStatus() methods.
         *
         * @param string $suiteClassName
         * @param string $suiteClassFile
         * @param mixed  $suffixes
         *
         * @return Test|null
         */
        public function getTest($suiteClassName, $suiteClassFile = '', $suffixes = '')
        {
        }
        /**
         * Returns the loaded ReflectionClass for a suite name.
         *
         * @param string $suiteClassName
         * @param string $suiteClassFile
         *
         * @return ReflectionClass
         */
        protected function loadSuiteClass($suiteClassName, $suiteClassFile = '')
        {
        }
        /**
         * Clears the status message.
         */
        protected function clearStatus()
        {
        }
        /**
         * Override to define how to handle a failed loading of
         * a test suite.
         *
         * @param string $message
         */
        protected abstract function runFailed($message);
    }
}
namespace {
    class MockRunner extends \PHPUnit\Runner\BaseTestRunner
    {
        protected function runFailed($message)
        {
        }
    }
    class ConcreteWithMyCustomExtensionTest extends \AbstractTest
    {
        public function testTwo()
        {
        }
    }
    class DependencyTestSuite
    {
        public static function suite()
        {
        }
    }
    class DataProviderFilterTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider truthProvider
         */
        public function testTrue($truth)
        {
        }
        public static function truthProvider()
        {
        }
        /**
         * @dataProvider falseProvider
         */
        public function testFalse($false)
        {
        }
        public static function falseProvider()
        {
        }
    }
    class NoTestCaseClass
    {
    }
    final class CountConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        private $count;
        public static function fromCount(int $count) : self
        {
        }
        public function matches($other)
        {
        }
        public function toString()
        {
        }
        public function count()
        {
        }
    }
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassPublicTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers ::publicMethod
         */
        public function testSomething()
        {
        }
    }
    class MultiDependencyTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        public function testTwo()
        {
        }
        /**
         * @depends testOne
         * @depends testTwo
         */
        public function testThree($a, $b)
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class Command
    {
        /**
         * @var array
         */
        protected $arguments = ['listGroups' => false, 'listSuites' => false, 'listTests' => false, 'listTestsXml' => false, 'loader' => null, 'useDefaultConfiguration' => true, 'loadedExtensions' => [], 'notLoadedExtensions' => []];
        /**
         * @var array
         */
        protected $options = [];
        /**
         * @var array
         */
        protected $longOptions = ['atleast-version=' => null, 'bootstrap=' => null, 'check-version' => null, 'colors==' => null, 'columns=' => null, 'configuration=' => null, 'coverage-clover=' => null, 'coverage-crap4j=' => null, 'coverage-html=' => null, 'coverage-php=' => null, 'coverage-text==' => null, 'coverage-xml=' => null, 'debug' => null, 'disallow-test-output' => null, 'disallow-resource-usage' => null, 'disallow-todo-tests' => null, 'enforce-time-limit' => null, 'exclude-group=' => null, 'filter=' => null, 'generate-configuration' => null, 'globals-backup' => null, 'group=' => null, 'help' => null, 'include-path=' => null, 'list-groups' => null, 'list-suites' => null, 'list-tests' => null, 'list-tests-xml=' => null, 'loader=' => null, 'log-junit=' => null, 'log-teamcity=' => null, 'no-configuration' => null, 'no-coverage' => null, 'no-logging' => null, 'no-extensions' => null, 'printer=' => null, 'process-isolation' => null, 'repeat=' => null, 'dont-report-useless-tests' => null, 'reverse-list' => null, 'static-backup' => null, 'stderr' => null, 'stop-on-error' => null, 'stop-on-failure' => null, 'stop-on-warning' => null, 'stop-on-incomplete' => null, 'stop-on-risky' => null, 'stop-on-skipped' => null, 'fail-on-warning' => null, 'fail-on-risky' => null, 'strict-coverage' => null, 'disable-coverage-ignore' => null, 'strict-global-state' => null, 'teamcity' => null, 'testdox' => null, 'testdox-group=' => null, 'testdox-exclude-group=' => null, 'testdox-html=' => null, 'testdox-text=' => null, 'testdox-xml=' => null, 'test-suffix=' => null, 'testsuite=' => null, 'verbose' => null, 'version' => null, 'whitelist=' => null];
        /**
         * @var bool
         */
        private $versionStringPrinted = false;
        /**
         * @param bool $exit
         */
        public static function main($exit = true)
        {
        }
        /**
         * @param array $argv
         * @param bool  $exit
         *
         * @return int
         */
        public function run(array $argv, $exit = true)
        {
        }
        /**
         * Create a TestRunner, override in subclasses.
         *
         * @return TestRunner
         */
        protected function createRunner()
        {
        }
        /**
         * Handles the command-line arguments.
         *
         * A child class of PHPUnit\TextUI\Command can hook into the argument
         * parsing by adding the switch(es) to the $longOptions array and point to a
         * callback method that handles the switch(es) in the child class like this
         *
         * <code>
         * <?php
         * class MyCommand extends PHPUnit\TextUI\Command
         * {
         *     public function __construct()
         *     {
         *         // my-switch won't accept a value, it's an on/off
         *         $this->longOptions['my-switch'] = 'myHandler';
         *         // my-secondswitch will accept a value - note the equals sign
         *         $this->longOptions['my-secondswitch='] = 'myOtherHandler';
         *     }
         *
         *     // --my-switch  -> myHandler()
         *     protected function myHandler()
         *     {
         *     }
         *
         *     // --my-secondswitch foo -> myOtherHandler('foo')
         *     protected function myOtherHandler ($value)
         *     {
         *     }
         *
         *     // You will also need this - the static keyword in the
         *     // PHPUnit\TextUI\Command will mean that it'll be
         *     // PHPUnit\TextUI\Command that gets instantiated,
         *     // not MyCommand
         *     public static function main($exit = true)
         *     {
         *         $command = new static;
         *
         *         return $command->run($_SERVER['argv'], $exit);
         *     }
         *
         * }
         * </code>
         *
         * @param array $argv
         */
        protected function handleArguments(array $argv)
        {
        }
        /**
         * Handles the loading of the PHPUnit\Runner\TestSuiteLoader implementation.
         *
         * @param string $loaderClass
         * @param string $loaderFile
         *
         * @return TestSuiteLoader|null
         */
        protected function handleLoader($loaderClass, $loaderFile = '')
        {
        }
        /**
         * Handles the loading of the PHPUnit\Util\Printer implementation.
         *
         * @param string $printerClass
         * @param string $printerFile
         *
         * @return Printer|string|null
         */
        protected function handlePrinter($printerClass, $printerFile = '')
        {
        }
        /**
         * Loads a bootstrap file.
         *
         * @param string $filename
         */
        protected function handleBootstrap($filename)
        {
        }
        protected function handleVersionCheck()
        {
        }
        /**
         * Show the help message.
         */
        protected function showHelp()
        {
        }
        /**
         * Custom callback for test suite discovery.
         */
        protected function handleCustomTestSuite()
        {
        }
        private function printVersionString()
        {
        }
        /**
         * @param string $message
         */
        private function exitWithErrorMessage($message)
        {
        }
        /**
         * @param string $directory
         */
        private function handleExtensions($directory)
        {
        }
        private function handleListGroups(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
        {
        }
        private function handleListSuites(bool $exit) : int
        {
        }
        private function handleListTests(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
        {
        }
        private function handleListTestsXml(\PHPUnit\Framework\TestSuite $suite, string $target, bool $exit) : int
        {
        }
    }
}
namespace {
    class MyCommand extends \PHPUnit\TextUI\Command
    {
        public function __construct()
        {
        }
        public function myHandler($value)
        {
        }
    }
    class Calculator
    {
        /**
         * @assert (0, 0) == 0
         * @assert (0, 1) == 1
         * @assert (1, 0) == 1
         * @assert (1, 1) == 2
         */
        public function add($a, $b)
        {
        }
    }
    class NamespaceCoverageClassExtendedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass<extended>
         */
        public function testSomething()
        {
        }
    }
    class TestIterator2 implements \Iterator
    {
        protected $data;
        public function __construct(array $array)
        {
        }
        public function current()
        {
        }
        public function next()
        {
        }
        public function key()
        {
        }
        public function valid()
        {
        }
        public function rewind()
        {
        }
    }
    class CoverageNamespacedFunctionTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers foo\func()
         */
        public function testFunc()
        {
        }
    }
    final class FalsyConstraint extends \PHPUnit\Framework\Constraint\Constraint
    {
        public function matches($other)
        {
        }
        public function toString()
        {
        }
    }
    class CoverageMethodParenthesesTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass::publicMethod()
         */
        public function testSomething()
        {
        }
    }
    class CoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers CoveredClass
         */
        public function testSomething()
        {
        }
    }
    class NamespaceCoverageNotProtectedTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!protected>
         */
        public function testSomething()
        {
        }
    }
    class ConcreteTest extends \AbstractTest
    {
        public function testTwo()
        {
        }
    }
    /**
     * @coversDefaultClass \NamespaceOne
     * @coversDefaultClass \AnotherDefault\Name\Space\Does\Not\Work
     */
    class CoverageTwoDefaultClassAnnotations
    {
        /**
         * @covers Foo\CoveredClass::<public>
         */
        public function testSomething()
        {
        }
    }
    class DummyException extends \Exception
    {
    }
    class TestError extends \PHPUnit\Framework\TestCase
    {
        protected function runTest()
        {
        }
    }
    class NamespaceCoverageClassTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @covers Foo\CoveredClass
         */
        public function testSomething()
        {
        }
    }
    class TestIteratorAggregate implements \IteratorAggregate
    {
        private $traversable;
        public function __construct(\Traversable $traversable)
        {
        }
        public function getIterator()
        {
        }
    }
    class IniTest extends \PHPUnit\Framework\TestCase
    {
        public function testIni()
        {
        }
    }
    class ExceptionInSetUpTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testSomething()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
    }
    class DoubleTestCase implements \PHPUnit\Framework\Test
    {
        protected $testCase;
        public function __construct(\PHPUnit\Framework\TestCase $testCase)
        {
        }
        public function count()
        {
        }
        public function run(\PHPUnit\Framework\TestResult $result = \null)
        {
        }
    }
    /**
     * @requires extension nonExistingExtension
     */
    class RequirementsClassBeforeClassHookTest extends \PHPUnit\Framework\TestCase
    {
        public static function setUpBeforeClass()
        {
        }
    }
    class RequirementsTest extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
        /**
         * @requires PHPUnit 1.0
         */
        public function testTwo()
        {
        }
        /**
         * @requires PHP 2.0
         */
        public function testThree()
        {
        }
        /**
         * @requires PHPUnit 2.0
         * @requires PHP 1.0
         */
        public function testFour()
        {
        }
        /**
         * @requires PHP 5.4.0RC6
         */
        public function testFive()
        {
        }
        /**
         * @requires PHP 5.4.0-alpha1
         */
        public function testSix()
        {
        }
        /**
         * @requires PHP 5.4.0beta2
         */
        public function testSeven()
        {
        }
        /**
         * @requires PHP 5.4-dev
         */
        public function testEight()
        {
        }
        /**
         * @requires function testFunc
         */
        public function testNine()
        {
        }
        /**
         * @requires extension testExt
         */
        public function testTen()
        {
        }
        /**
         * @requires function testFunc2
         * @see https://github.com/sebastianbergmann/phpunit/issues/3459
         */
        public function testRequiresFunctionWithDigit()
        {
        }
        /**
         * @requires OS SunOS
         * @requires OSFAMILY Solaris
         */
        public function testEleven()
        {
        }
        /**
         * @requires PHP 99-dev
         * @requires PHPUnit 9-dev
         * @requires OS DOESNOTEXIST
         * @requires function testFuncOne
         * @requires function testFunc2
         * @requires extension testExtOne
         * @requires extension testExt2
         * @requires extension testExtThree 2.0
         */
        public function testAllPossibleRequirements()
        {
        }
        /**
         * @requires function array_merge
         */
        public function testExistingFunction()
        {
        }
        /**
         * @requires function ReflectionMethod::setAccessible
         */
        public function testExistingMethod()
        {
        }
        /**
         * @requires extension spl
         */
        public function testExistingExtension()
        {
        }
        /**
         * @requires OS .*
         */
        public function testExistingOs()
        {
        }
        /**
         * @requires PHPUnit 1111111
         */
        public function testAlwaysSkip()
        {
        }
        /**
         * @requires PHP 9999999
         */
        public function testAlwaysSkip2()
        {
        }
        /**
         * @requires OS DOESNOTEXIST
         */
        public function testAlwaysSkip3()
        {
        }
        /**
         * @requires OSFAMILY DOESNOTEXIST
         */
        public function testAlwaysSkip4()
        {
        }
        /**
         * @requires extension spl
         * @requires OS .*
         */
        public function testSpace()
        {
        }
        /**
         * @requires extension testExt 1.8.0
         */
        public function testSpecificExtensionVersion()
        {
        }
        /**
         * @requires PHP < 5.4
         */
        public function testPHPVersionOperatorLessThan()
        {
        }
        /**
         * @requires PHP <= 5.4
         */
        public function testPHPVersionOperatorLessThanEquals()
        {
        }
        /**
         * @requires PHP > 99
         */
        public function testPHPVersionOperatorGreaterThan()
        {
        }
        /**
         * @requires PHP >= 99
         */
        public function testPHPVersionOperatorGreaterThanEquals()
        {
        }
        /**
         * @requires PHP = 5.4
         */
        public function testPHPVersionOperatorEquals()
        {
        }
        /**
         * @requires PHP == 5.4
         */
        public function testPHPVersionOperatorDoubleEquals()
        {
        }
        /**
         * @requires PHP != 99
         */
        public function testPHPVersionOperatorBangEquals()
        {
        }
        /**
         * @requires PHP <> 99
         */
        public function testPHPVersionOperatorNotEquals()
        {
        }
        /**
         * @requires PHP >=99
         */
        public function testPHPVersionOperatorNoSpace()
        {
        }
        /**
         * @requires PHPUnit < 1.0
         */
        public function testPHPUnitVersionOperatorLessThan()
        {
        }
        /**
         * @requires PHPUnit <= 1.0
         */
        public function testPHPUnitVersionOperatorLessThanEquals()
        {
        }
        /**
         * @requires PHPUnit > 99
         */
        public function testPHPUnitVersionOperatorGreaterThan()
        {
        }
        /**
         * @requires PHPUnit >= 99
         */
        public function testPHPUnitVersionOperatorGreaterThanEquals()
        {
        }
        /**
         * @requires PHPUnit = 1.0
         */
        public function testPHPUnitVersionOperatorEquals()
        {
        }
        /**
         * @requires PHPUnit == 1.0
         */
        public function testPHPUnitVersionOperatorDoubleEquals()
        {
        }
        /**
         * @requires PHPUnit != 99
         */
        public function testPHPUnitVersionOperatorBangEquals()
        {
        }
        /**
         * @requires PHPUnit <> 99
         */
        public function testPHPUnitVersionOperatorNotEquals()
        {
        }
        /**
         * @requires PHPUnit >=99
         */
        public function testPHPUnitVersionOperatorNoSpace()
        {
        }
        /**
         * @requires extension testExtOne < 1.0
         */
        public function testExtensionVersionOperatorLessThan()
        {
        }
        /**
         * @requires extension testExtOne <= 1.0
         */
        public function testExtensionVersionOperatorLessThanEquals()
        {
        }
        /**
         * @requires extension testExtOne > 99
         */
        public function testExtensionVersionOperatorGreaterThan()
        {
        }
        /**
         * @requires extension testExtOne >= 99
         */
        public function testExtensionVersionOperatorGreaterThanEquals()
        {
        }
        /**
         * @requires extension testExtOne = 1.0
         */
        public function testExtensionVersionOperatorEquals()
        {
        }
        /**
         * @requires extension testExtOne == 1.0
         */
        public function testExtensionVersionOperatorDoubleEquals()
        {
        }
        /**
         * @requires extension testExtOne != 99
         */
        public function testExtensionVersionOperatorBangEquals()
        {
        }
        /**
         * @requires extension testExtOne <> 99
         */
        public function testExtensionVersionOperatorNotEquals()
        {
        }
        /**
         * @requires extension testExtOne >=99
         */
        public function testExtensionVersionOperatorNoSpace()
        {
        }
        /**
         * @requires PHP ~1.0
         * @requires PHPUnit ~2.0
         */
        public function testVersionConstraintTildeMajor()
        {
        }
        /**
         * @requires PHP ^1.0
         * @requires PHPUnit ^2.0
         */
        public function testVersionConstraintCaretMajor()
        {
        }
        /**
         * @requires PHP ~3.4.7
         * @requires PHPUnit ~4.7.1
         */
        public function testVersionConstraintTildeMinor()
        {
        }
        /**
         * @requires PHP ^7.0.17
         * @requires PHPUnit ^4.7.1
         */
        public function testVersionConstraintCaretMinor()
        {
        }
        /**
         * @requires PHP ^5.6 || ^7.0
         * @requires PHPUnit ^5.0 || ^6.0
         */
        public function testVersionConstraintCaretOr()
        {
        }
        /**
         * @requires PHP ~5.6.22 || ~7.0.17
         * @requires PHPUnit ^5.0.5 || ^6.0.6
         */
        public function testVersionConstraintTildeOr()
        {
        }
        /**
         * @requires PHP ~5.6.22 || ^7.0
         * @requires PHPUnit ~5.6.22 || ^7.0
         */
        public function testVersionConstraintTildeOrCaret()
        {
        }
        /**
         * @requires PHP ^5.6 || ~7.0.17
         * @requires PHPUnit ^5.6 || ~7.0.17
         */
        public function testVersionConstraintCaretOrTilde()
        {
        }
        /**
         * @requires   PHP        ~5.6.22 || ~7.0.17
         * @requires   PHPUnit    ~5.6.22 || ~7.0.17
         */
        public function testVersionConstraintRegexpIgnoresWhitespace()
        {
        }
        /**
         * @requires   PHP ~^12345
         */
        public function testVersionConstraintInvalidPhpConstraint()
        {
        }
        /**
         * @requires   PHPUnit ~^12345
         */
        public function testVersionConstraintInvalidPhpUnitConstraint()
        {
        }
    }
    class DummyFooTest extends \PHPUnit\Framework\TestCase
    {
        public function testFooEqualsFoo()
        {
        }
    }
    class ExceptionInAssertPreConditionsTest extends \PHPUnit\Framework\TestCase
    {
        public $setUp = \false;
        public $assertPreConditions = \false;
        public $assertPostConditions = \false;
        public $tearDown = \false;
        public $testSomething = \false;
        protected function setUp()
        {
        }
        protected function assertPreConditions()
        {
        }
        public function testSomething()
        {
        }
        protected function assertPostConditions()
        {
        }
        protected function tearDown()
        {
        }
    }
    class NoTestCases extends \PHPUnit\Framework\TestCase
    {
        public function noTestCase()
        {
        }
    }
    class BeforeAndAfterTest extends \PHPUnit\Framework\TestCase
    {
        public static $beforeWasRun;
        public static $afterWasRun;
        public static function resetProperties()
        {
        }
        /**
         * @before
         */
        public function initialSetup()
        {
        }
        /**
         * @after
         */
        public function finalTeardown()
        {
        }
        public function test1()
        {
        }
        public function test2()
        {
        }
    }
    class CoverageNoneTest extends \PHPUnit\Framework\TestCase
    {
        public function testSomething()
        {
        }
    }
    class TestAutoreferenced extends \PHPUnit\Framework\TestCase
    {
        public $myTestData = \null;
        public function testJsonEncodeException($data)
        {
        }
    }
    class DataProviderTestDoxTest extends \PHPUnit\Framework\TestCase
    {
        /**
         * @dataProvider provider
         * @testdox Does something with
         */
        public function testOne()
        {
        }
        /**
         * @dataProvider provider
         */
        public function testDoesSomethingElseWith()
        {
        }
        public function provider()
        {
        }
    }
    class Mockable
    {
        public $constructorCalled = \false;
        public $cloned = \false;
        public function __construct()
        {
        }
        public function foo()
        {
        }
        public function bar()
        {
        }
        public function __clone()
        {
        }
    }
}
namespace PHPUnit\Runner\Filter {
    abstract class GroupFilterIterator extends \RecursiveFilterIterator
    {
        /**
         * @var array
         */
        protected $groupTests = [];
        /**
         * @param RecursiveIterator $iterator
         * @param array             $groups
         * @param TestSuite         $suite
         */
        public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * @return bool
         */
        public function accept()
        {
        }
        protected abstract function doAccept($hash);
    }
    class ExcludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
    {
        /**
         * @param string $hash
         *
         * @return bool
         */
        protected function doAccept($hash)
        {
        }
    }
    class IncludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
    {
        /**
         * @param string $hash
         *
         * @return bool
         */
        protected function doAccept($hash)
        {
        }
    }
    class Factory
    {
        /**
         * @var array
         */
        private $filters = [];
        /**
         * @param ReflectionClass $filter
         * @param mixed           $args
         */
        public function addFilter(\ReflectionClass $filter, $args)
        {
        }
        /**
         * @return FilterIterator
         */
        public function factory(\Iterator $iterator, \PHPUnit\Framework\TestSuite $suite)
        {
        }
    }
    class NameFilterIterator extends \RecursiveFilterIterator
    {
        /**
         * @var string
         */
        protected $filter;
        /**
         * @var int
         */
        protected $filterMin;
        /**
         * @var int
         */
        protected $filterMax;
        /**
         * @param RecursiveIterator $iterator
         * @param string            $filter
         */
        public function __construct(\RecursiveIterator $iterator, $filter)
        {
        }
        /**
         * @param string $filter
         */
        protected function setFilter($filter)
        {
        }
        public function accept() : bool
        {
        }
    }
}
namespace PHPUnit\Runner {
    /**
     * An interface to define how a test suite should be loaded.
     */
    interface TestSuiteLoader
    {
        /**
         * @param string $suiteClassName
         * @param string $suiteClassFile
         *
         * @return ReflectionClass
         */
        public function load($suiteClassName, $suiteClassFile = '');
        /**
         * @param ReflectionClass $aClass
         *
         * @return ReflectionClass
         */
        public function reload(\ReflectionClass $aClass);
    }
    /**
     * The standard test suite loader.
     */
    class StandardTestSuiteLoader implements \PHPUnit\Runner\TestSuiteLoader
    {
        /**
         * @param string $suiteClassName
         * @param string $suiteClassFile
         *
         * @return ReflectionClass
         *
         * @throws Exception
         */
        public function load($suiteClassName, $suiteClassFile = '')
        {
        }
        /**
         * @param ReflectionClass $aClass
         *
         * @return ReflectionClass
         */
        public function reload(\ReflectionClass $aClass)
        {
        }
    }
    /**
     * Runner for PHPT test cases.
     */
    class PhptTestCase implements \PHPUnit\Framework\Test, \PHPUnit\Framework\SelfDescribing
    {
        /**
         * @var string
         */
        private $filename;
        /**
         * @var AbstractPhpProcess
         */
        private $phpUtil;
        /**
         * @var array
         */
        private $settings = ['allow_url_fopen=1', 'auto_append_file=', 'auto_prepend_file=', 'disable_functions=', 'display_errors=1', 'docref_root=', 'docref_ext=.html', 'error_append_string=', 'error_prepend_string=', 'error_reporting=-1', 'html_errors=0', 'log_errors=0', 'magic_quotes_runtime=0', 'output_handler=', 'open_basedir=', 'output_buffering=Off', 'report_memleaks=0', 'report_zend_debug=0', 'safe_mode=0', 'xdebug.default_enable=0'];
        /**
         * Constructs a test case with the given filename.
         *
         * @param string             $filename
         * @param AbstractPhpProcess $phpUtil
         *
         * @throws Exception
         */
        public function __construct($filename, $phpUtil = null)
        {
        }
        /**
         * Counts the number of test cases executed by run(TestResult result).
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * @param array  $sections
         * @param string $output
         *
         * @throws Exception
         */
        private function assertPhptExpectation(array $sections, $output)
        {
        }
        /**
         * Runs a test and collects its result in a TestResult instance.
         *
         * @param TestResult $result
         *
         * @return TestResult
         */
        public function run(\PHPUnit\Framework\TestResult $result = null)
        {
        }
        /**
         * @param array<string, string> $sections
         * @param TestResult            $result
         * @param array                 $settings
         *
         * @return bool
         */
        private function runSkip(&$sections, \PHPUnit\Framework\TestResult $result, $settings)
        {
        }
        /**
         * @param array<string, string> $sections
         */
        private function runClean(&$sections)
        {
        }
        /**
         * Returns the name of the test case.
         *
         * @return string
         */
        public function getName()
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * @return array
         *
         * @throws Exception
         */
        private function parse()
        {
        }
        /**
         * @param array<string, string> $sections
         */
        private function parseExtenal(&$sections)
        {
        }
        /**
         * @param array<string, string> $sections
         *
         * @return bool
         */
        private function validate(&$sections)
        {
        }
        /**
         * @param string $code
         *
         * @return string
         */
        private function render($code)
        {
        }
        /**
         * @return array<string, string>
         */
        private function getCoverageFiles()
        {
        }
        /**
         * @param array $settings
         *
         * @return string
         */
        private function renderForCoverage(&$settings)
        {
        }
        /**
         * @return array
         */
        private function cleanupForCoverage()
        {
        }
        /**
         * @param array $ini
         *
         * @return array
         */
        private function stringifyIni($ini)
        {
        }
        /**
         * Parse --INI-- section key value pairs and return as array.
         *
         * @param string|array
         *
         * @return array
         */
        protected function parseIniSection($content, $ini = [])
        {
        }
        /**
         * @param string $content
         *
         * @return array<string, string>
         */
        protected function parseEnvSection($content)
        {
        }
    }
}
namespace PHPUnit {
    /**
     * Marker interface for PHPUnit exceptions.
     */
    interface Exception
    {
    }
}
namespace PHPUnit\Runner {
    class Exception extends \RuntimeException implements \PHPUnit\Exception
    {
    }
    /**
     * This class defines the current version of PHPUnit.
     */
    class Version
    {
        private static $pharVersion;
        private static $version;
        /**
         * Returns the current version of PHPUnit.
         *
         * @return string
         */
        public static function id()
        {
        }
        /**
         * @return string
         */
        public static function series()
        {
        }
        /**
         * @return string
         */
        public static function getVersionString()
        {
        }
        /**
         * @return string
         */
        public static function getReleaseChannel()
        {
        }
    }
}
namespace PHPUnit\Util\Log {
    /**
     * A TestListener that generates a logfile of the test execution using the
     * TeamCity format (for use with PhpStorm, for instance).
     */
    class TeamCity extends \PHPUnit\TextUI\ResultPrinter
    {
        /**
         * @var bool
         */
        private $isSummaryTestCountPrinted = false;
        /**
         * @var string
         */
        private $startedTestName;
        /**
         * @var int|false
         */
        private $flowId;
        /**
         * @param string $progress
         */
        protected function writeProgress($progress)
        {
        }
        /**
         * @param TestResult $result
         */
        public function printResult(\PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        public function printIgnoredTest($testName, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        /**
         * @param string $eventName
         * @param array  $params
         */
        private function printEvent($eventName, $params = [])
        {
        }
        /**
         * @param \Exception $e
         *
         * @return string
         */
        private static function getMessage(\Exception $e)
        {
        }
        /**
         * @param \Exception $e
         *
         * @return string
         */
        private static function getDetails(\Exception $e)
        {
        }
        /**
         * @param mixed $value
         *
         * @return string
         */
        private static function getPrimitiveValueAsString($value)
        {
        }
        /**
         * @param  $text
         *
         * @return string
         */
        private static function escapeValue($text)
        {
        }
        /**
         * @param string $className
         *
         * @return string
         */
        private static function getFileName($className)
        {
        }
        /**
         * @param float $time microseconds
         *
         * @return int
         */
        private static function toMilliseconds($time)
        {
        }
    }
    /**
     * A TestListener that generates a logfile of the test execution in XML markup.
     *
     * The XML markup used is the same as the one that is used by the JUnit Ant task.
     */
    class JUnit extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var DOMDocument
         */
        protected $document;
        /**
         * @var DOMElement
         */
        protected $root;
        /**
         * @var bool
         */
        protected $reportUselessTests = false;
        /**
         * @var bool
         */
        protected $writeDocument = true;
        /**
         * @var DOMElement[]
         */
        protected $testSuites = [];
        /**
         * @var int[]
         */
        protected $testSuiteTests = [0];
        /**
         * @var int[]
         */
        protected $testSuiteAssertions = [0];
        /**
         * @var int[]
         */
        protected $testSuiteErrors = [0];
        /**
         * @var int[]
         */
        protected $testSuiteFailures = [0];
        /**
         * @var int[]
         */
        protected $testSuiteSkipped = [0];
        /**
         * @var int[]
         */
        protected $testSuiteTimes = [0];
        /**
         * @var int
         */
        protected $testSuiteLevel = 0;
        /**
         * @var ?DOMElement
         */
        protected $currentTestCase;
        /**
         * Constructor.
         *
         * @param mixed $out
         * @param bool  $reportUselessTests
         */
        public function __construct($out = null, $reportUselessTests = false)
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush()
        {
        }
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        /**
         * Returns the XML as a string.
         *
         * @return string
         */
        public function getXML()
        {
        }
        /**
         * Enables or disables the writing of the document
         * in flush().
         *
         * This is a "hack" needed for the integration of
         * PHPUnit with Phing.
         *
         * @return string
         */
        public function setWriteDocument($flag)
        {
        }
        /**
         * Method which generalizes addError() and addFailure()
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         * @param string     $type
         */
        private function doAddFault(\PHPUnit\Framework\Test $test, \Exception $e, $time, $type)
        {
        }
        private function doAddSkipped(\PHPUnit\Framework\Test $test)
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Utility class for textual type (and value) representation.
     */
    class Type
    {
        /**
         * @param string $type
         *
         * @return bool
         */
        public static function isType($type)
        {
        }
    }
    /**
     * Error handler that converts PHP errors and warnings to exceptions.
     */
    class RegularExpression
    {
        /**
         * @param string $pattern
         * @param string $subject
         * @param null   $matches
         * @param int    $flags
         * @param int    $offset
         *
         * @return int
         */
        public static function safeMatch($pattern, $subject, $matches = null, $flags = 0, $offset = 0)
        {
        }
    }
    /**
     * Utility class for code filtering.
     */
    class Filter
    {
        /**
         * Filters stack frames from PHPUnit classes.
         *
         * @param \Throwable $e
         * @param bool       $asString
         *
         * @return string|string[]
         */
        public static function getFilteredStacktrace($e, $asString = true)
        {
        }
        /**
         * @param array  $trace
         * @param string $file
         * @param int    $line
         *
         * @return bool
         */
        private static function frameExists(array $trace, $file, $line)
        {
        }
    }
    class XmlTestListRenderer
    {
        public function render(\PHPUnit\Framework\TestSuite $suite) : string
        {
        }
    }
    /**
     * Filesystem helpers.
     */
    class Filesystem
    {
        /**
         * @var array
         */
        protected static $buffer = [];
        /**
         * Maps class names to source file names:
         *   - PEAR CS:   Foo_Bar_Baz -> Foo/Bar/Baz.php
         *   - Namespace: Foo\Bar\Baz -> Foo/Bar/Baz.php
         *
         * @param string $className
         *
         * @return string
         */
        public static function classNameToFilename($className)
        {
        }
    }
    /**
     * Error handler that converts PHP errors and warnings to exceptions.
     */
    class ErrorHandler
    {
        protected static $errorStack = [];
        /**
         * Returns the error stack.
         *
         * @return array
         */
        public static function getErrorStack()
        {
        }
        /**
         * @param int    $errno
         * @param string $errstr
         * @param string $errfile
         * @param int    $errline
         *
         * @return false
         *
         * @throws Error
         */
        public static function handleError($errno, $errstr, $errfile, $errline)
        {
        }
        /**
         * Registers an error handler and returns a function that will restore
         * the previous handler when invoked
         *
         * @param int $severity PHP predefined error constant
         *
         * @return \Closure
         *
         * @throws \Exception if event of specified severity is emitted
         */
        public static function handleErrorOnce($severity = E_WARNING)
        {
        }
    }
    /**
     * Utility methods to load PHP sourcefiles.
     */
    class Fileloader
    {
        /**
         * Checks if a PHP sourcefile is readable.
         * The sourcefile is loaded through the load() method.
         *
         * @param string $filename
         *
         * @return string
         *
         * @throws Exception
         */
        public static function checkAndLoad($filename)
        {
        }
        /**
         * Loads a PHP sourcefile.
         *
         * @param string $filename
         *
         * @return mixed
         */
        public static function load($filename)
        {
        }
    }
    /**
     * Wrapper for the PHPUnit XML configuration file.
     *
     * Example XML configuration file:
     * <code>
     * <?xml version="1.0" encoding="utf-8" ?>
     *
     * <phpunit backupGlobals="false"
     *          backupStaticAttributes="false"
     *          bootstrap="/path/to/bootstrap.php"
     *          cacheTokens="false"
     *          columns="80"
     *          colors="false"
     *          stderr="false"
     *          convertDeprecationsToExceptions="true"
     *          convertErrorsToExceptions="true"
     *          convertNoticesToExceptions="true"
     *          convertWarningsToExceptions="true"
     *          forceCoversAnnotation="false"
     *          processIsolation="false"
     *          stopOnError="false"
     *          stopOnFailure="false"
     *          stopOnWarning="false"
     *          stopOnIncomplete="false"
     *          stopOnRisky="false"
     *          stopOnSkipped="false"
     *          failOnWarning="false"
     *          failOnRisky="false"
     *          extensionsDirectory="tools/phpunit.d"
     *          printerClass="PHPUnit\TextUI\ResultPrinter"
     *          testSuiteLoaderClass="PHPUnit\Runner\StandardTestSuiteLoader"
     *          defaultTestSuite=""
     *          beStrictAboutChangesToGlobalState="false"
     *          beStrictAboutCoversAnnotation="false"
     *          beStrictAboutOutputDuringTests="false"
     *          beStrictAboutResourceUsageDuringSmallTests="false"
     *          beStrictAboutTestsThatDoNotTestAnything="false"
     *          beStrictAboutTodoAnnotatedTests="false"
     *          enforceTimeLimit="false"
     *          ignoreDeprecatedCodeUnitsFromCodeCoverage="false"
     *          timeoutForSmallTests="1"
     *          timeoutForMediumTests="10"
     *          timeoutForLargeTests="60"
     *          verbose="false"
     *          reverseDefectList="false"
     *          registerMockObjectsFromTestArgumentsRecursively="false">
     *   <testsuites>
     *     <testsuite name="My Test Suite">
     *       <directory suffix="Test.php" phpVersion="5.3.0" phpVersionOperator=">=">/path/to/files</directory>
     *       <file phpVersion="5.3.0" phpVersionOperator=">=">/path/to/MyTest.php</file>
     *       <exclude>/path/to/files/exclude</exclude>
     *     </testsuite>
     *   </testsuites>
     *
     *   <groups>
     *     <include>
     *       <group>name</group>
     *     </include>
     *     <exclude>
     *       <group>name</group>
     *     </exclude>
     *   </groups>
     *
     *   <testdoxGroups>
     *     <include>
     *       <group>name</group>
     *     </include>
     *     <exclude>
     *       <group>name</group>
     *     </exclude>
     *   </testdoxGroups>
     *
     *   <filter>
     *     <whitelist addUncoveredFilesFromWhitelist="true"
     *                processUncoveredFilesFromWhitelist="false">
     *       <directory suffix=".php">/path/to/files</directory>
     *       <file>/path/to/file</file>
     *       <exclude>
     *         <directory suffix=".php">/path/to/files</directory>
     *         <file>/path/to/file</file>
     *       </exclude>
     *     </whitelist>
     *   </filter>
     *
     *   <listeners>
     *     <listener class="MyListener" file="/optional/path/to/MyListener.php">
     *       <arguments>
     *         <array>
     *           <element key="0">
     *             <string>Sebastian</string>
     *           </element>
     *         </array>
     *         <integer>22</integer>
     *         <string>April</string>
     *         <double>19.78</double>
     *         <null/>
     *         <object class="stdClass"/>
     *         <file>MyRelativeFile.php</file>
     *         <directory>MyRelativeDir</directory>
     *       </arguments>
     *     </listener>
     *   </listeners>
     *
     *   <logging>
     *     <log type="coverage-html" target="/tmp/report" lowUpperBound="50" highLowerBound="90"/>
     *     <log type="coverage-clover" target="/tmp/clover.xml"/>
     *     <log type="coverage-crap4j" target="/tmp/crap.xml" threshold="30"/>
     *     <log type="json" target="/tmp/logfile.json"/>
     *     <log type="plain" target="/tmp/logfile.txt"/>
     *     <log type="teamcity" target="/tmp/logfile.txt"/>
     *     <log type="junit" target="/tmp/logfile.xml"/>
     *     <log type="testdox-html" target="/tmp/testdox.html"/>
     *     <log type="testdox-text" target="/tmp/testdox.txt"/>
     *     <log type="testdox-xml" target="/tmp/testdox.xml"/>
     *   </logging>
     *
     *   <php>
     *     <includePath>.</includePath>
     *     <ini name="foo" value="bar"/>
     *     <const name="foo" value="bar"/>
     *     <var name="foo" value="bar"/>
     *     <env name="foo" value="bar"/>
     *     <post name="foo" value="bar"/>
     *     <get name="foo" value="bar"/>
     *     <cookie name="foo" value="bar"/>
     *     <server name="foo" value="bar"/>
     *     <files name="foo" value="bar"/>
     *     <request name="foo" value="bar"/>
     *   </php>
     * </phpunit>
     * </code>
     */
    class Configuration
    {
        const TEST_SUITE_FILTER_SEPARATOR = ',';
        private static $instances = [];
        protected $document;
        protected $xpath;
        protected $filename;
        /**
         * Loads a PHPUnit configuration file.
         *
         * @param string $filename
         */
        protected function __construct($filename)
        {
        }
        /**
         * @codeCoverageIgnore
         */
        private final function __clone()
        {
        }
        /**
         * Returns a PHPUnit configuration object.
         *
         * @param string $filename
         *
         * @return Configuration
         */
        public static function getInstance($filename)
        {
        }
        /**
         * Returns the realpath to the configuration file.
         *
         * @return string
         */
        public function getFilename()
        {
        }
        /**
         * Returns the configuration for SUT filtering.
         *
         * @return array
         */
        public function getFilterConfiguration()
        {
        }
        /**
         * Returns the configuration for groups.
         *
         * @return array
         */
        public function getGroupConfiguration()
        {
        }
        /**
         * Returns the configuration for testdox groups.
         *
         * @return array
         */
        public function getTestdoxGroupConfiguration()
        {
        }
        /**
         * @param string $root
         *
         * @return array
         */
        private function parseGroupConfiguration($root)
        {
        }
        /**
         * Returns the configuration for listeners.
         *
         * @return array
         */
        public function getListenerConfiguration()
        {
        }
        /**
         * Returns the logging configuration.
         *
         * @return array
         */
        public function getLoggingConfiguration()
        {
        }
        /**
         * Returns the PHP configuration.
         *
         * @return array
         */
        public function getPHPConfiguration()
        {
        }
        /**
         * Handles the PHP configuration.
         */
        public function handlePHPConfiguration()
        {
        }
        /**
         * Returns the PHPUnit configuration.
         *
         * @return array
         */
        public function getPHPUnitConfiguration()
        {
        }
        /**
         * Returns the test suite configuration.
         *
         * @param string|null $testSuiteFilter
         *
         * @return TestSuite
         */
        public function getTestSuiteConfiguration($testSuiteFilter = null)
        {
        }
        /**
         * Returns the test suite names from the configuration.
         *
         * @return array
         */
        public function getTestSuiteNames()
        {
        }
        /**
         * @param DOMElement  $testSuiteNode
         * @param string|null $testSuiteFilter
         *
         * @return TestSuite
         */
        protected function getTestSuite(\DOMElement $testSuiteNode, $testSuiteFilter = null)
        {
        }
        /**
         * if $value is 'false' or 'true', this returns the value that $value represents.
         * Otherwise, returns $default, which may be a string in rare cases.
         * See PHPUnit\Util\ConfigurationTest::testPHPConfigurationIsReadCorrectly
         *
         * @param string      $value
         * @param string|bool $default
         *
         * @return string|bool
         */
        protected function getBoolean($value, $default)
        {
        }
        /**
         * @param string $value
         * @param int    $default
         *
         * @return int
         */
        protected function getInteger($value, $default)
        {
        }
        /**
         * @param string $query
         *
         * @return array
         */
        protected function readFilterDirectories($query)
        {
        }
        /**
         * @param string $query
         *
         * @return array
         */
        protected function readFilterFiles($query)
        {
        }
        /**
         * @param string $path
         * @param bool   $useIncludePath
         *
         * @return string
         */
        protected function toAbsolutePath($path, $useIncludePath = false)
        {
        }
    }
    /**
     * Command-line options parsing class.
     */
    class Getopt
    {
        public static function getopt(array $args, $short_options, $long_options = null)
        {
        }
        protected static function parseShortOption($arg, $short_options, &$opts, &$args)
        {
        }
        protected static function parseLongOption($arg, $long_options, &$opts, &$args)
        {
        }
    }
}
namespace PHPUnit\Util\PHP {
    /**
     * Utility methods for PHP sub-processes.
     */
    abstract class AbstractPhpProcess
    {
        /**
         * @var Runtime
         */
        protected $runtime;
        /**
         * @var bool
         */
        protected $stderrRedirection = false;
        /**
         * @var string
         */
        protected $stdin = '';
        /**
         * @var string
         */
        protected $args = '';
        /**
         * @var array<string, string>
         */
        protected $env = [];
        /**
         * @var int
         */
        protected $timeout = 0;
        /**
         * Creates internal Runtime instance.
         */
        public function __construct()
        {
        }
        /**
         * Defines if should use STDERR redirection or not.
         *
         * Then $stderrRedirection is TRUE, STDERR is redirected to STDOUT.
         *
         * @throws Exception
         *
         * @param bool $stderrRedirection
         */
        public function setUseStderrRedirection($stderrRedirection)
        {
        }
        /**
         * Returns TRUE if uses STDERR redirection or FALSE if not.
         *
         * @return bool
         */
        public function useStderrRedirection()
        {
        }
        /**
         * Sets the input string to be sent via STDIN
         *
         * @param string $stdin
         */
        public function setStdin($stdin)
        {
        }
        /**
         * Returns the input string to be sent via STDIN
         *
         * @return string
         */
        public function getStdin()
        {
        }
        /**
         * Sets the string of arguments to pass to the php job
         *
         * @param string $args
         */
        public function setArgs($args)
        {
        }
        /**
         * Returns the string of arguments to pass to the php job
         *
         * @retrun string
         */
        public function getArgs()
        {
        }
        /**
         * Sets the array of environment variables to start the child process with
         *
         * @param array<string, string> $env
         */
        public function setEnv(array $env)
        {
        }
        /**
         * Returns the array of environment variables to start the child process with
         *
         * @return array<string, string>
         */
        public function getEnv()
        {
        }
        /**
         * Sets the amount of seconds to wait before timing out
         *
         * @param int $timeout
         */
        public function setTimeout($timeout)
        {
        }
        /**
         * Returns the amount of seconds to wait before timing out
         *
         * @return int
         */
        public function getTimeout()
        {
        }
        /**
         * @return AbstractPhpProcess
         */
        public static function factory()
        {
        }
        /**
         * Runs a single test in a separate PHP process.
         *
         * @param string     $job
         * @param Test       $test
         * @param TestResult $result
         *
         * @throws Exception
         */
        public function runTestJob($job, \PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * Returns the command based into the configurations.
         *
         * @param array       $settings
         * @param string|null $file
         *
         * @return string
         */
        public function getCommand(array $settings, $file = null)
        {
        }
        /**
         * Runs a single job (PHP code) using a separate PHP process.
         *
         * @param string $job
         * @param array  $settings
         *
         * @return array
         *
         * @throws Exception
         */
        public abstract function runJob($job, array $settings = []);
        /**
         * @param array $settings
         *
         * @return string
         */
        protected function settingsToParameters(array $settings)
        {
        }
        /**
         * Processes the TestResult object from an isolated process.
         *
         * @param Test       $test
         * @param TestResult $result
         * @param string     $stdout
         * @param string     $stderr
         */
        private function processChildResult(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result, $stdout, $stderr)
        {
        }
        /**
         * Gets the thrown exception from a PHPUnit\Framework\TestFailure.
         *
         * @param TestFailure $error
         *
         * @return Exception
         *
         * @see    https://github.com/sebastianbergmann/phpunit/issues/74
         */
        private function getException(\PHPUnit\Framework\TestFailure $error)
        {
        }
    }
    /**
     * Default utility for PHP sub-processes.
     */
    class DefaultPhpProcess extends \PHPUnit\Util\PHP\AbstractPhpProcess
    {
        /**
         * @var string
         */
        protected $tempFile;
        /**
         * @var bool
         */
        protected $useTempFile = false;
        /**
         * Runs a single job (PHP code) using a separate PHP process.
         *
         * @param string $job
         * @param array  $settings
         *
         * @return array<string, string>
         *
         * @throws Exception
         */
        public function runJob($job, array $settings = [])
        {
        }
        /**
         * Returns an array of file handles to be used in place of pipes
         *
         * @return array
         */
        protected function getHandles()
        {
        }
        /**
         * Handles creating the child process and returning the STDOUT and STDERR
         *
         * @param string $job
         * @param array  $settings
         *
         * @return array<string, string>
         *
         * @throws Exception
         */
        protected function runProcess($job, $settings)
        {
        }
        /**
         * @param resource $pipe
         * @param string   $job
         *
         * @throws Exception
         */
        protected function process($pipe, $job)
        {
        }
        protected function cleanup()
        {
        }
    }
    /**
     * Windows utility for PHP sub-processes.
     *
     * Reading from STDOUT or STDERR hangs forever on Windows if the output is
     * too large.
     *
     * @see https://bugs.php.net/bug.php?id=51800
     */
    class WindowsPhpProcess extends \PHPUnit\Util\PHP\DefaultPhpProcess
    {
        protected $useTempFile = true;
        protected function getHandles()
        {
        }
        public function getCommand(array $settings, $file = null)
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Factory for PHPUnit\Framework\Exception objects that are used to describe
     * invalid arguments passed to a function or method.
     */
    class InvalidArgumentHelper
    {
        /**
         * @param int    $argument
         * @param string $type
         * @param mixed  $value
         *
         * @return Exception
         */
        public static function factory($argument, $type, $value = null)
        {
        }
    }
    class ConfigurationGenerator
    {
        /**
         * @var string
         */
        private $defaultTemplate = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/{phpunit_version}/phpunit.xsd"
         bootstrap="{bootstrap_script}"
         forceCoversAnnotation="true"
         beStrictAboutCoversAnnotation="true"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTodoAnnotatedTests="true"
         verbose="true">
    <testsuite name="default">
        <directory suffix="Test.php">{tests_directory}</directory>
    </testsuite>

    <filter>
        <whitelist processUncoveredFilesFromWhitelist="true">
            <directory suffix=".php">{src_directory}</directory>
        </whitelist>
    </filter>
</phpunit>

EOT;
        /**
         * @param string $phpunitVersion
         * @param string $bootstrapScript
         * @param string $testsDirectory
         * @param string $srcDirectory
         *
         * @return string
         */
        public function generateDefaultConfiguration($phpunitVersion, $bootstrapScript, $testsDirectory, $srcDirectory)
        {
        }
    }
    class Json
    {
        /**
         * Prettify json string
         *
         * @param string $json
         *
         * @return string
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public static function prettify(string $json)
        {
        }
        /*
         * To allow comparison of JSON strings, first process them into a consistent
         * format so that they can be compared as strings.
         * @return array ($error, $canonicalized_json)  The $error parameter is used
         * to indicate an error decoding the json.  This is used to avoid ambiguity
         * with JSON strings consisting entirely of 'null' or 'false'.
         */
        public static function canonicalize(string $json)
        {
        }
        /*
         * JSON object keys are unordered while PHP array keys are ordered.
         * Sort all array keys to ensure both the expected and actual values have
         * their keys in the same order.
         */
        private static function recursiveSort(&$json)
        {
        }
    }
    /**
     * XML helpers.
     */
    class Xml
    {
        /**
         * Load an $actual document into a DOMDocument.  This is called
         * from the selector assertions.
         *
         * If $actual is already a DOMDocument, it is returned with
         * no changes.  Otherwise, $actual is loaded into a new DOMDocument
         * as either HTML or XML, depending on the value of $isHtml. If $isHtml is
         * false and $xinclude is true, xinclude is performed on the loaded
         * DOMDocument.
         *
         * Note: prior to PHPUnit 3.3.0, this method loaded a file and
         * not a string as it currently does.  To load a file into a
         * DOMDocument, use loadFile() instead.
         *
         * @param string|DOMDocument $actual
         * @param bool               $isHtml
         * @param string             $filename
         * @param bool               $xinclude
         * @param bool               $strict
         *
         * @return DOMDocument
         */
        public static function load($actual, $isHtml = false, $filename = '', $xinclude = false, $strict = false)
        {
        }
        /**
         * Loads an XML (or HTML) file into a DOMDocument object.
         *
         * @param string $filename
         * @param bool   $isHtml
         * @param bool   $xinclude
         * @param bool   $strict
         *
         * @return DOMDocument
         */
        public static function loadFile($filename, $isHtml = false, $xinclude = false, $strict = false)
        {
        }
        /**
         * @param DOMNode $node
         */
        public static function removeCharacterDataNodes(\DOMNode $node)
        {
        }
        /**
         * Escapes a string for the use in XML documents
         * Any Unicode character is allowed, excluding the surrogate blocks, FFFE,
         * and FFFF (not even as character reference).
         * See http://www.w3.org/TR/xml/#charsets
         *
         * @param string $string
         *
         * @return string
         */
        public static function prepareString($string)
        {
        }
        /**
         * "Convert" a DOMElement object into a PHP variable.
         *
         * @param DOMElement $element
         *
         * @return mixed
         */
        public static function xmlToVariable(\DOMElement $element)
        {
        }
        /**
         * Converts a string to UTF-8 encoding.
         *
         * @param string $string
         *
         * @return string
         */
        private static function convertToUtf8($string)
        {
        }
        /**
         * Checks a string for UTF-8 encoding.
         *
         * @param string $string
         *
         * @return bool
         */
        private static function isUtf8($string)
        {
        }
    }
}
namespace PHPUnit\Util\TestDox {
    /**
     * Base class for printers of TestDox documentation.
     */
    abstract class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var NamePrettifier
         */
        protected $prettifier;
        /**
         * @var string
         */
        protected $testClass = '';
        /**
         * @var int
         */
        protected $testStatus;
        /**
         * @var array
         */
        protected $tests = [];
        /**
         * @var int
         */
        protected $successful = 0;
        /**
         * @var int
         */
        protected $warned = 0;
        /**
         * @var int
         */
        protected $failed = 0;
        /**
         * @var int
         */
        protected $risky = 0;
        /**
         * @var int
         */
        protected $skipped = 0;
        /**
         * @var int
         */
        protected $incomplete = 0;
        /**
         * @var string|null
         */
        protected $currentTestClassPrettified;
        /**
         * @var string|null
         */
        protected $currentTestMethodPrettified;
        /**
         * @var array
         */
        private $groups;
        /**
         * @var array
         */
        private $excludeGroups;
        /**
         * @param resource $out
         * @param array    $groups
         * @param array    $excludeGroups
         */
        public function __construct($out = null, array $groups = [], array $excludeGroups = [])
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush()
        {
        }
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        protected function doEndClass()
        {
        }
        /**
         * Handler for 'start run' event.
         */
        protected function startRun()
        {
        }
        /**
         * Handler for 'start class' event.
         *
         * @param string $name
         */
        protected function startClass($name)
        {
        }
        /**
         * Handler for 'on test' event.
         *
         * @param string $name
         * @param bool   $success
         */
        protected function onTest($name, $success = true)
        {
        }
        /**
         * Handler for 'end class' event.
         *
         * @param string $name
         */
        protected function endClass($name)
        {
        }
        /**
         * Handler for 'end run' event.
         */
        protected function endRun()
        {
        }
        /**
         * @param Test $test
         *
         * @return bool
         */
        private function isOfInterest(\PHPUnit\Framework\Test $test)
        {
        }
    }
    /**
     * Prettifies class and method names for use in TestDox documentation.
     */
    class NamePrettifier
    {
        /**
         * @var string
         */
        protected $prefix = 'Test';
        /**
         * @var string
         */
        protected $suffix = 'Test';
        /**
         * @var array
         */
        protected $strings = [];
        /**
         * Prettifies the name of a test class.
         *
         * @param string $name
         *
         * @return string
         */
        public function prettifyTestClass($name)
        {
        }
        /**
         * Prettifies the name of a test method.
         *
         * @param string $name
         *
         * @return string
         */
        public function prettifyTestMethod($name)
        {
        }
        /**
         * Sets the prefix of test names.
         *
         * @param string $prefix
         */
        public function setPrefix($prefix)
        {
        }
        /**
         * Sets the suffix of test names.
         *
         * @param string $suffix
         */
        public function setSuffix($suffix)
        {
        }
    }
    class XmlResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
    {
        /**
         * @var DOMDocument
         */
        private $document;
        /**
         * @var DOMElement
         */
        private $root;
        /**
         * @var NamePrettifier
         */
        private $prettifier;
        /**
         * @var \Exception|null
         */
        private $exception;
        /**
         * @param string|resource $out
         */
        public function __construct($out = null)
        {
        }
        /**
         * Flush buffer and close output.
         */
        public function flush()
        {
        }
        /**
         * An error occurred.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addRiskyTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param Test       $test
         * @param \Exception $e
         * @param float      $time
         */
        public function addSkippedTest(\PHPUnit\Framework\Test $test, \Exception $e, $time)
        {
        }
        /**
         * A test suite started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test suite ended.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
    }
    /**
     * Prints TestDox documentation in text format.
     */
    class TextResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
    {
        /**
         * Handler for 'start class' event.
         *
         * @param string $name
         */
        protected function startClass($name)
        {
        }
        /**
         * Handler for 'on test' event.
         *
         * @param string $name
         * @param bool   $success
         */
        protected function onTest($name, $success = true)
        {
        }
        /**
         * Handler for 'end class' event.
         *
         * @param string $name
         */
        protected function endClass($name)
        {
        }
    }
    /**
     * Prints TestDox documentation in HTML format.
     */
    class HtmlResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
    {
        /**
         * @var string
         */
        private $pageHeader = <<<EOT
<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <title>Test Documentation</title>
        <style>
            body {
                text-rendering: optimizeLegibility;
                font-variant-ligatures: common-ligatures;
                font-kerning: normal;
                margin-left: 2em;
            }

            body > ul > li {
                font-family: Source Serif Pro, PT Sans, Trebuchet MS, Helvetica, Arial;
                font-size: 2em;
            }

            h2 {
                font-family: Tahoma, Helvetica, Arial;
                font-size: 3em;
            }

            ul {
                list-style: none;
                margin-bottom: 1em;
            }
        </style>
    </head>
    <body>
EOT;
        /**
         * @var string
         */
        private $classHeader = <<<EOT

        <h2 id="%s">%s</h2>
        <ul>

EOT;
        /**
         * @var string
         */
        private $classFooter = <<<EOT
        </ul>
EOT;
        /**
         * @var string
         */
        private $pageFooter = <<<EOT

    </body>
</html>
EOT;
        /**
         * Handler for 'start run' event.
         */
        protected function startRun()
        {
        }
        /**
         * Handler for 'start class' event.
         *
         * @param string $name
         */
        protected function startClass($name)
        {
        }
        /**
         * Handler for 'on test' event.
         *
         * @param string $name
         * @param bool   $success
         */
        protected function onTest($name, $success = true)
        {
        }
        /**
         * Handler for 'end class' event.
         *
         * @param string $name
         */
        protected function endClass($name)
        {
        }
        /**
         * Handler for 'end run' event.
         */
        protected function endRun()
        {
        }
    }
}
namespace PHPUnit\Util {
    /**
     * Utility class for blacklisting PHPUnit's own source code files.
     */
    class Blacklist
    {
        /**
         * @var array
         */
        public static $blacklistedClassNames = ['File_Iterator' => 1, 'PHP_Invoker' => 1, 'PHP_Timer' => 1, 'PHP_Token' => 1, 'PHPUnit\\Framework\\TestCase' => 2, 'PHPUnit\\DbUnit\\TestCase' => 2, 'PHPUnit\\Framework\\MockObject\\Generator' => 1, 'Text_Template' => 1, 'Symfony\\Component\\Yaml\\Yaml' => 1, 'SebastianBergmann\\CodeCoverage\\CodeCoverage' => 1, 'SebastianBergmann\\Diff\\Diff' => 1, 'SebastianBergmann\\Environment\\Runtime' => 1, 'SebastianBergmann\\Comparator\\Comparator' => 1, 'SebastianBergmann\\Exporter\\Exporter' => 1, 'SebastianBergmann\\GlobalState\\Snapshot' => 1, 'SebastianBergmann\\RecursionContext\\Context' => 1, 'SebastianBergmann\\Version' => 1, 'Composer\\Autoload\\ClassLoader' => 1, 'Doctrine\\Instantiator\\Instantiator' => 1, 'phpDocumentor\\Reflection\\DocBlock' => 1, 'Prophecy\\Prophet' => 1, 'DeepCopy\\DeepCopy' => 1];
        /**
         * @var string[]
         */
        private static $directories;
        /**
         * @return string[]
         */
        public function getBlacklistedDirectories()
        {
        }
        /**
         * @param string $file
         *
         * @return bool
         */
        public function isBlacklisted($file)
        {
        }
        private function initialize()
        {
        }
    }
    class TextTestListRenderer
    {
        public function render(\PHPUnit\Framework\TestSuite $suite) : string
        {
        }
    }
    class GlobalState
    {
        /**
         * @var string[]
         */
        protected static $superGlobalArrays = ['_ENV', '_POST', '_GET', '_COOKIE', '_SERVER', '_FILES', '_REQUEST'];
        /**
         * @return string
         */
        public static function getIncludedFilesAsString()
        {
        }
        /**
         * @param array $files
         *
         * @return string
         */
        public static function processIncludedFilesAsString(array $files)
        {
        }
        /**
         * @return string
         */
        public static function getIniSettingsAsString()
        {
        }
        /**
         * @return string
         */
        public static function getConstantsAsString()
        {
        }
        /**
         * @return string
         */
        public static function getGlobalsAsString()
        {
        }
        /**
         * @return string[]
         */
        protected static function getSuperGlobalArrays()
        {
        }
        protected static function exportVariable($variable)
        {
        }
        /**
         * @param array $array
         *
         * @return bool
         */
        protected static function arrayOnlyContainsScalars(array $array)
        {
        }
    }
    /**
     * Test helpers.
     */
    class Test
    {
        const REGEX_DATA_PROVIDER = '/@dataProvider\\s+([a-zA-Z0-9._:-\\\\x7f-\\xff]+)/';
        const REGEX_TEST_WITH = '/@testWith\\s+/';
        const REGEX_EXPECTED_EXCEPTION = '(@expectedException\\s+([:.\\w\\\\x7f-\\xff]+)(?:[\\t ]+(\\S*))?(?:[\\t ]+(\\S*))?\\s*$)m';
        const REGEX_REQUIRES_VERSION = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+(dev|(RC|alpha|beta)[\\d\\.])?)[ \\t]*\\r?$/m';
        const REGEX_REQUIRES_VERSION_CONSTRAINT = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<constraint>[\\d\\t -.|~^]+)[ \\t]*\\r?$/m';
        const REGEX_REQUIRES_OS = '/@requires\\s+(?P<name>OS(?:FAMILY)?)\\s+(?P<value>.+?)[ \\t]*\\r?$/m';
        const REGEX_REQUIRES = '/@requires\\s+(?P<name>function|extension)\\s+(?P<value>([^\\s<>=!]+))\\s*(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+[\\d\\.]?)?[ \\t]*\\r?$/m';
        const UNKNOWN = -1;
        const SMALL = 0;
        const MEDIUM = 1;
        const LARGE = 2;
        private static $annotationCache = [];
        private static $hookMethods = [];
        /**
         * @param \PHPUnit\Framework\Test $test
         * @param bool                    $asString
         *
         * @return mixed
         */
        public static function describe(\PHPUnit\Framework\Test $test, $asString = true)
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         *
         * @return array|bool
         *
         * @throws CodeCoverageException
         */
        public static function getLinesToBeCovered($className, $methodName)
        {
        }
        /**
         * Returns lines of code specified with the @uses annotation.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getLinesToBeUsed($className, $methodName)
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         * @param string $mode
         *
         * @return array
         *
         * @throws CodeCoverageException
         */
        private static function getLinesToBeCoveredOrUsed($className, $methodName, $mode)
        {
        }
        /**
         * Returns the requirements for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getRequirements($className, $methodName)
        {
        }
        /**
         * Returns the missing requirements for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return string[]
         */
        public static function getMissingRequirements($className, $methodName)
        {
        }
        /**
         * Returns the expected exception for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array|false
         */
        public static function getExpectedException($className, $methodName)
        {
        }
        /**
         * Parse annotation content to use constant/class constant values
         *
         * Constants are specified using a starting '@'. For example: @ClassName::CONST_NAME
         *
         * If the constant is not found the string is used as is to ensure maximum BC.
         *
         * @param string $message
         *
         * @return string
         */
        private static function parseAnnotationContent($message)
        {
        }
        /**
         * Returns the provided data for a method.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array When a data provider is specified and exists
         *               null  When no data provider is specified
         *
         * @throws Exception
         */
        public static function getProvidedData($className, $methodName)
        {
        }
        /**
         * Returns the provided data for a method.
         *
         * @param string $docComment
         * @param string $className
         * @param string $methodName
         *
         * @return array|Iterator when a data provider is specified and exists
         *                        null           when no data provider is specified
         *
         * @throws Exception
         */
        private static function getDataFromDataProviderAnnotation($docComment, $className, $methodName)
        {
        }
        /**
         * @param string $docComment full docComment string
         *
         * @return array|null array when @testWith annotation is defined,
         *                    null when @testWith annotation is omitted
         *
         * @throws Exception when @testWith annotation is defined but cannot be parsed
         */
        public static function getDataFromTestWithAnnotation($docComment)
        {
        }
        private static function cleanUpMultiLineAnnotation($docComment)
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         *
         * @return array
         *
         * @throws ReflectionException
         */
        public static function parseTestMethodAnnotations($className, $methodName = '')
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getInlineAnnotations($className, $methodName)
        {
        }
        /**
         * @param string $docblock
         *
         * @return array
         */
        private static function parseAnnotations($docblock)
        {
        }
        /**
         * Returns the backup settings for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array<string, bool|null>
         */
        public static function getBackupSettings($className, $methodName)
        {
        }
        /**
         * Returns the dependencies for a test class or method.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getDependencies($className, $methodName)
        {
        }
        /**
         * Returns the error handler settings for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return ?bool
         */
        public static function getErrorHandlerSettings($className, $methodName)
        {
        }
        /**
         * Returns the groups for a test class or method.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getGroups($className, $methodName = '')
        {
        }
        /**
         * Returns the size of the test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return int
         */
        public static function getSize($className, $methodName)
        {
        }
        /**
         * Returns the process isolation settings for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return bool
         */
        public static function getProcessIsolationSettings($className, $methodName)
        {
        }
        public static function getClassProcessIsolationSettings($className, $methodName)
        {
        }
        /**
         * Returns the preserve global state settings for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return ?bool
         */
        public static function getPreserveGlobalStateSettings($className, $methodName)
        {
        }
        /**
         * @param string $className
         *
         * @return array
         */
        public static function getHookMethods($className)
        {
        }
        /**
         * @return array
         */
        private static function emptyHookMethodsArray()
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         * @param string $settingName
         *
         * @return ?bool
         */
        private static function getBooleanAnnotationSetting($className, $methodName, $settingName)
        {
        }
        /**
         * @param string $element
         *
         * @return array
         *
         * @throws InvalidCoversTargetException
         */
        private static function resolveElementToReflectionObjects($element)
        {
        }
        /**
         * @param array $reflectors
         *
         * @return array
         */
        private static function resolveReflectionObjectsToLines(array $reflectors)
        {
        }
        /**
         * @param ReflectionMethod $method
         *
         * @return bool
         */
        private static function isBeforeClassMethod(\ReflectionMethod $method)
        {
        }
        /**
         * @param ReflectionMethod $method
         *
         * @return bool
         */
        private static function isBeforeMethod(\ReflectionMethod $method)
        {
        }
        /**
         * @param ReflectionMethod $method
         *
         * @return bool
         */
        private static function isAfterClassMethod(\ReflectionMethod $method)
        {
        }
        /**
         * @param ReflectionMethod $method
         *
         * @return bool
         */
        private static function isAfterMethod(\ReflectionMethod $method)
        {
        }
        /**
         * Trims any extensions from version string that follows after
         * the <major>.<minor>[.<patch>] format
         *
         * @param $version (Optional)
         *
         * @return mixed
         */
        private static function sanitizeVersionNumber($version)
        {
        }
    }
}
namespace PHPUnit\Framework {
    /**
     * A TestSuite is a composite of Tests. It runs a collection of test cases.
     */
    class TestSuite implements \PHPUnit\Framework\Test, \PHPUnit\Framework\SelfDescribing, \IteratorAggregate
    {
        /**
         * Last count of tests in this suite.
         *
         * @var int|null
         */
        private $cachedNumTests;
        /**
         * Enable or disable the backup and restoration of the $GLOBALS array.
         *
         * @var bool
         */
        protected $backupGlobals;
        /**
         * Enable or disable the backup and restoration of static attributes.
         *
         * @var bool
         */
        protected $backupStaticAttributes;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * The name of the test suite.
         *
         * @var string
         */
        protected $name = '';
        /**
         * The test groups of the test suite.
         *
         * @var array
         */
        protected $groups = [];
        /**
         * The tests in the test suite.
         *
         * @var TestCase[]
         */
        protected $tests = [];
        /**
         * The number of tests in the test suite.
         *
         * @var int
         */
        protected $numTests = -1;
        /**
         * @var bool
         */
        protected $testCase = false;
        /**
         * @var array
         */
        protected $foundClasses = [];
        /**
         * @var Factory
         */
        private $iteratorFilter;
        /**
         * @var string[]
         */
        private $declaredClasses;
        /**
         * Constructs a new TestSuite:
         *
         *   - PHPUnit\Framework\TestSuite() constructs an empty TestSuite.
         *
         *   - PHPUnit\Framework\TestSuite(ReflectionClass) constructs a
         *     TestSuite from the given class.
         *
         *   - PHPUnit\Framework\TestSuite(ReflectionClass, String)
         *     constructs a TestSuite from the given class with the given
         *     name.
         *
         *   - PHPUnit\Framework\TestSuite(String) either constructs a
         *     TestSuite from the given class (if the passed string is the
         *     name of an existing class) or constructs an empty TestSuite
         *     with the given name.
         *
         * @param mixed  $theClass
         * @param string $name
         *
         * @throws Exception
         */
        public function __construct($theClass = '', $name = '')
        {
        }
        /**
         * Returns a string representation of the test suite.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Adds a test to the suite.
         *
         * @param Test  $test
         * @param array $groups
         */
        public function addTest(\PHPUnit\Framework\Test $test, $groups = [])
        {
        }
        /**
         * Adds the tests from the given class to the suite.
         *
         * @param mixed $testClass
         *
         * @throws Exception
         */
        public function addTestSuite($testClass)
        {
        }
        /**
         * Wraps both <code>addTest()</code> and <code>addTestSuite</code>
         * as well as the separate import statements for the user's convenience.
         *
         * If the named file cannot be read or there are no new tests that can be
         * added, a <code>PHPUnit\Framework\WarningTestCase</code> will be created instead,
         * leaving the current test run untouched.
         *
         * @param string $filename
         *
         * @throws Exception
         */
        public function addTestFile($filename)
        {
        }
        /**
         * Wrapper for addTestFile() that adds multiple test files.
         *
         * @param array|Iterator $filenames
         *
         * @throws Exception
         */
        public function addTestFiles($filenames)
        {
        }
        /**
         * Counts the number of test cases that will be run by this test.
         *
         * @param bool $preferCache Indicates if cache is preferred.
         *
         * @return int
         */
        public function count($preferCache = false)
        {
        }
        /**
         * @param ReflectionClass $theClass
         * @param string          $name
         *
         * @return Test
         *
         * @throws Exception
         */
        public static function createTest(\ReflectionClass $theClass, $name)
        {
        }
        /**
         * Creates a default TestResult object.
         *
         * @return TestResult
         */
        protected function createResult()
        {
        }
        /**
         * Returns the name of the suite.
         *
         * @return string
         */
        public function getName()
        {
        }
        /**
         * Returns the test groups of the suite.
         *
         * @return array
         */
        public function getGroups()
        {
        }
        public function getGroupDetails()
        {
        }
        /**
         * Set tests groups of the test case
         *
         * @param array $groups
         */
        public function setGroupDetails(array $groups)
        {
        }
        /**
         * Runs the tests and collects their result in a TestResult.
         *
         * @param TestResult $result
         *
         * @return TestResult
         */
        public function run(\PHPUnit\Framework\TestResult $result = null)
        {
        }
        /**
         * @param bool $runTestInSeparateProcess
         *
         * @throws Exception
         */
        public function setRunTestInSeparateProcess($runTestInSeparateProcess)
        {
        }
        /**
         * Runs a test.
         *
         * @deprecated
         *
         * @param Test       $test
         * @param TestResult $result
         */
        public function runTest(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result)
        {
        }
        /**
         * Sets the name of the suite.
         *
         * @param  string
         */
        public function setName($name)
        {
        }
        /**
         * Returns the test at the given index.
         *
         * @param  int|false
         *
         * @return Test|false
         */
        public function testAt($index)
        {
        }
        /**
         * Returns the tests as an enumeration.
         *
         * @return array
         */
        public function tests()
        {
        }
        /**
         * Set tests of the test suite
         *
         * @param array $tests
         */
        public function setTests(array $tests)
        {
        }
        /**
         * Mark the test suite as skipped.
         *
         * @param string $message
         *
         * @throws SkippedTestSuiteError
         */
        public function markTestSuiteSkipped($message = '')
        {
        }
        /**
         * @param ReflectionClass  $class
         * @param ReflectionMethod $method
         */
        protected function addTestMethod(\ReflectionClass $class, \ReflectionMethod $method)
        {
        }
        /**
         * @param ReflectionMethod $method
         *
         * @return bool
         */
        public static function isTestMethod(\ReflectionMethod $method)
        {
        }
        /**
         * @param string $message
         *
         * @return WarningTestCase
         */
        protected static function warning($message)
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         *
         * @return SkippedTestCase
         */
        protected static function skipTest($class, $methodName, $message)
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         *
         * @return IncompleteTestCase
         */
        protected static function incompleteTest($class, $methodName, $message)
        {
        }
        /**
         * @param bool $beStrictAboutChangesToGlobalState
         */
        public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState)
        {
        }
        /**
         * @param bool $backupGlobals
         */
        public function setBackupGlobals($backupGlobals)
        {
        }
        /**
         * @param bool $backupStaticAttributes
         */
        public function setBackupStaticAttributes($backupStaticAttributes)
        {
        }
        /**
         * Returns an iterator for this test suite.
         *
         * @return TestSuiteIterator
         */
        public function getIterator()
        {
        }
        public function injectFilter(\PHPUnit\Runner\Filter\Factory $filter)
        {
        }
        /**
         * Template Method that is called before the tests
         * of this test suite are run.
         */
        protected function setUp()
        {
        }
        /**
         * Template Method that is called after the tests
         * of this test suite have finished running.
         */
        protected function tearDown()
        {
        }
    }
    class DataProviderTestSuite extends \PHPUnit\Framework\TestSuite
    {
        /**
         * Sets the dependencies of a TestCase.
         *
         * @param string[] $dependencies
         */
        public function setDependencies(array $dependencies)
        {
        }
    }
    /**
     * Base class for all PHPUnit Framework exceptions.
     *
     * Ensures that exceptions thrown during a test run do not leave stray
     * references behind.
     *
     * Every Exception contains a stack trace. Each stack frame contains the 'args'
     * of the called function. The function arguments can contain references to
     * instantiated objects. The references prevent the objects from being
     * destructed (until test results are eventually printed), so memory cannot be
     * freed up.
     *
     * With enabled process isolation, test results are serialized in the child
     * process and unserialized in the parent process. The stack trace of Exceptions
     * may contain objects that cannot be serialized or unserialized (e.g., PDO
     * connections). Unserializing user-space objects from the child process into
     * the parent would break the intended encapsulation of process isolation.
     *
     * @see http://fabien.potencier.org/article/9/php-serialization-stack-traces-and-exceptions
     */
    class Exception extends \RuntimeException implements \PHPUnit\Exception
    {
        /**
         * @var array
         */
        protected $serializableTrace;
        public function __construct($message = '', $code = 0, \Exception $previous = null)
        {
        }
        /**
         * Returns the serializable trace (without 'args').
         *
         * @return array
         */
        public function getSerializableTrace()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
        public function __sleep()
        {
        }
    }
    /**
     * Thrown when there is a warning.
     */
    class Warning extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Wrapper for getMessage() which is declared as final.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    interface SkippedTest
    {
    }
    /**
     * Thrown when an assertion failed.
     */
    class AssertionFailedError extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
    {
        /**
         * Wrapper for getMessage() which is declared as final.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    class SkippedTestSuiteError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
    {
    }
    interface RiskyTest
    {
    }
    class RiskyTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\RiskyTest
    {
    }
    /**
     * Extension to PHPUnit\Framework\AssertionFailedError to mark the special
     * case of a test that unintentionally covers code.
     */
    class UnintentionallyCoveredCodeError extends \PHPUnit\Framework\RiskyTestError
    {
    }
    class SkippedTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
    {
    }
    /**
     * A TestResult collects the results of executing a test case.
     */
    class TestResult implements \Countable
    {
        /**
         * @var array
         */
        protected $passed = [];
        /**
         * @var array
         */
        protected $errors = [];
        /**
         * @var array
         */
        protected $failures = [];
        /**
         * @var array
         */
        protected $warnings = [];
        /**
         * @var array
         */
        protected $notImplemented = [];
        /**
         * @var array
         */
        protected $risky = [];
        /**
         * @var array
         */
        protected $skipped = [];
        /**
         * @var array
         */
        protected $listeners = [];
        /**
         * @var int
         */
        protected $runTests = 0;
        /**
         * @var float
         */
        protected $time = 0;
        /**
         * @var TestSuite
         */
        protected $topTestSuite;
        /**
         * Code Coverage information.
         *
         * @var CodeCoverage
         */
        protected $codeCoverage;
        /**
         * @var bool
         */
        protected $convertErrorsToExceptions = true;
        /**
         * @var bool
         */
        protected $stop = false;
        /**
         * @var bool
         */
        protected $stopOnError = false;
        /**
         * @var bool
         */
        protected $stopOnFailure = false;
        /**
         * @var bool
         */
        protected $stopOnWarning = false;
        /**
         * @var bool
         */
        protected $beStrictAboutTestsThatDoNotTestAnything = true;
        /**
         * @var bool
         */
        protected $beStrictAboutOutputDuringTests = false;
        /**
         * @var bool
         */
        protected $beStrictAboutTodoAnnotatedTests = false;
        /**
         * @var bool
         */
        protected $beStrictAboutResourceUsageDuringSmallTests = false;
        /**
         * @var bool
         */
        protected $enforceTimeLimit = false;
        /**
         * @var int
         */
        protected $timeoutForSmallTests = 1;
        /**
         * @var int
         */
        protected $timeoutForMediumTests = 10;
        /**
         * @var int
         */
        protected $timeoutForLargeTests = 60;
        /**
         * @var bool
         */
        protected $stopOnRisky = false;
        /**
         * @var bool
         */
        protected $stopOnIncomplete = false;
        /**
         * @var bool
         */
        protected $stopOnSkipped = false;
        /**
         * @var bool
         */
        protected $lastTestFailed = false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = false;
        /**
         * Registers a TestListener.
         *
         * @param TestListener $listener
         */
        public function addListener(\PHPUnit\Framework\TestListener $listener)
        {
        }
        /**
         * Unregisters a TestListener.
         *
         * @param TestListener $listener
         */
        public function removeListener(\PHPUnit\Framework\TestListener $listener)
        {
        }
        /**
         * Flushes all flushable TestListeners.
         */
        public function flushListeners()
        {
        }
        /**
         * Adds an error to the list of errors.
         *
         * @param Test      $test
         * @param Throwable $t
         * @param float     $time
         */
        public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, $time)
        {
        }
        /**
         * Adds a warning to the list of warnings.
         * The passed in exception caused the warning.
         *
         * @param Test    $test
         * @param Warning $e
         * @param float   $time
         */
        public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, $time)
        {
        }
        /**
         * Adds a failure to the list of failures.
         * The passed in exception caused the failure.
         *
         * @param Test                 $test
         * @param AssertionFailedError $e
         * @param float                $time
         */
        public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, $time)
        {
        }
        /**
         * Informs the result that a testsuite will be started.
         *
         * @param TestSuite $suite
         */
        public function startTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * Informs the result that a testsuite was completed.
         *
         * @param TestSuite $suite
         */
        public function endTestSuite(\PHPUnit\Framework\TestSuite $suite)
        {
        }
        /**
         * Informs the result that a test will be started.
         *
         * @param Test $test
         */
        public function startTest(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * Informs the result that a test was completed.
         *
         * @param Test  $test
         * @param float $time
         */
        public function endTest(\PHPUnit\Framework\Test $test, $time)
        {
        }
        /**
         * Returns true if no risky test occurred.
         *
         * @return bool
         */
        public function allHarmless()
        {
        }
        /**
         * Gets the number of risky tests.
         *
         * @return int
         */
        public function riskyCount()
        {
        }
        /**
         * Returns true if no incomplete test occurred.
         *
         * @return bool
         */
        public function allCompletelyImplemented()
        {
        }
        /**
         * Gets the number of incomplete tests.
         *
         * @return int
         */
        public function notImplementedCount()
        {
        }
        /**
         * Returns an Enumeration for the risky tests.
         *
         * @return array
         */
        public function risky()
        {
        }
        /**
         * Returns an Enumeration for the incomplete tests.
         *
         * @return array
         */
        public function notImplemented()
        {
        }
        /**
         * Returns true if no test has been skipped.
         *
         * @return bool
         */
        public function noneSkipped()
        {
        }
        /**
         * Gets the number of skipped tests.
         *
         * @return int
         */
        public function skippedCount()
        {
        }
        /**
         * Returns an Enumeration for the skipped tests.
         *
         * @return array
         */
        public function skipped()
        {
        }
        /**
         * Gets the number of detected errors.
         *
         * @return int
         */
        public function errorCount()
        {
        }
        /**
         * Returns an Enumeration for the errors.
         *
         * @return array
         */
        public function errors()
        {
        }
        /**
         * Gets the number of detected failures.
         *
         * @return int
         */
        public function failureCount()
        {
        }
        /**
         * Returns an Enumeration for the failures.
         *
         * @return array
         */
        public function failures()
        {
        }
        /**
         * Gets the number of detected warnings.
         *
         * @return int
         */
        public function warningCount()
        {
        }
        /**
         * Returns an Enumeration for the warnings.
         *
         * @return array
         */
        public function warnings()
        {
        }
        /**
         * Returns the names of the tests that have passed.
         *
         * @return array
         */
        public function passed()
        {
        }
        /**
         * Returns the (top) test suite.
         *
         * @return TestSuite
         */
        public function topTestSuite()
        {
        }
        /**
         * Returns whether code coverage information should be collected.
         *
         * @return bool If code coverage should be collected
         */
        public function getCollectCodeCoverageInformation()
        {
        }
        /**
         * Runs a TestCase.
         *
         * @param Test $test
         */
        public function run(\PHPUnit\Framework\Test $test)
        {
        }
        /**
         * Gets the number of run tests.
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * Checks whether the test run should stop.
         *
         * @return bool
         */
        public function shouldStop()
        {
        }
        /**
         * Marks that the test run should stop.
         */
        public function stop()
        {
        }
        /**
         * Returns the code coverage object.
         *
         * @return CodeCoverage
         */
        public function getCodeCoverage()
        {
        }
        /**
         * Sets the code coverage object.
         *
         * @param CodeCoverage $codeCoverage
         */
        public function setCodeCoverage(\SebastianBergmann\CodeCoverage\CodeCoverage $codeCoverage)
        {
        }
        /**
         * Enables or disables the error-to-exception conversion.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function convertErrorsToExceptions($flag)
        {
        }
        /**
         * Returns the error-to-exception conversion setting.
         *
         * @return bool
         */
        public function getConvertErrorsToExceptions()
        {
        }
        /**
         * Enables or disables the stopping when an error occurs.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnError($flag)
        {
        }
        /**
         * Enables or disables the stopping when a failure occurs.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnFailure($flag)
        {
        }
        /**
         * Enables or disables the stopping when a warning occurs.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnWarning($flag)
        {
        }
        /**
         * @param bool $flag
         *
         * @throws Exception
         */
        public function beStrictAboutTestsThatDoNotTestAnything($flag)
        {
        }
        /**
         * @return bool
         */
        public function isStrictAboutTestsThatDoNotTestAnything()
        {
        }
        /**
         * @param bool $flag
         *
         * @throws Exception
         */
        public function beStrictAboutOutputDuringTests($flag)
        {
        }
        /**
         * @return bool
         */
        public function isStrictAboutOutputDuringTests()
        {
        }
        /**
         * @param bool $flag
         *
         * @throws Exception
         */
        public function beStrictAboutResourceUsageDuringSmallTests($flag)
        {
        }
        /**
         * @return bool
         */
        public function isStrictAboutResourceUsageDuringSmallTests()
        {
        }
        /**
         * @param bool $flag
         *
         * @throws Exception
         */
        public function enforceTimeLimit($flag)
        {
        }
        /**
         * @return bool
         */
        public function enforcesTimeLimit()
        {
        }
        /**
         * @param bool $flag
         *
         * @throws Exception
         */
        public function beStrictAboutTodoAnnotatedTests($flag)
        {
        }
        /**
         * @return bool
         */
        public function isStrictAboutTodoAnnotatedTests()
        {
        }
        /**
         * Enables or disables the stopping for risky tests.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnRisky($flag)
        {
        }
        /**
         * Enables or disables the stopping for incomplete tests.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnIncomplete($flag)
        {
        }
        /**
         * Enables or disables the stopping for skipped tests.
         *
         * @param bool $flag
         *
         * @throws Exception
         */
        public function stopOnSkipped($flag)
        {
        }
        /**
         * Returns the time spent running the tests.
         *
         * @return float
         */
        public function time()
        {
        }
        /**
         * Returns whether the entire test was successful or not.
         *
         * @return bool
         */
        public function wasSuccessful()
        {
        }
        /**
         * Sets the timeout for small tests.
         *
         * @param int $timeout
         *
         * @throws Exception
         */
        public function setTimeoutForSmallTests($timeout)
        {
        }
        /**
         * Sets the timeout for medium tests.
         *
         * @param int $timeout
         *
         * @throws Exception
         */
        public function setTimeoutForMediumTests($timeout)
        {
        }
        /**
         * Sets the timeout for large tests.
         *
         * @param int $timeout
         *
         * @throws Exception
         */
        public function setTimeoutForLargeTests($timeout)
        {
        }
        /**
         * Returns the set timeout for large tests.
         *
         * @return int
         */
        public function getTimeoutForLargeTests()
        {
        }
        /**
         * @param bool $flag
         */
        public function setRegisterMockObjectsFromTestArgumentsRecursively($flag)
        {
        }
        /**
         * Returns the class hierarchy for a given class.
         *
         * @param string $className
         * @param bool   $asReflectionObjects
         *
         * @return array
         */
        protected function getHierarchy($className, $asReflectionObjects = false)
        {
        }
    }
    /**
     * A marker interface for marking any exception/error as result of an unit
     * test as incomplete implementation or currently not implemented.
     */
    interface IncompleteTest
    {
    }
    class IncompleteTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\IncompleteTest
    {
    }
    class MissingCoversAnnotationException extends \PHPUnit\Framework\RiskyTestError
    {
    }
    /**
     * Exception for expectations which failed their check.
     *
     * The exception contains the error message and optionally a
     * SebastianBergmann\Comparator\ComparisonFailure which is used to
     * generate diff output of the failed expectations.
     */
    class ExpectationFailedException extends \PHPUnit\Framework\AssertionFailedError
    {
        protected $comparisonFailure;
        /**
         * @param string                 $message
         * @param ComparisonFailure|null $comparisonFailure
         * @param \Exception|null        $previous
         */
        public function __construct($message, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null, \Exception $previous = null)
        {
        }
        /**
         * @return null|ComparisonFailure
         */
        public function getComparisonFailure()
        {
        }
    }
    class CodeCoverageException extends \PHPUnit\Framework\Exception
    {
    }
    class OutputError extends \PHPUnit\Framework\AssertionFailedError
    {
    }
}
namespace PHPUnit\Framework\Error {
    /**
     * Wrapper for PHP errors.
     */
    class Error extends \PHPUnit\Framework\Exception
    {
        /**
         * Constructor.
         *
         * @param string     $message
         * @param int        $code
         * @param string     $file
         * @param int        $line
         * @param \Exception $previous
         */
        public function __construct($message, $code, $file, $line, \Exception $previous = null)
        {
        }
    }
    class Warning extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
    class Deprecated extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
    class Notice extends \PHPUnit\Framework\Error\Error
    {
        public static $enabled = true;
    }
}
namespace PHPUnit\Framework {
    /**
     * An incomplete test case
     */
    class IncompleteTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = false;
        /**
         * @param string $className
         * @param string $methodName
         * @param string $message
         */
        public function __construct($className, $methodName, $message = '')
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest()
        {
        }
        /**
         * @return string
         */
        public function getMessage()
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
}
namespace PHPUnit\Framework\Constraint {
    /**
     * Constraint that accepts any input value.
     */
    class IsAnything extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    /**
     * Logical AND.
     */
    class LogicalAnd extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        protected $constraints = [];
        /**
         * @var Constraint
         */
        protected $lastConstraint;
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function setConstraints(array $constraints)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ClassHasAttribute extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $attributeName;
        /**
         * @param string $attributeName
         */
        public function __construct($attributeName)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for matches
     * a regular expression.
     *
     * Checks a given value using the Perl Compatible Regular Expression extension
     * in PHP. The pattern is matched by executing preg_match().
     *
     * The pattern string passed in the constructor.
     */
    class RegularExpression extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $pattern;
        /**
         * @param string $pattern
         */
        public function __construct($pattern)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that accepts infinite.
     */
    class IsInfinite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that checks if the directory(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class DirectoryExists extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that one value is identical to another.
     *
     * Identical check is performed with PHP's === operator, the operator is
     * explained in detail at
     * {@url http://www.php.net/manual/en/types.comparisons.php}.
     * Two values are identical if they have the same value and are of the same
     * type.
     *
     * The expected value is passed in the constructor.
     */
    class IsIdentical extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var float
         */
        const EPSILON = 1.0E-10;
        /**
         * @var mixed
         */
        protected $value;
        /**
         * @param mixed $value
         */
        public function __construct($value)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Logical XOR.
     */
    class LogicalXor extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        protected $constraints = [];
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         */
        public function setConstraints(array $constraints)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    /**
     * ...
     */
    class StringMatchesFormatDescription extends \PHPUnit\Framework\Constraint\RegularExpression
    {
        /**
         * @var string
         */
        protected $string;
        /**
         * @param string $string
         */
        public function __construct($string)
        {
        }
        protected function failureDescription($other)
        {
        }
        protected function additionalFailureDescription($other)
        {
        }
        protected function createPatternFromFormat($string)
        {
        }
    }
    /**
     * Logical NOT.
     */
    class LogicalNot extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        protected $constraint;
        /**
         * @param Constraint $constraint
         */
        public function __construct($constraint)
        {
        }
        /**
         * @param string $string
         *
         * @return string
         */
        public static function negate($string)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    /**
     * Constraint that asserts that the array it is evaluated for has a given key.
     *
     * Uses array_key_exists() to check if the key is found in the input array, if
     * not found the evaluation fails.
     *
     * The array key is passed in the constructor.
     */
    class ArrayHasKey extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int|string
         */
        protected $key;
        /**
         * @param int|string $key
         */
        public function __construct($key)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
    /**
     * Constraint that evaluates against a specified closure.
     */
    class Callback extends \PHPUnit\Framework\Constraint\Constraint
    {
        private $callback;
        /**
         * @param callable $callback
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($callback)
        {
        }
        /**
         * Evaluates the constraint for parameter $value. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for contains
     * a given string.
     *
     * Uses mb_strpos() to find the position of the string in the input, if not
     * found the evaluation fails.
     *
     * The sub-string is passed in the constructor.
     */
    class StringContains extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $string;
        /**
         * @var bool
         */
        protected $ignoreCase;
        /**
         * @param string $string
         * @param bool   $ignoreCase
         */
        public function __construct($string, $ignoreCase = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    abstract class Composite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        protected $innerConstraint;
        /**
         * @param Constraint $innerConstraint
         */
        public function __construct(\PHPUnit\Framework\Constraint\Constraint $innerConstraint)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    class Attribute extends \PHPUnit\Framework\Constraint\Composite
    {
        /**
         * @var string
         */
        protected $attributeName;
        /**
         * @param Constraint $constraint
         * @param string     $attributeName
         */
        public function __construct(\PHPUnit\Framework\Constraint\Constraint $constraint, $attributeName)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
    /**
     * Constraint that accepts false.
     */
    class IsFalse extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * only values of a given type.
     */
    class TraversableContainsOnly extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint
         */
        protected $constraint;
        /**
         * @var string
         */
        protected $type;
        /**
         * @param string $type
         * @param bool   $isNativeType
         */
        public function __construct($type, $isNativeType = true)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * static attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ClassHasStaticAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Provides human readable messages for each JSON error.
     */
    class JsonMatchesErrorMessageProvider
    {
        /**
         * Translates JSON error to a human readable string.
         *
         * @param string $error
         * @param string $prefix
         *
         * @return string
         */
        public static function determineJsonError($error, $prefix = '')
        {
        }
        /**
         * Translates a given type to a human readable message prefix.
         *
         * @param string $type
         *
         * @return string
         */
        public static function translateTypeToPrefix($type)
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is of a
     * specified type.
     *
     * The expected value is passed in the constructor.
     */
    class IsType extends \PHPUnit\Framework\Constraint\Constraint
    {
        const TYPE_ARRAY = 'array';
        const TYPE_BOOL = 'bool';
        const TYPE_FLOAT = 'float';
        const TYPE_INT = 'int';
        const TYPE_NULL = 'null';
        const TYPE_NUMERIC = 'numeric';
        const TYPE_OBJECT = 'object';
        const TYPE_RESOURCE = 'resource';
        const TYPE_STRING = 'string';
        const TYPE_SCALAR = 'scalar';
        const TYPE_CALLABLE = 'callable';
        /**
         * @var array
         */
        protected $types = ['array' => true, 'boolean' => true, 'bool' => true, 'double' => true, 'float' => true, 'integer' => true, 'int' => true, 'null' => true, 'numeric' => true, 'object' => true, 'real' => true, 'resource' => true, 'string' => true, 'scalar' => true, 'callable' => true];
        /**
         * @var string
         */
        protected $type;
        /**
         * @param string $type
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($type)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    class Count extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        protected $expectedCount = 0;
        /**
         * @param int $expected
         */
        public function __construct($expected)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * @param \Countable|\Traversable|array $other
         *
         * @return int|null
         */
        protected function getCountOf($other)
        {
        }
        /**
         * Returns the total number of iterations from a generator.
         * This will fully exhaust the generator.
         *
         * @param Generator $generator
         *
         * @return int
         */
        protected function getCountOfGenerator(\Generator $generator)
        {
        }
        /**
         * Returns the description of the failure.
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that checks if one value is equal to another.
     *
     * Equality is checked with PHP's == operator, the operator is explained in
     * detail at {@url http://www.php.net/manual/en/types.comparisons.php}.
     * Two values are equal if they have the same value disregarding type.
     *
     * The expected value is passed in the constructor.
     */
    class IsEqual extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var mixed
         */
        protected $value;
        /**
         * @var float
         */
        protected $delta = 0.0;
        /**
         * @var int
         */
        protected $maxDepth = 10;
        /**
         * @var bool
         */
        protected $canonicalize = false;
        /**
         * @var bool
         */
        protected $ignoreCase = false;
        /**
         * @param mixed $value
         * @param float $delta
         * @param int   $maxDepth
         * @param bool  $canonicalize
         * @param bool  $ignoreCase
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($value, $delta = 0.0, $maxDepth = 10, $canonicalize = false, $ignoreCase = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that a string is valid JSON.
     */
    class IsJson extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for ends with a given
     * suffix.
     */
    class StringEndsWith extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $suffix;
        /**
         * @param string $suffix
         */
        public function __construct($suffix)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that accepts finite.
     */
    class IsFinite extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Asserts whether or not two JSON objects are equal.
     */
    class JsonMatches extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $value;
        /**
         * Creates a new constraint.
         *
         * @param string $value
         */
        public function __construct($value)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * This method can be overridden to implement the evaluation algorithm.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Throws an exception for the given compared value and test description
         *
         * @param mixed             $other             Evaluated value or object.
         * @param string            $description       Additional information about the test
         * @param ComparisonFailure $comparisonFailure
         *
         * @throws ExpectationFailedException
         */
        protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null)
        {
        }
        /**
         * Returns a string representation of the object.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that checks if the file/dir(name) that it is evaluated for is writable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class IsWritable extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the array it is evaluated for has a specified subset.
     *
     * Uses array_replace_recursive() to check if a key value subset is part of the
     * subject array.
     */
    class ArraySubset extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var array|\Traversable
         */
        protected $subset;
        /**
         * @var bool
         */
        protected $strict;
        /**
         * @param array|\Traversable $subset
         * @param bool               $strict Check for object identity
         */
        public function __construct($subset, $strict = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * @param array|\Traversable $other
         *
         * @return array
         */
        private function toArray($other)
        {
        }
    }
    class SameSize extends \PHPUnit\Framework\Constraint\Count
    {
        /**
         * @var int
         */
        protected $expectedCount;
        /**
         * @param \Countable|\Traversable|array $expected
         */
        public function __construct($expected)
        {
        }
    }
    /**
     * Logical OR.
     */
    class LogicalOr extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var Constraint[]
         */
        protected $constraints = [];
        public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
        {
        }
        /**
         * @param Constraint[] $constraints
         */
        public function setConstraints(array $constraints)
        {
        }
        /**
         * Evaluates the constraint for parameter $other
         *
         * If $returnResult is set to false (the default), an exception is thrown
         * in case of a failure. null is returned otherwise.
         *
         * If $returnResult is true, the result of the evaluation is returned as
         * a boolean value instead: true in case of success, false in case of a
         * failure.
         *
         * @param mixed  $other        Value or object to evaluate.
         * @param string $description  Additional information about the test
         * @param bool   $returnResult Whether to return a result or throw an exception
         *
         * @return mixed
         *
         * @throws ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = false)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Counts the number of constraint elements.
         *
         * @return int
         */
        public function count()
        {
        }
    }
    /**
     * Constraint that checks if the file(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class FileExists extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that accepts true.
     */
    class IsTrue extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is greater
     * than a given value.
     */
    class GreaterThan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int|float
         */
        protected $value;
        /**
         * @param int|float $value
         */
        public function __construct($value)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that checks if the file/dir(name) that it is evaluated for is readable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class IsReadable extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that checks whether a variable is empty().
     */
    class IsEmpty extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
    class Exception extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $className;
        /**
         * @param string $className
         */
        public function __construct($className)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that accepts nan.
     */
    class IsNan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    class ExceptionCode extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        protected $expectedCode;
        /**
         * @param int $expected
         */
        public function __construct($expected)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \Throwable $other
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the value it is evaluated for is less than
     * a given value.
     */
    class LessThan extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int|float
         */
        protected $value;
        /**
         * @param int|float $value
         */
        public function __construct($value)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the object it is evaluated for is an instance
     * of a given class.
     *
     * The expected class name is passed in the constructor.
     */
    class IsInstanceOf extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $className;
        /**
         * @param string $className
         */
        public function __construct($className)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        private function getType()
        {
        }
    }
    /**
     * Constraint that asserts that the string it is evaluated for begins with a
     * given prefix.
     */
    class StringStartsWith extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $prefix;
        /**
         * @param string $prefix
         */
        public function __construct($prefix)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the object it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class ObjectHasAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
    }
    class ExceptionMessage extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var int
         */
        protected $expectedMessage;
        /**
         * @param string $expected
         */
        public function __construct($expected)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \Throwable $other
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * @return string
         */
        public function toString()
        {
        }
    }
    class ExceptionMessageRegularExpression extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var string
         */
        protected $expectedMessageRegExp;
        /**
         * @param string $expected
         */
        public function __construct($expected)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param \PHPUnit\Framework\Exception $other
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
        /**
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that accepts null.
     */
    class IsNull extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * a given value.
     */
    class TraversableContains extends \PHPUnit\Framework\Constraint\Constraint
    {
        /**
         * @var bool
         */
        protected $checkForObjectIdentity;
        /**
         * @var bool
         */
        protected $checkForNonObjectIdentity;
        /**
         * @var mixed
         */
        protected $value;
        /**
         * @param mixed $value
         * @param bool  $checkForObjectIdentity
         * @param bool  $checkForNonObjectIdentity
         *
         * @throws \PHPUnit\Framework\Exception
         */
        public function __construct($value, $checkForObjectIdentity = true, $checkForNonObjectIdentity = false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param mixed $other Value or object to evaluate.
         *
         * @return bool
         */
        protected function matches($other)
        {
        }
        /**
         * Returns a string representation of the constraint.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns the description of the failure
         *
         * The beginning of failure messages is "Failed asserting that" in most
         * cases. This method should return the second part of that sentence.
         *
         * @param mixed $other Evaluated value or object.
         *
         * @return string
         */
        protected function failureDescription($other)
        {
        }
    }
}
namespace PHPUnit\Framework {
    class CoveredCodeNotExecutedException extends \PHPUnit\Framework\RiskyTestError
    {
    }
    /**
     * Iterator for test suites.
     */
    class TestSuiteIterator implements \RecursiveIterator
    {
        /**
         * @var int
         */
        protected $position;
        /**
         * @var Test[]
         */
        protected $tests;
        /**
         * @param TestSuite $testSuite
         */
        public function __construct(\PHPUnit\Framework\TestSuite $testSuite)
        {
        }
        /**
         * Rewinds the Iterator to the first element.
         */
        public function rewind()
        {
        }
        /**
         * Checks if there is a current element after calls to rewind() or next().
         *
         * @return bool
         */
        public function valid()
        {
        }
        /**
         * Returns the key of the current element.
         *
         * @return int
         */
        public function key()
        {
        }
        /**
         * Returns the current element.
         *
         * @return Test
         */
        public function current()
        {
        }
        /**
         * Moves forward to next element.
         */
        public function next()
        {
        }
        /**
         * Returns the sub iterator for the current element.
         *
         * @return TestSuiteIterator
         */
        public function getChildren()
        {
        }
        /**
         * Checks whether the current element has children.
         *
         * @return bool
         */
        public function hasChildren()
        {
        }
    }
    /**
     * Creates a synthetic failed assertion.
     */
    class SyntheticError extends \PHPUnit\Framework\AssertionFailedError
    {
        /**
         * The synthetic file.
         *
         * @var string
         */
        protected $syntheticFile = '';
        /**
         * The synthetic line number.
         *
         * @var int
         */
        protected $syntheticLine = 0;
        /**
         * The synthetic trace.
         *
         * @var array
         */
        protected $syntheticTrace = [];
        /**
         * Constructor.
         *
         * @param string $message
         * @param int    $code
         * @param string $file
         * @param int    $line
         * @param array  $trace
         */
        public function __construct($message, $code, $file, $line, $trace)
        {
        }
        /**
         * @return string
         */
        public function getSyntheticFile()
        {
        }
        /**
         * @return int
         */
        public function getSyntheticLine()
        {
        }
        /**
         * @return array
         */
        public function getSyntheticTrace()
        {
        }
    }
    /**
     * A skipped test case
     */
    class SkippedTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = false;
        /**
         * @param string $message
         */
        public function __construct($className, $methodName, $message = '')
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest()
        {
        }
        /**
         * @return string
         */
        public function getMessage()
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    /**
     * A warning.
     */
    class WarningTestCase extends \PHPUnit\Framework\TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = false;
        /**
         * @var bool
         */
        protected $useErrorHandler = false;
        /**
         * @param string $message
         */
        public function __construct($message = '')
        {
        }
        /**
         * @throws Exception
         */
        protected function runTest()
        {
        }
        /**
         * @return string
         */
        public function getMessage()
        {
        }
        /**
         * Returns a string representation of the test case.
         *
         * @return string
         */
        public function toString()
        {
        }
    }
    class InvalidCoversTargetException extends \PHPUnit\Framework\CodeCoverageException
    {
    }
    /**
     * Wraps Exceptions thrown by code under test.
     *
     * Re-instantiates Exceptions thrown by user-space code to retain their original
     * class names, properties, and stack traces (but without arguments).
     *
     * Unlike PHPUnit\Framework_\Exception, the complete stack of previous Exceptions
     * is processed.
     */
    class ExceptionWrapper extends \PHPUnit\Framework\Exception
    {
        /**
         * @var string
         */
        protected $className;
        /**
         * @var ExceptionWrapper|null
         */
        protected $previous;
        /**
         * @param Throwable $t
         */
        public function __construct(\Throwable $t)
        {
        }
        /**
         * @return string
         */
        public function getClassName()
        {
        }
        /**
         * @return ExceptionWrapper
         */
        public function getPreviousWrapped()
        {
        }
        /**
         * @return string
         */
        public function __toString()
        {
        }
    }
    /**
     * A TestFailure collects a failed test together with the caught exception.
     */
    class TestFailure
    {
        /**
         * @var string
         */
        private $testName;
        /**
         * @var Test|null
         */
        protected $failedTest;
        /**
         * @var Throwable
         */
        protected $thrownException;
        /**
         * Constructs a TestFailure with the given test and exception.
         *
         * @param Test      $failedTest
         * @param Throwable $t
         */
        public function __construct(\PHPUnit\Framework\Test $failedTest, $t)
        {
        }
        /**
         * Returns a short description of the failure.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Returns a description for the thrown exception.
         *
         * @return string
         */
        public function getExceptionAsString()
        {
        }
        /**
         * Returns a description for an exception.
         *
         * @param Throwable $e
         *
         * @return string
         */
        public static function exceptionToString(\Throwable $e)
        {
        }
        /**
         * Returns the name of the failing test (including data set, if any).
         *
         * @return string
         */
        public function getTestName()
        {
        }
        /**
         * Returns the failing test.
         *
         * Note: The test object is not set when the test is executed in process
         * isolation.
         *
         * @see Exception
         *
         * @return Test|null
         */
        public function failedTest()
        {
        }
        /**
         * Gets the thrown exception.
         *
         * @return Throwable
         */
        public function thrownException()
        {
        }
        /**
         * Returns the exception's message.
         *
         * @return string
         */
        public function exceptionMessage()
        {
        }
        /**
         * Returns true if the thrown exception
         * is of type AssertionFailedError.
         *
         * @return bool
         */
        public function isFailure()
        {
        }
    }
}
namespace PHPUnit\TextUI {
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class TestRunner extends \PHPUnit\Runner\BaseTestRunner
    {
        const SUCCESS_EXIT = 0;
        const FAILURE_EXIT = 1;
        const EXCEPTION_EXIT = 2;
        /**
         * @var CodeCoverageFilter
         */
        protected $codeCoverageFilter;
        /**
         * @var TestSuiteLoader
         */
        protected $loader;
        /**
         * @var ResultPrinter
         */
        protected $printer;
        /**
         * @var bool
         */
        protected static $versionStringPrinted = false;
        /**
         * @var Runtime
         */
        private $runtime;
        /**
         * @var bool
         */
        private $messagePrinted = false;
        /**
         * @param TestSuiteLoader    $loader
         * @param CodeCoverageFilter $filter
         */
        public function __construct(\PHPUnit\Runner\TestSuiteLoader $loader = null, \SebastianBergmann\CodeCoverage\Filter $filter = null)
        {
        }
        /**
         * @param Test|ReflectionClass $test
         * @param array                $arguments
         * @param bool                 $exit
         *
         * @return TestResult
         *
         * @throws Exception
         */
        public static function run($test, array $arguments = [], $exit = true)
        {
        }
        /**
         * @return TestResult
         */
        protected function createTestResult()
        {
        }
        /**
         * @param TestSuite $suite
         * @param array     $arguments
         */
        private function processSuiteFilters(\PHPUnit\Framework\TestSuite $suite, array $arguments)
        {
        }
        /**
         * @param Test  $suite
         * @param array $arguments
         * @param bool  $exit
         *
         * @return TestResult
         */
        public function doRun(\PHPUnit\Framework\Test $suite, array $arguments = [], $exit = true)
        {
        }
        /**
         * @param ResultPrinter $resultPrinter
         */
        public function setPrinter(\PHPUnit\TextUI\ResultPrinter $resultPrinter)
        {
        }
        /**
         * Override to define how to handle a failed loading of
         * a test suite.
         *
         * @param string $message
         */
        protected function runFailed($message)
        {
        }
        /**
         * @param string $buffer
         */
        protected function write($buffer)
        {
        }
        /**
         * Returns the loader to be used.
         *
         * @return TestSuiteLoader
         */
        public function getLoader()
        {
        }
        /**
         * @param array $arguments
         */
        protected function handleConfiguration(array &$arguments)
        {
        }
        /**
         * @param string $type
         * @param string $message
         */
        private function writeMessage($type, $message)
        {
        }
    }
}
namespace foo {
    function func()
    {
    }
}
namespace {
    \define('TEST_FILES_PATH', __DIR__ . \DIRECTORY_SEPARATOR . '_files' . \DIRECTORY_SEPARATOR);
    const GITHUB_ISSUE = 797;
    function globalFunction()
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     *
     * @return PHPUnit\Framework\MockObject\Matcher\AnyInvokedCount
     */
    function any()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsAnything matcher object.
     *
     * @return IsAnything
     */
    function anything()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\ArrayHasKey matcher object.
     *
     * @param mixed $key
     *
     * @return ArrayHasKey
     */
    function arrayHasKey($key)
    {
    }
    /**
     * Asserts that an array has a specified key.
     *
     * @param mixed             $key
     * @param array|ArrayAccess $array
     * @param string            $message
     */
    function assertArrayHasKey($key, $array, $message = '')
    {
    }
    /**
     * Asserts that an array has a specified subset.
     *
     * @param array|ArrayAccess $subset
     * @param array|ArrayAccess $array
     * @param bool              $strict  Check for object identity
     * @param string            $message
     */
    function assertArraySubset($subset, $array, $strict = \false, $message = '')
    {
    }
    /**
     * Asserts that an array does not have a specified key.
     *
     * @param mixed             $key
     * @param array|ArrayAccess $array
     * @param string            $message
     */
    function assertArrayNotHasKey($key, $array, $message = '')
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains a needle.
     *
     * @param mixed  $needle
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     * @param bool   $ignoreCase
     * @param bool   $checkForObjectIdentity
     * @param bool   $checkForNonObjectIdentity
     */
    function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object contains only values of a given type.
     *
     * @param string $type
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param bool   $isNativeType
     * @param string $message
     */
    function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = \null, $message = '')
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param int    $expectedCount
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     */
    function assertAttributeCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a static attribute of a class or an attribute of an object
     * is empty.
     *
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     */
    function assertAttributeEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a variable is equal to an attribute of an object.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that an attribute is greater than another value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     */
    function assertAttributeGreaterThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is greater than or equal to another value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     */
    function assertAttributeGreaterThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param string $expected
     * @param string $attributeName
     * @param mixed  $classOrObject
     * @param string $message
     */
    function assertAttributeInstanceOf($expected, $attributeName, $classOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param string $expected
     * @param string $attributeName
     * @param mixed  $classOrObject
     * @param string $message
     */
    function assertAttributeInternalType($expected, $attributeName, $classOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is smaller than another value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     */
    function assertAttributeLessThan($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is smaller than or equal to another value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     */
    function assertAttributeLessThanOrEqual($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain a needle.
     *
     * @param mixed  $needle
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     * @param bool   $ignoreCase
     * @param bool   $checkForObjectIdentity
     * @param bool   $checkForNonObjectIdentity
     */
    function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Asserts that a haystack that is stored in a static attribute of a class
     * or an attribute of an object does not contain only values of a given
     * type.
     *
     * @param string $type
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param bool   $isNativeType
     * @param string $message
     */
    function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = \null, $message = '')
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable
     * that is stored in an attribute.
     *
     * @param int    $expectedCount
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     */
    function assertAttributeNotCount($expectedCount, $haystackAttributeName, $haystackClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a static attribute of a class or an attribute of an object
     * is not empty.
     *
     * @param string $haystackAttributeName
     * @param mixed  $haystackClassOrObject
     * @param string $message
     */
    function assertAttributeNotEmpty($haystackAttributeName, $haystackClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a variable is not equal to an attribute of an object.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param string $actualClassOrObject
     * @param string $message
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param string $expected
     * @param string $attributeName
     * @param mixed  $classOrObject
     * @param string $message
     */
    function assertAttributeNotInstanceOf($expected, $attributeName, $classOrObject, $message = '')
    {
    }
    /**
     * Asserts that an attribute is of a given type.
     *
     * @param string $expected
     * @param string $attributeName
     * @param mixed  $classOrObject
     * @param string $message
     */
    function assertAttributeNotInternalType($expected, $attributeName, $classOrObject, $message = '')
    {
    }
    /**
     * Asserts that a variable and an attribute of an object do not have the
     * same type and value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param object $actualClassOrObject
     * @param string $message
     */
    function assertAttributeNotSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a variable and an attribute of an object have the same type
     * and value.
     *
     * @param mixed  $expected
     * @param string $actualAttributeName
     * @param object $actualClassOrObject
     * @param string $message
     */
    function assertAttributeSame($expected, $actualAttributeName, $actualClassOrObject, $message = '')
    {
    }
    /**
     * Asserts that a class has a specified attribute.
     *
     * @param string $attributeName
     * @param string $className
     * @param string $message
     */
    function assertClassHasAttribute($attributeName, $className, $message = '')
    {
    }
    /**
     * Asserts that a class has a specified static attribute.
     *
     * @param string $attributeName
     * @param string $className
     * @param string $message
     */
    function assertClassHasStaticAttribute($attributeName, $className, $message = '')
    {
    }
    /**
     * Asserts that a class does not have a specified attribute.
     *
     * @param string $attributeName
     * @param string $className
     * @param string $message
     */
    function assertClassNotHasAttribute($attributeName, $className, $message = '')
    {
    }
    /**
     * Asserts that a class does not have a specified static attribute.
     *
     * @param string $attributeName
     * @param string $className
     * @param string $message
     */
    function assertClassNotHasStaticAttribute($attributeName, $className, $message = '')
    {
    }
    /**
     * Asserts that a haystack contains a needle.
     *
     * @param mixed  $needle
     * @param mixed  $haystack
     * @param string $message
     * @param bool   $ignoreCase
     * @param bool   $checkForObjectIdentity
     * @param bool   $checkForNonObjectIdentity
     */
    function assertContains($needle, $haystack, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @param string $type
     * @param mixed  $haystack
     * @param bool   $isNativeType
     * @param string $message
     */
    function assertContainsOnly($type, $haystack, $isNativeType = \null, $message = '')
    {
    }
    /**
     * Asserts that a haystack contains only instances of a given classname
     *
     * @param string             $classname
     * @param array|\Traversable $haystack
     * @param string             $message
     */
    function assertContainsOnlyInstancesOf($classname, $haystack, $message = '')
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param int    $expectedCount
     * @param mixed  $haystack
     * @param string $message
     */
    function assertCount($expectedCount, $haystack, $message = '')
    {
    }
    /**
     * Asserts that a variable is empty.
     *
     * @param mixed  $actual
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertEmpty($actual, $message = '')
    {
    }
    /**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @param DOMElement $expectedElement
     * @param DOMElement $actualElement
     * @param bool       $checkAttributes
     * @param string     $message
     */
    function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, $checkAttributes = \false, $message = '')
    {
    }
    /**
     * Asserts that two variables are equal.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a condition is not true.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertNotTrue($condition, $message = '')
    {
    }
    /**
     * Asserts that a condition is false.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertFalse($condition, $message = '')
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @param string $expected
     * @param string $actual
     * @param string $message
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertFileEquals($expected, $actual, $message = '', $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a file exists.
     *
     * @param string $filename
     * @param string $message
     */
    function assertFileExists($filename, $message = '')
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @param string $expected
     * @param string $actual
     * @param string $message
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @param string $filename
     * @param string $message
     */
    function assertFileNotExists($filename, $message = '')
    {
    }
    /**
     * Asserts that a value is greater than another value.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertGreaterThan($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertGreaterThanOrEqual($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @param string $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertInstanceOf($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @param string $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertInternalType($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a string is a valid JSON string.
     *
     * @param string $actualJson
     * @param string $message
     */
    function assertJson($actualJson, $message = '')
    {
    }
    /**
     * Asserts that two JSON files are equal.
     *
     * @param string $expectedFile
     * @param string $actualFile
     * @param string $message
     */
    function assertJsonFileEqualsJsonFile($expectedFile, $actualFile, $message = '')
    {
    }
    /**
     * Asserts that two JSON files are not equal.
     *
     * @param string $expectedFile
     * @param string $actualFile
     * @param string $message
     */
    function assertJsonFileNotEqualsJsonFile($expectedFile, $actualFile, $message = '')
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @param string $expectedFile
     * @param string $actualJson
     * @param string $message
     */
    function assertJsonStringEqualsJsonFile($expectedFile, $actualJson, $message = '')
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     * @param string $message
     */
    function assertJsonStringEqualsJsonString($expectedJson, $actualJson, $message = '')
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @param string $expectedFile
     * @param string $actualJson
     * @param string $message
     */
    function assertJsonStringNotEqualsJsonFile($expectedFile, $actualJson, $message = '')
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     * @param string $message
     */
    function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, $message = '')
    {
    }
    /**
     * Asserts that a value is smaller than another value.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertLessThan($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertLessThanOrEqual($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is finite.
     *
     * @param mixed  $actual
     * @param string $message
     */
    function assertFinite($actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is infinite.
     *
     * @param mixed  $actual
     * @param string $message
     */
    function assertInfinite($actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is nan.
     *
     * @param mixed  $actual
     * @param string $message
     */
    function assertNan($actual, $message = '')
    {
    }
    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @param mixed  $needle
     * @param mixed  $haystack
     * @param string $message
     * @param bool   $ignoreCase
     * @param bool   $checkForObjectIdentity
     * @param bool   $checkForNonObjectIdentity
     */
    function assertNotContains($needle, $haystack, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @param string $type
     * @param mixed  $haystack
     * @param bool   $isNativeType
     * @param string $message
     */
    function assertNotContainsOnly($type, $haystack, $isNativeType = \null, $message = '')
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param int    $expectedCount
     * @param mixed  $haystack
     * @param string $message
     */
    function assertNotCount($expectedCount, $haystack, $message = '')
    {
    }
    /**
     * Asserts that a variable is not empty.
     *
     * @param mixed  $actual
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertNotEmpty($actual, $message = '')
    {
    }
    /**
     * Asserts that two variables are not equal.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @param string $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertNotInstanceOf($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @param string $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertNotInternalType($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertNotFalse($condition, $message = '')
    {
    }
    /**
     * Asserts that a variable is not null.
     *
     * @param mixed  $actual
     * @param string $message
     */
    function assertNotNull($actual, $message = '')
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */
    function assertNotRegExp($pattern, $string, $message = '')
    {
    }
    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertNotSame($expected, $actual, $message = '')
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param array|\Countable|\Traversable $expected
     * @param array|\Countable|\Traversable $actual
     * @param string                        $message
     */
    function assertNotSameSize($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a variable is null.
     *
     * @param mixed  $actual
     * @param string $message
     */
    function assertNull($actual, $message = '')
    {
    }
    /**
     * Asserts that an object has a specified attribute.
     *
     * @param string $attributeName
     * @param object $object
     * @param string $message
     */
    function assertObjectHasAttribute($attributeName, $object, $message = '')
    {
    }
    /**
     * Asserts that an object does not have a specified attribute.
     *
     * @param string $attributeName
     * @param object $object
     * @param string $message
     */
    function assertObjectNotHasAttribute($attributeName, $object, $message = '')
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @param string $pattern
     * @param string $string
     * @param string $message
     */
    function assertRegExp($pattern, $string, $message = '')
    {
    }
    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @param mixed  $expected
     * @param mixed  $actual
     * @param string $message
     */
    function assertSame($expected, $actual, $message = '')
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param array|\Countable|\Traversable $expected
     * @param array|\Countable|\Traversable $actual
     * @param string                        $message
     */
    function assertSameSize($expected, $actual, $message = '')
    {
    }
    /**
     * Asserts that a string ends not with a given prefix.
     *
     * @param string $suffix
     * @param string $string
     * @param string $message
     */
    function assertStringEndsNotWith($suffix, $string, $message = '')
    {
    }
    /**
     * Asserts that a string ends with a given prefix.
     *
     * @param string $suffix
     * @param string $string
     * @param string $message
     */
    function assertStringEndsWith($suffix, $string, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @param string $expectedFile
     * @param string $actualString
     * @param string $message
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @param string $format
     * @param string $string
     * @param string $message
     */
    function assertStringMatchesFormat($format, $string, $message = '')
    {
    }
    /**
     * Asserts that a string matches a given format file.
     *
     * @param string $formatFile
     * @param string $string
     * @param string $message
     */
    function assertStringMatchesFormatFile($formatFile, $string, $message = '')
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @param string $expectedFile
     * @param string $actualString
     * @param string $message
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     */
    function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @param string $format
     * @param string $string
     * @param string $message
     */
    function assertStringNotMatchesFormat($format, $string, $message = '')
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @param string $formatFile
     * @param string $string
     * @param string $message
     */
    function assertStringNotMatchesFormatFile($formatFile, $string, $message = '')
    {
    }
    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     */
    function assertStringStartsNotWith($prefix, $string, $message = '')
    {
    }
    /**
     * Asserts that a string starts with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     * @param string $message
     */
    function assertStringStartsWith($prefix, $string, $message = '')
    {
    }
    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @param mixed      $value
     * @param Constraint $constraint
     * @param string     $message
     */
    function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, $message = '')
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws AssertionFailedError
     */
    function assertTrue($condition, $message = '')
    {
    }
    /**
     * Asserts that two XML files are equal.
     *
     * @param string $expectedFile
     * @param string $actualFile
     * @param string $message
     */
    function assertXmlFileEqualsXmlFile($expectedFile, $actualFile, $message = '')
    {
    }
    /**
     * Asserts that two XML files are not equal.
     *
     * @param string $expectedFile
     * @param string $actualFile
     * @param string $message
     */
    function assertXmlFileNotEqualsXmlFile($expectedFile, $actualFile, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param string             $expectedFile
     * @param string|DOMDocument $actualXml
     * @param string             $message
     */
    function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param string|DOMDocument $expectedXml
     * @param string|DOMDocument $actualXml
     * @param string             $message
     */
    function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param string             $expectedFile
     * @param string|DOMDocument $actualXml
     * @param string             $message
     */
    function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param string|DOMDocument $expectedXml
     * @param string|DOMDocument $actualXml
     * @param string             $message
     */
    function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, $message = '')
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at the given $index.
     *
     * @param int $index
     *
     * @return PHPUnit\Framework\MockObject\Matcher\InvokedAtIndex
     */
    function at($index)
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     *
     * @return PHPUnit\Framework\MockObject\Matcher\InvokedAtLeastOnce
     */
    function atLeastOnce()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Attribute matcher object.
     *
     * @param Constraint $constraint
     * @param string     $attributeName
     *
     * @return Attribute
     */
    function attribute(\PHPUnit\Framework\Constraint\Constraint $constraint, $attributeName)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsEqual matcher object
     * that is wrapped in a PHPUnit\Framework\Constraint\Attribute matcher
     * object.
     *
     * @param string $attributeName
     * @param mixed  $value
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     *
     * @return Attribute
     */
    function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Callback matcher object.
     *
     * @param callable $callback
     *
     * @return Callback
     */
    function callback($callback)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\ClassHasAttribute matcher object.
     *
     * @param string $attributeName
     *
     * @return ClassHasAttribute
     */
    function classHasAttribute($attributeName)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\ClassHasStaticAttribute matcher
     * object.
     *
     * @param string $attributeName
     *
     * @return ClassHasStaticAttribute
     */
    function classHasStaticAttribute($attributeName)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\TraversableContains matcher
     * object.
     *
     * @param mixed $value
     * @param bool  $checkForObjectIdentity
     * @param bool  $checkForNonObjectIdentity
     *
     * @return TraversableContains
     */
    function contains($value, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\TraversableContainsOnly matcher
     * object.
     *
     * @param string $type
     *
     * @return TraversableContainsOnly
     */
    function containsOnly($type)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\TraversableContainsOnly matcher
     * object.
     *
     * @param string $classname
     *
     * @return TraversableContainsOnly
     */
    function containsOnlyInstancesOf($classname)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Count matcher object.
     *
     * @param int $count
     *
     * @return Count
     */
    function countOf($count)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\DirectoryExists matcher object.
     *
     * @return DirectoryExists
     */
    function directoryExists()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsEqual matcher object.
     *
     * @param mixed $value
     * @param float $delta
     * @param int   $maxDepth
     * @param bool  $canonicalize
     * @param bool  $ignoreCase
     *
     * @return IsEqual
     */
    function equalTo($value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     *
     * @param int $count
     *
     * @return PHPUnit\Framework\MockObject\Matcher\InvokedCount
     */
    function exactly($count)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\FileExists matcher object.
     *
     * @return FileExists
     */
    function fileExists()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\GreaterThan matcher object.
     *
     * @param mixed $value
     *
     * @return GreaterThan
     */
    function greaterThan($value)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Or matcher object that wraps
     * a PHPUnit\Framework\Constraint\IsEqual and a
     * PHPUnit\Framework\Constraint\GreaterThan matcher object.
     *
     * @param mixed $value
     *
     * @return LogicalOr
     */
    function greaterThanOrEqual($value)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsIdentical matcher object.
     *
     * @param mixed $value
     *
     * @return IsIdentical
     */
    function identicalTo($value)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsEmpty matcher object.
     *
     * @return IsEmpty
     */
    function isEmpty()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsFalse matcher object.
     *
     * @return IsFalse
     */
    function isFalse()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsInfinite matcher object.
     *
     * @return IsInfinite
     */
    function isInfinite()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsInstanceOf matcher object.
     *
     * @param string $className
     *
     * @return IsInstanceOf
     */
    function isInstanceOf($className)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsJson matcher object.
     *
     * @return IsJson
     */
    function isJson()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsNan matcher object.
     *
     * @return IsNan
     */
    function isNan()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsNull matcher object.
     *
     * @return IsNull
     */
    function isNull()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsReadable matcher object.
     *
     * @return IsReadable
     */
    function isReadable()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsTrue matcher object.
     *
     * @return IsTrue
     */
    function isTrue()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsType matcher object.
     *
     * @param string $type
     *
     * @return IsType
     */
    function isType($type)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\IsWritable matcher object.
     *
     * @return IsWritable
     */
    function isWritable()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\LessThan matcher object.
     *
     * @param mixed $value
     *
     * @return LessThan
     */
    function lessThan($value)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Or matcher object that wraps
     * a PHPUnit\Framework\Constraint\IsEqual and a
     * PHPUnit\Framework\Constraint\LessThan matcher object.
     *
     * @param mixed $value
     *
     * @return LogicalOr
     */
    function lessThanOrEqual($value)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\And matcher object.
     *
     * @return LogicalAnd
     */
    function logicalAnd()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Not matcher object.
     *
     * @param Constraint $constraint
     *
     * @return LogicalNot
     */
    function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Or matcher object.
     *
     * @return LogicalOr
     */
    function logicalOr()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\Xor matcher object.
     *
     * @return LogicalXor
     */
    function logicalXor()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\StringMatches matcher object.
     *
     * @param string $string
     *
     * @return StringMatchesFormatDescription
     */
    function matches($string)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\PCREMatch matcher object.
     *
     * @param string $pattern
     *
     * @return RegularExpression
     */
    function matchesRegularExpression($pattern)
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     *
     * @return PHPUnit\Framework\MockObject\Matcher\InvokedCount
     */
    function never()
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\ObjectHasAttribute matcher object.
     *
     * @param string $attributeName
     *
     * @return ObjectHasAttribute
     */
    function objectHasAttribute($attributeName)
    {
    }
    /**
     * @param mixed $value, ...
     *
     * @return PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
     */
    function onConsecutiveCalls()
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     *
     * @return PHPUnit\Framework\MockObject\Matcher\InvokedCount
     */
    function once()
    {
    }
    /**
     * @param int $argumentIndex
     *
     * @return PHPUnit\Framework\MockObject\Stub\ReturnArgument
     */
    function returnArgument($argumentIndex)
    {
    }
    /**
     * @param mixed $callback
     *
     * @return PHPUnit\Framework\MockObject\Stub\ReturnCallback
     */
    function returnCallback($callback)
    {
    }
    /**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     *
     * @return PHPUnit\Framework\MockObject\Stub\ReturnSelf
     */
    function returnSelf()
    {
    }
    /**
     * @param mixed $value
     *
     * @return PHPUnit\Framework\MockObject\Stub\Return
     */
    function returnValue($value)
    {
    }
    /**
     * @param array $valueMap
     *
     * @return PHPUnit\Framework\MockObject\Stub\ReturnValueMap
     */
    function returnValueMap(array $valueMap)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\StringContains matcher object.
     *
     * @param string $string
     * @param bool   $case
     *
     * @return StringContains
     */
    function stringContains($string, $case = \true)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\StringEndsWith matcher object.
     *
     * @param mixed $suffix
     *
     * @return StringEndsWith
     */
    function stringEndsWith($suffix)
    {
    }
    /**
     * Returns a PHPUnit\Framework\Constraint\StringStartsWith matcher object.
     *
     * @param mixed $prefix
     *
     * @return StringStartsWith
     */
    function stringStartsWith($prefix)
    {
    }
    /**
     * @param Exception $exception
     *
     * @return PHPUnit\Framework\MockObject\Stub\Exception
     */
    function throwException(\Exception $exception)
    {
    }
}