<?php

namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A Test can be run and collect its results.
     */
    interface PHPUnit_Framework_Test extends \Countable
    {
        /**
         * Runs a test and collects its result in a TestResult instance.
         *
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null);
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
     * Interface for classes that can return a description of itself.
     */
    interface PHPUnit_Framework_SelfDescribing
    {
        /**
         * Returns a string representation of the object.
         *
         * @return string
         */
        public function toString();
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
     * A set of assertion methods.
     */
    abstract class PHPUnit_Framework_Assert
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
        public static function assertArraySubset($subset, $array, $strict = \false, $message = '')
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
        public static function assertContains($needle, $haystack, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
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
        public static function assertAttributeContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
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
        public static function assertNotContains($needle, $haystack, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
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
        public static function assertAttributeNotContains($needle, $haystackAttributeName, $haystackClassOrObject, $message = '', $ignoreCase = \false, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
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
        public static function assertContainsOnly($type, $haystack, $isNativeType = \null, $message = '')
        {
        }
        /**
         * Asserts that a haystack contains only instances of a given classname
         *
         * @param string            $classname
         * @param array|Traversable $haystack
         * @param string            $message
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
        public static function assertAttributeContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = \null, $message = '')
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
        public static function assertNotContainsOnly($type, $haystack, $isNativeType = \null, $message = '')
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
        public static function assertAttributeNotContainsOnly($type, $haystackAttributeName, $haystackClassOrObject, $isNativeType = \null, $message = '')
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
        public static function assertEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertAttributeEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertNotEquals($expected, $actual, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertAttributeNotEquals($expected, $actualAttributeName, $actualClassOrObject, $message = '', $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * Asserts that a variable is empty.
         *
         * @param mixed  $actual
         * @param string $message
         *
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @throws PHPUnit_Framework_AssertionFailedError
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
        public static function assertFileEquals($expected, $actual, $message = '', $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertFileNotEquals($expected, $actual, $message = '', $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertStringEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = \false, $ignoreCase = \false)
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
        public static function assertStringNotEqualsFile($expectedFile, $actualString, $message = '', $canonicalize = \false, $ignoreCase = \false)
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
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @param array|Countable|Traversable $expected
         * @param array|Countable|Traversable $actual
         * @param string                      $message
         */
        public static function assertSameSize($expected, $actual, $message = '')
        {
        }
        /**
         * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
         * is not the same.
         *
         * @param array|Countable|Traversable $expected
         * @param array|Countable|Traversable $actual
         * @param string                      $message
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
         * @param string $expectedFile
         * @param string $actualXml
         * @param string $message
         */
        public static function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param string $expectedFile
         * @param string $actualXml
         * @param string $message
         */
        public static function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are equal.
         *
         * @param string $expectedXml
         * @param string $actualXml
         * @param string $message
         */
        public static function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
        {
        }
        /**
         * Asserts that two XML documents are not equal.
         *
         * @param string $expectedXml
         * @param string $actualXml
         * @param string $message
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
        public static function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, $checkAttributes = \false, $message = '')
        {
        }
        /**
         * Evaluates a PHPUnit_Framework_Constraint matcher object.
         *
         * @param mixed                        $value
         * @param PHPUnit_Framework_Constraint $constraint
         * @param string                       $message
         */
        public static function assertThat($value, \PHPUnit_Framework_Constraint $constraint, $message = '')
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
         * Returns a PHPUnit_Framework_Constraint_And matcher object.
         *
         * @return PHPUnit_Framework_Constraint_And
         */
        public static function logicalAnd()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Or matcher object.
         *
         * @return PHPUnit_Framework_Constraint_Or
         */
        public static function logicalOr()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Not matcher object.
         *
         * @param PHPUnit_Framework_Constraint $constraint
         *
         * @return PHPUnit_Framework_Constraint_Not
         */
        public static function logicalNot(\PHPUnit_Framework_Constraint $constraint)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Xor matcher object.
         *
         * @return PHPUnit_Framework_Constraint_Xor
         */
        public static function logicalXor()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsAnything matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsAnything
         */
        public static function anything()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsTrue matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsTrue
         */
        public static function isTrue()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Callback matcher object.
         *
         * @param callable $callback
         *
         * @return PHPUnit_Framework_Constraint_Callback
         */
        public static function callback($callback)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsFalse matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsFalse
         */
        public static function isFalse()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsJson matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsJson
         */
        public static function isJson()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsNull matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsNull
         */
        public static function isNull()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsFinite matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsFinite
         */
        public static function isFinite()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsInfinite matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsInfinite
         */
        public static function isInfinite()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsNan matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsNan
         */
        public static function isNan()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Attribute matcher object.
         *
         * @param PHPUnit_Framework_Constraint $constraint
         * @param string                       $attributeName
         *
         * @return PHPUnit_Framework_Constraint_Attribute
         */
        public static function attribute(\PHPUnit_Framework_Constraint $constraint, $attributeName)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_TraversableContains matcher
         * object.
         *
         * @param mixed $value
         * @param bool  $checkForObjectIdentity
         * @param bool  $checkForNonObjectIdentity
         *
         * @return PHPUnit_Framework_Constraint_TraversableContains
         */
        public static function contains($value, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
         * object.
         *
         * @param string $type
         *
         * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
         */
        public static function containsOnly($type)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
         * object.
         *
         * @param string $classname
         *
         * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
         */
        public static function containsOnlyInstancesOf($classname)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_ArrayHasKey matcher object.
         *
         * @param mixed $key
         *
         * @return PHPUnit_Framework_Constraint_ArrayHasKey
         */
        public static function arrayHasKey($key)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object.
         *
         * @param mixed $value
         * @param float $delta
         * @param int   $maxDepth
         * @param bool  $canonicalize
         * @param bool  $ignoreCase
         *
         * @return PHPUnit_Framework_Constraint_IsEqual
         */
        public static function equalTo($value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object
         * that is wrapped in a PHPUnit_Framework_Constraint_Attribute matcher
         * object.
         *
         * @param string $attributeName
         * @param mixed  $value
         * @param float  $delta
         * @param int    $maxDepth
         * @param bool   $canonicalize
         * @param bool   $ignoreCase
         *
         * @return PHPUnit_Framework_Constraint_Attribute
         */
        public static function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsEmpty matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsEmpty
         */
        public static function isEmpty()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsWritable matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsWritable
         */
        public static function isWritable()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsReadable matcher object.
         *
         * @return PHPUnit_Framework_Constraint_IsReadable
         */
        public static function isReadable()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_DirectoryExists matcher object.
         *
         * @return PHPUnit_Framework_Constraint_DirectoryExists
         */
        public static function directoryExists()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_FileExists matcher object.
         *
         * @return PHPUnit_Framework_Constraint_FileExists
         */
        public static function fileExists()
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_GreaterThan matcher object.
         *
         * @param mixed $value
         *
         * @return PHPUnit_Framework_Constraint_GreaterThan
         */
        public static function greaterThan($value)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
         * a PHPUnit_Framework_Constraint_IsEqual and a
         * PHPUnit_Framework_Constraint_GreaterThan matcher object.
         *
         * @param mixed $value
         *
         * @return PHPUnit_Framework_Constraint_Or
         */
        public static function greaterThanOrEqual($value)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_ClassHasAttribute matcher object.
         *
         * @param string $attributeName
         *
         * @return PHPUnit_Framework_Constraint_ClassHasAttribute
         */
        public static function classHasAttribute($attributeName)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_ClassHasStaticAttribute matcher
         * object.
         *
         * @param string $attributeName
         *
         * @return PHPUnit_Framework_Constraint_ClassHasStaticAttribute
         */
        public static function classHasStaticAttribute($attributeName)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_ObjectHasAttribute matcher object.
         *
         * @param string $attributeName
         *
         * @return PHPUnit_Framework_Constraint_ObjectHasAttribute
         */
        public static function objectHasAttribute($attributeName)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsIdentical matcher object.
         *
         * @param mixed $value
         *
         * @return PHPUnit_Framework_Constraint_IsIdentical
         */
        public static function identicalTo($value)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsInstanceOf matcher object.
         *
         * @param string $className
         *
         * @return PHPUnit_Framework_Constraint_IsInstanceOf
         */
        public static function isInstanceOf($className)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_IsType matcher object.
         *
         * @param string $type
         *
         * @return PHPUnit_Framework_Constraint_IsType
         */
        public static function isType($type)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_LessThan matcher object.
         *
         * @param mixed $value
         *
         * @return PHPUnit_Framework_Constraint_LessThan
         */
        public static function lessThan($value)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
         * a PHPUnit_Framework_Constraint_IsEqual and a
         * PHPUnit_Framework_Constraint_LessThan matcher object.
         *
         * @param mixed $value
         *
         * @return PHPUnit_Framework_Constraint_Or
         */
        public static function lessThanOrEqual($value)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_PCREMatch matcher object.
         *
         * @param string $pattern
         *
         * @return PHPUnit_Framework_Constraint_PCREMatch
         */
        public static function matchesRegularExpression($pattern)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_StringMatches matcher object.
         *
         * @param string $string
         *
         * @return PHPUnit_Framework_Constraint_StringMatches
         */
        public static function matches($string)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_StringStartsWith matcher object.
         *
         * @param mixed $prefix
         *
         * @return PHPUnit_Framework_Constraint_StringStartsWith
         */
        public static function stringStartsWith($prefix)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_StringContains matcher object.
         *
         * @param string $string
         * @param bool   $case
         *
         * @return PHPUnit_Framework_Constraint_StringContains
         */
        public static function stringContains($string, $case = \true)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_StringEndsWith matcher object.
         *
         * @param mixed $suffix
         *
         * @return PHPUnit_Framework_Constraint_StringEndsWith
         */
        public static function stringEndsWith($suffix)
        {
        }
        /**
         * Returns a PHPUnit_Framework_Constraint_Count matcher object.
         *
         * @param int $count
         *
         * @return PHPUnit_Framework_Constraint_Count
         */
        public static function countOf($count)
        {
        }
        /**
         * Fails a test with the given message.
         *
         * @param string $message
         *
         * @throws PHPUnit_Framework_AssertionFailedError
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        public static function getObjectAttribute($object, $attributeName)
        {
        }
        /**
         * Mark the test as incomplete.
         *
         * @param string $message
         *
         * @throws PHPUnit_Framework_IncompleteTestError
         */
        public static function markTestIncomplete($message = '')
        {
        }
        /**
         * Mark the test as skipped.
         *
         * @param string $message
         *
         * @throws PHPUnit_Framework_SkippedTestError
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
     *   1) Implement a subclass of PHPUnit_Framework_TestCase.
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
     * class MathTest extends PHPUnit_Framework_TestCase
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
    abstract class PHPUnit_Framework_TestCase extends \PHPUnit_Framework_Assert implements \PHPUnit_Framework_Test, \PHPUnit_Framework_SelfDescribing
    {
        /**
         * Enable or disable the backup and restoration of the $GLOBALS array.
         * Overwrite this attribute in a child class of TestCase.
         * Setting this attribute in setUp() has no effect!
         *
         * @var bool
         */
        protected $backupGlobals = \null;
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
        protected $backupStaticAttributes = \null;
        /**
         * @var array
         */
        protected $backupStaticAttributesBlacklist = [];
        /**
         * Whether or not this test is to be run in a separate PHP process.
         *
         * @var bool
         */
        protected $runTestInSeparateProcess = \null;
        /**
         * Whether or not this test should preserve the global state when
         * running in a separate PHP process.
         *
         * @var bool
         */
        protected $preserveGlobalState = \true;
        /**
         * Whether or not this test is running in a separate PHP process.
         *
         * @var bool
         */
        private $inIsolation = \false;
        /**
         * @var array
         */
        private $data = [];
        /**
         * @var string
         */
        private $dataName = '';
        /**
         * @var bool
         */
        private $useErrorHandler = \null;
        /**
         * The name of the expected Exception.
         *
         * @var string
         */
        private $expectedException = \null;
        /**
         * The message of the expected Exception.
         *
         * @var string
         */
        private $expectedExceptionMessage = \null;
        /**
         * The regex pattern to validate the expected Exception message.
         *
         * @var string
         */
        private $expectedExceptionMessageRegExp = \null;
        /**
         * The code of the expected Exception.
         *
         * @var int|string
         */
        private $expectedExceptionCode = \null;
        /**
         * The name of the test case.
         *
         * @var string
         */
        private $name = \null;
        /**
         * @var array
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
        private $mockObjectGenerator = \null;
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
         * @var PHPUnit_Framework_TestResult
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
        private $outputExpectedRegex = \null;
        /**
         * @var string
         */
        private $outputExpectedString = \null;
        /**
         * @var mixed
         */
        private $outputCallback = \false;
        /**
         * @var bool
         */
        private $outputBufferingActive = \false;
        /**
         * @var int
         */
        private $outputBufferingLevel;
        /**
         * @var SebastianBergmann\GlobalState\Snapshot
         */
        private $snapshot;
        /**
         * @var Prophecy\Prophet
         */
        private $prophet;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState = \false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = \false;
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
        private $doesNotPerformAssertions = \false;
        /**
         * Constructs a test case with the given name.
         *
         * @param string $name
         * @param array  $data
         * @param string $dataName
         */
        public function __construct($name = \null, array $data = [], $dataName = '')
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
        public function getName($withDataSet = \true)
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
         * @throws PHPUnit_Framework_Exception
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
         *
         * @deprecated Use hasExpectationOnOutput() instead
         */
        public function hasPerformedExpectationsOnOutput()
        {
        }
        /**
         * @return bool
         */
        public function hasExpectationOnOutput()
        {
        }
        /**
         * @return string
         */
        public function getExpectedException()
        {
        }
        /**
         * @param mixed      $exception
         * @param string     $message   Null means we do not check message at all, string (even empty) means we do. Default: null.
         * @param int|string $code      Null means we do not check code at all, non-null means we do.
         *
         * @throws PHPUnit_Framework_Exception
         *
         * @deprecated Method deprecated since Release 5.2.0; use expectException() instead
         */
        public function setExpectedException($exception, $message = '', $code = \null)
        {
        }
        /**
         * @param mixed  $exception
         * @param string $messageRegExp
         * @param int    $code
         *
         * @throws PHPUnit_Framework_Exception
         *
         * @deprecated Method deprecated since Release 5.6.0; use expectExceptionMessageRegExp() instead
         */
        public function setExpectedExceptionRegExp($exception, $messageRegExp = '', $code = \null)
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
         * @throws PHPUnit_Framework_Exception
         */
        public function expectExceptionCode($code)
        {
        }
        /**
         * @param string $message
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function expectExceptionMessage($message)
        {
        }
        /**
         * @param string $messageRegExp
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function expectExceptionMessageRegExp($messageRegExp)
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
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null)
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
         * @throws Exception|PHPUnit_Framework_Exception
         * @throws PHPUnit_Framework_Exception
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
         * @param array $dependencies
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
         * @throws PHPUnit_Framework_Exception
         */
        public function setRunTestInSeparateProcess($runTestInSeparateProcess)
        {
        }
        /**
         * @param bool $preserveGlobalState
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function setPreserveGlobalState($preserveGlobalState)
        {
        }
        /**
         * @param bool $inIsolation
         *
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        public function setOutputCallback($callback)
        {
        }
        /**
         * @return PHPUnit_Framework_TestResult
         */
        public function getTestResultObject()
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        public function setTestResultObject(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_MockObject_MockObject $mockObject
         */
        public function registerMockObject(\PHPUnit_Framework_MockObject_MockObject $mockObject)
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        protected function setLocale()
        {
        }
        /**
         * Returns a builder object to create mock objects using a fluent interface.
         *
         * @param string|string[] $className
         *
         * @return PHPUnit_Framework_MockObject_MockBuilder
         */
        public function getMockBuilder($className)
        {
        }
        /**
         * Returns a test double for the specified class.
         *
         * @param string $originalClassName
         *
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
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
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function createConfiguredMock($originalClassName, array $configuration)
        {
        }
        /**
         * Returns a partial test double for the specified class.
         *
         * @param string $originalClassName
         * @param array  $methods
         *
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function createPartialMock($originalClassName, array $methods)
        {
        }
        /**
         * Returns a mock object for the specified class.
         *
         * @param string     $originalClassName       Name of the class to mock.
         * @param array|null $methods                 When provided, only methods whose names are in the array
         *                                            are replaced with a configurable test double. The behavior
         *                                            of the other methods is not changed.
         *                                            Providing null means that no methods will be replaced.
         * @param array      $arguments               Parameters to pass to the original class' constructor.
         * @param string     $mockClassName           Class name for the generated test double class.
         * @param bool       $callOriginalConstructor Can be used to disable the call to the original class' constructor.
         * @param bool       $callOriginalClone       Can be used to disable the call to the original class' clone constructor.
         * @param bool       $callAutoload            Can be used to disable __autoload() during the generation of the test double class.
         * @param bool       $cloneArguments
         * @param bool       $callOriginalMethods
         * @param object     $proxyTarget
         *
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         *
         * @deprecated Method deprecated since Release 5.4.0; use createMock() or getMockBuilder() instead
         */
        protected function getMock($originalClassName, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = \true, $callOriginalClone = \true, $callAutoload = \true, $cloneArguments = \false, $callOriginalMethods = \false, $proxyTarget = \null)
        {
        }
        /**
         * Returns a mock with disabled constructor object for the specified class.
         *
         * @param string $originalClassName
         *
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         *
         * @deprecated Method deprecated since Release 5.4.0; use createMock() instead
         */
        protected function getMockWithoutInvokingTheOriginalConstructor($originalClassName)
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
         * @throws PHPUnit_Framework_Exception
         */
        protected function getMockClass($originalClassName, $methods = [], array $arguments = [], $mockClassName = '', $callOriginalConstructor = \false, $callOriginalClone = \true, $callAutoload = \true, $cloneArguments = \false)
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
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function getMockForAbstractClass($originalClassName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = \true, $callOriginalClone = \true, $callAutoload = \true, $mockedMethods = [], $cloneArguments = \false)
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
         * @return PHPUnit_Framework_MockObject_MockObject
         */
        protected function getMockFromWsdl($wsdlFile, $originalClassName = '', $mockClassName = '', array $methods = [], $callOriginalConstructor = \true, array $options = [])
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
         * @return PHPUnit_Framework_MockObject_MockObject
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function getMockForTrait($traitName, array $arguments = [], $mockClassName = '', $callOriginalConstructor = \true, $callOriginalClone = \true, $callAutoload = \true, $mockedMethods = [], $cloneArguments = \false)
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
         * @param bool   $cloneArguments
         *
         * @return object
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function getObjectForTrait($traitName, array $arguments = [], $traitClassName = '', $callOriginalConstructor = \true, $callOriginalClone = \true, $callAutoload = \true, $cloneArguments = \false)
        {
        }
        /**
         * @param string|null $classOrInterface
         *
         * @return \Prophecy\Prophecy\ObjectProphecy
         *
         * @throws \LogicException
         */
        protected function prophesize($classOrInterface = \null)
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
         * @return PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount
         */
        public static function any()
        {
        }
        /**
         * Returns a matcher that matches when the method is never executed.
         *
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
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
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastCount
         */
        public static function atLeast($requiredInvocations)
        {
        }
        /**
         * Returns a matcher that matches when the method is executed at least once.
         *
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce
         */
        public static function atLeastOnce()
        {
        }
        /**
         * Returns a matcher that matches when the method is executed exactly once.
         *
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
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
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
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
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtMostCount
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
         * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex
         */
        public static function at($index)
        {
        }
        /**
         * @param mixed $value
         *
         * @return PHPUnit_Framework_MockObject_Stub_Return
         */
        public static function returnValue($value)
        {
        }
        /**
         * @param array $valueMap
         *
         * @return PHPUnit_Framework_MockObject_Stub_ReturnValueMap
         */
        public static function returnValueMap(array $valueMap)
        {
        }
        /**
         * @param int $argumentIndex
         *
         * @return PHPUnit_Framework_MockObject_Stub_ReturnArgument
         */
        public static function returnArgument($argumentIndex)
        {
        }
        /**
         * @param mixed $callback
         *
         * @return PHPUnit_Framework_MockObject_Stub_ReturnCallback
         */
        public static function returnCallback($callback)
        {
        }
        /**
         * Returns the current object.
         *
         * This method is useful when mocking a fluent interface.
         *
         * @return PHPUnit_Framework_MockObject_Stub_ReturnSelf
         */
        public static function returnSelf()
        {
        }
        /**
         * @param Throwable|Exception $exception
         *
         * @return PHPUnit_Framework_MockObject_Stub_Exception
         *
         * @todo   Add type declaration when support for PHP 5 is dropped
         */
        public static function throwException($exception)
        {
        }
        /**
         * @param mixed $value, ...
         *
         * @return PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls
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
         * Gets the data set description of a TestCase.
         *
         * @param bool $includeData
         *
         * @return string
         */
        protected function getDataSetAsString($includeData = \true)
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
         * @return PHPUnit_Framework_TestResult
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
         * @param Exception|Throwable $e
         *
         * @throws Exception|Throwable
         */
        protected function onNotSuccessfulTest($e)
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
         * @return PHPUnit_Framework_MockObject_Generator
         */
        protected function getMockObjectGenerator()
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
         * @throws PHPUnit_Framework_RiskyTestError
         */
        private function compareGlobalStateSnapshots(\SebastianBergmann\GlobalState\Snapshot $before, \SebastianBergmann\GlobalState\Snapshot $after)
        {
        }
        /**
         * @param array  $before
         * @param array  $after
         * @param string $header
         *
         * @throws PHPUnit_Framework_RiskyTestError
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
         * @param PHPUnit_Framework_MockObject_MockObject $mock
         *
         * @return bool
         */
        private function shouldInvocationMockerBeReset(\PHPUnit_Framework_MockObject_MockObject $mock)
        {
        }
        /**
         * @param array $testArguments
         * @param array $originalTestArguments
         */
        private function registerMockObjectsFromTestArguments(array $testArguments, array &$visited = [])
        {
        }
        private function setDoesNotPerformAssertionsFromAnnotation()
        {
        }
        /**
         * @param PHPUnit_Framework_MockObject_MockObject $testArgument
         *
         * @return bool
         */
        private function isCloneable(\PHPUnit_Framework_MockObject_MockObject $testArgument)
        {
        }
    }
    class Issue1570Test extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue322Test extends \PHPUnit_Framework_TestCase
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
    class Issue1351Test extends \PHPUnit_Framework_TestCase
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
    class Issue797Test extends \PHPUnit_Framework_TestCase
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
    class Issue1335Test extends \PHPUnit_Framework_TestCase
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
    class Issue498Test extends \PHPUnit_Framework_TestCase
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
}
namespace PHPUnit\Framework {
    abstract class TestCase extends \PHPUnit_Framework_TestCase
    {
    }
}
namespace {
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
    class Issue1472Test extends \PHPUnit_Framework_TestCase
    {
        public function testAssertEqualXMLStructure()
        {
        }
    }
    class Issue1330Test extends \PHPUnit_Framework_TestCase
    {
        public function testTrue()
        {
        }
    }
    class Issue1437Test extends \PHPUnit_Framework_TestCase
    {
        public function testFailure()
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
     * A Listener for test progress.
     */
    interface PHPUnit_Framework_TestListener
    {
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time);
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         *
         * @todo  Uncomment in time for PHPUnit 6.0.0
         *
         * @see   https://github.com/sebastianbergmann/phpunit/pull/1840#issuecomment-162535997
         */
        //  public function addWarning(PHPUnit_Framework_Test $test, PHPUnit_Framework_Warning $e, $time);
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time);
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time);
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time);
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time);
        /**
         * A test suite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite);
        /**
         * A test suite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite);
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test);
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time);
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
     * An empty Listener that can be extended to implement TestListener
     * with just a few lines of code.
     *
     * @see PHPUnit_Framework_TestListener for documentation on the API methods.
     */
    abstract class PHPUnit_Framework_BaseTestListener implements \PHPUnit_Framework_TestListener
    {
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
    }
    class Issue2758TestListener extends \PHPUnit_Framework_BaseTestListener
    {
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
    }
    class Issue2758Test extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue1216Test extends \PHPUnit_Framework_TestCase
    {
        public function testConfigAvailableInBootstrap()
        {
        }
    }
    class Issue74Test extends \PHPUnit_Framework_TestCase
    {
        public function testCreateAndThrowNewExceptionInProcessIsolation()
        {
        }
    }
    class NewException extends \Exception
    {
    }
    class Issue2145Test extends \PHPUnit_Framework_TestCase
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
    class Issue1265Test extends \PHPUnit_Framework_TestCase
    {
        public function testTrue()
        {
        }
    }
    class Issue433Test extends \PHPUnit_Framework_TestCase
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
    class Issue445Test extends \PHPUnit_Framework_TestCase
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
    /**
     * @author Jean Carlo Machado <contato@jeancarlomachado.com.br>
     */
    class Test extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
        public function testTwo()
        {
        }
    }
    class Issue1471Test extends \PHPUnit_Framework_TestCase
    {
        public function testFailure()
        {
        }
    }
    class Issue581Test extends \PHPUnit_Framework_TestCase
    {
        public function testExportingObjectsDoesNotBreakWindowsLineFeeds()
        {
        }
    }
    class Issue2137Test extends \PHPUnit_Framework_TestCase
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
    class Issue503Test extends \PHPUnit_Framework_TestCase
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
    class Issue2435Test extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue1468Test extends \PHPUnit_Framework_TestCase
    {
        /**
         * @todo Implement this test
         */
        public function testFailure()
        {
        }
    }
    class Issue244Test extends \PHPUnit_Framework_TestCase
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
    class Issue1337Test extends \PHPUnit_Framework_TestCase
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
    class Issue2731Test extends \PHPUnit\Framework\TestCase
    {
        public function testOne()
        {
        }
    }
    class Issue1348Test extends \PHPUnit_Framework_TestCase
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
    class Issue1374Test extends \PHPUnit_Framework_TestCase
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
    class Issue2158Test extends \PHPUnit_Framework_TestCase
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
    class Issue765Test extends \PHPUnit_Framework_TestCase
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
    class Issue1149Test extends \PHPUnit_Framework_TestCase
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
    class Issue523Test extends \PHPUnit_Framework_TestCase
    {
        public function testAttributeEquals()
        {
        }
    }
    class Issue523 extends \ArrayIterator
    {
        protected $field = 'foo';
    }
    class Issue578Test extends \PHPUnit_Framework_TestCase
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
    class TwoTest extends \PHPUnit_Framework_TestCase
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
    class OneTest extends \PHPUnit_Framework_TestCase
    {
        public function testSomething()
        {
        }
    }
    class Foo_Bar_Issue684Test extends \PHPUnit_Framework_TestCase
    {
    }
    class Issue1021Test extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Runner_BaseTestRunnerTest extends \PHPUnit_Framework_TestCase
    {
        public function testInvokeNonStaticSuite()
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
    class Extensions_RepeatedTestTest extends \PHPUnit_Framework_TestCase
    {
        protected $suite;
        public function __construct()
        {
        }
        public function testRepeatedOnce()
        {
        }
        public function testRepeatedMoreThanOnce()
        {
        }
        public function testRepeatedZero()
        {
        }
        public function testRepeatedNegative()
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
    class Extensions_PhptTestCaseTest extends \PHPUnit_Framework_TestCase
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
        protected $filename;
        protected $testCase;
        protected $phpUtil;
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
        public function testShouldRunFileSectionAsTest()
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Invalid PHPT file
         */
        public function testShouldThrowsAnExceptionWhenPhptFileIsEmpty()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Invalid PHPT file
         */
        public function testShouldThrowsAnExceptionWhenFileSectionIsMissing()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Invalid PHPT file
         */
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
        public function testParseIniSection()
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
     * Runner for PHPT test cases.
     */
    class PHPUnit_Extensions_PhptTestCase implements \PHPUnit_Framework_Test, \PHPUnit_Framework_SelfDescribing
    {
        /**
         * @var string
         */
        private $filename;
        /**
         * @var PHPUnit_Util_PHP
         */
        private $phpUtil;
        /**
         * @var array
         */
        private $settings = ['allow_url_fopen=1', 'auto_append_file=', 'auto_prepend_file=', 'disable_functions=', 'display_errors=1', 'docref_root=', 'docref_ext=.html', 'error_append_string=', 'error_prepend_string=', 'error_reporting=-1', 'html_errors=0', 'log_errors=0', 'magic_quotes_runtime=0', 'output_handler=', 'open_basedir=', 'output_buffering=Off', 'report_memleaks=0', 'report_zend_debug=0', 'safe_mode=0', 'xdebug.default_enable=0'];
        /**
         * Constructs a test case with the given filename.
         *
         * @param string           $filename
         * @param PHPUnit_Util_PHP $phpUtil
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($filename, $phpUtil = \null)
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
         */
        private function assertPhptExpectation(array $sections, $output)
        {
        }
        /**
         * Runs a test and collects its result in a TestResult instance.
         *
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null)
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
         * @throws PHPUnit_Framework_Exception
         */
        private function parse()
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
         * Parse --INI-- section key value pairs and return as array.
         *
         * @param string
         *
         * @return array
         */
        protected function parseIniSection($content)
        {
        }
        protected function parseEnvSection($content)
        {
        }
    }
    class PhpTestCaseProxy extends \PHPUnit_Extensions_PhptTestCase
    {
        public function parseIniSection($content)
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
     * @author     Henrique Moody <henriquemoody@gmail.com>
     * @copyright  Sebastian Bergmann <sebastian@phpunit.de>
     * @license    http://www.opensource.org/licenses/BSD-3-Clause  The BSD 3-Clause License
     *
     * @link       http://www.phpunit.de/
     */
    class PHPUnit_Util_PHPTest extends \PHPUnit_Framework_TestCase
    {
        public function testShouldNotUseStderrRedirectionByDefault()
        {
        }
        public function testShouldDefinedIfUseStderrRedirection()
        {
        }
        public function testShouldDefinedIfDoNotUseStderrRedirection()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Argument #1 (No Value) of PHPUnit_Util_PHP::setUseStderrRedirection() must be a boolean
         */
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Util_RegexTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Util_GlobalStateTest extends \PHPUnit_Framework_TestCase
    {
        public function testIncludedFilesAsStringSkipsVfsProtocols()
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
    class Util_GetoptTest extends \PHPUnit_Framework_TestCase
    {
        public function testItIncludeTheLongOptionsAfterTheArgument()
        {
        }
        public function testItIncludeTheShortOptionsAfterTheArgument()
        {
        }
    }
    class Util_TestTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @todo   Split up in separate tests
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
         * @todo   This test does not really test functionality of PHPUnit_Util_Test
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
        /**
         * Check with a multiple yield / iterator data providers.
         */
        public function testMultipleYieldIteratorDataProviders()
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
         * @todo   Not sure what this test tests (name is misleading at least)
         */
        public function testParseAnnotation()
        {
        }
        /**
         * @depends Foo
         * @depends ほげ
         *
         * @todo    Remove fixture from test class
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
        /**
         * @expectedException PHPUnit_Framework_CodeCoverageException
         */
        public function testGetLinesToBeCovered2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_CodeCoverageException
         */
        public function testGetLinesToBeCovered3()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_CodeCoverageException
         */
        public function testGetLinesToBeCovered4()
        {
        }
        public function testGetLinesToBeCoveredSkipsNonExistentMethods()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_CodeCoverageException
         */
        public function testTwoCoversDefaultClassAnnoationsAreNotAllowed()
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
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Util_XMLTest extends \PHPUnit_Framework_TestCase
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Could not load XML from empty string
         */
        public function testLoadEmptyString()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Could not load XML from array
         */
        public function testLoadArray()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage Could not load XML from boolean
         */
        public function testLoadBoolean()
        {
        }
        public function testNestedXmlToVariable()
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
    class Util_TestDox_NamePrettifierTest extends \PHPUnit_Framework_TestCase
    {
        protected $namePrettifier;
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
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Util_ConfigurationTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var PHPUnit_Util_Configuration
         */
        protected $configuration;
        protected function setUp()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testExceptionIsThrownForNotExistingConfigurationFile()
        {
        }
        public function testShouldReadColorsWhenTrueInConfigurationfile()
        {
        }
        public function testShouldReadColorsWhenFalseInConfigurationfile()
        {
        }
        public function testShouldReadColorsWhenEmptyInConfigurationfile()
        {
        }
        public function testShouldReadColorsWhenInvalidInConfigurationfile()
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
         * @see https://github.com/sebastianbergmann/phpunit/issues/1181
         */
        public function testHandlePHPConfigurationDoesNotOverriteVariablesFromPutEnv()
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
         *
         * @uses   PHPUnit_Util_Configuration::getInstance
         */
        public function testWithEmptyConfigurations()
        {
        }
        /**
         * Asserts that the values in $actualConfiguration equal $expectedConfiguration.
         *
         * @param PHPUnit_Util_Configuration $expectedConfiguration
         * @param PHPUnit_Util_Configuration $actualConfiguration
         */
        protected function assertConfigurationEquals(\PHPUnit_Util_Configuration $expectedConfiguration, \PHPUnit_Util_Configuration $actualConfiguration)
        {
        }
        public function testGetTestSuiteNamesReturnsTheNamesIfDefined()
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
    class Framework_BaseTestListenerTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var PHPUnit_Framework_TestResult
         */
        private $result;
        public function testEndEventsAreCounted()
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
    class Framework_AssertTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var string
         */
        private $filesDirectory;
        protected function setUp()
        {
        }
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertArrayHasKeyThrowsExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
         * @expectedException PHPUnit_Framework_Exception
         * @expectedExceptionMessage array or ArrayAccess
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertArrayNotHasKeyThrowsExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_AssertionFailedError
         */
        public function testAssertArrayHasKeyProperlyFailsWithArrayObjectValue()
        {
        }
        public function testAssertArrayHasKeyAcceptsArrayAccessValue()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_AssertionFailedError
         */
        public function testAssertArrayHasKeyProperlyFailsWithArrayAccessValue()
        {
        }
        public function testAssertArrayNotHasKeyAcceptsArrayAccessValue()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_AssertionFailedError
         */
        public function testAssertArrayNotHasKeyPropertlyFailsWithArrayAccessValue()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertContainsOnlyThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotContainsOnlyThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        public function testAssertEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * @dataProvider notEqualProvider
         */
        public function testAssertEqualsFails($a, $b, $delta = 0.0, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * @dataProvider notEqualProvider
         */
        public function testAssertNotEqualsSucceeds($a, $b, $delta = 0.0, $canonicalize = \false, $ignoreCase = \false)
        {
        }
        /**
         * @dataProvider equalProvider
         */
        public function testAssertNotEqualsFails($a, $b, $delta = 0.0, $canonicalize = \false, $ignoreCase = \false)
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
         * @expectedException PHPUnit_Framework_Exception
         * @ticket            1860
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
        /**
         * @expectedException PHPUnit_Framework_ExpectationFailedException
         */
        public function testXMLStructureWrongNumberOfAttributes()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_ExpectationFailedException
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertIsReadableThrowsException()
        {
        }
        public function testAssertIsReadable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotIsReadableThrowsException()
        {
        }
        public function testAssertNotIsReadable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertIsWritableThrowsException()
        {
        }
        public function testAssertIsWritable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotIsWritableThrowsException()
        {
        }
        public function testAssertNotIsWritable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryExistsThrowsException()
        {
        }
        public function testAssertDirectoryExists()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryNotExistsThrowsException()
        {
        }
        public function testAssertDirectoryNotExists()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryIsReadableThrowsException()
        {
        }
        public function testAssertDirectoryIsReadable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryNotIsReadableThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryIsWritableThrowsException()
        {
        }
        public function testAssertDirectoryIsWritable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertDirectoryNotIsWritableThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertFileExistsThrowsException()
        {
        }
        public function testAssertFileExists()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertFileNotExistsThrowsException()
        {
        }
        public function testAssertFileNotExists()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertFileIsReadableThrowsException()
        {
        }
        public function testAssertFileIsReadable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertFileNotIsReadableThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertFileIsWritableThrowsException()
        {
        }
        public function testAssertFileIsWritable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertRegExpThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertRegExpThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotRegExpThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testReadAttribute3()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testReadAttribute4()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testReadAttribute5()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testReadAttributeIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetStaticAttributeRaisesExceptionForInvalidFirstArgument2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetStaticAttributeRaisesExceptionForInvalidSecondArgument3()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetObjectAttributeRaisesExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testGetObjectAttributeRaisesExceptionForInvalidSecondArgument2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasStaticAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasStaticAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasStaticAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasStaticAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertClassNotHasStaticAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertObjectHasAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertObjectHasAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertObjectHasAttributeThrowsExceptionIfAttributeNameIsNotValid()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertObjectNotHasAttributeThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertObjectNotHasAttributeThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_AssertionFailedError
         */
        public function testAssertThatAttributeEquals2()
        {
        }
        public function testAssertThatAttributeEqualTo()
        {
        }
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
        public function testAssertThatAnythingAndAnything()
        {
        }
        public function testAssertThatAnythingOrAnything()
        {
        }
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringStartsWithThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringStartsWithThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringStartsNotWithThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringStartsNotWithThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringEndsWithThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringEndsWithThrowsException2()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringEndsNotWithThrowsException()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringMatchesFormatRaisesExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringMatchesFormatRaisesExceptionForInvalidSecondArgument()
        {
        }
        public function testAssertStringMatchesFormat()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_AssertionFailedError
         */
        public function testAssertStringMatchesFormatFailure()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringNotMatchesFormatRaisesExceptionForInvalidFirstArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotCountThrowsExceptionIfExpectedCountIsNoInteger()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotSameSizeThrowsExceptionIfExpectedIsNotCountable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotSameSizeThrowsExceptionIfActualIsNotCountable()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertInstanceOfThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeInstanceOf()
        {
        }
        public function testAssertNotInstanceOf()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertInternalTypeThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeInternalType()
        {
        }
        public function testAssertNotInternalType()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertNotInternalTypeThrowsExceptionForInvalidArgument()
        {
        }
        public function testAssertAttributeNotInternalType()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringMatchesFormatFileThrowsExceptionForInvalidArgument2()
        {
        }
        public function testAssertStringMatchesFormatFile()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
        public function testAssertStringNotMatchesFormatFileThrowsExceptionForInvalidArgument2()
        {
        }
        public function testAssertStringNotMatchesFormatFile()
        {
        }
        /**
         * @return array
         */
        public static function validInvalidJsonDataprovider()
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
    class Framework_TestImplementorTest extends \PHPUnit_Framework_TestCase
    {
        public function testSuccessfulRun()
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
    class Framework_ConstraintTest extends \PHPUnit_Framework_TestCase
    {
        public function testConstraintArrayHasKey()
        {
        }
        public function testConstraintArrayHasKey2()
        {
        }
        public function testConstraintArrayNotHasKey()
        {
        }
        public function testConstraintArrayNotHasKey2()
        {
        }
        public function testConstraintIsReadable()
        {
        }
        public function testConstraintIsWritable()
        {
        }
        public function testConstraintDirectoryExists()
        {
        }
        public function testConstraintFileExists()
        {
        }
        public function testConstraintFileExists2()
        {
        }
        public function testConstraintFileNotExists()
        {
        }
        public function testConstraintFileNotExists2()
        {
        }
        public function testConstraintGreaterThan()
        {
        }
        public function testConstraintGreaterThan2()
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
        public function testConstraintIsEqual()
        {
        }
        public function isEqualProvider()
        {
        }
        /**
         * @dataProvider isEqualProvider
         */
        public function testConstraintIsEqual2($expected, $actual, $message)
        {
        }
        public function testConstraintIsNotEqual()
        {
        }
        public function testConstraintIsNotEqual2()
        {
        }
        public function testConstraintIsIdentical()
        {
        }
        public function testConstraintIsIdentical2()
        {
        }
        public function testConstraintIsIdentical3()
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
        public function testConstraintIsType()
        {
        }
        public function testConstraintIsType2()
        {
        }
        public function resources()
        {
        }
        /**
         * @dataProvider resources
         */
        public function testConstraintIsResourceTypeEvaluatesCorrectlyWithResources($resource)
        {
        }
        public function testConstraintIsNotType()
        {
        }
        public function testConstraintIsNotType2()
        {
        }
        public function testConstraintIsNull()
        {
        }
        public function testConstraintIsNull2()
        {
        }
        public function testConstraintIsNotNull()
        {
        }
        public function testConstraintIsNotNull2()
        {
        }
        public function testConstraintLessThan()
        {
        }
        public function testConstraintLessThan2()
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
        public function testConstraintCallback()
        {
        }
        /**
         * @expectedException PHPUnit_Framework_ExpectationFailedException
         * @expectedExceptionMessage Failed asserting that 'This fails' is accepted by specified callback.
         */
        public function testConstraintCallbackFailure()
        {
        }
        public function callbackReturningTrue()
        {
        }
        public static function staticCallbackReturningTrue()
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
        public function testConstraintClassHasAttribute()
        {
        }
        public function testConstraintClassHasAttribute2()
        {
        }
        public function testConstraintClassNotHasAttribute()
        {
        }
        public function testConstraintClassNotHasAttribute2()
        {
        }
        public function testConstraintClassHasStaticAttribute()
        {
        }
        public function testConstraintClassHasStaticAttribute2()
        {
        }
        public function testConstraintClassNotHasStaticAttribute()
        {
        }
        public function testConstraintClassNotHasStaticAttribute2()
        {
        }
        public function testConstraintObjectHasAttribute()
        {
        }
        public function testConstraintObjectHasAttribute2()
        {
        }
        public function testConstraintObjectNotHasAttribute()
        {
        }
        public function testConstraintObjectNotHasAttribute2()
        {
        }
        public function testConstraintPCREMatch()
        {
        }
        public function testConstraintPCREMatch2()
        {
        }
        public function testConstraintPCRENotMatch()
        {
        }
        public function testConstraintPCRENotMatch2()
        {
        }
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
        public function testConstraintStringStartsWith()
        {
        }
        public function testConstraintStringStartsWith2()
        {
        }
        public function testConstraintStringStartsNotWith()
        {
        }
        public function testConstraintStringStartsNotWith2()
        {
        }
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
        public function testConstraintStringEndsWith()
        {
        }
        public function testConstraintStringEndsWith2()
        {
        }
        public function testConstraintStringEndsNotWith()
        {
        }
        public function testConstraintStringEndsNotWith2()
        {
        }
        public function testConstraintArrayContainsCheckForObjectIdentity()
        {
        }
        public function testConstraintArrayContains()
        {
        }
        public function testConstraintArrayContains2()
        {
        }
        public function testConstraintArrayNotContains()
        {
        }
        public function testConstraintArrayNotContains2()
        {
        }
        public function testConstraintSplObjectStorageContains()
        {
        }
        public function testConstraintSplObjectStorageContains2()
        {
        }
        public function testAttributeEqualTo()
        {
        }
        public function testAttributeEqualTo2()
        {
        }
        public function testAttributeNotEqualTo()
        {
        }
        public function testAttributeNotEqualTo2()
        {
        }
        public function testConstraintIsEmpty()
        {
        }
        public function testConstraintIsEmpty2()
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Framework_Constraint_JsonMatchesTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @dataProvider evaluateDataprovider
         */
        public function testEvaluate($expected, $jsonOther, $jsonValue)
        {
        }
        public function testToString()
        {
        }
        public static function evaluateDataprovider()
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
    class CountTest extends \PHPUnit_Framework_TestCase
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
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_ArraySubsetTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @param bool              $expected
         * @param array|Traversable $subset
         * @param array|Traversable $other
         * @param bool              $strict
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
    }
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ExceptionMessageRegExpTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class ExceptionMessageTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Framework_Constraint_JsonMatches_ErrorMessageProviderTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Framework_Constraint_IsJsonTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Framework_TestListenerTest extends \PHPUnit_Framework_TestCase implements \PHPUnit_Framework_TestListener
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
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class Framework_TestFailureTest extends \PHPUnit_Framework_TestCase
    {
        public function testToString()
        {
        }
    }
    class Framework_SuiteTest extends \PHPUnit_Framework_TestCase
    {
        protected $result;
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
        /**
         * @expectedException PHPUnit_Framework_Exception
         */
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
        public function testDontSkipInheritedClass()
        {
        }
    }
    class Framework_TestCaseTest extends \PHPUnit_Framework_TestCase
    {
        protected $backupGlobalsBlacklist = ['i', 'singleton'];
        /**
         * Used be testStaticAttributesBackupPre
         */
        protected static $testStatic = 0;
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
         * @expectedException TypeError
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
         * @return array
         */
        private function getAutoreferencedArray()
        {
        }
        public function testProvidingArrayThatMixesObjectsAndScalars()
        {
        }
    }
    class NotExistingCoveredElementTest extends \PHPUnit_Framework_TestCase
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
    class TestSkipped extends \PHPUnit_Framework_TestCase
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
    class NothingTest extends \PHPUnit_Framework_TestCase
    {
        public function testNothing()
        {
        }
    }
    class StackTest extends \PHPUnit_Framework_TestCase
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
    class DataProviderIncompleteTest extends \PHPUnit_Framework_TestCase
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
    class DataProviderDebugTest extends \PHPUnit_Framework_TestCase
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
    class StopsOnWarningTest extends \PHPUnit_Framework_TestCase
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
    class NotPublicTestCase extends \PHPUnit_Framework_TestCase
    {
        public function testPublic()
        {
        }
        protected function testNotPublic()
        {
        }
    }
    class EmptyTestCaseTest extends \PHPUnit_Framework_TestCase
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
    abstract class AbstractTest extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
    }
    class Failure extends \PHPUnit_Framework_TestCase
    {
        protected function runTest()
        {
        }
    }
    class NamespaceCoverageMethodTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass::publicMethod
         */
        public function testSomething()
        {
        }
    }
    class DataProviderDependencyTest extends \PHPUnit_Framework_TestCase
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
    class InheritanceB extends \PHPUnit_Framework_TestCase
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
    class NotVoidTestCase extends \PHPUnit_Framework_TestCase
    {
    }
    class BeforeClassWithOnlyDataProviderTest extends \PHPUnit_Framework_TestCase
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
    class CoveragePublicTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::<public>
         */
        public function testSomething()
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
     * Tests for the BankAccount class.
     *
     */
    class BankAccountTest extends \PHPUnit_Framework_TestCase
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
    class FatalTest extends \PHPUnit_Framework_TestCase
    {
        public function testFatalError()
        {
        }
    }
    class NamespaceCoverageNotPublicTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Utility class that can print to STDOUT or write to a file.
     */
    class PHPUnit_Util_Printer
    {
        /**
         * If true, flush output after every write.
         *
         * @var bool
         */
        protected $autoFlush = \false;
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
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($out = \null)
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
    }
    /**
     * Prints the result of a TextUI TestRunner run.
     */
    class PHPUnit_TextUI_ResultPrinter extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
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
        protected $lastTestFailed = \false;
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
        protected $colors = \false;
        /**
         * @var bool
         */
        protected $debug = \false;
        /**
         * @var bool
         */
        protected $verbose = \false;
        /**
         * @var int
         */
        private $numberOfColumns;
        /**
         * @var bool
         */
        private $reverse = \false;
        /**
         * @var bool
         */
        private $defectListPrinted = \false;
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
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($out = \null, $verbose = \false, $colors = self::COLOR_DEFAULT, $debug = \false, $numberOfColumns = 80, $reverse = \false)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        public function printResult(\PHPUnit_Framework_TestResult $result)
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
         * @param PHPUnit_Framework_TestFailure $defect
         * @param int                           $count
         */
        protected function printDefect(\PHPUnit_Framework_TestFailure $defect, $count)
        {
        }
        /**
         * @param PHPUnit_Framework_TestFailure $defect
         * @param int                           $count
         */
        protected function printDefectHeader(\PHPUnit_Framework_TestFailure $defect, $count)
        {
        }
        /**
         * @param PHPUnit_Framework_TestFailure $defect
         */
        protected function printDefectTrace(\PHPUnit_Framework_TestFailure $defect)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printErrors(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printFailures(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printWarnings(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printIncompletes(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printRisky(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printSkipped(\PHPUnit_Framework_TestResult $result)
        {
        }
        protected function printHeader()
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        protected function printFooter(\PHPUnit_Framework_TestResult $result)
        {
        }
        public function printWaitPrompt()
        {
        }
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
        protected function writeWithColor($color, $buffer, $lf = \true)
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
        private function writeCountString($count, $name, $color, $always = \false)
        {
        }
    }
    class CustomPrinter extends \PHPUnit_TextUI_ResultPrinter
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
     *
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
    class Success extends \PHPUnit_Framework_TestCase
    {
        protected function runTest()
        {
        }
    }
    class DataProviderSkippedTest extends \PHPUnit_Framework_TestCase
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
    class NamespaceCoverageProtectedTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass::<protected>
         */
        public function testSomething()
        {
        }
    }
    class IsolationTest extends \PHPUnit_Framework_TestCase
    {
        public function testIsInIsolationReturnsFalse()
        {
        }
        public function testIsInIsolationReturnsTrue()
        {
        }
    }
    class ExceptionTest extends \PHPUnit_Framework_TestCase
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
     *
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
    class CoverageFunctionParenthesesWhitespaceTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers ::globalFunction ( )
         */
        public function testSomething()
        {
        }
    }
    class ExceptionInTest extends \PHPUnit_Framework_TestCase
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
    class NamespaceCoverageNotPrivateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass::<!private>
         */
        public function testSomething()
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
     * Tests for the BankAccount class.
     *
     */
    class BankAccountWithCustomExtensionTest extends \PHPUnit_Framework_TestCase
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
    class WasRun extends \PHPUnit_Framework_TestCase
    {
        public $wasRun = \false;
        protected function runTest()
        {
        }
    }
    class CoverageClassExtendedTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass<extended>
         */
        public function testSomething()
        {
        }
    }
    class NamespaceCoveragePrivateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass::<private>
         */
        public function testSomething()
        {
        }
    }
    class OutputTestCase extends \PHPUnit_Framework_TestCase
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
    class CoverageNotPublicTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::<!public>
         */
        public function testSomething()
        {
        }
    }
    class IncompleteTest extends \PHPUnit_Framework_TestCase
    {
        public function testIncomplete()
        {
        }
    }
    class NamespaceCoveragePublicTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass::<public>
         */
        public function testSomething()
        {
        }
    }
    class FailureTest extends \PHPUnit_Framework_TestCase
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
    class CoverageProtectedTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::<protected>
         */
        public function testSomething()
        {
        }
    }
    class BeforeClassAndAfterClassTest extends \PHPUnit_Framework_TestCase
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
     *
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
    class CoverageMethodParenthesesWhitespaceTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::publicMethod ( )
         */
        public function testSomething()
        {
        }
    }
    class CoverageMethodTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         */
        public function testSomething()
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
    class DependencySuccessTest extends \PHPUnit_Framework_TestCase
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
    class DependencyFailureTest extends \PHPUnit_Framework_TestCase
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
    class CoverageMethodOneLineAnnotationTest extends \PHPUnit_Framework_TestCase
    {
        /** @covers CoveredClass::publicMethod */
        public function testSomething()
        {
        }
    }
    class CoverageFunctionTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers ::globalFunction
         */
        public function testSomething()
        {
        }
    }
    class TestDoxGroupTest extends \PHPUnit_Framework_TestCase
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
    class AssertionExampleTest extends \PHPUnit_Framework_TestCase
    {
        public function testOne()
        {
        }
    }
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassTest extends \PHPUnit_Framework_TestCase
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
    class CoveragePrivateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::<private>
         */
        public function testSomething()
        {
        }
    }
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
    class BaseTestListenerSample extends \PHPUnit_Framework_BaseTestListener
    {
        public $endCount = 0;
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
    }
    class OneTestCase extends \PHPUnit_Framework_TestCase
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
        protected $b;
        protected $c;
        public function __construct($a, $b, $c)
        {
        }
    }
}
namespace My\Space {
    class ExceptionNamespaceTest extends \PHPUnit_Framework_TestCase
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
    class MultipleDataProviderTest extends \PHPUnit_Framework_TestCase
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
    class IgnoreCodeCoverageClassTest extends \PHPUnit_Framework_TestCase
    {
        public function testReturnTrue()
        {
        }
        public function testReturnFalse()
        {
        }
    }
    class NoArgTestCaseTest extends \PHPUnit_Framework_TestCase
    {
        public function testNothing()
        {
        }
    }
    class TemplateMethodsTest extends \PHPUnit_Framework_TestCase
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
        protected function onNotSuccessfulTest(\Exception $e)
        {
        }
    }
    class ChangeCurrentWorkingDirectoryTest extends \PHPUnit_Framework_TestCase
    {
        public function testSomethingThatChangesTheCwd()
        {
        }
    }
    class ExceptionStackTest extends \PHPUnit_Framework_TestCase
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
    class TestWithTest extends \PHPUnit_Framework_TestCase
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
    class CoverageNotProtectedTest extends \PHPUnit_Framework_TestCase
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
    class TestIncomplete extends \PHPUnit_Framework_TestCase
    {
        protected function runTest()
        {
        }
    }
    class CoverageNothingTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::publicMethod
         * @coversNothing
         */
        public function testSomething()
        {
        }
    }
    class DataProviderTest extends \PHPUnit_Framework_TestCase
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
    class ThrowExceptionTestCase extends \PHPUnit_Framework_TestCase
    {
        public function test()
        {
        }
    }
    class ThrowNoExceptionTestCase extends \PHPUnit_Framework_TestCase
    {
        public function test()
        {
        }
    }
    class ExceptionInTearDownTest extends \PHPUnit_Framework_TestCase
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
    class CoverageNotPrivateTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::<!private>
         */
        public function testSomething()
        {
        }
    }
    class ClonedDependencyTest extends \PHPUnit_Framework_TestCase
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
     *
     */
    class ClassWithToString
    {
        public function __toString()
        {
        }
    }
    class ExceptionInAssertPostConditionsTest extends \PHPUnit_Framework_TestCase
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
    class CoverageFunctionParenthesesTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers ::globalFunction()
         */
        public function testSomething()
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
     * Base class for all test runners.
     */
    abstract class PHPUnit_Runner_BaseTestRunner
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
         * @return PHPUnit_Runner_TestSuiteLoader
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
         * @return PHPUnit_Framework_Test
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
    class MockRunner extends \PHPUnit_Runner_BaseTestRunner
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
    class DataProviderFilterTest extends \PHPUnit_Framework_TestCase
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
    /**
     * @coversDefaultClass \Foo\CoveredClass
     */
    class NamespaceCoverageCoversClassPublicTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers ::publicMethod
         */
        public function testSomething()
        {
        }
    }
    class MultiDependencyTest extends \PHPUnit_Framework_TestCase
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class PHPUnit_TextUI_Command
    {
        /**
         * @var array
         */
        protected $arguments = ['listGroups' => \false, 'listSuites' => \false, 'loader' => \null, 'useDefaultConfiguration' => \true, 'loadedExtensions' => [], 'notLoadedExtensions' => []];
        /**
         * @var array
         */
        protected $options = [];
        /**
         * @var array
         */
        protected $longOptions = ['atleast-version=' => \null, 'bootstrap=' => \null, 'colors==' => \null, 'columns=' => \null, 'configuration=' => \null, 'coverage-clover=' => \null, 'coverage-crap4j=' => \null, 'coverage-html=' => \null, 'coverage-php=' => \null, 'coverage-text==' => \null, 'coverage-xml=' => \null, 'debug' => \null, 'disallow-test-output' => \null, 'disallow-resource-usage' => \null, 'disallow-todo-tests' => \null, 'enforce-time-limit' => \null, 'exclude-group=' => \null, 'filter=' => \null, 'generate-configuration' => \null, 'group=' => \null, 'help' => \null, 'include-path=' => \null, 'list-groups' => \null, 'list-suites' => \null, 'loader=' => \null, 'log-json=' => \null, 'log-junit=' => \null, 'log-tap=' => \null, 'log-teamcity=' => \null, 'no-configuration' => \null, 'no-coverage' => \null, 'no-extensions' => \null, 'no-globals-backup' => \null, 'printer=' => \null, 'process-isolation' => \null, 'repeat=' => \null, 'report-useless-tests' => \null, 'reverse-list' => \null, 'static-backup' => \null, 'stderr' => \null, 'stop-on-error' => \null, 'stop-on-failure' => \null, 'stop-on-warning' => \null, 'stop-on-incomplete' => \null, 'stop-on-risky' => \null, 'stop-on-skipped' => \null, 'fail-on-warning' => \null, 'fail-on-risky' => \null, 'strict-coverage' => \null, 'disable-coverage-ignore' => \null, 'strict-global-state' => \null, 'tap' => \null, 'teamcity' => \null, 'testdox' => \null, 'testdox-group=' => \null, 'testdox-exclude-group=' => \null, 'testdox-html=' => \null, 'testdox-text=' => \null, 'testdox-xml=' => \null, 'test-suffix=' => \null, 'testsuite=' => \null, 'verbose' => \null, 'version' => \null, 'whitelist=' => \null];
        /**
         * @var bool
         */
        private $versionStringPrinted = \false;
        /**
         * @param bool $exit
         */
        public static function main($exit = \true)
        {
        }
        /**
         * @param array $argv
         * @param bool  $exit
         *
         * @return int
         */
        public function run(array $argv, $exit = \true)
        {
        }
        /**
         * Create a TestRunner, override in subclasses.
         *
         * @return PHPUnit_TextUI_TestRunner
         */
        protected function createRunner()
        {
        }
        /**
         * Handles the command-line arguments.
         *
         * A child class of PHPUnit_TextUI_Command can hook into the argument
         * parsing by adding the switch(es) to the $longOptions array and point to a
         * callback method that handles the switch(es) in the child class like this
         *
         * <code>
         * <?php
         * class MyCommand extends PHPUnit_TextUI_Command
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
         *     // PHPUnit_TextUI_Command will mean that it'll be
         *     // PHPUnit_TextUI_Command that gets instantiated,
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
         * Handles the loading of the PHPUnit_Runner_TestSuiteLoader implementation.
         *
         * @param string $loaderClass
         * @param string $loaderFile
         *
         * @return PHPUnit_Runner_TestSuiteLoader
         */
        protected function handleLoader($loaderClass, $loaderFile = '')
        {
        }
        /**
         * Handles the loading of the PHPUnit_Util_Printer implementation.
         *
         * @param string $printerClass
         * @param string $printerFile
         *
         * @return PHPUnit_Util_Printer|string
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
        protected function handleSelfUpdate($upgrade = \false)
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
        private function showError($message)
        {
        }
        /**
         * @param string $directory
         */
        private function handleExtensions($directory)
        {
        }
    }
    class MyCommand extends \PHPUnit_TextUI_Command
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
    class NamespaceCoverageClassExtendedTest extends \PHPUnit_Framework_TestCase
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
    class CoverageNamespacedFunctionTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers foo\func()
         */
        public function testFunc()
        {
        }
    }
    class CoverageMethodParenthesesTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass::publicMethod()
         */
        public function testSomething()
        {
        }
    }
    class CoverageClassTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers CoveredClass
         */
        public function testSomething()
        {
        }
    }
    class NamespaceCoverageNotProtectedTest extends \PHPUnit_Framework_TestCase
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
    class TestError extends \PHPUnit_Framework_TestCase
    {
        protected function runTest()
        {
        }
    }
    class NamespaceCoverageClassTest extends \PHPUnit_Framework_TestCase
    {
        /**
         * @covers Foo\CoveredClass
         */
        public function testSomething()
        {
        }
    }
    class IniTest extends \PHPUnit_Framework_TestCase
    {
        public function testIni()
        {
        }
    }
    class ExceptionInSetUpTest extends \PHPUnit_Framework_TestCase
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
    class DoubleTestCase implements \PHPUnit_Framework_Test
    {
        protected $testCase;
        public function __construct(\PHPUnit_Framework_TestCase $testCase)
        {
        }
        public function count()
        {
        }
        public function run(\PHPUnit_Framework_TestResult $result = \null)
        {
        }
    }
    /**
     * @requires extension nonExistingExtension
     */
    class RequirementsClassBeforeClassHookTest extends \PHPUnit_Framework_TestCase
    {
        public static function setUpBeforeClass()
        {
        }
    }
    class RequirementsTest extends \PHPUnit_Framework_TestCase
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
         * @requires OS Linux
         */
        public function testEleven()
        {
        }
        /**
         * @requires PHP 99-dev
         * @requires PHPUnit 9-dev
         * @requires OS DOESNOTEXIST
         * @requires function testFuncOne
         * @requires function testFuncTwo
         * @requires extension testExtOne
         * @requires extension testExtTwo
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
         * @requires	  extension	  spl
         * @requires	  OS	  .*
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
    }
    class ExceptionInAssertPreConditionsTest extends \PHPUnit_Framework_TestCase
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
    class NoTestCases extends \PHPUnit_Framework_TestCase
    {
        public function noTestCase()
        {
        }
    }
    class BeforeAndAfterTest extends \PHPUnit_Framework_TestCase
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
    class CoverageNoneTest extends \PHPUnit_Framework_TestCase
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
    class DataProviderTestDoxTest extends \PHPUnit_Framework_TestCase
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
namespace PHPUnit\Framework {
    abstract class Assert extends \PHPUnit_Framework_Assert
    {
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Marker interface for PHPUnit exceptions.
     */
    interface PHPUnit_Exception
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
    class PHPUnit_Framework_Exception extends \RuntimeException implements \PHPUnit_Exception
    {
        /**
         * @var array
         */
        protected $serializableTrace;
        public function __construct($message = '', $code = 0, \Exception $previous = \null)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Thrown when an assertion failed.
     */
    class PHPUnit_Framework_AssertionFailedError extends \PHPUnit_Framework_Exception implements \PHPUnit_Framework_SelfDescribing
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
}
namespace PHPUnit\Framework {
    class AssertionFailedError extends \PHPUnit_Framework_AssertionFailedError
    {
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A TestSuite is a composite of Tests. It runs a collection of test cases.
     */
    class PHPUnit_Framework_TestSuite implements \PHPUnit_Framework_Test, \PHPUnit_Framework_SelfDescribing, \IteratorAggregate
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
        protected $backupGlobals = \null;
        /**
         * Enable or disable the backup and restoration of static attributes.
         *
         * @var bool
         */
        protected $backupStaticAttributes = \null;
        /**
         * @var bool
         */
        private $beStrictAboutChangesToGlobalState = \null;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = \false;
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
         * @var array
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
        protected $testCase = \false;
        /**
         * @var array
         */
        protected $foundClasses = [];
        /**
         * @var PHPUnit_Runner_Filter_Factory
         */
        private $iteratorFilter = \null;
        /**
         * @var string[]
         */
        private $declaredClasses;
        /**
         * Constructs a new TestSuite:
         *
         *   - PHPUnit_Framework_TestSuite() constructs an empty TestSuite.
         *
         *   - PHPUnit_Framework_TestSuite(ReflectionClass) constructs a
         *     TestSuite from the given class.
         *
         *   - PHPUnit_Framework_TestSuite(ReflectionClass, String)
         *     constructs a TestSuite from the given class with the given
         *     name.
         *
         *   - PHPUnit_Framework_TestSuite(String) either constructs a
         *     TestSuite from the given class (if the passed string is the
         *     name of an existing class) or constructs an empty TestSuite
         *     with the given name.
         *
         * @param mixed  $theClass
         * @param string $name
         *
         * @throws PHPUnit_Framework_Exception
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
         * @param PHPUnit_Framework_Test $test
         * @param array                  $groups
         */
        public function addTest(\PHPUnit_Framework_Test $test, $groups = [])
        {
        }
        /**
         * Adds the tests from the given class to the suite.
         *
         * @param mixed $testClass
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function addTestSuite($testClass)
        {
        }
        /**
         * Wraps both <code>addTest()</code> and <code>addTestSuite</code>
         * as well as the separate import statements for the user's convenience.
         *
         * If the named file cannot be read or there are no new tests that can be
         * added, a <code>PHPUnit_Framework_WarningTestCase</code> will be created instead,
         * leaving the current test run untouched.
         *
         * @param string $filename
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function addTestFile($filename)
        {
        }
        /**
         * Wrapper for addTestFile() that adds multiple test files.
         *
         * @param array|Iterator $filenames
         *
         * @throws PHPUnit_Framework_Exception
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
        public function count($preferCache = \false)
        {
        }
        /**
         * @param ReflectionClass $theClass
         * @param string          $name
         *
         * @return PHPUnit_Framework_Test
         *
         * @throws PHPUnit_Framework_Exception
         */
        public static function createTest(\ReflectionClass $theClass, $name)
        {
        }
        /**
         * Creates a default TestResult object.
         *
         * @return PHPUnit_Framework_TestResult
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
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null)
        {
        }
        /**
         * @param bool $runTestInSeparateProcess
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function setRunTestInSeparateProcess($runTestInSeparateProcess)
        {
        }
        /**
         * Runs a test.
         *
         * @deprecated
         *
         * @param PHPUnit_Framework_Test       $test
         * @param PHPUnit_Framework_TestResult $result
         */
        public function runTest(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_TestResult $result)
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
         * @return PHPUnit_Framework_Test
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
         * @throws PHPUnit_Framework_SkippedTestSuiteError
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
         * @return PHPUnit_Framework_WarningTestCase
         */
        protected static function warning($message)
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         *
         * @return PHPUnit_Framework_SkippedTestCase
         */
        protected static function skipTest($class, $methodName, $message)
        {
        }
        /**
         * @param string $class
         * @param string $methodName
         * @param string $message
         *
         * @return PHPUnit_Framework_IncompleteTestCase
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
         * @return RecursiveIteratorIterator
         */
        public function getIterator()
        {
        }
        public function injectFilter(\PHPUnit_Runner_Filter_Factory $filter)
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
}
namespace PHPUnit\Framework {
    class TestSuite extends \PHPUnit_Framework_TestSuite
    {
    }
    abstract class BaseTestListener extends \PHPUnit_Framework_BaseTestListener
    {
    }
    interface TestListener extends \PHPUnit_Framework_TestListener
    {
    }
    interface Test extends \PHPUnit_Framework_Test
    {
    }
}
namespace {
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    abstract class PHPUnit_Runner_Filter_GroupFilterIterator extends \RecursiveFilterIterator
    {
        /**
         * @var array
         */
        protected $groupTests = [];
        /**
         * @param RecursiveIterator           $iterator
         * @param array                       $groups
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit_Framework_TestSuite $suite)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Runner_Filter_Group_Exclude extends \PHPUnit_Runner_Filter_GroupFilterIterator
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Runner_Filter_Group_Include extends \PHPUnit_Runner_Filter_GroupFilterIterator
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Runner_Filter_Factory
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
        public function factory(\Iterator $iterator, \PHPUnit_Framework_TestSuite $suite)
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
    class PHPUnit_Runner_Filter_Test extends \RecursiveFilterIterator
    {
        /**
         * @var string
         */
        protected $filter = \null;
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
        /**
         * @return bool
         */
        public function accept()
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
     * An interface to define how a test suite should be loaded.
     */
    interface PHPUnit_Runner_TestSuiteLoader
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * The standard test suite loader.
     */
    class PHPUnit_Runner_StandardTestSuiteLoader implements \PHPUnit_Runner_TestSuiteLoader
    {
        /**
         * @param string $suiteClassName
         * @param string $suiteClassFile
         *
         * @return ReflectionClass
         *
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Runner_Exception extends \RuntimeException implements \PHPUnit_Exception
    {
    }
    /**
     * This class defines the current version of PHPUnit.
     */
    class PHPUnit_Runner_Version
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Suite for .phpt test cases.
     */
    class PHPUnit_Extensions_PhptTestSuite extends \PHPUnit_Framework_TestSuite
    {
        /**
         * Constructs a new TestSuite for .phpt test cases.
         *
         * @param string $directory
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($directory)
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
     * We have a TestSuite object A.
     * In TestSuite object A we have Tests tagged with @group.
     * We want a TestSuite object B that contains TestSuite objects C, D, ...
     * for the Tests tagged with @group C, @group D, ...
     * Running the Tests from TestSuite object B results in Tests tagged with both
     *
     * @group C and @group D in TestSuite object A to be run twice .
     *
     * <code>
     * $suite = new PHPUnit_Extensions_GroupTestSuite($A, array('C', 'D'));
     * </code>
     */
    class PHPUnit_Extensions_GroupTestSuite extends \PHPUnit_Framework_TestSuite
    {
        public function __construct(\PHPUnit_Framework_TestSuite $suite, array $groups)
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
     * A Decorator for Tests.
     *
     * Use TestDecorator as the base class for defining new
     * test decorators. Test decorator subclasses can be introduced
     * to add behaviour before or after a test is run.
     */
    class PHPUnit_Extensions_TestDecorator extends \PHPUnit_Framework_Assert implements \PHPUnit_Framework_Test, \PHPUnit_Framework_SelfDescribing
    {
        /**
         * The Test to be decorated.
         *
         * @var object
         */
        protected $test = \null;
        /**
         * Constructor.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function __construct(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * Returns a string representation of the test.
         *
         * @return string
         */
        public function toString()
        {
        }
        /**
         * Runs the test and collects the
         * result in a TestResult.
         *
         * @param PHPUnit_Framework_TestResult $result
         */
        public function basicRun(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * Counts the number of test cases that
         * will be run by this test.
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * Creates a default TestResult object.
         *
         * @return PHPUnit_Framework_TestResult
         */
        protected function createResult()
        {
        }
        /**
         * Returns the test to be run.
         *
         * @return PHPUnit_Framework_Test
         */
        public function getTest()
        {
        }
        /**
         * Runs the decorated test and collects the
         * result in a TestResult.
         *
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null)
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
     * A Decorator that runs a test repeatedly.
     */
    class PHPUnit_Extensions_RepeatedTest extends \PHPUnit_Extensions_TestDecorator
    {
        /**
         * @var bool
         */
        protected $processIsolation = \false;
        /**
         * @var int
         */
        protected $timesRepeat = 1;
        /**
         * @param PHPUnit_Framework_Test $test
         * @param int                    $timesRepeat
         * @param bool                   $processIsolation
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct(\PHPUnit_Framework_Test $test, $timesRepeat = 1, $processIsolation = \false)
        {
        }
        /**
         * Counts the number of test cases that
         * will be run by this test.
         *
         * @return int
         */
        public function count()
        {
        }
        /**
         * Runs the decorated test and collects the
         * result in a TestResult.
         *
         * @param PHPUnit_Framework_TestResult $result
         *
         * @return PHPUnit_Framework_TestResult
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function run(\PHPUnit_Framework_TestResult $result = \null)
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
     * Base class for test listeners that interact with an issue tracker.
     */
    abstract class PHPUnit_Extensions_TicketListener implements \PHPUnit_Framework_TestListener
    {
        /**
         * @var array
         */
        protected $ticketCounts = [];
        /**
         * @var bool
         */
        protected $ran = \false;
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A test suite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test suite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
        /**
         * @param mixed $ticketId
         *
         * @return mixed
         */
        protected abstract function getTicketInfo($ticketId = \null);
        /**
         * @param string $ticketId
         * @param string $newStatus
         * @param string $message
         * @param string $resolution
         */
        protected abstract function updateTicket($ticketId, $newStatus, $message, $resolution);
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
     * Error handler that converts PHP errors and warnings to exceptions.
     */
    class PHPUnit_Util_Regex
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
        public static function pregMatchSafe($pattern, $subject, $matches = \null, $flags = 0, $offset = 0)
        {
        }
    }
    /**
     * A TestListener that generates a logfile of the test execution using the
     * TeamCity format (for use with PhpStorm, for instance).
     */
    class PHPUnit_Util_Log_TeamCity extends \PHPUnit_TextUI_ResultPrinter
    {
        /**
         * @var bool
         */
        private $isSummaryTestCountPrinted = \false;
        /**
         * @var string
         */
        private $startedTestName;
        /**
         * @var string
         */
        private $flowId;
        /**
         * @param string $progress
         */
        protected function writeProgress($progress)
        {
        }
        /**
         * @param PHPUnit_Framework_TestResult $result
         */
        public function printResult(\PHPUnit_Framework_TestResult $result)
        {
        }
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        public function printIgnoredTest($testName, \Exception $e)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
         * @param Exception $e
         *
         * @return string
         */
        private static function getMessage(\Exception $e)
        {
        }
        /**
         * @param Exception $e
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
     * A TestListener that generates a logfile of the test execution in XML markup.
     *
     * The XML markup used is the same as the one that is used by the JUnit Ant task.
     */
    class PHPUnit_Util_Log_JUnit extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
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
        protected $logIncompleteSkipped = \false;
        /**
         * @var bool
         */
        protected $writeDocument = \true;
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
        protected $testSuiteTimes = [0];
        /**
         * @var int
         */
        protected $testSuiteLevel = 0;
        /**
         * @var DOMElement
         */
        protected $currentTestCase = \null;
        /**
         * @var bool
         */
        protected $attachCurrentTestCase = \true;
        /**
         * Constructor.
         *
         * @param mixed $out
         * @param bool  $logIncompleteSkipped
         */
        public function __construct($out = \null, $logIncompleteSkipped = \false)
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
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         * @param string                 $type
         */
        private function doAddFault(\PHPUnit_Framework_Test $test, \Exception $e, $time, $type)
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
     * A TestListener that generates JSON messages.
     */
    class PHPUnit_Util_Log_JSON extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
    {
        /**
         * @var string
         */
        protected $currentTestSuiteName = '';
        /**
         * @var string
         */
        protected $currentTestName = '';
        /**
         * @var bool
         */
        protected $currentTestPass = \true;
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
        /**
         * @param string                          $status
         * @param float                           $time
         * @param array                           $trace
         * @param string                          $message
         * @param PHPUnit_Framework_TestCase|null $test
         */
        protected function writeCase($status, $time, array $trace = [], $message = '', $test = \null)
        {
        }
        /**
         * @param string $buffer
         */
        public function write($buffer)
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
     * A TestListener that generates a logfile of the
     * test execution using the Test Anything Protocol (TAP).
     */
    class PHPUnit_Util_Log_TAP extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
    {
        /**
         * @var int
         */
        protected $testNumber = 0;
        /**
         * @var int
         */
        protected $testSuiteLevel = 0;
        /**
         * @var bool
         */
        protected $testSuccessful = \true;
        /**
         * Constructor.
         *
         * @param mixed $out
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($out = \null)
        {
        }
        /**
         * An error occurred.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
        {
        }
        /**
         * @param PHPUnit_Framework_Test $test
         * @param string                 $prefix
         * @param string                 $directive
         */
        protected function writeNotOk(\PHPUnit_Framework_Test $test, $prefix = '', $directive = '')
        {
        }
        /**
         * @param PHPUnit_Framework_Test $test
         */
        private function writeDiagnostics(\PHPUnit_Framework_Test $test)
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
     * Utility class for textual type (and value) representation.
     */
    class PHPUnit_Util_Type
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Utility class for code filtering.
     */
    class PHPUnit_Util_Filter
    {
        /**
         * Filters stack frames from PHPUnit classes.
         *
         * @param Exception $e
         * @param bool      $asString
         *
         * @return string
         */
        public static function getFilteredStacktrace($e, $asString = \true)
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
    /**
     * Utility methods for PHP sub-processes.
     */
    abstract class PHPUnit_Util_PHP
    {
        /**
         * @var Runtime
         */
        protected $runtime;
        /**
         * @var bool
         */
        protected $stderrRedirection = \false;
        /**
         * @var string
         */
        protected $stdin = '';
        /**
         * @var string
         */
        protected $args = '';
        /**
         * @var array
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
         * @throws PHPUnit_Framework_Exception
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
         * @param array $env
         */
        public function setEnv(array $env)
        {
        }
        /**
         * Returns the array of environment variables to start the child process with
         *
         * @return array
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
         * @return PHPUnit_Util_PHP
         */
        public static function factory()
        {
        }
        /**
         * Runs a single test in a separate PHP process.
         *
         * @param string                       $job
         * @param PHPUnit_Framework_Test       $test
         * @param PHPUnit_Framework_TestResult $result
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function runTestJob($job, \PHPUnit_Framework_Test $test, \PHPUnit_Framework_TestResult $result)
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
        public function getCommand(array $settings, $file = \null)
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
         * @throws PHPUnit_Framework_Exception
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
         * @param PHPUnit_Framework_Test       $test
         * @param PHPUnit_Framework_TestResult $result
         * @param string                       $stdout
         * @param string                       $stderr
         */
        private function processChildResult(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_TestResult $result, $stdout, $stderr)
        {
        }
        /**
         * Gets the thrown exception from a PHPUnit_Framework_TestFailure.
         *
         * @param PHPUnit_Framework_TestFailure $error
         *
         * @return Exception
         *
         * @see    https://github.com/sebastianbergmann/phpunit/issues/74
         */
        private function getException(\PHPUnit_Framework_TestFailure $error)
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
     * Filesystem helpers.
     */
    class PHPUnit_Util_Filesystem
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
    class PHPUnit_Util_ErrorHandler
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
         * @throws PHPUnit_Framework_Error
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
         * @throws Exception if event of specified severity is emitted
         */
        public static function handleErrorOnce($severity = \E_WARNING)
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
     * Utility methods to load PHP sourcefiles.
     */
    class PHPUnit_Util_Fileloader
    {
        /**
         * Checks if a PHP sourcefile is readable.
         * The sourcefile is loaded through the load() method.
         *
         * @param string $filename
         *
         * @return string
         *
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * XML helpers.
     */
    class PHPUnit_Util_XML
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
        public static function load($actual, $isHtml = \false, $filename = '', $xinclude = \false, $strict = \false)
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
        public static function loadFile($filename, $isHtml = \false, $xinclude = \false, $strict = \false)
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
     * Wrapper for the PHPUnit XML configuration file.
     *
     * Example XML configuration file:
     * <code>
     * <?xml version="1.0" encoding="utf-8" ?>
     *
     * <phpunit backupGlobals="true"
     *          backupStaticAttributes="false"
     *          bootstrap="/path/to/bootstrap.php"
     *          cacheTokens="false"
     *          columns="80"
     *          colors="false"
     *          stderr="false"
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
     *          printerClass="PHPUnit_TextUI_ResultPrinter"
     *          testSuiteLoaderClass="PHPUnit_Runner_StandardTestSuiteLoader"
     *          beStrictAboutChangesToGlobalState="false"
     *          beStrictAboutCoversAnnotation="false"
     *          beStrictAboutOutputDuringTests="false"
     *          beStrictAboutResourceUsageDuringSmallTests="false"
     *          beStrictAboutTestsThatDoNotTestAnything="false"
     *          beStrictAboutTodoAnnotatedTests="false"
     *          checkForUnintentionallyCoveredCode="false"
     *          enforceTimeLimit="false"
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
     *     <log type="tap" target="/tmp/logfile.tap"/>
     *     <log type="teamcity" target="/tmp/logfile.txt"/>
     *     <log type="junit" target="/tmp/logfile.xml" logIncompleteSkipped="false"/>
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
    class PHPUnit_Util_Configuration
    {
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
        private final function __clone()
        {
        }
        /**
         * Returns a PHPUnit configuration object.
         *
         * @param string $filename
         *
         * @return PHPUnit_Util_Configuration
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
         * @return PHPUnit_Framework_TestSuite
         */
        public function getTestSuiteConfiguration($testSuiteFilter = \null)
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
         * @param DOMElement $testSuiteNode
         *
         * @return PHPUnit_Framework_TestSuite
         */
        protected function getTestSuite(\DOMElement $testSuiteNode, $testSuiteFilter = \null)
        {
        }
        /**
         * @param string $value
         * @param bool   $default
         *
         * @return bool
         */
        protected function getBoolean($value, $default)
        {
        }
        /**
         * @param string $value
         * @param bool   $default
         *
         * @return bool
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
        protected function toAbsolutePath($path, $useIncludePath = \false)
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
     * Command-line options parsing class.
     */
    class PHPUnit_Util_Getopt
    {
        public static function getopt(array $args, $short_options, $long_options = \null)
        {
        }
        protected static function parseShortOption($arg, $short_options, &$opts, &$args)
        {
        }
        protected static function parseLongOption($arg, $long_options, &$opts, &$args)
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
     * Default utility for PHP sub-processes.
     */
    class PHPUnit_Util_PHP_Default extends \PHPUnit_Util_PHP
    {
        /**
         * @var string
         */
        protected $tempFile;
        /**
         * @var bool
         */
        protected $useTempFile = \false;
        /**
         * Runs a single job (PHP code) using a separate PHP process.
         *
         * @param string $job
         * @param array  $settings
         *
         * @return array
         *
         * @throws PHPUnit_Framework_Exception
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
         * @return array
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function runProcess($job, $settings)
        {
        }
        /**
         * @param resource $pipe
         * @param string   $job
         *
         * @throws PHPUnit_Framework_Exception
         */
        protected function process($pipe, $job)
        {
        }
        protected function cleanup()
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
     * Windows utility for PHP sub-processes.
     *
     * Reading from STDOUT or STDERR hangs forever on Windows if the output is
     * too large.
     *
     * @see https://bugs.php.net/bug.php?id=51800
     */
    class PHPUnit_Util_PHP_Windows extends \PHPUnit_Util_PHP_Default
    {
        protected $useTempFile = \true;
        protected function getHandles()
        {
        }
        public function getCommand(array $settings, $file = \null)
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
     * Iterator for test suites.
     */
    class PHPUnit_Util_TestSuiteIterator implements \RecursiveIterator
    {
        /**
         * @var int
         */
        protected $position;
        /**
         * @var PHPUnit_Framework_Test[]
         */
        protected $tests;
        /**
         * @param PHPUnit_Framework_TestSuite $testSuite
         */
        public function __construct(\PHPUnit_Framework_TestSuite $testSuite)
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
         * @return PHPUnit_Framework_Test
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
         * @return PHPUnit_Util_TestSuiteIterator
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Factory for PHPUnit_Framework_Exception objects that are used to describe
     * invalid arguments passed to a function or method.
     */
    class PHPUnit_Util_InvalidArgumentHelper
    {
        /**
         * @param int    $argument
         * @param string $type
         * @param mixed  $value
         *
         * @return PHPUnit_Framework_Exception
         */
        public static function factory($argument, $type, $value = \null)
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
    class PHPUnit_Util_ConfigurationGenerator
    {
        /**
         * @var string
         */
        private $defaultTemplate = <<<EOT
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/{phpunit_version}/phpunit.xsd"
         bootstrap="{bootstrap_script}"
         backupGlobals="false"
         beStrictAboutCoversAnnotation="true"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTestsThatDoNotTestAnything="true"
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * String helpers.
     */
    class PHPUnit_Util_String
    {
        /**
         * Converts a string to UTF-8 encoding.
         *
         * @param string $string
         *
         * @return string
         */
        public static function convertToUtf8($string)
        {
        }
        /**
         * Checks a string for UTF-8 encoding.
         *
         * @param string $string
         *
         * @return bool
         */
        protected static function isUtf8($string)
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
     * Base class for printers of TestDox documentation.
     */
    abstract class PHPUnit_Util_TestDox_ResultPrinter extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
    {
        /**
         * @var PHPUnit_Util_TestDox_NamePrettifier
         */
        protected $prettifier;
        /**
         * @var string
         */
        protected $testClass = '';
        /**
         * @var int
         */
        protected $testStatus = \false;
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
         * @var string
         */
        protected $currentTestClassPrettified;
        /**
         * @var string
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
        public function __construct($out = \null, array $groups = [], array $excludeGroups = [])
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
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A testsuite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A testsuite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
        protected function onTest($name, $success = \true)
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
         * @param PHPUnit_Framework_Test $test
         *
         * @return bool
         */
        private function isOfInterest(\PHPUnit_Framework_Test $test)
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
     * Prints TestDox documentation in HTML format.
     */
    class PHPUnit_Util_TestDox_ResultPrinter_HTML extends \PHPUnit_Util_TestDox_ResultPrinter
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
        protected function onTest($name, $success = \true)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Util_TestDox_ResultPrinter_XML extends \PHPUnit_Util_Printer implements \PHPUnit_Framework_TestListener
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
         * @var PHPUnit_Util_TestDox_NamePrettifier
         */
        private $prettifier;
        /**
         * @var Exception
         */
        private $exception;
        /**
         * @param string|resource $out
         */
        public function __construct($out = \null)
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
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A warning occurred.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * A failure occurred.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Incomplete test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addIncompleteTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Risky test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addRiskyTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * Skipped test.
         *
         * @param PHPUnit_Framework_Test $test
         * @param Exception              $e
         * @param float                  $time
         */
        public function addSkippedTest(\PHPUnit_Framework_Test $test, \Exception $e, $time)
        {
        }
        /**
         * A test suite started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test suite ended.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * A test started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * A test ended.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
     * Prints TestDox documentation in text format.
     */
    class PHPUnit_Util_TestDox_ResultPrinter_Text extends \PHPUnit_Util_TestDox_ResultPrinter
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
        protected function onTest($name, $success = \true)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Prettifies class and method names for use in TestDox documentation.
     */
    class PHPUnit_Util_TestDox_NamePrettifier
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Utility class for blacklisting PHPUnit's own source code files.
     */
    class PHPUnit_Util_Blacklist
    {
        /**
         * @var array
         */
        public static $blacklistedClassNames = ['File_Iterator' => 1, 'PHP_Invoker' => 1, 'PHP_Timer' => 1, 'PHP_Token' => 1, 'PHPUnit_Framework_TestCase' => 2, 'PHPUnit_Extensions_Database_TestCase' => 2, 'PHPUnit_Framework_MockObject_Generator' => 2, 'Text_Template' => 1, 'Symfony\\Component\\Yaml\\Yaml' => 1, 'SebastianBergmann\\CodeCoverage\\CodeCoverage' => 1, 'SebastianBergmann\\Diff\\Diff' => 1, 'SebastianBergmann\\Environment\\Runtime' => 1, 'SebastianBergmann\\Comparator\\Comparator' => 1, 'SebastianBergmann\\Exporter\\Exporter' => 1, 'SebastianBergmann\\GlobalState\\Snapshot' => 1, 'SebastianBergmann\\RecursionContext\\Context' => 1, 'SebastianBergmann\\Version' => 1, 'Composer\\Autoload\\ClassLoader' => 1, 'Doctrine\\Instantiator\\Instantiator' => 1, 'phpDocumentor\\Reflection\\DocBlock' => 1, 'Prophecy\\Prophet' => 1, 'DeepCopy\\DeepCopy' => 1];
        /**
         * @var array
         */
        private static $directories;
        /**
         * @return array
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Util_GlobalState
    {
        /**
         * @var array
         */
        protected static $superGlobalArrays = ['_ENV', '_POST', '_GET', '_COOKIE', '_SERVER', '_FILES', '_REQUEST'];
        /**
         * @var array
         */
        protected static $superGlobalArraysLong = ['HTTP_ENV_VARS', 'HTTP_POST_VARS', 'HTTP_GET_VARS', 'HTTP_COOKIE_VARS', 'HTTP_SERVER_VARS', 'HTTP_POST_FILES'];
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
         * @return array
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Test helpers.
     */
    class PHPUnit_Util_Test
    {
        const REGEX_DATA_PROVIDER = '/@dataProvider\\s+([a-zA-Z0-9._:-\\\\x7f-\\xff]+)/';
        const REGEX_TEST_WITH = '/@testWith\\s+/';
        const REGEX_EXPECTED_EXCEPTION = '(@expectedException\\s+([:.\\w\\\\x7f-\\xff]+)(?:[\\t ]+(\\S*))?(?:[\\t ]+(\\S*))?\\s*$)m';
        const REGEX_REQUIRES_VERSION = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+(dev|(RC|alpha|beta)[\\d\\.])?)[ \\t]*\\r?$/m';
        const REGEX_REQUIRES_OS = '/@requires\\s+OS\\s+(?P<value>.+?)[ \\t]*\\r?$/m';
        const REGEX_REQUIRES = '/@requires\\s+(?P<name>function|extension)\\s+(?P<value>([^ ]+?))\\s*(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+[\\d\\.]?)?[ \\t]*\\r?$/m';
        const UNKNOWN = -1;
        const SMALL = 0;
        const MEDIUM = 1;
        const LARGE = 2;
        private static $annotationCache = [];
        private static $hookMethods = [];
        /**
         * @param PHPUnit_Framework_Test $test
         * @param bool                   $asString
         *
         * @return mixed
         */
        public static function describe(\PHPUnit_Framework_Test $test, $asString = \true)
        {
        }
        /**
         * @param string $className
         * @param string $methodName
         *
         * @return array|bool
         *
         * @throws PHPUnit_Framework_CodeCoverageException
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
         * @throws PHPUnit_Framework_CodeCoverageException
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
         * @return array
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
         * @return array
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
         *         null  When no data provider is specified
         *
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        private static function getDataFromDataProviderAnnotation($docComment, $className, $methodName)
        {
        }
        /**
         * @param string $docComment full docComment string
         *
         * @return array when @testWith annotation is defined
         *               null  when @testWith annotation is omitted
         *
         * @throws PHPUnit_Framework_Exception when @testWith annotation is defined but cannot be parsed
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
         * @return array
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
         * @return bool
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
         * Returns the tickets for a test class or method.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return array
         */
        public static function getTickets($className, $methodName)
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
        /**
         * Returns the preserve global state settings for a test.
         *
         * @param string $className
         * @param string $methodName
         *
         * @return bool
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
         * @return bool
         */
        private static function getBooleanAnnotationSetting($className, $methodName, $settingName)
        {
        }
        /**
         * @param string $element
         *
         * @return array
         *
         * @throws PHPUnit_Framework_InvalidCoversTargetException
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
     * Thrown when there is a warning.
     */
    class PHPUnit_Framework_Warning extends \PHPUnit_Framework_Exception implements \PHPUnit_Framework_SelfDescribing
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A marker interface for marking a unit test as being skipped.
     */
    interface PHPUnit_Framework_SkippedTest
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a skipped test suite.
     */
    class PHPUnit_Framework_SkippedTestSuiteError extends \PHPUnit_Framework_AssertionFailedError implements \PHPUnit_Framework_SkippedTest
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
     * A marker interface for marking any exception/error as result of an unit
     * test as risky.
     */
    interface PHPUnit_Framework_RiskyTest
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a risky test.
     */
    class PHPUnit_Framework_RiskyTestError extends \PHPUnit_Framework_AssertionFailedError implements \PHPUnit_Framework_RiskyTest
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a test that unintentionally covers code.
     */
    class PHPUnit_Framework_UnintentionallyCoveredCodeError extends \PHPUnit_Framework_RiskyTestError
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a skipped test.
     */
    class PHPUnit_Framework_SkippedTestError extends \PHPUnit_Framework_AssertionFailedError implements \PHPUnit_Framework_SkippedTest
    {
    }
    /**
     * A TestResult collects the results of executing a test case.
     */
    class PHPUnit_Framework_TestResult implements \Countable
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
         * @var PHPUnit_Framework_TestSuite
         */
        protected $topTestSuite = \null;
        /**
         * Code Coverage information.
         *
         * @var CodeCoverage
         */
        protected $codeCoverage;
        /**
         * @var bool
         */
        protected $convertErrorsToExceptions = \true;
        /**
         * @var bool
         */
        protected $stop = \false;
        /**
         * @var bool
         */
        protected $stopOnError = \false;
        /**
         * @var bool
         */
        protected $stopOnFailure = \false;
        /**
         * @var bool
         */
        protected $stopOnWarning = \false;
        /**
         * @var bool
         */
        protected $beStrictAboutTestsThatDoNotTestAnything = \false;
        /**
         * @var bool
         */
        protected $beStrictAboutOutputDuringTests = \false;
        /**
         * @var bool
         */
        protected $beStrictAboutTodoAnnotatedTests = \false;
        /**
         * @var bool
         */
        protected $beStrictAboutResourceUsageDuringSmallTests = \false;
        /**
         * @var bool
         */
        protected $enforceTimeLimit = \false;
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
        protected $stopOnRisky = \false;
        /**
         * @var bool
         */
        protected $stopOnIncomplete = \false;
        /**
         * @var bool
         */
        protected $stopOnSkipped = \false;
        /**
         * @var bool
         */
        protected $lastTestFailed = \false;
        /**
         * @var bool
         */
        private $registerMockObjectsFromTestArgumentsRecursively = \false;
        /**
         * Registers a TestListener.
         *
         * @param  PHPUnit_Framework_TestListener
         */
        public function addListener(\PHPUnit_Framework_TestListener $listener)
        {
        }
        /**
         * Unregisters a TestListener.
         *
         * @param PHPUnit_Framework_TestListener $listener
         */
        public function removeListener(\PHPUnit_Framework_TestListener $listener)
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
         * @param PHPUnit_Framework_Test $test
         * @param Throwable              $t
         * @param float                  $time
         */
        public function addError(\PHPUnit_Framework_Test $test, $t, $time)
        {
        }
        /**
         * Adds a warning to the list of warnings.
         * The passed in exception caused the warning.
         *
         * @param PHPUnit_Framework_Test    $test
         * @param PHPUnit_Framework_Warning $e
         * @param float                     $time
         */
        public function addWarning(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_Warning $e, $time)
        {
        }
        /**
         * Adds a failure to the list of failures.
         * The passed in exception caused the failure.
         *
         * @param PHPUnit_Framework_Test                 $test
         * @param PHPUnit_Framework_AssertionFailedError $e
         * @param float                                  $time
         */
        public function addFailure(\PHPUnit_Framework_Test $test, \PHPUnit_Framework_AssertionFailedError $e, $time)
        {
        }
        /**
         * Informs the result that a testsuite will be started.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function startTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * Informs the result that a testsuite was completed.
         *
         * @param PHPUnit_Framework_TestSuite $suite
         */
        public function endTestSuite(\PHPUnit_Framework_TestSuite $suite)
        {
        }
        /**
         * Informs the result that a test will be started.
         *
         * @param PHPUnit_Framework_Test $test
         */
        public function startTest(\PHPUnit_Framework_Test $test)
        {
        }
        /**
         * Informs the result that a test was completed.
         *
         * @param PHPUnit_Framework_Test $test
         * @param float                  $time
         */
        public function endTest(\PHPUnit_Framework_Test $test, $time)
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
         * @return PHPUnit_Framework_TestSuite
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
         * @param PHPUnit_Framework_Test $test
         */
        public function run(\PHPUnit_Framework_Test $test)
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        public function stopOnError($flag)
        {
        }
        /**
         * Enables or disables the stopping when a failure occurs.
         *
         * @param bool $flag
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function stopOnFailure($flag)
        {
        }
        /**
         * Enables or disables the stopping when a warning occurs.
         *
         * @param bool $flag
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function stopOnWarning($flag)
        {
        }
        /**
         * @param bool $flag
         *
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_Exception
         */
        public function stopOnRisky($flag)
        {
        }
        /**
         * Enables or disables the stopping for incomplete tests.
         *
         * @param bool $flag
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function stopOnIncomplete($flag)
        {
        }
        /**
         * Enables or disables the stopping for skipped tests.
         *
         * @param bool $flag
         *
         * @throws PHPUnit_Framework_Exception
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
         * @param bool $includeWarnings
         *
         * @return bool
         */
        public function wasSuccessful($includeWarnings = \true)
        {
        }
        /**
         * Sets the timeout for small tests.
         *
         * @param int $timeout
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function setTimeoutForSmallTests($timeout)
        {
        }
        /**
         * Sets the timeout for medium tests.
         *
         * @param int $timeout
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function setTimeoutForMediumTests($timeout)
        {
        }
        /**
         * Sets the timeout for large tests.
         *
         * @param int $timeout
         *
         * @throws PHPUnit_Framework_Exception
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
        protected function getHierarchy($className, $asReflectionObjects = \false)
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
     * A marker interface for marking any exception/error as result of an unit
     * test as incomplete implementation or currently not implemented.
     */
    interface PHPUnit_Framework_IncompleteTest
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of an incomplete test.
     */
    class PHPUnit_Framework_IncompleteTestError extends \PHPUnit_Framework_AssertionFailedError implements \PHPUnit_Framework_IncompleteTest
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark a test as risky
     * when it does not have a @covers annotation but is expected to have one.
     */
    class PHPUnit_Framework_MissingCoversAnnotationException extends \PHPUnit_Framework_RiskyTestError
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
     * Exception for expectations which failed their check.
     *
     * The exception contains the error message and optionally a
     * SebastianBergmann\Comparator\ComparisonFailure which is used to
     * generate diff output of the failed expectations.
     */
    class PHPUnit_Framework_ExpectationFailedException extends \PHPUnit_Framework_AssertionFailedError
    {
        /**
         * @var SebastianBergmann\Comparator\ComparisonFailure
         */
        protected $comparisonFailure;
        public function __construct($message, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = \null, \Exception $previous = \null)
        {
        }
        /**
         * @return SebastianBergmann\Comparator\ComparisonFailure
         */
        public function getComparisonFailure()
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
    class PHPUnit_Framework_CodeCoverageException extends \PHPUnit_Framework_Exception
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
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a test that printed output.
     */
    class PHPUnit_Framework_OutputError extends \PHPUnit_Framework_AssertionFailedError
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
     * Wrapper for PHP errors.
     */
    class PHPUnit_Framework_Error extends \PHPUnit_Framework_Exception
    {
        /**
         * Constructor.
         *
         * @param string    $message
         * @param int       $code
         * @param string    $file
         * @param int       $line
         * @param Exception $previous
         */
        public function __construct($message, $code, $file, $line, \Exception $previous = \null)
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
     * Wrapper for PHP warnings.
     * You can disable notice-to-exception conversion by setting
     *
     * <code>
     * PHPUnit_Framework_Error_Warning::$enabled = false;
     * </code>
     */
    class PHPUnit_Framework_Error_Warning extends \PHPUnit_Framework_Error
    {
        public static $enabled = \true;
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
     * Wrapper for PHP deprecated errors.
     * You can disable deprecated-to-exception conversion by setting
     *
     * <code>
     * PHPUnit_Framework_Error_Deprecated::$enabled = false;
     * </code>
     */
    class PHPUnit_Framework_Error_Deprecated extends \PHPUnit_Framework_Error
    {
        public static $enabled = \true;
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
     * Wrapper for PHP notices.
     * You can disable notice-to-exception conversion by setting
     *
     * <code>
     * PHPUnit_Framework_Error_Notice::$enabled = false;
     * </code>
     */
    class PHPUnit_Framework_Error_Notice extends \PHPUnit_Framework_Error
    {
        public static $enabled = \true;
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
     * An incomplete test case
     */
    class PHPUnit_Framework_IncompleteTestCase extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = \false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = \false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = \false;
        /**
         * @var bool
         */
        protected $useErrorHandler = \false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = \false;
        /**
         * @param string $className
         * @param string $methodName
         * @param string $message
         */
        public function __construct($className, $methodName, $message = '')
        {
        }
        /**
         * @throws PHPUnit_Framework_Exception
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
     * Abstract base class for constraints which can be applied to any value.
     */
    abstract class PHPUnit_Framework_Constraint implements \Countable, \PHPUnit_Framework_SelfDescribing
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
         * @param mixed                                          $other             Evaluated value or object.
         * @param string                                         $description       Additional information about the test
         * @param SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure
         *
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = \null)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts any input value.
     */
    class PHPUnit_Framework_Constraint_IsAnything extends \PHPUnit_Framework_Constraint
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_ClassHasAttribute extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts infinite.
     */
    class PHPUnit_Framework_Constraint_IsInfinite extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Logical NOT.
     */
    class PHPUnit_Framework_Constraint_Not extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint
         */
        protected $constraint;
        /**
         * @param PHPUnit_Framework_Constraint $constraint
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that checks if the directory(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class PHPUnit_Framework_Constraint_DirectoryExists extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
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
    class PHPUnit_Framework_Constraint_IsIdentical extends \PHPUnit_Framework_Constraint
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the array it is evaluated for has a given key.
     *
     * Uses array_key_exists() to check if the key is found in the input array, if
     * not found the evaluation fails.
     *
     * The array key is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_ArrayHasKey extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Logical OR.
     */
    class PHPUnit_Framework_Constraint_Or extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint[]
         */
        protected $constraints = [];
        /**
         * @param PHPUnit_Framework_Constraint[] $constraints
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that evaluates against a specified closure.
     */
    class PHPUnit_Framework_Constraint_Callback extends \PHPUnit_Framework_Constraint
    {
        private $callback;
        /**
         * @param callable $callback
         *
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the string it is evaluated for contains
     * a given string.
     *
     * Uses mb_strpos() to find the position of the string in the input, if not
     * found the evaluation fails.
     *
     * The sub-string is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_StringContains extends \PHPUnit_Framework_Constraint
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
        public function __construct($string, $ignoreCase = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    abstract class PHPUnit_Framework_Constraint_Composite extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint
         */
        protected $innerConstraint;
        /**
         * @param PHPUnit_Framework_Constraint $innerConstraint
         */
        public function __construct(\PHPUnit_Framework_Constraint $innerConstraint)
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_Attribute extends \PHPUnit_Framework_Constraint_Composite
    {
        /**
         * @var string
         */
        protected $attributeName;
        /**
         * @param PHPUnit_Framework_Constraint $constraint
         * @param string                       $attributeName
         */
        public function __construct(\PHPUnit_Framework_Constraint $constraint, $attributeName)
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts false.
     */
    class PHPUnit_Framework_Constraint_IsFalse extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * only values of a given type.
     */
    class PHPUnit_Framework_Constraint_TraversableContainsOnly extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint
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
        public function __construct($type, $isNativeType = \true)
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the class it is evaluated for has a given
     * static attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_ClassHasStaticAttribute extends \PHPUnit_Framework_Constraint_ClassHasAttribute
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Logical XOR.
     */
    class PHPUnit_Framework_Constraint_Xor extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint[]
         */
        protected $constraints = [];
        /**
         * @param PHPUnit_Framework_Constraint[] $constraints
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the value it is evaluated for is of a
     * specified type.
     *
     * The expected value is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_IsType extends \PHPUnit_Framework_Constraint
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
        protected $types = ['array' => \true, 'boolean' => \true, 'bool' => \true, 'double' => \true, 'float' => \true, 'integer' => \true, 'int' => \true, 'null' => \true, 'numeric' => \true, 'object' => \true, 'real' => \true, 'resource' => \true, 'string' => \true, 'scalar' => \true, 'callable' => \true];
        /**
         * @var string
         */
        protected $type;
        /**
         * @param string $type
         *
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_Count extends \PHPUnit_Framework_Constraint
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
         * @param mixed $other
         *
         * @return bool
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that checks if one value is equal to another.
     *
     * Equality is checked with PHP's == operator, the operator is explained in
     * detail at {@url http://www.php.net/manual/en/types.comparisons.php}.
     * Two values are equal if they have the same value disregarding type.
     *
     * The expected value is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_IsEqual extends \PHPUnit_Framework_Constraint
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
        protected $canonicalize = \false;
        /**
         * @var bool
         */
        protected $ignoreCase = \false;
        /**
         * @var SebastianBergmann\Comparator\ComparisonFailure
         */
        protected $lastFailure;
        /**
         * @param mixed $value
         * @param float $delta
         * @param int   $maxDepth
         * @param bool  $canonicalize
         * @param bool  $ignoreCase
         *
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Provides human readable messages for each JSON error.
     */
    class PHPUnit_Framework_Constraint_JsonMatches_ErrorMessageProvider
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that a string is valid JSON.
     */
    class PHPUnit_Framework_Constraint_IsJson extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the string it is evaluated for ends with a given
     * suffix.
     */
    class PHPUnit_Framework_Constraint_StringEndsWith extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts finite.
     */
    class PHPUnit_Framework_Constraint_IsFinite extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Asserts whether or not two JSON objects are equal.
     */
    class PHPUnit_Framework_Constraint_JsonMatches extends \PHPUnit_Framework_Constraint
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
         * Returns a string representation of the object.
         *
         * @return string
         */
        public function toString()
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
     * Constraint that checks if the file/dir(name) that it is evaluated for is writable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class PHPUnit_Framework_Constraint_IsWritable extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the array it is evaluated for has a specified subset.
     *
     * Uses array_replace_recursive() to check if a key value subset is part of the
     * subject array.
     */
    class PHPUnit_Framework_Constraint_ArraySubset extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var array|Traversable
         */
        protected $subset;
        /**
         * @var bool
         */
        protected $strict;
        /**
         * @param array|Traversable $subset
         * @param bool              $strict Check for object identity
         */
        public function __construct($subset, $strict = \false)
        {
        }
        /**
         * Evaluates the constraint for parameter $other. Returns true if the
         * constraint is met, false otherwise.
         *
         * @param array|Traversable $other Array or Traversable object to evaluate.
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
        /**
         * @param array|Traversable $other
         *
         * @return array
         */
        private function toArray($other)
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
    class PHPUnit_Framework_Constraint_SameSize extends \PHPUnit_Framework_Constraint_Count
    {
        /**
         * @var int
         */
        protected $expectedCount;
        /**
         * @param int $expected
         */
        public function __construct($expected)
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
     * Constraint that checks if the file(name) that it is evaluated for exists.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class PHPUnit_Framework_Constraint_FileExists extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Logical AND.
     */
    class PHPUnit_Framework_Constraint_And extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var PHPUnit_Framework_Constraint[]
         */
        protected $constraints = [];
        /**
         * @var PHPUnit_Framework_Constraint
         */
        protected $lastConstraint = \null;
        /**
         * @param PHPUnit_Framework_Constraint[] $constraints
         *
         * @throws PHPUnit_Framework_Exception
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
         * @throws PHPUnit_Framework_ExpectationFailedException
         */
        public function evaluate($other, $description = '', $returnResult = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts true.
     */
    class PHPUnit_Framework_Constraint_IsTrue extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the value it is evaluated for is greater
     * than a given value.
     */
    class PHPUnit_Framework_Constraint_GreaterThan extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var numeric
         */
        protected $value;
        /**
         * @param numeric $value
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that checks if the file/dir(name) that it is evaluated for is readable.
     *
     * The file path to check is passed as $other in evaluate().
     */
    class PHPUnit_Framework_Constraint_IsReadable extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_ExceptionMessageRegExp extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var int
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
         * @param Exception $other
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the string it is evaluated for matches
     * a regular expression.
     *
     * Checks a given value using the Perl Compatible Regular Expression extension
     * in PHP. The pattern is matched by executing preg_match().
     *
     * The pattern string passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_PCREMatch extends \PHPUnit_Framework_Constraint
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
     * ...
     */
    class PHPUnit_Framework_Constraint_StringMatches extends \PHPUnit_Framework_Constraint_PCREMatch
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that checks whether a variable is empty().
     */
    class PHPUnit_Framework_Constraint_IsEmpty extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_Exception extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts nan.
     */
    class PHPUnit_Framework_Constraint_IsNan extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_ExceptionCode extends \PHPUnit_Framework_Constraint
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
         * @param Exception $other
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the value it is evaluated for is less than
     * a given value.
     */
    class PHPUnit_Framework_Constraint_LessThan extends \PHPUnit_Framework_Constraint
    {
        /**
         * @var numeric
         */
        protected $value;
        /**
         * @param numeric $value
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the object it is evaluated for is an instance
     * of a given class.
     *
     * The expected class name is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_IsInstanceOf extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the string it is evaluated for begins with a
     * given prefix.
     */
    class PHPUnit_Framework_Constraint_StringStartsWith extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the object it is evaluated for has a given
     * attribute.
     *
     * The attribute name is passed in the constructor.
     */
    class PHPUnit_Framework_Constraint_ObjectHasAttribute extends \PHPUnit_Framework_Constraint_ClassHasAttribute
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_Constraint_ExceptionMessage extends \PHPUnit_Framework_Constraint
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
         * @param Exception $other
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that accepts null.
     */
    class PHPUnit_Framework_Constraint_IsNull extends \PHPUnit_Framework_Constraint
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Constraint that asserts that the Traversable it is applied to contains
     * a given value.
     */
    class PHPUnit_Framework_Constraint_TraversableContains extends \PHPUnit_Framework_Constraint
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
         * @throws PHPUnit_Framework_Exception
         */
        public function __construct($value, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * Extension to PHPUnit_Framework_AssertionFailedError to mark the special
     * case of a test that does not execute the code it wants to cover.
     */
    class PHPUnit_Framework_CoveredCodeNotExecutedException extends \PHPUnit_Framework_RiskyTestError
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
     * Creates a synthetic failed assertion.
     */
    class PHPUnit_Framework_SyntheticError extends \PHPUnit_Framework_AssertionFailedError
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A skipped test case
     */
    class PHPUnit_Framework_SkippedTestCase extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = \false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = \false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = \false;
        /**
         * @var bool
         */
        protected $useErrorHandler = \false;
        /**
         * @var bool
         */
        protected $useOutputBuffering = \false;
        /**
         * @param string $message
         */
        public function __construct($className, $methodName, $message = '')
        {
        }
        /**
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A warning.
     */
    class PHPUnit_Framework_WarningTestCase extends \PHPUnit_Framework_TestCase
    {
        /**
         * @var string
         */
        protected $message = '';
        /**
         * @var bool
         */
        protected $backupGlobals = \false;
        /**
         * @var bool
         */
        protected $backupStaticAttributes = \false;
        /**
         * @var bool
         */
        protected $runTestInSeparateProcess = \false;
        /**
         * @var bool
         */
        protected $useErrorHandler = \false;
        /**
         * @param string $message
         */
        public function __construct($message = '')
        {
        }
        /**
         * @throws PHPUnit_Framework_Exception
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    class PHPUnit_Framework_TestSuite_DataProvider extends \PHPUnit_Framework_TestSuite
    {
        /**
         * Sets the dependencies of a TestCase.
         *
         * @param array $dependencies
         */
        public function setDependencies(array $dependencies)
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
    class PHPUnit_Framework_InvalidCoversTargetException extends \PHPUnit_Framework_CodeCoverageException
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
     * Wraps Exceptions thrown by code under test.
     *
     * Re-instantiates Exceptions thrown by user-space code to retain their original
     * class names, properties, and stack traces (but without arguments).
     *
     * Unlike PHPUnit_Framework_Exception, the complete stack of previous Exceptions
     * is processed.
     */
    class PHPUnit_Framework_ExceptionWrapper extends \PHPUnit_Framework_Exception
    {
        /**
         * @var string
         */
        protected $className;
        /**
         * @var PHPUnit_Framework_ExceptionWrapper|null
         */
        protected $previous;
        /**
         * @param Throwable|Exception $e
         */
        public function __construct($e)
        {
        }
        /**
         * @return string
         */
        public function getClassName()
        {
        }
        /**
         * @return PHPUnit_Framework_ExceptionWrapper
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
    /*
     * This file is part of PHPUnit.
     *
     * (c) Sebastian Bergmann <sebastian@phpunit.de>
     *
     * For the full copyright and license information, please view the LICENSE
     * file that was distributed with this source code.
     */
    /**
     * A TestFailure collects a failed test together with the caught exception.
     */
    class PHPUnit_Framework_TestFailure
    {
        /**
         * @var string
         */
        private $testName;
        /**
         * @var PHPUnit_Framework_Test|null
         */
        protected $failedTest;
        /**
         * @var Exception
         */
        protected $thrownException;
        /**
         * Constructs a TestFailure with the given test and exception.
         *
         * @param PHPUnit_Framework_Test $failedTest
         * @param Throwable              $t
         */
        public function __construct(\PHPUnit_Framework_Test $failedTest, $t)
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
         * @param Exception $e
         *
         * @return string
         */
        public static function exceptionToString(\Exception $e)
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
         * @see PHPUnit_Framework_Exception
         *
         * @return PHPUnit_Framework_Test|null
         */
        public function failedTest()
        {
        }
        /**
         * Gets the thrown exception.
         *
         * @return Exception
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
    /**
     * A TestRunner for the Command Line Interface (CLI)
     * PHP SAPI Module.
     */
    class PHPUnit_TextUI_TestRunner extends \PHPUnit_Runner_BaseTestRunner
    {
        const SUCCESS_EXIT = 0;
        const FAILURE_EXIT = 1;
        const EXCEPTION_EXIT = 2;
        /**
         * @var CodeCoverageFilter
         */
        protected $codeCoverageFilter;
        /**
         * @var PHPUnit_Runner_TestSuiteLoader
         */
        protected $loader = \null;
        /**
         * @var PHPUnit_TextUI_ResultPrinter
         */
        protected $printer = \null;
        /**
         * @var bool
         */
        protected static $versionStringPrinted = \false;
        /**
         * @var Runtime
         */
        private $runtime;
        /**
         * @var bool
         */
        private $messagePrinted = \false;
        /**
         * @param PHPUnit_Runner_TestSuiteLoader $loader
         * @param CodeCoverageFilter             $filter
         */
        public function __construct(\PHPUnit_Runner_TestSuiteLoader $loader = \null, \SebastianBergmann\CodeCoverage\Filter $filter = \null)
        {
        }
        /**
         * @param PHPUnit_Framework_Test|ReflectionClass $test
         * @param array                                  $arguments
         *
         * @return PHPUnit_Framework_TestResult
         *
         * @throws PHPUnit_Framework_Exception
         */
        public static function run($test, array $arguments = [])
        {
        }
        /**
         * @return PHPUnit_Framework_TestResult
         */
        protected function createTestResult()
        {
        }
        /**
         * @param PHPUnit_Framework_TestSuite $suite
         * @param array                       $arguments
         */
        private function processSuiteFilters(\PHPUnit_Framework_TestSuite $suite, array $arguments)
        {
        }
        /**
         * @param PHPUnit_Framework_Test $suite
         * @param array                  $arguments
         * @param bool                   $exit
         *
         * @return PHPUnit_Framework_TestResult
         */
        public function doRun(\PHPUnit_Framework_Test $suite, array $arguments = [], $exit = \true)
        {
        }
        /**
         * @param PHPUnit_TextUI_ResultPrinter $resultPrinter
         */
        public function setPrinter(\PHPUnit_TextUI_ResultPrinter $resultPrinter)
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
         * @return PHPUnit_Runner_TestSuiteLoader
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
    const GITHUB_ISSUE = 797;
    \define('TEST_FILES_PATH', \dirname(__DIR__) . \DIRECTORY_SEPARATOR . '_files' . \DIRECTORY_SEPARATOR);
    function globalFunction()
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
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     *
     * @return PHPUnit_Framework_MockObject_Matcher_AnyInvokedCount
     */
    function any()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsAnything matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsAnything
     */
    function anything()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_ArrayHasKey matcher object.
     *
     * @param mixed $key
     *
     * @return PHPUnit_Framework_Constraint_ArrayHasKey
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
     * @param string            $classname
     * @param array|Traversable $haystack
     * @param string            $message
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
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @param array|Countable|Traversable $expected
     * @param array|Countable|Traversable $actual
     * @param string                      $message
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
     * @param array|Countable|Traversable $expected
     * @param array|Countable|Traversable $actual
     * @param string                      $message
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
     * Evaluates a PHPUnit_Framework_Constraint matcher object.
     *
     * @param mixed                        $value
     * @param PHPUnit_Framework_Constraint $constraint
     * @param string                       $message
     */
    function assertThat($value, \PHPUnit_Framework_Constraint $constraint, $message = '')
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @param bool   $condition
     * @param string $message
     *
     * @throws PHPUnit_Framework_AssertionFailedError
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
     * @param string $expectedFile
     * @param string $actualXml
     * @param string $message
     */
    function assertXmlStringEqualsXmlFile($expectedFile, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message
     */
    function assertXmlStringEqualsXmlString($expectedXml, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param string $expectedFile
     * @param string $actualXml
     * @param string $message
     */
    function assertXmlStringNotEqualsXmlFile($expectedFile, $actualXml, $message = '')
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param string $expectedXml
     * @param string $actualXml
     * @param string $message
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
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtIndex
     */
    function at($index)
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     *
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedAtLeastOnce
     */
    function atLeastOnce()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Attribute matcher object.
     *
     * @param PHPUnit_Framework_Constraint $constraint
     * @param string                       $attributeName
     *
     * @return PHPUnit_Framework_Constraint_Attribute
     */
    function attribute(\PHPUnit_Framework_Constraint $constraint, $attributeName)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object
     * that is wrapped in a PHPUnit_Framework_Constraint_Attribute matcher
     * object.
     *
     * @param string $attributeName
     * @param mixed  $value
     * @param float  $delta
     * @param int    $maxDepth
     * @param bool   $canonicalize
     * @param bool   $ignoreCase
     *
     * @return PHPUnit_Framework_Constraint_Attribute
     */
    function attributeEqualTo($attributeName, $value, $delta = 0.0, $maxDepth = 10, $canonicalize = \false, $ignoreCase = \false)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Callback matcher object.
     *
     * @param callable $callback
     *
     * @return PHPUnit_Framework_Constraint_Callback
     */
    function callback($callback)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_ClassHasAttribute matcher object.
     *
     * @param string $attributeName
     *
     * @return PHPUnit_Framework_Constraint_ClassHasAttribute
     */
    function classHasAttribute($attributeName)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_ClassHasStaticAttribute matcher
     * object.
     *
     * @param string $attributeName
     *
     * @return PHPUnit_Framework_Constraint_ClassHasStaticAttribute
     */
    function classHasStaticAttribute($attributeName)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_TraversableContains matcher
     * object.
     *
     * @param mixed $value
     * @param bool  $checkForObjectIdentity
     * @param bool  $checkForNonObjectIdentity
     *
     * @return PHPUnit_Framework_Constraint_TraversableContains
     */
    function contains($value, $checkForObjectIdentity = \true, $checkForNonObjectIdentity = \false)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
     * object.
     *
     * @param string $type
     *
     * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
     */
    function containsOnly($type)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_TraversableContainsOnly matcher
     * object.
     *
     * @param string $classname
     *
     * @return PHPUnit_Framework_Constraint_TraversableContainsOnly
     */
    function containsOnlyInstancesOf($classname)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Count matcher object.
     *
     * @param int $count
     *
     * @return Count
     */
    function countOf($count)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsEqual matcher object.
     *
     * @param mixed $value
     * @param float $delta
     * @param int   $maxDepth
     * @param bool  $canonicalize
     * @param bool  $ignoreCase
     *
     * @return PHPUnit_Framework_Constraint_IsEqual
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
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    function exactly($count)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_FileExists matcher object.
     *
     * @return PHPUnit_Framework_Constraint_FileExists
     */
    function fileExists()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_GreaterThan matcher object.
     *
     * @param mixed $value
     *
     * @return PHPUnit_Framework_Constraint_GreaterThan
     */
    function greaterThan($value)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
     * a PHPUnit_Framework_Constraint_IsEqual and a
     * PHPUnit_Framework_Constraint_GreaterThan matcher object.
     *
     * @param mixed $value
     *
     * @return PHPUnit_Framework_Constraint_Or
     */
    function greaterThanOrEqual($value)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsIdentical matcher object.
     *
     * @param mixed $value
     *
     * @return PHPUnit_Framework_Constraint_IsIdentical
     */
    function identicalTo($value)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsEmpty matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsEmpty
     */
    function isEmpty()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsFalse matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsFalse
     */
    function isFalse()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsInstanceOf matcher object.
     *
     * @param string $className
     *
     * @return PHPUnit_Framework_Constraint_IsInstanceOf
     */
    function isInstanceOf($className)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsJson matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsJson
     */
    function isJson()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsNull matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsNull
     */
    function isNull()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsTrue matcher object.
     *
     * @return PHPUnit_Framework_Constraint_IsTrue
     */
    function isTrue()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_IsType matcher object.
     *
     * @param string $type
     *
     * @return PHPUnit_Framework_Constraint_IsType
     */
    function isType($type)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_LessThan matcher object.
     *
     * @param mixed $value
     *
     * @return PHPUnit_Framework_Constraint_LessThan
     */
    function lessThan($value)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Or matcher object that wraps
     * a PHPUnit_Framework_Constraint_IsEqual and a
     * PHPUnit_Framework_Constraint_LessThan matcher object.
     *
     * @param mixed $value
     *
     * @return PHPUnit_Framework_Constraint_Or
     */
    function lessThanOrEqual($value)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_And matcher object.
     *
     * @return PHPUnit_Framework_Constraint_And
     */
    function logicalAnd()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Not matcher object.
     *
     * @param PHPUnit_Framework_Constraint $constraint
     *
     * @return PHPUnit_Framework_Constraint_Not
     */
    function logicalNot(\PHPUnit_Framework_Constraint $constraint)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Or matcher object.
     *
     * @return PHPUnit_Framework_Constraint_Or
     */
    function logicalOr()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_Xor matcher object.
     *
     * @return PHPUnit_Framework_Constraint_Xor
     */
    function logicalXor()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_StringMatches matcher object.
     *
     * @param string $string
     *
     * @return PHPUnit_Framework_Constraint_StringMatches
     */
    function matches($string)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_PCREMatch matcher object.
     *
     * @param string $pattern
     *
     * @return PHPUnit_Framework_Constraint_PCREMatch
     */
    function matchesRegularExpression($pattern)
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     *
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    function never()
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_ObjectHasAttribute matcher object.
     *
     * @param string $attributeName
     *
     * @return PHPUnit_Framework_Constraint_ObjectHasAttribute
     */
    function objectHasAttribute($attributeName)
    {
    }
    /**
     * @param mixed $value, ...
     *
     * @return PHPUnit_Framework_MockObject_Stub_ConsecutiveCalls
     */
    function onConsecutiveCalls()
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     *
     * @return PHPUnit_Framework_MockObject_Matcher_InvokedCount
     */
    function once()
    {
    }
    /**
     * @param int $argumentIndex
     *
     * @return PHPUnit_Framework_MockObject_Stub_ReturnArgument
     */
    function returnArgument($argumentIndex)
    {
    }
    /**
     * @param mixed $callback
     *
     * @return PHPUnit_Framework_MockObject_Stub_ReturnCallback
     */
    function returnCallback($callback)
    {
    }
    /**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     *
     * @return PHPUnit_Framework_MockObject_Stub_ReturnSelf
     */
    function returnSelf()
    {
    }
    /**
     * @param mixed $value
     *
     * @return PHPUnit_Framework_MockObject_Stub_Return
     */
    function returnValue($value)
    {
    }
    /**
     * @param array $valueMap
     *
     * @return PHPUnit_Framework_MockObject_Stub_ReturnValueMap
     */
    function returnValueMap(array $valueMap)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_StringContains matcher object.
     *
     * @param string $string
     * @param bool   $case
     *
     * @return PHPUnit_Framework_Constraint_StringContains
     */
    function stringContains($string, $case = \true)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_StringEndsWith matcher object.
     *
     * @param mixed $suffix
     *
     * @return PHPUnit_Framework_Constraint_StringEndsWith
     */
    function stringEndsWith($suffix)
    {
    }
    /**
     * Returns a PHPUnit_Framework_Constraint_StringStartsWith matcher object.
     *
     * @param mixed $prefix
     *
     * @return PHPUnit_Framework_Constraint_StringStartsWith
     */
    function stringStartsWith($prefix)
    {
    }
    /**
     * @param Exception $exception
     *
     * @return PHPUnit_Framework_MockObject_Stub_Exception
     */
    function throwException(\Exception $exception)
    {
    }
}
