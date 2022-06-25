<?php

namespace PHPUnit\Runner\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class GroupFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @var string[]
     */
    protected $groupTests = [];
    public function __construct(\RecursiveIterator $iterator, array $groups, \PHPUnit\Framework\TestSuite $suite)
    {
    }
    public function accept() : bool
    {
    }
    protected abstract function doAccept(string $hash);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
    protected function doAccept(string $hash) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncludeGroupFilterIterator extends \PHPUnit\Runner\Filter\GroupFilterIterator
{
    protected function doAccept(string $hash) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Factory
{
    /**
     * @psalm-var array<int,array{0: \ReflectionClass, 1: array|string}>
     */
    private $filters = [];
    /**
     * @param array|string $args
     *
     * @throws Exception
     */
    public function addFilter(\ReflectionClass $filter, $args) : void
    {
    }
    public function factory(\Iterator $iterator, \PHPUnit\Framework\TestSuite $suite) : \FilterIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NameFilterIterator extends \RecursiveFilterIterator
{
    /**
     * @var string
     */
    private $filter;
    /**
     * @var int
     */
    private $filterMin;
    /**
     * @var int
     */
    private $filterMax;
    /**
     * @throws Exception
     */
    public function __construct(\RecursiveIterator $iterator, string $filter)
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function accept() : bool
    {
    }
    /**
     * @throws Exception
     */
    private function setFilter(string $filter) : void
    {
    }
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface TestResultCache
{
    public function setState(string $testName, int $state) : void;
    public function getState(string $testName) : int;
    public function setTime(string $testName, float $time) : void;
    public function getTime(string $testName) : float;
    public function load() : void;
    public function persist() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DefaultTestResultCache implements \Serializable, \PHPUnit\Runner\TestResultCache
{
    /**
     * @var string
     */
    public const DEFAULT_RESULT_CACHE_FILENAME = '.phpunit.result.cache';
    /**
     * Provide extra protection against incomplete or corrupt caches.
     *
     * @var int[]
     */
    private const ALLOWED_CACHE_TEST_STATUSES = [\PHPUnit\Runner\BaseTestRunner::STATUS_SKIPPED, \PHPUnit\Runner\BaseTestRunner::STATUS_INCOMPLETE, \PHPUnit\Runner\BaseTestRunner::STATUS_FAILURE, \PHPUnit\Runner\BaseTestRunner::STATUS_ERROR, \PHPUnit\Runner\BaseTestRunner::STATUS_RISKY, \PHPUnit\Runner\BaseTestRunner::STATUS_WARNING];
    /**
     * Path and filename for result cache file.
     *
     * @var string
     */
    private $cacheFilename;
    /**
     * The list of defective tests.
     *
     * <code>
     * // Mark a test skipped
     * $this->defects[$testName] = BaseTestRunner::TEST_SKIPPED;
     * </code>
     *
     * @var array<string, int>
     */
    private $defects = [];
    /**
     * The list of execution duration of suites and tests (in seconds).
     *
     * <code>
     * // Record running time for test
     * $this->times[$testName] = 1.234;
     * </code>
     *
     * @var array<string, float>
     */
    private $times = [];
    public function __construct(?string $filepath = null)
    {
    }
    /**
     * @throws Exception
     */
    public function persist() : void
    {
    }
    /**
     * @throws Exception
     */
    public function saveToFile() : void
    {
    }
    public function setState(string $testName, int $state) : void
    {
    }
    public function getState(string $testName) : int
    {
    }
    public function setTime(string $testName, float $time) : void
    {
    }
    public function getTime(string $testName) : float
    {
    }
    public function load() : void
    {
    }
    public function copyStateToCache(self $targetCache) : void
    {
    }
    public function clear() : void
    {
    }
    public function serialize() : string
    {
    }
    /**
     * @param string $serialized
     */
    public function unserialize($serialized) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Hook
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface TestHook extends \PHPUnit\Runner\Hook
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeBeforeTest(string $test) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestFailureHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestFailure(string $test, string $message, float $time) : void;
}
namespace PHPUnit\Framework;

/**
 * @deprecated Use the `TestHook` interfaces instead
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface TestListener
{
    /**
     * An error occurred.
     *
     * @deprecated Use `AfterTestErrorHook::executeAfterTestError` instead
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * A warning occurred.
     *
     * @deprecated Use `AfterTestWarningHook::executeAfterTestWarning` instead
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void;
    /**
     * A failure occurred.
     *
     * @deprecated Use `AfterTestFailureHook::executeAfterTestFailure` instead
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void;
    /**
     * Incomplete test.
     *
     * @deprecated Use `AfterIncompleteTestHook::executeAfterIncompleteTest` instead
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * Risky test.
     *
     * @deprecated Use `AfterRiskyTestHook::executeAfterRiskyTest` instead
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * Skipped test.
     *
     * @deprecated Use `AfterSkippedTestHook::executeAfterSkippedTest` instead
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void;
    /**
     * A test suite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
    /**
     * A test suite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void;
    /**
     * A test started.
     *
     * @deprecated Use `BeforeTestHook::executeBeforeTest` instead
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void;
    /**
     * A test ended.
     *
     * @deprecated Use `AfterTestHook::executeAfterTest` instead
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void;
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestListenerAdapter implements \PHPUnit\Framework\TestListener
{
    /**
     * @var TestHook[]
     */
    private $hooks = [];
    /**
     * @var bool
     */
    private $lastTestWasNotSuccessful;
    public function add(\PHPUnit\Runner\TestHook $hook) : void
    {
    }
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterLastTestHook extends \PHPUnit\Runner\Hook
{
    public function executeAfterLastTest() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestHook extends \PHPUnit\Runner\TestHook
{
    /**
     * This hook will fire after any test, regardless of the result.
     *
     * For more fine grained control, have a look at the other hooks
     * that extend PHPUnit\Runner\Hook.
     */
    public function executeAfterTest(string $test, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterIncompleteTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterIncompleteTest(string $test, string $message, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestWarningHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestWarning(string $test, string $message, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterRiskyTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterRiskyTest(string $test, string $message, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterSuccessfulTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterSuccessfulTest(string $test, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterTestErrorHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterTestError(string $test, string $message, float $time) : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface BeforeFirstTestHook extends \PHPUnit\Runner\Hook
{
    public function executeBeforeFirstTest() : void;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface AfterSkippedTestHook extends \PHPUnit\Runner\TestHook
{
    public function executeAfterSkippedTest(string $test, string $message, float $time) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ResultCacheExtension implements \PHPUnit\Runner\AfterIncompleteTestHook, \PHPUnit\Runner\AfterLastTestHook, \PHPUnit\Runner\AfterRiskyTestHook, \PHPUnit\Runner\AfterSkippedTestHook, \PHPUnit\Runner\AfterSuccessfulTestHook, \PHPUnit\Runner\AfterTestErrorHook, \PHPUnit\Runner\AfterTestFailureHook, \PHPUnit\Runner\AfterTestWarningHook
{
    /**
     * @var TestResultCache
     */
    private $cache;
    public function __construct(\PHPUnit\Runner\TestResultCache $cache)
    {
    }
    public function flush() : void
    {
    }
    public function executeAfterSuccessfulTest(string $test, float $time) : void
    {
    }
    public function executeAfterIncompleteTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterRiskyTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterSkippedTest(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestError(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestFailure(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterTestWarning(string $test, string $message, float $time) : void
    {
    }
    public function executeAfterLastTest() : void
    {
    }
    /**
     * @param string $test A long description format of the current test
     *
     * @return string The test name without TestSuiteClassName:: and @dataprovider details
     */
    private function getTestName(string $test) : string
    {
    }
}
/**
 * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface TestSuiteLoader
{
    public function load(string $suiteClassFile) : \ReflectionClass;
    public function reload(\ReflectionClass $aClass) : \ReflectionClass;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
 */
final class StandardTestSuiteLoader implements \PHPUnit\Runner\TestSuiteLoader
{
    /**
     * @throws Exception
     */
    public function load(string $suiteClassFile) : \ReflectionClass
    {
    }
    public function reload(\ReflectionClass $aClass) : \ReflectionClass
    {
    }
    private function exceptionFor(string $className, string $filename) : \PHPUnit\Runner\Exception
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NullTestResultCache implements \PHPUnit\Runner\TestResultCache
{
    public function setState(string $testName, int $state) : void
    {
    }
    public function getState(string $testName) : int
    {
    }
    public function setTime(string $testName, float $time) : void
    {
    }
    public function getTime(string $testName) : float
    {
    }
    public function load() : void
    {
    }
    public function persist() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class BaseTestRunner
{
    /**
     * @var int
     */
    public const STATUS_UNKNOWN = -1;
    /**
     * @var int
     */
    public const STATUS_PASSED = 0;
    /**
     * @var int
     */
    public const STATUS_SKIPPED = 1;
    /**
     * @var int
     */
    public const STATUS_INCOMPLETE = 2;
    /**
     * @var int
     */
    public const STATUS_FAILURE = 3;
    /**
     * @var int
     */
    public const STATUS_ERROR = 4;
    /**
     * @var int
     */
    public const STATUS_RISKY = 5;
    /**
     * @var int
     */
    public const STATUS_WARNING = 6;
    /**
     * @var string
     */
    public const SUITE_METHODNAME = 'suite';
    /**
     * Returns the loader to be used.
     */
    public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
    {
    }
    /**
     * Returns the Test corresponding to the given suite.
     * This is a template method, subclasses override
     * the runFailed() and clearStatus() methods.
     *
     * @param string|string[] $suffixes
     *
     * @throws Exception
     */
    public function getTest(string $suiteClassFile, $suffixes = '') : ?\PHPUnit\Framework\TestSuite
    {
    }
    /**
     * Returns the loaded ReflectionClass for a suite name.
     */
    protected function loadSuiteClass(string $suiteClassFile) : \ReflectionClass
    {
    }
    /**
     * Clears the status message.
     */
    protected function clearStatus() : void
    {
    }
    /**
     * Override to define how to handle a failed loading of
     * a test suite.
     */
    protected abstract function runFailed(string $message) : void;
}
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Reorderable
{
    public function sortId() : string;
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array;
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SelfDescribing
{
    /**
     * Returns a string representation of the object.
     */
    public function toString() : string;
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Test extends \Countable
{
    /**
     * Runs a test and collects its result in a TestResult instance.
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult;
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhptTestCase implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
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
     * @var string
     */
    private $output = '';
    /**
     * Constructs a test case with the given filename.
     *
     * @throws Exception
     */
    public function __construct(string $filename, \PHPUnit\Util\PHP\AbstractPhpProcess $phpUtil = null)
    {
    }
    /**
     * Counts the number of test cases executed by run(TestResult result).
     */
    public function count() : int
    {
    }
    /**
     * Runs a test and collects its result in a TestResult instance.
     *
     * @throws Exception
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Returns the name of the test case.
     */
    public function getName() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     */
    public function toString() : string
    {
    }
    public function usesDataProvider() : bool
    {
    }
    public function getNumAssertions() : int
    {
    }
    public function getActualOutput() : string
    {
    }
    public function hasOutput() : bool
    {
    }
    public function sortId() : string
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * Parse --INI-- section key value pairs and return as array.
     *
     * @param array|string $content
     */
    private function parseIniSection($content, array $ini = []) : array
    {
    }
    private function parseEnvSection(string $content) : array
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    private function assertPhptExpectation(array $sections, string $output) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function runSkip(array &$sections, \PHPUnit\Framework\TestResult $result, array $settings) : bool
    {
    }
    private function runClean(array &$sections, bool $collectCoverage) : void
    {
    }
    /**
     * @throws Exception
     */
    private function parse() : array
    {
    }
    /**
     * @throws Exception
     */
    private function parseExternal(array &$sections) : void
    {
    }
    private function validate(array &$sections) : bool
    {
    }
    private function render(string $code) : string
    {
    }
    private function getCoverageFiles() : array
    {
    }
    private function renderForCoverage(string &$job, bool $pathCoverage, ?string $codeCoverageCacheDirectory) : void
    {
    }
    private function cleanupForCoverage() : \SebastianBergmann\CodeCoverage\RawCodeCoverageData
    {
    }
    private function stringifyIni(array $ini) : array
    {
    }
    private function getLocationHintFromDiff(string $message, array $sections) : array
    {
    }
    private function getCleanDiffLine(string $line) : string
    {
    }
    private function getLocationHint(string $needle, array $sections, ?string $sectionName = null) : array
    {
    }
    /**
     * @psalm-return list<string>
     */
    private function settings(bool $collectCoverage) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteSorter
{
    /**
     * @var int
     */
    public const ORDER_DEFAULT = 0;
    /**
     * @var int
     */
    public const ORDER_RANDOMIZED = 1;
    /**
     * @var int
     */
    public const ORDER_REVERSED = 2;
    /**
     * @var int
     */
    public const ORDER_DEFECTS_FIRST = 3;
    /**
     * @var int
     */
    public const ORDER_DURATION = 4;
    /**
     * Order tests by @size annotation 'small', 'medium', 'large'.
     *
     * @var int
     */
    public const ORDER_SIZE = 5;
    /**
     * List of sorting weights for all test result codes. A higher number gives higher priority.
     */
    private const DEFECT_SORT_WEIGHT = [\PHPUnit\Runner\BaseTestRunner::STATUS_ERROR => 6, \PHPUnit\Runner\BaseTestRunner::STATUS_FAILURE => 5, \PHPUnit\Runner\BaseTestRunner::STATUS_WARNING => 4, \PHPUnit\Runner\BaseTestRunner::STATUS_INCOMPLETE => 3, \PHPUnit\Runner\BaseTestRunner::STATUS_RISKY => 2, \PHPUnit\Runner\BaseTestRunner::STATUS_SKIPPED => 1, \PHPUnit\Runner\BaseTestRunner::STATUS_UNKNOWN => 0];
    private const SIZE_SORT_WEIGHT = [\PHPUnit\Util\Test::SMALL => 1, \PHPUnit\Util\Test::MEDIUM => 2, \PHPUnit\Util\Test::LARGE => 3, \PHPUnit\Util\Test::UNKNOWN => 4];
    /**
     * @var array<string, int> Associative array of (string => DEFECT_SORT_WEIGHT) elements
     */
    private $defectSortOrder = [];
    /**
     * @var TestResultCache
     */
    private $cache;
    /**
     * @var array<string> A list of normalized names of tests before reordering
     */
    private $originalExecutionOrder = [];
    /**
     * @var array<string> A list of normalized names of tests affected by reordering
     */
    private $executionOrder = [];
    public function __construct(?\PHPUnit\Runner\TestResultCache $cache = null)
    {
    }
    /**
     * @throws Exception
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function reorderTestsInSuite(\PHPUnit\Framework\Test $suite, int $order, bool $resolveDependencies, int $orderDefects, bool $isRootTestSuite = true) : void
    {
    }
    public function getOriginalExecutionOrder() : array
    {
    }
    public function getExecutionOrder() : array
    {
    }
    private function sort(\PHPUnit\Framework\TestSuite $suite, int $order, bool $resolveDependencies, int $orderDefects) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function addSuiteToDefectSortOrder(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    private function reverse(array $tests) : array
    {
    }
    private function randomize(array $tests) : array
    {
    }
    private function sortDefectsFirst(array $tests) : array
    {
    }
    private function sortByDuration(array $tests) : array
    {
    }
    private function sortBySize(array $tests) : array
    {
    }
    /**
     * Comparator callback function to sort tests for "reach failure as fast as possible".
     *
     * 1. sort tests by defect weight defined in self::DEFECT_SORT_WEIGHT
     * 2. when tests are equally defective, sort the fastest to the front
     * 3. do not reorder successful tests
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function cmpDefectPriorityAndTime(\PHPUnit\Framework\Test $a, \PHPUnit\Framework\Test $b) : int
    {
    }
    /**
     * Compares test duration for sorting tests by duration ascending.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function cmpDuration(\PHPUnit\Framework\Test $a, \PHPUnit\Framework\Test $b) : int
    {
    }
    /**
     * Compares test size for sorting tests small->medium->large->unknown.
     */
    private function cmpSize(\PHPUnit\Framework\Test $a, \PHPUnit\Framework\Test $b) : int
    {
    }
    /**
     * Reorder Tests within a TestCase in such a way as to resolve as many dependencies as possible.
     * The algorithm will leave the tests in original running order when it can.
     * For more details see the documentation for test dependencies.
     *
     * Short description of algorithm:
     * 1. Pick the next Test from remaining tests to be checked for dependencies.
     * 2. If the test has no dependencies: mark done, start again from the top
     * 3. If the test has dependencies but none left to do: mark done, start again from the top
     * 4. When we reach the end add any leftover tests to the end. These will be marked 'skipped' during execution.
     *
     * @param array<DataProviderTestSuite|TestCase> $tests
     *
     * @return array<DataProviderTestSuite|TestCase>
     */
    private function resolveDependencies(array $tests) : array
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function calculateTestExecutionOrder(\PHPUnit\Framework\Test $suite) : array
    {
    }
}
namespace PHPUnit;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
namespace PHPUnit\Runner;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Version
{
    /**
     * @var string
     */
    private static $pharVersion = '';
    /**
     * @var string
     */
    private static $version = '';
    /**
     * Returns the current version of PHPUnit.
     */
    public static function id() : string
    {
    }
    public static function series() : string
    {
    }
    public static function getVersionString() : string
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileLoader
{
    /**
     * Checks if a PHP sourcecode file is readable. The sourcecode file is loaded through the load() method.
     *
     * As a fallback, PHP looks in the directory of the file executing the stream_resolve_include_path function.
     * We do not want to load the Test.php file here, so skip it if it found that.
     * PHP prioritizes the include_path setting, so if the current directory is in there, it will first look in the
     * current working directory.
     *
     * @throws Exception
     */
    public static function checkAndLoad(string $filename) : string
    {
    }
    /**
     * Loads a PHP sourcefile.
     */
    public static function load(string $filename) : void
    {
    }
    /**
     * @see https://github.com/sebastianbergmann/phpunit/pull/2751
     */
    private static function isReadable(string $filename) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class Printer
{
    /**
     * @psalm-var closed-resource|resource
     */
    private $stream;
    /**
     * @var bool
     */
    private $isPhpStream;
    /**
     * @param null|resource|string $out
     *
     * @throws Exception
     */
    public function __construct($out = null)
    {
    }
    public function write(string $buffer) : void
    {
    }
    public function flush() : void
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ResultPrinter extends \PHPUnit\Framework\TestListener
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void;
    public function write(string $buffer) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class DefaultResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\TextUI\ResultPrinter
{
    public const EVENT_TEST_START = 0;
    public const EVENT_TEST_END = 1;
    public const EVENT_TESTSUITE_START = 2;
    public const EVENT_TESTSUITE_END = 3;
    public const COLOR_NEVER = 'never';
    public const COLOR_AUTO = 'auto';
    public const COLOR_ALWAYS = 'always';
    public const COLOR_DEFAULT = self::COLOR_NEVER;
    private const AVAILABLE_COLORS = [self::COLOR_NEVER, self::COLOR_AUTO, self::COLOR_ALWAYS];
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
     * @var Timer
     */
    private $timer;
    /**
     * Constructor.
     *
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    protected function printDefects(array $defects, string $type) : void
    {
    }
    protected function printDefect(\PHPUnit\Framework\TestFailure $defect, int $count) : void
    {
    }
    protected function printDefectHeader(\PHPUnit\Framework\TestFailure $defect, int $count) : void
    {
    }
    protected function printDefectTrace(\PHPUnit\Framework\TestFailure $defect) : void
    {
    }
    protected function printErrors(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printFailures(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printWarnings(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printIncompletes(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printRisky(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printSkipped(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printHeader(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printFooter(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function writeProgress(string $progress) : void
    {
    }
    protected function writeNewLine() : void
    {
    }
    /**
     * Formats a buffer with a specified ANSI color sequence if colors are
     * enabled.
     */
    protected function colorizeTextBox(string $color, string $buffer) : string
    {
    }
    /**
     * Writes a buffer out with a color sequence if colors are enabled.
     */
    protected function writeWithColor(string $color, string $buffer, bool $lf = true) : void
    {
    }
    /**
     * Writes progress with a color sequence if colors are enabled.
     */
    protected function writeProgressWithColor(string $color, string $buffer) : void
    {
    }
    private function writeCountString(int $count, string $name, string $color, bool $always = false) : void
    {
    }
}
namespace PHPUnit\Util\Log;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TeamCity extends \PHPUnit\TextUI\DefaultResultPrinter
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
     * @var false|int
     */
    private $flowId;
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function printIgnoredTest(string $testName, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    protected function writeProgress(string $progress) : void
    {
    }
    private function printEvent(string $eventName, array $params = []) : void
    {
    }
    private static function getMessage(\Throwable $t) : string
    {
    }
    private static function getDetails(\Throwable $t) : string
    {
    }
    private static function getPrimitiveValueAsString($value) : ?string
    {
    }
    private static function escapeValue(string $text) : string
    {
    }
    /**
     * @param string $className
     */
    private static function getFileName($className) : string
    {
    }
    /**
     * @param float $time microseconds
     */
    private static function toMilliseconds(float $time) : int
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class JUnit extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
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
     * @var bool
     */
    private $reportRiskyTests = false;
    /**
     * @var DOMElement[]
     */
    private $testSuites = [];
    /**
     * @var int[]
     */
    private $testSuiteTests = [0];
    /**
     * @var int[]
     */
    private $testSuiteAssertions = [0];
    /**
     * @var int[]
     */
    private $testSuiteErrors = [0];
    /**
     * @var int[]
     */
    private $testSuiteWarnings = [0];
    /**
     * @var int[]
     */
    private $testSuiteFailures = [0];
    /**
     * @var int[]
     */
    private $testSuiteSkipped = [0];
    /**
     * @var int[]
     */
    private $testSuiteTimes = [0];
    /**
     * @var int
     */
    private $testSuiteLevel = 0;
    /**
     * @var DOMElement
     */
    private $currentTestCase;
    /**
     * @param null|mixed $out
     */
    public function __construct($out = null, bool $reportRiskyTests = false)
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * Returns the XML as a string.
     */
    public function getXML() : string
    {
    }
    private function doAddFault(\PHPUnit\Framework\Test $test, \Throwable $t, string $type) : void
    {
    }
    private function doAddSkipped() : void
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated
 */
final class XdebugFilterScriptGenerator
{
    public function generate(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $filter) : string
    {
    }
    private function getItems(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $filter) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Type
{
    public static function isType(string $type) : bool
    {
    }
    public static function isCloneable(object $object) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RegularExpression
{
    /**
     * @return false|int
     */
    public static function safeMatch(string $pattern, string $subject)
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filter
{
    /**
     * @throws Exception
     */
    public static function getFilteredStacktrace(\Throwable $t) : string
    {
    }
    /**
     * @param false|string $prefix
     */
    private static function shouldPrintFrame(array $frame, $prefix, \PHPUnit\Util\ExcludeList $excludeList) : bool
    {
    }
    private static function fileIsExcluded(string $file, \PHPUnit\Util\ExcludeList $excludeList) : bool
    {
    }
    private static function frameExists(array $trace, string $file, int $line) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Color
{
    /**
     * @var array<string,string>
     */
    private const WHITESPACE_MAP = [' ' => '·', "\t" => '⇥'];
    /**
     * @var array<string,string>
     */
    private const WHITESPACE_EOL_MAP = [' ' => '·', "\t" => '⇥', "\n" => '↵', "\r" => '⟵'];
    /**
     * @var array<string,string>
     */
    private static $ansiCodes = ['reset' => '0', 'bold' => '1', 'dim' => '2', 'dim-reset' => '22', 'underlined' => '4', 'fg-default' => '39', 'fg-black' => '30', 'fg-red' => '31', 'fg-green' => '32', 'fg-yellow' => '33', 'fg-blue' => '34', 'fg-magenta' => '35', 'fg-cyan' => '36', 'fg-white' => '37', 'bg-default' => '49', 'bg-black' => '40', 'bg-red' => '41', 'bg-green' => '42', 'bg-yellow' => '43', 'bg-blue' => '44', 'bg-magenta' => '45', 'bg-cyan' => '46', 'bg-white' => '47'];
    public static function colorize(string $color, string $buffer) : string
    {
    }
    public static function colorizePath(string $path, ?string $prevPath = null, bool $colorizeFilename = false) : string
    {
    }
    public static function dim(string $buffer) : string
    {
    }
    public static function visualizeWhitespace(string $buffer, bool $visualizeEOL = false) : string
    {
    }
    private static function optimizeColor(string $buffer) : string
    {
    }
}
namespace PHPUnit\Util\Xml;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SchemaFinder
{
    /**
     * @throws Exception
     */
    public function find(string $version) : string
    {
    }
    private function path() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
abstract class SchemaDetectionResult
{
    public function detected() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function version() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class ValidationResult
{
    /**
     * @psalm-var array<int,list<string>>
     */
    private $validationErrors = [];
    /**
     * @psalm-param array<int,\LibXMLError> $errors
     */
    public static function fromArray(array $errors) : self
    {
    }
    private function __construct(array $validationErrors)
    {
    }
    public function hasValidationErrors() : bool
    {
    }
    public function asString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class FailedSchemaDetectionResult extends \PHPUnit\Util\Xml\SchemaDetectionResult
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @psalm-immutable
 */
final class SuccessfulSchemaDetectionResult extends \PHPUnit\Util\Xml\SchemaDetectionResult
{
    /**
     * @var string
     */
    private $version;
    public function __construct(string $version)
    {
    }
    public function detected() : bool
    {
    }
    public function version() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Validator
{
    public function validate(\DOMDocument $document, string $xsdFilename) : \PHPUnit\Util\Xml\ValidationResult
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SchemaDetector
{
    /**
     * @throws Exception
     */
    public function detect(string $filename) : \PHPUnit\Util\Xml\SchemaDetectionResult
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SnapshotNodeList implements \Countable, \IteratorAggregate
{
    /**
     * @var DOMNode[]
     */
    private $nodes = [];
    public static function fromNodeList(\DOMNodeList $list) : self
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \ArrayIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
{
    /**
     * @throws Exception
     */
    public function loadFile(string $filename, bool $isHtml = false, bool $xinclude = false, bool $strict = false) : \DOMDocument
    {
    }
    /**
     * @throws Exception
     */
    public function load(string $actual, bool $isHtml = false, string $filename = '', bool $xinclude = false, bool $strict = false) : \DOMDocument
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(\PHPUnit\Framework\TestSuite $suite) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Filesystem
{
    /**
     * Maps class names to source file names.
     *
     *   - PEAR CS:   Foo_Bar_Baz -> Foo/Bar/Baz.php
     *   - Namespace: Foo\Bar\Baz -> Foo/Bar/Baz.php
     */
    public static function classNameToFilename(string $className) : string
    {
    }
    public static function createDirectory(string $directory) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ErrorHandler
{
    /**
     * @var bool
     */
    private $convertDeprecationsToExceptions;
    /**
     * @var bool
     */
    private $convertErrorsToExceptions;
    /**
     * @var bool
     */
    private $convertNoticesToExceptions;
    /**
     * @var bool
     */
    private $convertWarningsToExceptions;
    /**
     * @var bool
     */
    private $registered = false;
    public static function invokeIgnoringWarnings(callable $callable)
    {
    }
    public function __construct(bool $convertDeprecationsToExceptions, bool $convertErrorsToExceptions, bool $convertNoticesToExceptions, bool $convertWarningsToExceptions)
    {
    }
    public function __invoke(int $errorNumber, string $errorString, string $errorFile, int $errorLine) : bool
    {
    }
    public function register() : void
    {
    }
    public function unregister() : void
    {
    }
}
namespace PHPUnit\Util\PHP;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
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
    public static function factory() : self
    {
    }
    public function __construct()
    {
    }
    /**
     * Defines if should use STDERR redirection or not.
     *
     * Then $stderrRedirection is TRUE, STDERR is redirected to STDOUT.
     */
    public function setUseStderrRedirection(bool $stderrRedirection) : void
    {
    }
    /**
     * Returns TRUE if uses STDERR redirection or FALSE if not.
     */
    public function useStderrRedirection() : bool
    {
    }
    /**
     * Sets the input string to be sent via STDIN.
     */
    public function setStdin(string $stdin) : void
    {
    }
    /**
     * Returns the input string to be sent via STDIN.
     */
    public function getStdin() : string
    {
    }
    /**
     * Sets the string of arguments to pass to the php job.
     */
    public function setArgs(string $args) : void
    {
    }
    /**
     * Returns the string of arguments to pass to the php job.
     */
    public function getArgs() : string
    {
    }
    /**
     * Sets the array of environment variables to start the child process with.
     *
     * @param array<string, string> $env
     */
    public function setEnv(array $env) : void
    {
    }
    /**
     * Returns the array of environment variables to start the child process with.
     */
    public function getEnv() : array
    {
    }
    /**
     * Sets the amount of seconds to wait before timing out.
     */
    public function setTimeout(int $timeout) : void
    {
    }
    /**
     * Returns the amount of seconds to wait before timing out.
     */
    public function getTimeout() : int
    {
    }
    /**
     * Runs a single test in a separate PHP process.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function runTestJob(string $job, \PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * Returns the command based into the configurations.
     */
    public function getCommand(array $settings, string $file = null) : string
    {
    }
    /**
     * Runs a single job (PHP code) using a separate PHP process.
     */
    public abstract function runJob(string $job, array $settings = []) : array;
    protected function settingsToParameters(array $settings) : string
    {
    }
    /**
     * Processes the TestResult object from an isolated process.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function processChildResult(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\TestResult $result, string $stdout, string $stderr) : void
    {
    }
    /**
     * Gets the thrown exception from a PHPUnit\Framework\TestFailure.
     *
     * @see https://github.com/sebastianbergmann/phpunit/issues/74
     */
    private function getException(\PHPUnit\Framework\TestFailure $error) : \PHPUnit\Framework\Exception
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class DefaultPhpProcess extends \PHPUnit\Util\PHP\AbstractPhpProcess
{
    /**
     * @var string
     */
    protected $tempFile;
    /**
     * Runs a single job (PHP code) using a separate PHP process.
     *
     * @throws Exception
     */
    public function runJob(string $job, array $settings = []) : array
    {
    }
    /**
     * Returns an array of file handles to be used in place of pipes.
     */
    protected function getHandles() : array
    {
    }
    /**
     * Handles creating the child process and returning the STDOUT and STDERR.
     *
     * @throws Exception
     */
    protected function runProcess(string $job, array $settings) : array
    {
    }
    /**
     * @param resource $pipe
     */
    protected function process($pipe, string $job) : void
    {
    }
    protected function cleanup() : void
    {
    }
    protected function useTemporaryFile() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @see https://bugs.php.net/bug.php?id=51800
 */
final class WindowsPhpProcess extends \PHPUnit\Util\PHP\DefaultPhpProcess
{
    public function getCommand(array $settings, string $file = null) : string
    {
    }
    /**
     * @throws Exception
     */
    protected function getHandles() : array
    {
    }
    protected function useTemporaryFile() : bool
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class VersionComparisonOperator
{
    /**
     * @psalm-var '<'|'lt'|'<='|'le'|'>'|'gt'|'>='|'ge'|'=='|'='|'eq'|'!='|'<>'|'ne'
     */
    private $operator;
    public function __construct(string $operator)
    {
    }
    /**
     * @return '<'|'lt'|'<='|'le'|'>'|'gt'|'>='|'ge'|'=='|'='|'eq'|'!='|'<>'|'ne'
     */
    public function asString() : string
    {
    }
    /**
     * @throws Exception
     *
     * @psalm-assert '<'|'lt'|'<='|'le'|'>'|'gt'|'>='|'ge'|'=='|'='|'eq'|'!='|'<>'|'ne' $operator
     */
    private function ensureOperatorIsValid(string $operator) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExcludeList
{
    /**
     * @var array<string,int>
     */
    private const EXCLUDED_CLASS_NAMES = [
        // composer
        \Composer\Autoload\ClassLoader::class => 1,
        // doctrine/instantiator
        \Doctrine\Instantiator\Instantiator::class => 1,
        // myclabs/deepcopy
        \DeepCopy\DeepCopy::class => 1,
        // nikic/php-parser
        \PhpParser\Parser::class => 1,
        // phar-io/manifest
        \PharIo\Manifest\Manifest::class => 1,
        // phar-io/version
        \PharIo\Version\Version::class => 1,
        // phpdocumentor/reflection-common
        \phpDocumentor\Reflection\Project::class => 1,
        // phpdocumentor/reflection-docblock
        \phpDocumentor\Reflection\DocBlock::class => 1,
        // phpdocumentor/type-resolver
        \phpDocumentor\Reflection\Type::class => 1,
        // phpspec/prophecy
        \Prophecy\Prophet::class => 1,
        // phpunit/phpunit
        \PHPUnit\Framework\TestCase::class => 2,
        // phpunit/php-code-coverage
        \SebastianBergmann\CodeCoverage\CodeCoverage::class => 1,
        // phpunit/php-file-iterator
        \SebastianBergmann\FileIterator\Facade::class => 1,
        // phpunit/php-invoker
        \SebastianBergmann\Invoker\Invoker::class => 1,
        // phpunit/php-text-template
        \SebastianBergmann\Template\Template::class => 1,
        // phpunit/php-timer
        \SebastianBergmann\Timer\Timer::class => 1,
        // sebastian/cli-parser
        \SebastianBergmann\CliParser\Parser::class => 1,
        // sebastian/code-unit
        \SebastianBergmann\CodeUnit\CodeUnit::class => 1,
        // sebastian/code-unit-reverse-lookup
        \SebastianBergmann\CodeUnitReverseLookup\Wizard::class => 1,
        // sebastian/comparator
        \SebastianBergmann\Comparator\Comparator::class => 1,
        // sebastian/complexity
        \SebastianBergmann\Complexity\Calculator::class => 1,
        // sebastian/diff
        \SebastianBergmann\Diff\Diff::class => 1,
        // sebastian/environment
        \SebastianBergmann\Environment\Runtime::class => 1,
        // sebastian/exporter
        \SebastianBergmann\Exporter\Exporter::class => 1,
        // sebastian/global-state
        \SebastianBergmann\GlobalState\Snapshot::class => 1,
        // sebastian/lines-of-code
        \SebastianBergmann\LinesOfCode\Counter::class => 1,
        // sebastian/object-enumerator
        \SebastianBergmann\ObjectEnumerator\Enumerator::class => 1,
        // sebastian/recursion-context
        \SebastianBergmann\RecursionContext\Context::class => 1,
        // sebastian/resource-operations
        \SebastianBergmann\ResourceOperations\ResourceOperations::class => 1,
        // sebastian/type
        \SebastianBergmann\Type\TypeName::class => 1,
        // sebastian/version
        \SebastianBergmann\Version::class => 1,
        // symfony/polyfill-ctype
        \Symfony\Polyfill\Ctype\Ctype::class => 1,
        // theseer/tokenizer
        \TheSeer\Tokenizer\Tokenizer::class => 1,
        // webmozart/assert
        \Webmozart\Assert\Assert::class => 1,
    ];
    /**
     * @var string[]
     */
    private static $directories;
    public static function addDirectory(string $directory) : void
    {
    }
    /**
     * @throws Exception
     *
     * @return string[]
     */
    public function getExcludedDirectories() : array
    {
    }
    /**
     * @throws Exception
     */
    public function isExcluded(string $file) : bool
    {
    }
    /**
     * @throws Exception
     */
    private function initialize() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Json
{
    /**
     * Prettify json string.
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public static function prettify(string $json) : string
    {
    }
    /**
     * To allow comparison of JSON strings, first process them into a consistent
     * format so that they can be compared as strings.
     *
     * @return array ($error, $canonicalized_json)  The $error parameter is used
     *               to indicate an error decoding the json. This is used to avoid ambiguity
     *               with JSON strings consisting entirely of 'null' or 'false'.
     */
    public static function canonicalize(string $json) : array
    {
    }
    /**
     * JSON object keys are unordered while PHP array keys are ordered.
     *
     * Sort all array keys to ensure both the expected and actual values have
     * their keys in the same order.
     */
    private static function recursiveSort(&$json) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDataSetException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Xml
{
    /**
     * @deprecated Only used by assertEqualXMLStructure()
     */
    public static function import(\DOMElement $element) : \DOMElement
    {
    }
    /**
     * @deprecated Only used by assertEqualXMLStructure()
     */
    public static function removeCharacterDataNodes(\DOMNode $node) : void
    {
    }
    /**
     * Escapes a string for the use in XML documents.
     *
     * Any Unicode character is allowed, excluding the surrogate blocks, FFFE,
     * and FFFF (not even as character reference).
     *
     * @see https://www.w3.org/TR/xml/#charsets
     */
    public static function prepareString(string $string) : string
    {
    }
    /**
     * "Convert" a DOMElement object into a PHP variable.
     */
    public static function xmlToVariable(\DOMElement $element)
    {
    }
    private static function convertToUtf8(string $string) : string
    {
    }
    private static function isUtf8(string $string) : bool
    {
    }
}
namespace PHPUnit\Util\TestDox;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class ResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\TextUI\ResultPrinter
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
     * @var null|string
     */
    protected $currentTestClassPrettified;
    /**
     * @var null|string
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
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, array $groups = [], array $excludeGroups = [])
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A testsuite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A testsuite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    protected function doEndClass() : void
    {
    }
    /**
     * Handler for 'start run' event.
     */
    protected function startRun() : void
    {
    }
    /**
     * Handler for 'start class' event.
     */
    protected function startClass(string $name) : void
    {
    }
    /**
     * Handler for 'on test' event.
     */
    protected function onTest(string $name, bool $success = true) : void
    {
    }
    /**
     * Handler for 'end class' event.
     */
    protected function endClass(string $name) : void
    {
    }
    /**
     * Handler for 'end run' event.
     */
    protected function endRun() : void
    {
    }
    private function isOfInterest(\PHPUnit\Framework\Test $test) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NamePrettifier
{
    /**
     * @var string[]
     */
    private $strings = [];
    /**
     * @var bool
     */
    private $useColor;
    public function __construct(bool $useColor = false)
    {
    }
    /**
     * Prettifies the name of a test class.
     *
     * @psalm-param class-string $className
     */
    public function prettifyTestClass(string $className) : string
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function prettifyTestCase(\PHPUnit\Framework\TestCase $test) : string
    {
    }
    public function prettifyDataSet(\PHPUnit\Framework\TestCase $test) : string
    {
    }
    /**
     * Prettifies the name of a test method.
     */
    public function prettifyTestMethod(string $name) : string
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function mapTestMethodParameterNamesToProvidedDataValues(\PHPUnit\Framework\TestCase $test) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestDoxPrinter extends \PHPUnit\TextUI\DefaultResultPrinter
{
    /**
     * @var NamePrettifier
     */
    protected $prettifier;
    /**
     * @var int The number of test results received from the TestRunner
     */
    protected $testIndex = 0;
    /**
     * @var int The number of test results already sent to the output
     */
    protected $testFlushIndex = 0;
    /**
     * @var array<int, array> Buffer for test results
     */
    protected $testResults = [];
    /**
     * @var array<string, int> Lookup table for testname to testResults[index]
     */
    protected $testNameResultIndex = [];
    /**
     * @var bool
     */
    protected $enableOutputBuffer = false;
    /**
     * @var array array<string>
     */
    protected $originalExecutionOrder = [];
    /**
     * @var int
     */
    protected $spinState = 0;
    /**
     * @var bool
     */
    protected $showProgress = true;
    /**
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function setOriginalExecutionOrder(array $order) : void
    {
    }
    public function setShowProgressAnimation(bool $showProgress) : void
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function writeProgress(string $progress) : void
    {
    }
    public function flush() : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function registerTestResult(\PHPUnit\Framework\Test $test, ?\Throwable $t, int $status, float $time, bool $verbose) : void
    {
    }
    protected function formatTestName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function formatClassName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function testHasPassed() : bool
    {
    }
    protected function flushOutputBuffer(bool $forceFlush = false) : void
    {
    }
    protected function showSpinner() : void
    {
    }
    protected function hideSpinner() : void
    {
    }
    protected function drawSpinner() : void
    {
    }
    protected function undrawSpinner() : void
    {
    }
    protected function writeTestResult(array $prevResult, array $result) : void
    {
    }
    protected function getEmptyTestResult() : array
    {
    }
    protected function getTestResultByName(?string $testName) : array
    {
    }
    protected function formatThrowable(\Throwable $t, ?int $status = null) : string
    {
    }
    protected function formatStacktrace(\Throwable $t) : string
    {
    }
    protected function formatTestResultMessage(\Throwable $t, array $result, string $prefix = '│') : string
    {
    }
    protected function prefixLines(string $prefix, string $message) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class XmlResultPrinter extends \PHPUnit\Util\Printer implements \PHPUnit\Framework\TestListener
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
     * @var null|Throwable
     */
    private $exception;
    /**
     * @param resource|string $out
     *
     * @throws Exception
     */
    public function __construct($out = null)
    {
    }
    /**
     * Flush buffer and close output.
     */
    public function flush() : void
    {
    }
    /**
     * An error occurred.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A warning occurred.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * A failure occurred.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Incomplete test.
     */
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Risky test.
     */
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Skipped test.
     */
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * A test suite started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test suite ended.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * A test started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * A test ended.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class CliTestDoxPrinter extends \PHPUnit\Util\TestDox\TestDoxPrinter
{
    /**
     * The default Testdox left margin for messages is a vertical line.
     */
    private const PREFIX_SIMPLE = ['default' => '│', 'start' => '│', 'message' => '│', 'diff' => '│', 'trace' => '│', 'last' => '│'];
    /**
     * Colored Testdox use box-drawing for a more textured map of the message.
     */
    private const PREFIX_DECORATED = ['default' => '│', 'start' => '┐', 'message' => '├', 'diff' => '┊', 'trace' => '╵', 'last' => '┴'];
    private const SPINNER_ICONS = [" \x1b[36m◐\x1b[0m running tests", " \x1b[36m◓\x1b[0m running tests", " \x1b[36m◑\x1b[0m running tests", " \x1b[36m◒\x1b[0m running tests"];
    private const STATUS_STYLES = [\PHPUnit\Runner\BaseTestRunner::STATUS_PASSED => ['symbol' => '✔', 'color' => 'fg-green'], \PHPUnit\Runner\BaseTestRunner::STATUS_ERROR => ['symbol' => '✘', 'color' => 'fg-yellow', 'message' => 'bg-yellow,fg-black'], \PHPUnit\Runner\BaseTestRunner::STATUS_FAILURE => ['symbol' => '✘', 'color' => 'fg-red', 'message' => 'bg-red,fg-white'], \PHPUnit\Runner\BaseTestRunner::STATUS_SKIPPED => ['symbol' => '↩', 'color' => 'fg-cyan', 'message' => 'fg-cyan'], \PHPUnit\Runner\BaseTestRunner::STATUS_RISKY => ['symbol' => '☢', 'color' => 'fg-yellow', 'message' => 'fg-yellow'], \PHPUnit\Runner\BaseTestRunner::STATUS_INCOMPLETE => ['symbol' => '∅', 'color' => 'fg-yellow', 'message' => 'fg-yellow'], \PHPUnit\Runner\BaseTestRunner::STATUS_WARNING => ['symbol' => '⚠', 'color' => 'fg-yellow', 'message' => 'fg-yellow'], \PHPUnit\Runner\BaseTestRunner::STATUS_UNKNOWN => ['symbol' => '?', 'color' => 'fg-blue', 'message' => 'fg-white,bg-blue']];
    /**
     * @var int[]
     */
    private $nonSuccessfulTestResults = [];
    /**
     * @var Timer
     */
    private $timer;
    /**
     * @param null|resource|string $out
     * @param int|string           $numberOfColumns
     *
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct($out = null, bool $verbose = false, string $colors = self::COLOR_DEFAULT, bool $debug = false, $numberOfColumns = 80, bool $reverse = false)
    {
    }
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function printHeader(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    protected function formatClassName(\PHPUnit\Framework\Test $test) : string
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function registerTestResult(\PHPUnit\Framework\Test $test, ?\Throwable $t, int $status, float $time, bool $verbose) : void
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function formatTestName(\PHPUnit\Framework\Test $test) : string
    {
    }
    protected function writeTestResult(array $prevResult, array $result) : void
    {
    }
    protected function formatThrowable(\Throwable $t, ?int $status = null) : string
    {
    }
    protected function colorizeMessageAndDiff(string $style, string $buffer) : array
    {
    }
    protected function formatStacktrace(\Throwable $t) : string
    {
    }
    protected function formatTestResultMessage(\Throwable $t, array $result, ?string $prefix = null) : string
    {
    }
    protected function drawSpinner() : void
    {
    }
    protected function undrawSpinner() : void
    {
    }
    private function formatRuntime(float $time, string $color = '') : string
    {
    }
    private function printNonSuccessfulTestsSummary(int $numberOfExecutedTests) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TextResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
{
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * Handler for 'start class' event.
     */
    protected function startClass(string $name) : void
    {
    }
    /**
     * Handler for 'on test' event.
     */
    protected function onTest(string $name, bool $success = true) : void
    {
    }
    /**
     * Handler for 'end class' event.
     */
    protected function endClass(string $name) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class HtmlResultPrinter extends \PHPUnit\Util\TestDox\ResultPrinter
{
    /**
     * @var string
     */
    private const PAGE_HEADER = <<<'EOT'
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
    private const CLASS_HEADER = <<<'EOT'

        <h2 id="%s">%s</h2>
        <ul>

EOT;
    /**
     * @var string
     */
    private const CLASS_FOOTER = <<<'EOT'
        </ul>
EOT;
    /**
     * @var string
     */
    private const PAGE_FOOTER = <<<'EOT'

    </body>
</html>
EOT;
    public function printResult(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * Handler for 'start run' event.
     */
    protected function startRun() : void
    {
    }
    /**
     * Handler for 'start class' event.
     */
    protected function startClass(string $name) : void
    {
    }
    /**
     * Handler for 'on test' event.
     */
    protected function onTest(string $name, bool $success = true) : void
    {
    }
    /**
     * Handler for 'end class' event.
     */
    protected function endClass(string $name) : void
    {
    }
    /**
     * Handler for 'end run' event.
     */
    protected function endRun() : void
    {
    }
}
namespace PHPUnit\Util;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\Util\Annotation;

/**
 * This is an abstraction around a PHPUnit-specific docBlock,
 * allowing us to ask meaningful questions about a specific
 * reflection symbol.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DocBlock
{
    /**
     * @todo This constant should be private (it's public because of TestTest::testGetProvidedDataRegEx)
     */
    public const REGEX_DATA_PROVIDER = '/@dataProvider\\s+([a-zA-Z0-9._:-\\\\x7f-\\xff]+)/';
    private const REGEX_REQUIRES_VERSION = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+(dev|(RC|alpha|beta)[\\d\\.])?)[ \\t]*\\r?$/m';
    private const REGEX_REQUIRES_VERSION_CONSTRAINT = '/@requires\\s+(?P<name>PHP(?:Unit)?)\\s+(?P<constraint>[\\d\\t \\-.|~^]+)[ \\t]*\\r?$/m';
    private const REGEX_REQUIRES_OS = '/@requires\\s+(?P<name>OS(?:FAMILY)?)\\s+(?P<value>.+?)[ \\t]*\\r?$/m';
    private const REGEX_REQUIRES_SETTING = '/@requires\\s+(?P<name>setting)\\s+(?P<setting>([^ ]+?))\\s*(?P<value>[\\w\\.-]+[\\w\\.]?)?[ \\t]*\\r?$/m';
    private const REGEX_REQUIRES = '/@requires\\s+(?P<name>function|extension)\\s+(?P<value>([^\\s<>=!]+))\\s*(?P<operator>[<>=!]{0,2})\\s*(?P<version>[\\d\\.-]+[\\d\\.]?)?[ \\t]*\\r?$/m';
    private const REGEX_TEST_WITH = '/@testWith\\s+/';
    /** @var string */
    private $docComment;
    /** @var bool */
    private $isMethod;
    /** @var array<string, array<int, string>> pre-parsed annotations indexed by name and occurrence index */
    private $symbolAnnotations;
    /**
     * @var null|array<string, mixed>
     *
     * @psalm-var null|(array{
     *   __OFFSET: array<string, int>&array{__FILE: string},
     *   setting?: array<string, string>,
     *   extension_versions?: array<string, array{version: string, operator: string}>
     * }&array<
     *   string,
     *   string|array{version: string, operator: string}|array{constraint: string}|array<int|string, string>
     * >)
     */
    private $parsedRequirements;
    /** @var int */
    private $startLine;
    /** @var int */
    private $endLine;
    /** @var string */
    private $fileName;
    /** @var string */
    private $name;
    /**
     * @var string
     *
     * @psalm-var class-string
     */
    private $className;
    public static function ofClass(\ReflectionClass $class) : self
    {
    }
    /**
     * @psalm-param class-string $classNameInHierarchy
     */
    public static function ofMethod(\ReflectionMethod $method, string $classNameInHierarchy) : self
    {
    }
    /**
     * Note: we do not preserve an instance of the reflection object, since it cannot be safely (de-)serialized.
     *
     * @param array<string, array<int, string>> $symbolAnnotations
     *
     * @psalm-param class-string $className
     */
    private function __construct(string $docComment, bool $isMethod, array $symbolAnnotations, int $startLine, int $endLine, string $fileName, string $name, string $className)
    {
    }
    /**
     * @psalm-return array{
     *   __OFFSET: array<string, int>&array{__FILE: string},
     *   setting?: array<string, string>,
     *   extension_versions?: array<string, array{version: string, operator: string}>
     * }&array<
     *   string,
     *   string|array{version: string, operator: string}|array{constraint: string}|array<int|string, string>
     * >
     *
     * @throws Warning if the requirements version constraint is not well-formed
     */
    public function requirements() : array
    {
    }
    /**
     * Returns the provided data for a method.
     *
     * @throws Exception
     */
    public function getProvidedData() : ?array
    {
    }
    /**
     * @psalm-return array<string, array{line: int, value: string}>
     */
    public function getInlineAnnotations() : array
    {
    }
    public function symbolAnnotations() : array
    {
    }
    public function isHookToBeExecutedBeforeClass() : bool
    {
    }
    public function isHookToBeExecutedAfterClass() : bool
    {
    }
    public function isToBeExecutedBeforeTest() : bool
    {
    }
    public function isToBeExecutedAfterTest() : bool
    {
    }
    public function isToBeExecutedAsPreCondition() : bool
    {
    }
    public function isToBeExecutedAsPostCondition() : bool
    {
    }
    private function getDataFromDataProviderAnnotation(string $docComment) : ?array
    {
    }
    /**
     * @throws Exception
     */
    private function getDataFromTestWithAnnotation(string $docComment) : ?array
    {
    }
    private function cleanUpMultiLineAnnotation(string $docComment) : string
    {
    }
    /** @return array<string, array<int, string>> */
    private static function parseDocBlock(string $docBlock) : array
    {
    }
    /** @param ReflectionClass|ReflectionFunctionAbstract $reflector */
    private static function extractAnnotationsFromReflector(\Reflector $reflector) : array
    {
    }
}
/**
 * Reflection information, and therefore DocBlock information, is static within
 * a single PHP process. It is therefore okay to use a Singleton registry here.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Registry
{
    /** @var null|self */
    private static $instance;
    /** @var array<string, DocBlock> indexed by class name */
    private $classDocBlocks = [];
    /** @var array<string, array<string, DocBlock>> indexed by class name and method name */
    private $methodDocBlocks = [];
    public static function getInstance() : self
    {
    }
    private function __construct()
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $class
     */
    public function forClassName(string $class) : \PHPUnit\Util\Annotation\DocBlock
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $classInHierarchy
     */
    public function forMethod(string $classInHierarchy, string $method) : \PHPUnit\Util\Annotation\DocBlock
    {
    }
}
namespace PHPUnit\Util;

/**
 * @deprecated Use ExcludeList instead
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Blacklist
{
    public static function addDirectory(string $directory) : void
    {
    }
    /**
     * @throws Exception
     *
     * @return string[]
     */
    public function getBlacklistedDirectories() : array
    {
    }
    /**
     * @throws Exception
     */
    public function isBlacklisted(string $file) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TextTestListRenderer
{
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function render(\PHPUnit\Framework\TestSuite $suite) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GlobalState
{
    /**
     * @var string[]
     */
    private const SUPER_GLOBAL_ARRAYS = ['_ENV', '_POST', '_GET', '_COOKIE', '_SERVER', '_FILES', '_REQUEST'];
    /**
     * @throws Exception
     */
    public static function getIncludedFilesAsString() : string
    {
    }
    /**
     * @param string[] $files
     *
     * @throws Exception
     */
    public static function processIncludedFilesAsString(array $files) : string
    {
    }
    public static function getIniSettingsAsString() : string
    {
    }
    public static function getConstantsAsString() : string
    {
    }
    public static function getGlobalsAsString() : string
    {
    }
    private static function exportVariable($variable) : string
    {
    }
    private static function arrayOnlyContainsScalars(array $array) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Test
{
    /**
     * @var int
     */
    public const UNKNOWN = -1;
    /**
     * @var int
     */
    public const SMALL = 0;
    /**
     * @var int
     */
    public const MEDIUM = 1;
    /**
     * @var int
     */
    public const LARGE = 2;
    /**
     * @var array
     */
    private static $hookMethods = [];
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function describe(\PHPUnit\Framework\Test $test) : array
    {
    }
    public static function describeAsString(\PHPUnit\Framework\Test $test) : string
    {
    }
    /**
     * @throws CodeCoverageException
     *
     * @return array|bool
     * @psalm-param class-string $className
     */
    public static function getLinesToBeCovered(string $className, string $methodName)
    {
    }
    /**
     * Returns lines of code specified with the @uses annotation.
     *
     * @throws CodeCoverageException
     * @psalm-param class-string $className
     */
    public static function getLinesToBeUsed(string $className, string $methodName) : array
    {
    }
    public static function requiresCodeCoverageDataCollection(\PHPUnit\Framework\TestCase $test) : bool
    {
    }
    /**
     * @throws Exception
     * @psalm-param class-string $className
     */
    public static function getRequirements(string $className, string $methodName) : array
    {
    }
    /**
     * Returns the missing requirements for a test.
     *
     * @throws Exception
     * @throws Warning
     * @psalm-param class-string $className
     */
    public static function getMissingRequirements(string $className, string $methodName) : array
    {
    }
    /**
     * Returns the provided data for a method.
     *
     * @throws Exception
     * @psalm-param class-string $className
     */
    public static function getProvidedData(string $className, string $methodName) : ?array
    {
    }
    /**
     * @psalm-param class-string $className
     */
    public static function parseTestMethodAnnotations(string $className, ?string $methodName = '') : array
    {
    }
    /**
     * @psalm-param class-string $className
     */
    public static function getInlineAnnotations(string $className, string $methodName) : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getBackupSettings(string $className, string $methodName) : array
    {
    }
    /**
     * @psalm-param class-string $className
     *
     * @return ExecutionOrderDependency[]
     */
    public static function getDependencies(string $className, string $methodName) : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getGroups(string $className, ?string $methodName = '') : array
    {
    }
    /** @psalm-param class-string $className */
    public static function getSize(string $className, ?string $methodName) : int
    {
    }
    /** @psalm-param class-string $className */
    public static function getProcessIsolationSettings(string $className, string $methodName) : bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getClassProcessIsolationSettings(string $className, string $methodName) : bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getPreserveGlobalStateSettings(string $className, string $methodName) : ?bool
    {
    }
    /** @psalm-param class-string $className */
    public static function getHookMethods(string $className) : array
    {
    }
    public static function isTestMethod(\ReflectionMethod $method) : bool
    {
    }
    /**
     * @throws CodeCoverageException
     * @psalm-param class-string $className
     */
    private static function getLinesToBeCoveredOrUsed(string $className, string $methodName, string $mode) : array
    {
    }
    private static function emptyHookMethodsArray() : array
    {
    }
    /** @psalm-param class-string $className */
    private static function getBooleanAnnotationSetting(string $className, ?string $methodName, string $settingName) : ?bool
    {
    }
    /**
     * Trims any extensions from version string that follows after
     * the <major>.<minor>[.<patch>] format.
     */
    private static function sanitizeVersionNumber(string $version)
    {
    }
    private static function shouldCoversAnnotationBeUsed(array $annotations) : bool
    {
    }
    /**
     * Merge two arrays together.
     *
     * If an integer key exists in both arrays and preserveNumericKeys is false, the value
     * from the second array will be appended to the first array. If both values are arrays, they
     * are merged together, else the value of the second array overwrites the one of the first array.
     *
     * This implementation is copied from https://github.com/zendframework/zend-stdlib/blob/76b653c5e99b40eccf5966e3122c90615134ae46/src/ArrayUtils.php
     *
     * Zend Framework (http://framework.zend.com/)
     *
     * @link      http://github.com/zendframework/zf2 for the canonical source repository
     *
     * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
     * @license   http://framework.zend.com/license/new-bsd New BSD License
     */
    private static function mergeArraysRecursively(array $a, array $b) : array
    {
    }
    private static function canonicalizeName(string $name) : string
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class TestSuite implements \IteratorAggregate, \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
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
     * @psalm-var array<string,list<Test>>
     */
    protected $groups = [];
    /**
     * The tests in the test suite.
     *
     * @var Test[]
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
     * @var string[]
     */
    protected $foundClasses = [];
    /**
     * @var null|list<ExecutionOrderDependency>
     */
    protected $providedTests;
    /**
     * @var null|list<ExecutionOrderDependency>
     */
    protected $requiredTests;
    /**
     * @var bool
     */
    private $beStrictAboutChangesToGlobalState;
    /**
     * @var Factory
     */
    private $iteratorFilter;
    /**
     * @var string[]
     */
    private $declaredClasses;
    /**
     * @psalm-var array<int,string>
     */
    private $warnings = [];
    /**
     * Constructs a new TestSuite.
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
     * @param ReflectionClass|string $theClass
     *
     * @throws Exception
     */
    public function __construct($theClass = '', string $name = '')
    {
    }
    /**
     * Returns a string representation of the test suite.
     */
    public function toString() : string
    {
    }
    /**
     * Adds a test to the suite.
     *
     * @param array $groups
     */
    public function addTest(\PHPUnit\Framework\Test $test, $groups = []) : void
    {
    }
    /**
     * Adds the tests from the given class to the suite.
     *
     * @psalm-param object|class-string $testClass
     *
     * @throws Exception
     */
    public function addTestSuite($testClass) : void
    {
    }
    public function addWarning(string $warning) : void
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
     * @throws Exception
     */
    public function addTestFile(string $filename) : void
    {
    }
    /**
     * Wrapper for addTestFile() that adds multiple test files.
     *
     * @throws Exception
     */
    public function addTestFiles(iterable $fileNames) : void
    {
    }
    /**
     * Counts the number of test cases that will be run by this test.
     *
     * @todo refactor usage of numTests in DefaultResultPrinter
     */
    public function count() : int
    {
    }
    /**
     * Returns the name of the suite.
     */
    public function getName() : string
    {
    }
    /**
     * Returns the test groups of the suite.
     *
     * @psalm-return list<string>
     */
    public function getGroups() : array
    {
    }
    public function getGroupDetails() : array
    {
    }
    /**
     * Set tests groups of the test case.
     */
    public function setGroupDetails(array $groups) : void
    {
    }
    /**
     * Runs the tests and collects their result in a TestResult.
     *
     * @throws \PHPUnit\Framework\CodeCoverageException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Warning
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
    {
    }
    public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
    {
    }
    public function setName(string $name) : void
    {
    }
    /**
     * Returns the tests as an enumeration.
     *
     * @return Test[]
     */
    public function tests() : array
    {
    }
    /**
     * Set tests of the test suite.
     *
     * @param Test[] $tests
     */
    public function setTests(array $tests) : void
    {
    }
    /**
     * Mark the test suite as skipped.
     *
     * @param string $message
     *
     * @throws SkippedTestSuiteError
     *
     * @psalm-return never-return
     */
    public function markTestSuiteSkipped($message = '') : void
    {
    }
    /**
     * @param bool $beStrictAboutChangesToGlobalState
     */
    public function setBeStrictAboutChangesToGlobalState($beStrictAboutChangesToGlobalState) : void
    {
    }
    /**
     * @param bool $backupGlobals
     */
    public function setBackupGlobals($backupGlobals) : void
    {
    }
    /**
     * @param bool $backupStaticAttributes
     */
    public function setBackupStaticAttributes($backupStaticAttributes) : void
    {
    }
    /**
     * Returns an iterator for this test suite.
     */
    public function getIterator() : \Iterator
    {
    }
    public function injectFilter(\PHPUnit\Runner\Filter\Factory $filter) : void
    {
    }
    /**
     * @psalm-return array<int,string>
     */
    public function warnings() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    public function sortId() : string
    {
    }
    /**
     * Creates a default TestResult object.
     */
    protected function createResult() : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * @throws Exception
     */
    protected function addTestMethod(\ReflectionClass $class, \ReflectionMethod $method) : void
    {
    }
    private function clearCaches() : void
    {
    }
    private function containsOnlyVirtualGroups(array $groups) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DataProviderTestSuite extends \PHPUnit\Framework\TestSuite
{
    /**
     * @var list<ExecutionOrderDependency>
     */
    private $dependencies = [];
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     */
    public function setDependencies(array $dependencies) : void
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * Returns the size of the each test created using the data provider(s).
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function getSize() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
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
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertArrayHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that an array does not have a specified key.
     *
     * @param int|string        $key
     * @param array|ArrayAccess $array
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertArrayNotHasKey($key, $array, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertContains($needle, iterable $haystack, string $message = '') : void
    {
    }
    public static function assertContainsEquals($needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain a needle.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotContains($needle, iterable $haystack, string $message = '') : void
    {
    }
    public static function assertNotContainsEquals($needle, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack contains only instances of a given class name.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertContainsOnlyInstancesOf(string $className, iterable $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a haystack does not contain only values of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotContainsOnly(string $type, iterable $haystack, ?bool $isNativeType = null, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts the number of elements of an array, Countable or Traversable.
     *
     * @param Countable|iterable $haystack
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotCount(int $expectedCount, $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEquals($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsCanonicalizing($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsIgnoringCase($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEquals($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsCanonicalizing($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsIgnoringCase($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables are not equal (with delta).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotEqualsWithDelta($expected, $actual, float $delta, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    public static function assertObjectEquals(object $expected, object $actual, string $method = 'equals', string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert empty $actual
     */
    public static function assertEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not empty.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !empty $actual
     */
    public static function assertNotEmpty($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertGreaterThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is greater than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertGreaterThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertLessThan($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a value is smaller than or equal to another value.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertLessThanOrEqual($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of
     * another file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEquals(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEqualsCanonicalizing(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of one file is not equal to the contents of another
     * file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileNotEqualsIgnoringCase(string $expected, string $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFile(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (canonicalizing).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFileCanonicalizing(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that the contents of a string is not equal
     * to the contents of a file (ignoring case).
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotEqualsFileIgnoringCase(string $expectedFile, string $actualString, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsNotReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4062
     */
    public static function assertNotIsReadable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertIsNotWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file/dir exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4065
     */
    public static function assertNotIsWritable(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryDoesNotExist(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4068
     */
    public static function assertDirectoryNotExists(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsNotReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4071
     */
    public static function assertDirectoryNotIsReadable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDirectoryIsNotWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a directory exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4074
     */
    public static function assertDirectoryNotIsWritable(string $directory, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileDoesNotExist(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file does not exist.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4077
     */
    public static function assertFileNotExists(string $filename, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsNotReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not readable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4080
     */
    public static function assertFileNotIsReadable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFileIsNotWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a file exists and is not writable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4083
     */
    public static function assertFileNotIsWritable(string $file, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert true $condition
     */
    public static function assertTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not true.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !true $condition
     */
    public static function assertNotTrue($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert false $condition
     */
    public static function assertFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a condition is not false.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !false $condition
     */
    public static function assertNotFalse($condition, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert null $actual
     */
    public static function assertNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not null.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !null $actual
     */
    public static function assertNotNull($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is finite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertFinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is infinite.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertInfinite($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is nan.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNan($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassNotHasAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class has a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that a class does not have a specified static attribute.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertClassNotHasStaticAttribute(string $attributeName, string $className, string $message = '') : void
    {
    }
    /**
     * Asserts that an object has a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertObjectHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that an object does not have a specified attribute.
     *
     * @param object $object
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertObjectNotHasAttribute(string $attributeName, $object, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables have the same type and value.
     * Used on objects, it asserts that two variables reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-template ExpectedType
     * @psalm-param ExpectedType $expected
     * @psalm-assert =ExpectedType $actual
     */
    public static function assertSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that two variables do not have the same type and value.
     * Used on objects, it asserts that two variables do not reference
     * the same object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertNotSame($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert =ExpectedType $actual
     */
    public static function assertInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of a given type.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     *
     * @psalm-template ExpectedType of object
     * @psalm-param class-string<ExpectedType> $expected
     * @psalm-assert !ExpectedType $actual
     */
    public static function assertNotInstanceOf(string $expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type array.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert array $actual
     */
    public static function assertIsArray($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert bool $actual
     */
    public static function assertIsBool($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type float.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert float $actual
     */
    public static function assertIsFloat($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type int.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert int $actual
     */
    public static function assertIsInt($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert numeric $actual
     */
    public static function assertIsNumeric($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert object $actual
     */
    public static function assertIsObject($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert resource $actual
     */
    public static function assertIsResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type resource and is closed.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert resource $actual
     */
    public static function assertIsClosedResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert string $actual
     */
    public static function assertIsString($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert scalar $actual
     */
    public static function assertIsScalar($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert callable $actual
     */
    public static function assertIsCallable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert iterable $actual
     */
    public static function assertIsIterable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type array.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !array $actual
     */
    public static function assertIsNotArray($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type bool.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !bool $actual
     */
    public static function assertIsNotBool($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type float.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !float $actual
     */
    public static function assertIsNotFloat($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type int.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !int $actual
     */
    public static function assertIsNotInt($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type numeric.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !numeric $actual
     */
    public static function assertIsNotNumeric($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !object $actual
     */
    public static function assertIsNotObject($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !resource $actual
     */
    public static function assertIsNotResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type resource.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !resource $actual
     */
    public static function assertIsNotClosedResource($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !string $actual
     */
    public static function assertIsNotString($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type scalar.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !scalar $actual
     */
    public static function assertIsNotScalar($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type callable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !callable $actual
     */
    public static function assertIsNotCallable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a variable is not of type iterable.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-assert !iterable $actual
     */
    public static function assertIsNotIterable($actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertMatchesRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4086
     */
    public static function assertRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertDoesNotMatchRegularExpression(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given regular expression.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4089
     */
    public static function assertNotRegExp(string $pattern, string $string, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Assert that the size of two arrays (or `Countable` or `Traversable` objects)
     * is not the same.
     *
     * @param Countable|iterable $expected
     * @param Countable|iterable $actual
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertNotSameSize($expected, $actual, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotMatchesFormat(string $format, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string matches a given format file.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string does not match a given format string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotMatchesFormatFile(string $formatFile, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts with a given prefix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringStartsWith(string $prefix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string starts not with a given prefix.
     *
     * @param string $prefix
     * @param string $string
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringStartsNotWith($prefix, $string, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotContainsString(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringNotContainsStringIgnoringCase(string $needle, string $haystack, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEndsWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that a string ends not with a given suffix.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertStringEndsNotWith(string $suffix, string $string, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public static function assertXmlFileEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Exception
     */
    public static function assertXmlFileNotEqualsXmlFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringNotEqualsXmlFile(string $expectedFile, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that two XML documents are not equal.
     *
     * @param DOMDocument|string $expectedXml
     * @param DOMDocument|string $actualXml
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws \PHPUnit\Util\Xml\Exception
     */
    public static function assertXmlStringNotEqualsXmlString($expectedXml, $actualXml, string $message = '') : void
    {
    }
    /**
     * Asserts that a hierarchy of DOMElements matches.
     *
     * @throws AssertionFailedError
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @codeCoverageIgnore
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4091
     */
    public static function assertEqualXMLStructure(\DOMElement $expectedElement, \DOMElement $actualElement, bool $checkAttributes = false, string $message = '') : void
    {
    }
    /**
     * Evaluates a PHPUnit\Framework\Constraint matcher object.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertThat($value, \PHPUnit\Framework\Constraint\Constraint $constraint, string $message = '') : void
    {
    }
    /**
     * Asserts that a string is a valid JSON string.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJson(string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringEqualsJsonString(string $expectedJson, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two given JSON encoded objects or arrays are not equal.
     *
     * @param string $expectedJson
     * @param string $actualJson
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringNotEqualsJsonString($expectedJson, $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that the generated JSON encoded object and the content of the given file are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonStringNotEqualsJsonFile(string $expectedFile, string $actualJson, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonFileEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * Asserts that two JSON files are not equal.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public static function assertJsonFileNotEqualsJsonFile(string $expectedFile, string $actualFile, string $message = '') : void
    {
    }
    /**
     * @throws Exception
     */
    public static function logicalAnd() : \PHPUnit\Framework\Constraint\LogicalAnd
    {
    }
    public static function logicalOr() : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function logicalNot(\PHPUnit\Framework\Constraint\Constraint $constraint) : \PHPUnit\Framework\Constraint\LogicalNot
    {
    }
    public static function logicalXor() : \PHPUnit\Framework\Constraint\LogicalXor
    {
    }
    public static function anything() : \PHPUnit\Framework\Constraint\IsAnything
    {
    }
    public static function isTrue() : \PHPUnit\Framework\Constraint\IsTrue
    {
    }
    public static function callback(callable $callback) : \PHPUnit\Framework\Constraint\Callback
    {
    }
    public static function isFalse() : \PHPUnit\Framework\Constraint\IsFalse
    {
    }
    public static function isJson() : \PHPUnit\Framework\Constraint\IsJson
    {
    }
    public static function isNull() : \PHPUnit\Framework\Constraint\IsNull
    {
    }
    public static function isFinite() : \PHPUnit\Framework\Constraint\IsFinite
    {
    }
    public static function isInfinite() : \PHPUnit\Framework\Constraint\IsInfinite
    {
    }
    public static function isNan() : \PHPUnit\Framework\Constraint\IsNan
    {
    }
    public static function containsEqual($value) : \PHPUnit\Framework\Constraint\TraversableContainsEqual
    {
    }
    public static function containsIdentical($value) : \PHPUnit\Framework\Constraint\TraversableContainsIdentical
    {
    }
    public static function containsOnly(string $type) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    public static function containsOnlyInstancesOf(string $className) : \PHPUnit\Framework\Constraint\TraversableContainsOnly
    {
    }
    /**
     * @param int|string $key
     */
    public static function arrayHasKey($key) : \PHPUnit\Framework\Constraint\ArrayHasKey
    {
    }
    public static function equalTo($value) : \PHPUnit\Framework\Constraint\IsEqual
    {
    }
    public static function equalToCanonicalizing($value) : \PHPUnit\Framework\Constraint\IsEqualCanonicalizing
    {
    }
    public static function equalToIgnoringCase($value) : \PHPUnit\Framework\Constraint\IsEqualIgnoringCase
    {
    }
    public static function equalToWithDelta($value, float $delta) : \PHPUnit\Framework\Constraint\IsEqualWithDelta
    {
    }
    public static function isEmpty() : \PHPUnit\Framework\Constraint\IsEmpty
    {
    }
    public static function isWritable() : \PHPUnit\Framework\Constraint\IsWritable
    {
    }
    public static function isReadable() : \PHPUnit\Framework\Constraint\IsReadable
    {
    }
    public static function directoryExists() : \PHPUnit\Framework\Constraint\DirectoryExists
    {
    }
    public static function fileExists() : \PHPUnit\Framework\Constraint\FileExists
    {
    }
    public static function greaterThan($value) : \PHPUnit\Framework\Constraint\GreaterThan
    {
    }
    public static function greaterThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function classHasAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasAttribute
    {
    }
    public static function classHasStaticAttribute(string $attributeName) : \PHPUnit\Framework\Constraint\ClassHasStaticAttribute
    {
    }
    public static function objectHasAttribute($attributeName) : \PHPUnit\Framework\Constraint\ObjectHasAttribute
    {
    }
    public static function identicalTo($value) : \PHPUnit\Framework\Constraint\IsIdentical
    {
    }
    public static function isInstanceOf(string $className) : \PHPUnit\Framework\Constraint\IsInstanceOf
    {
    }
    public static function isType(string $type) : \PHPUnit\Framework\Constraint\IsType
    {
    }
    public static function lessThan($value) : \PHPUnit\Framework\Constraint\LessThan
    {
    }
    public static function lessThanOrEqual($value) : \PHPUnit\Framework\Constraint\LogicalOr
    {
    }
    public static function matchesRegularExpression(string $pattern) : \PHPUnit\Framework\Constraint\RegularExpression
    {
    }
    public static function matches(string $string) : \PHPUnit\Framework\Constraint\StringMatchesFormatDescription
    {
    }
    public static function stringStartsWith($prefix) : \PHPUnit\Framework\Constraint\StringStartsWith
    {
    }
    public static function stringContains(string $string, bool $case = true) : \PHPUnit\Framework\Constraint\StringContains
    {
    }
    public static function stringEndsWith(string $suffix) : \PHPUnit\Framework\Constraint\StringEndsWith
    {
    }
    public static function countOf(int $count) : \PHPUnit\Framework\Constraint\Count
    {
    }
    public static function objectEquals(object $object, string $method = 'equals') : \PHPUnit\Framework\Constraint\ObjectEquals
    {
    }
    /**
     * Fails a test with the given message.
     *
     * @throws AssertionFailedError
     *
     * @psalm-return never-return
     */
    public static function fail(string $message = '') : void
    {
    }
    /**
     * Mark the test as incomplete.
     *
     * @throws IncompleteTestError
     *
     * @psalm-return never-return
     */
    public static function markTestIncomplete(string $message = '') : void
    {
    }
    /**
     * Mark the test as skipped.
     *
     * @throws SkippedTestError
     * @throws SyntheticSkippedError
     *
     * @psalm-return never-return
     */
    public static function markTestSkipped(string $message = '') : void
    {
    }
    /**
     * Return the current assertion count.
     */
    public static function getCount() : int
    {
    }
    /**
     * Reset the assertion counter.
     */
    public static function resetCount() : void
    {
    }
    private static function detectLocationHint(string $message) : ?array
    {
    }
    private static function isValidObjectAttributeName(string $attributeName) : bool
    {
    }
    private static function isValidClassAttributeName(string $attributeName) : bool
    {
    }
    /**
     * @codeCoverageIgnore
     */
    private static function createWarning(string $warning) : void
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
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class Exception extends \RuntimeException implements \PHPUnit\Exception
{
    /**
     * @var array
     */
    protected $serializableTrace;
    public function __construct($message = '', $code = 0, \Throwable $previous = null)
    {
    }
    public function __toString() : string
    {
    }
    public function __sleep() : array
    {
    }
    /**
     * Returns the serializable trace (without 'args').
     */
    public function getSerializableTrace() : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidParameterGroupException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Warning extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface SkippedTest extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class AssertionFailedError extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * Wrapper for getMessage() which is declared as final.
     */
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestSuiteError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class RiskyTestError extends \PHPUnit\Framework\AssertionFailedError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UnintentionallyCoveredCodeError extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ActualValueIsNotAnObjectException extends \PHPUnit\Framework\Exception
{
    public function __construct()
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
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
    public function __construct(string $message, int $code, string $file, int $line, array $trace)
    {
    }
    public function getSyntheticFile() : string
    {
    }
    public function getSyntheticLine() : int
    {
    }
    public function getSyntheticTrace() : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PHPTAssertionFailedError extends \PHPUnit\Framework\SyntheticError
{
    /**
     * @var string
     */
    private $diff;
    public function __construct(string $message, int $code, string $file, int $line, array $trace, string $diff)
    {
    }
    public function getDiff() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface IncompleteTest extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompleteTestError extends \PHPUnit\Framework\AssertionFailedError implements \PHPUnit\Framework\IncompleteTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SyntheticSkippedError extends \PHPUnit\Framework\SyntheticError implements \PHPUnit\Framework\SkippedTest
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class NoChildTestSuiteException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareBoolReturnTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotExistException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MissingCoversAnnotationException extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * Exception for expectations which failed their check.
 *
 * The exception contains the error message and optionally a
 * SebastianBergmann\Comparator\ComparisonFailure which is used to
 * generate diff output of the failed expectations.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExpectationFailedException extends \PHPUnit\Framework\AssertionFailedError
{
    /**
     * @var ComparisonFailure
     */
    protected $comparisonFailure;
    public function __construct(string $message, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null, \Exception $previous = null)
    {
    }
    public function getComparisonFailure() : ?\SebastianBergmann\Comparator\ComparisonFailure
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareParameterTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
class CodeCoverageException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class OutputError extends \PHPUnit\Framework\AssertionFailedError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoveredCodeNotExecutedException extends \PHPUnit\Framework\RiskyTestError
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotDeclareExactlyOneParameterException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName)
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ComparisonMethodDoesNotAcceptParameterTypeException extends \PHPUnit\Framework\Exception
{
    public function __construct(string $className, string $methodName, string $type)
    {
    }
    public function __toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidArgumentException extends \PHPUnit\Framework\Exception
{
    public static function create(int $argument, string $type) : self
    {
    }
    private function __construct(string $message = '', int $code = 0, \Exception $previous = null)
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidDataProviderException extends \PHPUnit\Framework\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvalidCoversTargetException extends \PHPUnit\Framework\CodeCoverageException
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExecutionOrderDependency
{
    /**
     * @var string
     */
    private $className = '';
    /**
     * @var string
     */
    private $methodName = '';
    /**
     * @var bool
     */
    private $useShallowClone = false;
    /**
     * @var bool
     */
    private $useDeepClone = false;
    public static function createFromDependsAnnotation(string $className, string $annotation) : self
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $dependencies
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function filterInvalid(array $dependencies) : array
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $existing
     * @psalm-param list<ExecutionOrderDependency> $additional
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function mergeUnique(array $existing, array $additional) : array
    {
    }
    /**
     * @psalm-param list<ExecutionOrderDependency> $left
     * @psalm-param list<ExecutionOrderDependency> $right
     *
     * @psalm-return list<ExecutionOrderDependency>
     */
    public static function diff(array $left, array $right) : array
    {
    }
    public function __construct(string $classOrCallableName, ?string $methodName = null, ?string $option = null)
    {
    }
    public function __toString() : string
    {
    }
    public function isValid() : bool
    {
    }
    public function useShallowClone() : bool
    {
    }
    public function useDeepClone() : bool
    {
    }
    public function targetIsClass() : bool
    {
    }
    public function getTarget() : string
    {
    }
    public function getTargetClassName() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestResult implements \Countable
{
    /**
     * @var array
     */
    private $passed = [];
    /**
     * @var array<string>
     */
    private $passedTestClasses = [];
    /**
     * @var bool
     */
    private $currentTestSuiteFailed = false;
    /**
     * @var TestFailure[]
     */
    private $errors = [];
    /**
     * @var TestFailure[]
     */
    private $failures = [];
    /**
     * @var TestFailure[]
     */
    private $warnings = [];
    /**
     * @var TestFailure[]
     */
    private $notImplemented = [];
    /**
     * @var TestFailure[]
     */
    private $risky = [];
    /**
     * @var TestFailure[]
     */
    private $skipped = [];
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @var TestListener[]
     */
    private $listeners = [];
    /**
     * @var int
     */
    private $runTests = 0;
    /**
     * @var float
     */
    private $time = 0;
    /**
     * @var TestSuite
     */
    private $topTestSuite;
    /**
     * Code Coverage information.
     *
     * @var CodeCoverage
     */
    private $codeCoverage;
    /**
     * @var bool
     */
    private $convertDeprecationsToExceptions = true;
    /**
     * @var bool
     */
    private $convertErrorsToExceptions = true;
    /**
     * @var bool
     */
    private $convertNoticesToExceptions = true;
    /**
     * @var bool
     */
    private $convertWarningsToExceptions = true;
    /**
     * @var bool
     */
    private $stop = false;
    /**
     * @var bool
     */
    private $stopOnError = false;
    /**
     * @var bool
     */
    private $stopOnFailure = false;
    /**
     * @var bool
     */
    private $stopOnWarning = false;
    /**
     * @var bool
     */
    private $beStrictAboutTestsThatDoNotTestAnything = true;
    /**
     * @var bool
     */
    private $beStrictAboutOutputDuringTests = false;
    /**
     * @var bool
     */
    private $beStrictAboutTodoAnnotatedTests = false;
    /**
     * @var bool
     */
    private $beStrictAboutResourceUsageDuringSmallTests = false;
    /**
     * @var bool
     */
    private $enforceTimeLimit = false;
    /**
     * @var bool
     */
    private $forceCoversAnnotation = false;
    /**
     * @var int
     */
    private $timeoutForSmallTests = 1;
    /**
     * @var int
     */
    private $timeoutForMediumTests = 10;
    /**
     * @var int
     */
    private $timeoutForLargeTests = 60;
    /**
     * @var bool
     */
    private $stopOnRisky = false;
    /**
     * @var bool
     */
    private $stopOnIncomplete = false;
    /**
     * @var bool
     */
    private $stopOnSkipped = false;
    /**
     * @var bool
     */
    private $lastTestFailed = false;
    /**
     * @var int
     */
    private $defaultTimeLimit = 0;
    /**
     * @var bool
     */
    private $stopOnDefect = false;
    /**
     * @var bool
     */
    private $registerMockObjectsFromTestArgumentsRecursively = false;
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Registers a TestListener.
     */
    public function addListener(\PHPUnit\Framework\TestListener $listener) : void
    {
    }
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Unregisters a TestListener.
     */
    public function removeListener(\PHPUnit\Framework\TestListener $listener) : void
    {
    }
    /**
     * @deprecated Use the `TestHook` interfaces instead
     *
     * @codeCoverageIgnore
     *
     * Flushes all flushable TestListeners.
     */
    public function flushListeners() : void
    {
    }
    /**
     * Adds an error to the list of errors.
     */
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    /**
     * Adds a warning to the list of warnings.
     * The passed in exception caused the warning.
     */
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    /**
     * Adds a failure to the list of failures.
     * The passed in exception caused the failure.
     */
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    /**
     * Informs the result that a test suite will be started.
     */
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * Informs the result that a test suite was completed.
     */
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    /**
     * Informs the result that a test will be started.
     */
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * Informs the result that a test was completed.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
    /**
     * Returns true if no risky test occurred.
     */
    public function allHarmless() : bool
    {
    }
    /**
     * Gets the number of risky tests.
     */
    public function riskyCount() : int
    {
    }
    /**
     * Returns true if no incomplete test occurred.
     */
    public function allCompletelyImplemented() : bool
    {
    }
    /**
     * Gets the number of incomplete tests.
     */
    public function notImplementedCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the risky tests.
     *
     * @return TestFailure[]
     */
    public function risky() : array
    {
    }
    /**
     * Returns an array of TestFailure objects for the incomplete tests.
     *
     * @return TestFailure[]
     */
    public function notImplemented() : array
    {
    }
    /**
     * Returns true if no test has been skipped.
     */
    public function noneSkipped() : bool
    {
    }
    /**
     * Gets the number of skipped tests.
     */
    public function skippedCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the skipped tests.
     *
     * @return TestFailure[]
     */
    public function skipped() : array
    {
    }
    /**
     * Gets the number of detected errors.
     */
    public function errorCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the errors.
     *
     * @return TestFailure[]
     */
    public function errors() : array
    {
    }
    /**
     * Gets the number of detected failures.
     */
    public function failureCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the failures.
     *
     * @return TestFailure[]
     */
    public function failures() : array
    {
    }
    /**
     * Gets the number of detected warnings.
     */
    public function warningCount() : int
    {
    }
    /**
     * Returns an array of TestFailure objects for the warnings.
     *
     * @return TestFailure[]
     */
    public function warnings() : array
    {
    }
    /**
     * Returns the names of the tests that have passed.
     */
    public function passed() : array
    {
    }
    /**
     * Returns the names of the TestSuites that have passed.
     *
     * This enables @depends-annotations for TestClassName::class
     */
    public function passedClasses() : array
    {
    }
    /**
     * Returns the (top) test suite.
     */
    public function topTestSuite() : \PHPUnit\Framework\TestSuite
    {
    }
    /**
     * Returns whether code coverage information should be collected.
     */
    public function getCollectCodeCoverageInformation() : bool
    {
    }
    /**
     * Runs a TestCase.
     *
     * @throws CodeCoverageException
     * @throws UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\Test $test) : void
    {
    }
    /**
     * Gets the number of run tests.
     */
    public function count() : int
    {
    }
    /**
     * Checks whether the test run should stop.
     */
    public function shouldStop() : bool
    {
    }
    /**
     * Marks that the test run should stop.
     */
    public function stop() : void
    {
    }
    /**
     * Returns the code coverage object.
     */
    public function getCodeCoverage() : ?\SebastianBergmann\CodeCoverage\CodeCoverage
    {
    }
    /**
     * Sets the code coverage object.
     */
    public function setCodeCoverage(\SebastianBergmann\CodeCoverage\CodeCoverage $codeCoverage) : void
    {
    }
    /**
     * Enables or disables the deprecation-to-exception conversion.
     */
    public function convertDeprecationsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the deprecation-to-exception conversion setting.
     */
    public function getConvertDeprecationsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the error-to-exception conversion.
     */
    public function convertErrorsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the error-to-exception conversion setting.
     */
    public function getConvertErrorsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the notice-to-exception conversion.
     */
    public function convertNoticesToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the notice-to-exception conversion setting.
     */
    public function getConvertNoticesToExceptions() : bool
    {
    }
    /**
     * Enables or disables the warning-to-exception conversion.
     */
    public function convertWarningsToExceptions(bool $flag) : void
    {
    }
    /**
     * Returns the warning-to-exception conversion setting.
     */
    public function getConvertWarningsToExceptions() : bool
    {
    }
    /**
     * Enables or disables the stopping when an error occurs.
     */
    public function stopOnError(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping when a failure occurs.
     */
    public function stopOnFailure(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping when a warning occurs.
     */
    public function stopOnWarning(bool $flag) : void
    {
    }
    public function beStrictAboutTestsThatDoNotTestAnything(bool $flag) : void
    {
    }
    public function isStrictAboutTestsThatDoNotTestAnything() : bool
    {
    }
    public function beStrictAboutOutputDuringTests(bool $flag) : void
    {
    }
    public function isStrictAboutOutputDuringTests() : bool
    {
    }
    public function beStrictAboutResourceUsageDuringSmallTests(bool $flag) : void
    {
    }
    public function isStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function enforceTimeLimit(bool $flag) : void
    {
    }
    public function enforcesTimeLimit() : bool
    {
    }
    public function beStrictAboutTodoAnnotatedTests(bool $flag) : void
    {
    }
    public function isStrictAboutTodoAnnotatedTests() : bool
    {
    }
    public function forceCoversAnnotation() : void
    {
    }
    public function forcesCoversAnnotation() : bool
    {
    }
    /**
     * Enables or disables the stopping for risky tests.
     */
    public function stopOnRisky(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for incomplete tests.
     */
    public function stopOnIncomplete(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for skipped tests.
     */
    public function stopOnSkipped(bool $flag) : void
    {
    }
    /**
     * Enables or disables the stopping for defects: error, failure, warning.
     */
    public function stopOnDefect(bool $flag) : void
    {
    }
    /**
     * Returns the time spent running the tests.
     */
    public function time() : float
    {
    }
    /**
     * Returns whether the entire test was successful or not.
     */
    public function wasSuccessful() : bool
    {
    }
    public function wasSuccessfulIgnoringWarnings() : bool
    {
    }
    public function wasSuccessfulAndNoTestIsRiskyOrSkippedOrIncomplete() : bool
    {
    }
    /**
     * Sets the default timeout for tests.
     */
    public function setDefaultTimeLimit(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for small tests.
     */
    public function setTimeoutForSmallTests(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for medium tests.
     */
    public function setTimeoutForMediumTests(int $timeout) : void
    {
    }
    /**
     * Sets the timeout for large tests.
     */
    public function setTimeoutForLargeTests(int $timeout) : void
    {
    }
    /**
     * Returns the set timeout for large tests.
     */
    public function getTimeoutForLargeTests() : int
    {
    }
    public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestBuilder
{
    public function build(\ReflectionClass $theClass, string $methodName) : \PHPUnit\Framework\Test
    {
    }
    /** @psalm-param class-string $className */
    private function buildTestWithoutData(string $className)
    {
    }
    /** @psalm-param class-string $className */
    private function buildDataProviderTestSuite(string $methodName, string $className, $data, bool $runTestInSeparateProcess, ?bool $preserveGlobalState, bool $runClassInSeparateProcess, array $backupSettings) : \PHPUnit\Framework\DataProviderTestSuite
    {
    }
    private function configureTestCase(\PHPUnit\Framework\TestCase $test, bool $runTestInSeparateProcess, ?bool $preserveGlobalState, bool $runClassInSeparateProcess, array $backupSettings) : void
    {
    }
    private function throwableToString(\Throwable $t) : string
    {
    }
}
namespace PHPUnit\Framework\Error;

/**
 * @internal
 */
class Error extends \PHPUnit\Framework\Exception
{
    public function __construct(string $message, int $code, string $file, int $line, \Exception $previous = null)
    {
    }
}
/**
 * @internal
 */
final class Warning extends \PHPUnit\Framework\Error\Error
{
}
/**
 * @internal
 */
final class Deprecated extends \PHPUnit\Framework\Error\Error
{
}
/**
 * @internal
 */
final class Notice extends \PHPUnit\Framework\Error\Error
{
}
namespace PHPUnit\Framework;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TestCase extends \PHPUnit\Framework\Assert implements \PHPUnit\Framework\Reorderable, \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\Test
{
    private const LOCALE_CATEGORIES = [\LC_ALL, \LC_COLLATE, \LC_CTYPE, \LC_MONETARY, \LC_NUMERIC, \LC_TIME];
    /**
     * @var ?bool
     */
    protected $backupGlobals;
    /**
     * @var string[]
     */
    protected $backupGlobalsExcludeList = [];
    /**
     * @var string[]
     *
     * @deprecated Use $backupGlobalsExcludeList instead
     */
    protected $backupGlobalsBlacklist = [];
    /**
     * @var bool
     */
    protected $backupStaticAttributes;
    /**
     * @var array<string,array<int,string>>
     */
    protected $backupStaticAttributesExcludeList = [];
    /**
     * @var array<string,array<int,string>>
     *
     * @deprecated Use $backupStaticAttributesExcludeList instead
     */
    protected $backupStaticAttributesBlacklist = [];
    /**
     * @var bool
     */
    protected $runTestInSeparateProcess;
    /**
     * @var bool
     */
    protected $preserveGlobalState = true;
    /**
     * @var list<ExecutionOrderDependency>
     */
    protected $providedTests = [];
    /**
     * @var bool
     */
    private $runClassInSeparateProcess;
    /**
     * @var bool
     */
    private $inIsolation = false;
    /**
     * @var array
     */
    private $data;
    /**
     * @var int|string
     */
    private $dataName;
    /**
     * @var null|string
     */
    private $expectedException;
    /**
     * @var null|string
     */
    private $expectedExceptionMessage;
    /**
     * @var null|string
     */
    private $expectedExceptionMessageRegExp;
    /**
     * @var null|int|string
     */
    private $expectedExceptionCode;
    /**
     * @var string
     */
    private $name = '';
    /**
     * @var list<ExecutionOrderDependency>
     */
    private $dependencies = [];
    /**
     * @var array
     */
    private $dependencyInput = [];
    /**
     * @var array<string,string>
     */
    private $iniSettings = [];
    /**
     * @var array
     */
    private $locale = [];
    /**
     * @var MockObject[]
     */
    private $mockObjects = [];
    /**
     * @var MockGenerator
     */
    private $mockObjectGenerator;
    /**
     * @var int
     */
    private $status = \PHPUnit\Runner\BaseTestRunner::STATUS_UNKNOWN;
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
     * @var bool
     */
    private $outputRetrievedForAssertion = false;
    /**
     * @var Snapshot
     */
    private $snapshot;
    /**
     * @var \Prophecy\Prophet
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
     * @var string[]
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
     * @var string[]
     */
    private $doubledTypes = [];
    /**
     * Returns a matcher that matches when the method is executed
     * zero or more times.
     */
    public static function any() : \PHPUnit\Framework\MockObject\Rule\AnyInvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is never executed.
     */
    public static function never() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at least N times.
     */
    public static function atLeast(int $requiredInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed at least once.
     */
    public static function atLeastOnce() : \PHPUnit\Framework\MockObject\Rule\InvokedAtLeastOnce
    {
    }
    /**
     * Returns a matcher that matches when the method is executed exactly once.
     */
    public static function once() : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * exactly $count times.
     */
    public static function exactly(int $count) : \PHPUnit\Framework\MockObject\Rule\InvokedCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at most N times.
     */
    public static function atMost(int $allowedInvocations) : \PHPUnit\Framework\MockObject\Rule\InvokedAtMostCount
    {
    }
    /**
     * Returns a matcher that matches when the method is executed
     * at the given index.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4297
     * @codeCoverageIgnore
     */
    public static function at(int $index) : \PHPUnit\Framework\MockObject\Rule\InvokedAtIndex
    {
    }
    public static function returnValue($value) : \PHPUnit\Framework\MockObject\Stub\ReturnStub
    {
    }
    public static function returnValueMap(array $valueMap) : \PHPUnit\Framework\MockObject\Stub\ReturnValueMap
    {
    }
    public static function returnArgument(int $argumentIndex) : \PHPUnit\Framework\MockObject\Stub\ReturnArgument
    {
    }
    public static function returnCallback($callback) : \PHPUnit\Framework\MockObject\Stub\ReturnCallback
    {
    }
    /**
     * Returns the current object.
     *
     * This method is useful when mocking a fluent interface.
     */
    public static function returnSelf() : \PHPUnit\Framework\MockObject\Stub\ReturnSelf
    {
    }
    public static function throwException(\Throwable $exception) : \PHPUnit\Framework\MockObject\Stub\Exception
    {
    }
    public static function onConsecutiveCalls(...$args) : \PHPUnit\Framework\MockObject\Stub\ConsecutiveCalls
    {
    }
    /**
     * @param int|string $dataName
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function __construct(?string $name = null, array $data = [], $dataName = '')
    {
    }
    /**
     * This method is called before the first test of this test class is run.
     */
    public static function setUpBeforeClass() : void
    {
    }
    /**
     * This method is called after the last test of this test class is run.
     */
    public static function tearDownAfterClass() : void
    {
    }
    /**
     * This method is called before each test.
     */
    protected function setUp() : void
    {
    }
    /**
     * This method is called after each test.
     */
    protected function tearDown() : void
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     * @throws Exception
     */
    public function toString() : string
    {
    }
    public function count() : int
    {
    }
    public function getActualOutputForAssertion() : string
    {
    }
    public function expectOutputRegex(string $expectedRegex) : void
    {
    }
    public function expectOutputString(string $expectedString) : void
    {
    }
    /**
     * @psalm-param class-string<\Throwable> $exception
     */
    public function expectException(string $exception) : void
    {
    }
    /**
     * @param int|string $code
     */
    public function expectExceptionCode($code) : void
    {
    }
    public function expectExceptionMessage(string $message) : void
    {
    }
    public function expectExceptionMessageMatches(string $regularExpression) : void
    {
    }
    /**
     * Sets up an expectation for an exception to be raised by the code under test.
     * Information for expected exception class, expected exception message, and
     * expected exception code are retrieved from a given Exception object.
     */
    public function expectExceptionObject(\Exception $exception) : void
    {
    }
    public function expectNotToPerformAssertions() : void
    {
    }
    public function expectDeprecation() : void
    {
    }
    public function expectDeprecationMessage(string $message) : void
    {
    }
    public function expectDeprecationMessageMatches(string $regularExpression) : void
    {
    }
    public function expectNotice() : void
    {
    }
    public function expectNoticeMessage(string $message) : void
    {
    }
    public function expectNoticeMessageMatches(string $regularExpression) : void
    {
    }
    public function expectWarning() : void
    {
    }
    public function expectWarningMessage(string $message) : void
    {
    }
    public function expectWarningMessageMatches(string $regularExpression) : void
    {
    }
    public function expectError() : void
    {
    }
    public function expectErrorMessage(string $message) : void
    {
    }
    public function expectErrorMessageMatches(string $regularExpression) : void
    {
    }
    public function getStatus() : int
    {
    }
    public function markAsRisky() : void
    {
    }
    public function getStatusMessage() : string
    {
    }
    public function hasFailed() : bool
    {
    }
    /**
     * Runs the test case and collects the results in a TestResult object.
     * If no TestResult object is passed a new one will be created.
     *
     * @throws CodeCoverageException
     * @throws UtilException
     * @throws \SebastianBergmann\CodeCoverage\InvalidArgumentException
     * @throws \SebastianBergmann\CodeCoverage\UnintentionallyCoveredCodeException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function run(\PHPUnit\Framework\TestResult $result = null) : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Returns a builder object to create mock objects using a fluent interface.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $className
     * @psalm-return MockBuilder<RealInstanceType>
     */
    public function getMockBuilder(string $className) : \PHPUnit\Framework\MockObject\MockBuilder
    {
    }
    public function registerComparator(\SebastianBergmann\Comparator\Comparator $comparator) : void
    {
    }
    /**
     * @return string[]
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function doubledTypes() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getGroups() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setGroups(array $groups) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getAnnotations() : array
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getName(bool $withDataSet = true) : string
    {
    }
    /**
     * Returns the size of the test.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getSize() : int
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasSize() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isSmall() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isMedium() : bool
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isLarge() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getActualOutput() : string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasOutput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function doesNotPerformAssertions() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function hasExpectationOnOutput() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedException() : ?string
    {
    }
    /**
     * @return null|int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionCode()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionMessage() : ?string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getExpectedExceptionMessageRegExp() : ?string
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRegisterMockObjectsFromTestArgumentsRecursively(bool $flag) : void
    {
    }
    /**
     * @throws Throwable
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function runBare() : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setName(string $name) : void
    {
    }
    /**
     * @param list<ExecutionOrderDependency> $dependencies
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setDependencies(array $dependencies) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setDependencyInput(array $dependencyInput) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBeStrictAboutChangesToGlobalState(?bool $beStrictAboutChangesToGlobalState) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBackupGlobals(?bool $backupGlobals) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setBackupStaticAttributes(?bool $backupStaticAttributes) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRunTestInSeparateProcess(bool $runTestInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setRunClassInSeparateProcess(bool $runClassInSeparateProcess) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setPreserveGlobalState(bool $preserveGlobalState) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setInIsolation(bool $inIsolation) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function isInIsolation() : bool
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getResult()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setResult($result) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setOutputCallback(callable $callback) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getTestResultObject() : ?\PHPUnit\Framework\TestResult
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function setTestResultObject(\PHPUnit\Framework\TestResult $result) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function registerMockObject(\PHPUnit\Framework\MockObject\MockObject $mockObject) : void
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function addToAssertionCount(int $count) : void
    {
    }
    /**
     * Returns the number of assertions performed by this test.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getNumAssertions() : int
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function usesDataProvider() : bool
    {
    }
    /**
     * @return int|string
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function dataName()
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getDataSetAsString(bool $includeData = true) : string
    {
    }
    /**
     * Gets the data set of a TestCase.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function getProvidedData() : array
    {
    }
    /**
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    public function addWarning(string $warning) : void
    {
    }
    public function sortId() : string
    {
    }
    /**
     * Returns the normalized test name as class::method.
     *
     * @return list<ExecutionOrderDependency>
     */
    public function provides() : array
    {
    }
    /**
     * Returns a list of normalized dependency names, class::method.
     *
     * This list can differ from the raw dependencies as the resolver has
     * no need for the [!][shallow]clone prefix that is filtered out
     * during normalization.
     *
     * @return list<ExecutionOrderDependency>
     */
    public function requires() : array
    {
    }
    /**
     * Override to run the test and assert its state.
     *
     * @throws AssertionFailedError
     * @throws Exception
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws Throwable
     */
    protected function runTest()
    {
    }
    /**
     * This method is a wrapper for the ini_set() function that automatically
     * resets the modified php.ini setting to its original value after the
     * test is run.
     *
     * @throws Exception
     */
    protected function iniSet(string $varName, string $newValue) : void
    {
    }
    /**
     * This method is a wrapper for the setlocale() function that automatically
     * resets the locale to its original value after the test is run.
     *
     * @throws Exception
     */
    protected function setLocale(...$args) : void
    {
    }
    /**
     * Makes configurable stub for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param    class-string<RealInstanceType> $originalClassName
     * @psalm-return   Stub&RealInstanceType
     */
    protected function createStub(string $originalClassName) : \PHPUnit\Framework\MockObject\Stub
    {
    }
    /**
     * Returns a mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createMock(string $originalClassName) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a configured mock object for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createConfiguredMock(string $originalClassName, array $configuration) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a partial mock object for the specified class.
     *
     * @param string[] $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createPartialMock(string $originalClassName, array $methods) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a test proxy for the specified class.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function createTestProxy(string $originalClassName, array $constructorArguments = []) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Mocks the specified class and returns the name of the mocked class.
     *
     * @param null|array $methods $methods
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return class-string<MockObject&RealInstanceType>
     */
    protected function getMockClass(string $originalClassName, $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = false, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = false) : string
    {
    }
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked. Concrete methods are not mocked by default.
     * To mock concrete methods, use the 7th parameter ($mockedMethods).
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object based on the given WSDL file.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType>|string $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    protected function getMockFromWsdl(string $wsdlFile, string $originalClassName = '', string $mockClassName = '', array $methods = [], bool $callOriginalConstructor = true, array $options = []) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @psalm-param trait-string $traitName
     */
    protected function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = [], bool $cloneArguments = false) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns an object for the specified trait.
     *
     * @psalm-param trait-string $traitName
     */
    protected function getObjectForTrait(string $traitName, array $arguments = [], string $traitClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true) : object
    {
    }
    /**
     * @throws \Prophecy\Exception\Doubler\ClassNotFoundException
     * @throws \Prophecy\Exception\Doubler\DoubleException
     * @throws \Prophecy\Exception\Doubler\InterfaceNotFoundException
     *
     * @psalm-param class-string|null $classOrInterface
     */
    protected function prophesize(?string $classOrInterface = null) : \Prophecy\Prophecy\ObjectProphecy
    {
    }
    /**
     * Creates a default TestResult object.
     *
     * @internal This method is not covered by the backward compatibility promise for PHPUnit
     */
    protected function createResult() : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between setUp() and test.
     */
    protected function assertPreConditions() : void
    {
    }
    /**
     * Performs assertions shared by all tests of a test case.
     *
     * This method is called between test and tearDown().
     */
    protected function assertPostConditions() : void
    {
    }
    /**
     * This method is called when a test method did not execute successfully.
     *
     * @throws Throwable
     */
    protected function onNotSuccessfulTest(\Throwable $t) : void
    {
    }
    protected function recordDoubledType(string $originalClassName) : void
    {
    }
    /**
     * @throws Throwable
     */
    private function verifyMockObjects() : void
    {
    }
    /**
     * @throws Warning
     * @throws SkippedTestError
     * @throws SyntheticSkippedError
     */
    private function checkRequirements() : void
    {
    }
    private function handleDependencies() : bool
    {
    }
    private function markSkippedForNotSpecifyingDependency() : void
    {
    }
    private function markSkippedForMissingDependency(\PHPUnit\Framework\ExecutionOrderDependency $dependency) : void
    {
    }
    private function markWarningForUncallableDependency(\PHPUnit\Framework\ExecutionOrderDependency $dependency) : void
    {
    }
    /**
     * Get the mock object generator, creating it if it doesn't exist.
     */
    private function getMockObjectGenerator() : \PHPUnit\Framework\MockObject\Generator
    {
    }
    private function startOutputBuffering() : void
    {
    }
    /**
     * @throws RiskyTestError
     */
    private function stopOutputBuffering() : void
    {
    }
    private function snapshotGlobalState() : void
    {
    }
    /**
     * @throws RiskyTestError
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function restoreGlobalState() : void
    {
    }
    private function createGlobalStateSnapshot(bool $backupGlobals) : \SebastianBergmann\GlobalState\Snapshot
    {
    }
    /**
     * @throws RiskyTestError
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function compareGlobalStateSnapshots(\SebastianBergmann\GlobalState\Snapshot $before, \SebastianBergmann\GlobalState\Snapshot $after) : void
    {
    }
    /**
     * @throws RiskyTestError
     */
    private function compareGlobalStateSnapshotPart(array $before, array $after, string $header) : void
    {
    }
    private function getProphet() : \Prophecy\Prophet
    {
    }
    /**
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     */
    private function shouldInvocationMockerBeReset(\PHPUnit\Framework\MockObject\MockObject $mock) : bool
    {
    }
    /**
     * @throws \SebastianBergmann\ObjectEnumerator\InvalidArgumentException
     * @throws \SebastianBergmann\ObjectReflector\InvalidArgumentException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function registerMockObjectsFromTestArguments(array $testArguments, array &$visited = []) : void
    {
    }
    private function setDoesNotPerformAssertionsFromAnnotation() : void
    {
    }
    private function unregisterCustomComparators() : void
    {
    }
    private function cleanupIniSettings() : void
    {
    }
    private function cleanupLocaleSettings() : void
    {
    }
    /**
     * @throws Exception
     */
    private function checkExceptionExpectations(\Throwable $throwable) : bool
    {
    }
    private function runInSeparateProcess() : bool
    {
    }
    private function isCallableTestMethod(string $dependency) : bool
    {
    }
    /**
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     */
    private function createMockObject(string $originalClassName) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompleteTestCase extends \PHPUnit\Framework\TestCase
{
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
     * @var string
     */
    private $message;
    public function __construct(string $className, string $methodName, string $message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * @throws Exception
     */
    protected function runTest() : void
    {
    }
}
namespace PHPUnit\Framework\Constraint;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Constraint implements \Countable, \PHPUnit\Framework\SelfDescribing
{
    /**
     * @var ?Exporter
     */
    private $exporter;
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    protected function exporter() : \SebastianBergmann\Exporter\Exporter
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * This method can be overridden to implement the evaluation algorithm.
     *
     * @param mixed $other value or object to evaluate
     * @codeCoverageIgnore
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Throws an exception for the given compared value and test description.
     *
     * @param mixed             $other             evaluated value or object
     * @param string            $description       Additional information about the test
     * @param ComparisonFailure $comparisonFailure
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-return never-return
     */
    protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : void
    {
    }
    /**
     * Return additional failure description where needed.
     *
     * The function can be overridden to provide additional failure
     * information like a diff
     *
     * @param mixed $other evaluated value or object
     */
    protected function additionalFailureDescription($other) : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * To provide additional failure information additionalFailureDescription
     * can be used.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    /**
     * Returns a custom string representation of the constraint object when it
     * appears in context of an $operator expression.
     *
     * The purpose of this method is to provide meaningful descriptive string
     * in context of operators such as LogicalNot. Native PHPUnit constraints
     * are supported out of the box by LogicalNot, but externally developed
     * ones had no way to provide correct strings in this context.
     *
     * The method shall return empty string, when it does not handle
     * customization by itself.
     *
     * @param Operator $operator the $operator of the expression
     * @param mixed    $role     role of $this constraint in the $operator expression
     */
    protected function toStringInContext(\PHPUnit\Framework\Constraint\Operator $operator, $role) : string
    {
    }
    /**
     * Returns the description of the failure when this constraint appears in
     * context of an $operator expression.
     *
     * The purpose of this method is to provide meaningful failue description
     * in context of operators such as LogicalNot. Native PHPUnit constraints
     * are supported out of the box by LogicalNot, but externally developed
     * ones had no way to provide correct messages in this context.
     *
     * The method shall return empty string, when it does not handle
     * customization by itself.
     *
     * @param Operator $operator the $operator of the expression
     * @param mixed    $role     role of $this constraint in the $operator expression
     * @param mixed    $other    evaluated value or object
     */
    protected function failureDescriptionInContext(\PHPUnit\Framework\Constraint\Operator $operator, $role, $other) : string
    {
    }
    /**
     * Reduces the sub-expression starting at $this by skipping degenerate
     * sub-expression and returns first descendant constraint that starts
     * a non-reducible sub-expression.
     *
     * Returns $this for terminal constraints and for operators that start
     * non-reducible sub-expression, or the nearest descendant of $this that
     * starts a non-reducible sub-expression.
     *
     * A constraint expression may be modelled as a tree with non-terminal
     * nodes (operators) and terminal nodes. For example:
     *
     *      LogicalOr           (operator, non-terminal)
     *      + LogicalAnd        (operator, non-terminal)
     *      | + IsType('int')   (terminal)
     *      | + GreaterThan(10) (terminal)
     *      + LogicalNot        (operator, non-terminal)
     *        + IsType('array') (terminal)
     *
     * A degenerate sub-expression is a part of the tree, that effectively does
     * not contribute to the evaluation of the expression it appears in. An example
     * of degenerate sub-expression is a BinaryOperator constructed with single
     * operand or nested BinaryOperators, each with single operand. An
     * expression involving a degenerate sub-expression is equivalent to a
     * reduced expression with the degenerate sub-expression removed, for example
     *
     *      LogicalAnd          (operator)
     *      + LogicalOr         (degenerate operator)
     *      | + LogicalAnd      (degenerate operator)
     *      |   + IsType('int') (terminal)
     *      + GreaterThan(10)   (terminal)
     *
     * is equivalent to
     *
     *      LogicalAnd          (operator)
     *      + IsType('int')     (terminal)
     *      + GreaterThan(10)   (terminal)
     *
     * because the subexpression
     *
     *      + LogicalOr
     *        + LogicalAnd
     *          + -
     *
     * is degenerate. Calling reduce() on the LogicalOr object above, as well
     * as on LogicalAnd, shall return the IsType('int') instance.
     *
     * Other specific reductions can be implemented, for example cascade of
     * LogicalNot operators
     *
     *      + LogicalNot
     *        + LogicalNot
     *          +LogicalNot
     *           + IsTrue
     *
     * can be reduced to
     *
     *      LogicalNot
     *      + IsTrue
     */
    protected function reduce() : self
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsAnything extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryExists extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsWritable extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class FileExists extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsReadable extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $className;
    public function __construct(string $className)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionCode extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var int|string
     */
    private $expectedCode;
    /**
     * @param int|string $expected
     */
    public function __construct($expected)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param Throwable $other
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionMessage extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $expectedMessage;
    public function __construct(string $expected)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param Throwable $other
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionMessageRegularExpression extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $expectedMessageRegExp;
    public function __construct(string $expected)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param \PHPUnit\Framework\Exception $other
     *
     * @throws Exception
     * @throws \PHPUnit\Framework\Exception
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsFalse extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsTrue extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsIdentical extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var float
     */
    private const EPSILON = 1.0E-10;
    /**
     * @var mixed
     */
    private $value;
    public function __construct($value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
class RegularExpression extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $pattern;
    public function __construct(string $pattern)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringMatchesFormatDescription extends \PHPUnit\Framework\Constraint\RegularExpression
{
    /**
     * @var string
     */
    private $string;
    public function __construct(string $string)
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    protected function failureDescription($other) : string
    {
    }
    protected function additionalFailureDescription($other) : string
    {
    }
    private function createPatternFromFormat(string $string) : string
    {
    }
    private function convertNewlines(string $text) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringContains extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $string;
    /**
     * @var bool
     */
    private $ignoreCase;
    public function __construct(string $string, bool $ignoreCase = false)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsJson extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringEndsWith extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $suffix;
    public function __construct(string $suffix)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class StringStartsWith extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $prefix;
    public function __construct(string $prefix)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class Callback extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var callable
     */
    private $callback;
    public function __construct(callable $callback)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $value. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class Operator extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns the name of this operator.
     */
    public abstract function operator() : string;
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public abstract function precedence() : int;
    /**
     * Returns the number of operands.
     */
    public abstract function arity() : int;
    /**
     * Validates $constraint argument.
     */
    protected function checkConstraint($constraint) : \PHPUnit\Framework\Constraint\Constraint
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with braces.
     */
    protected function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class BinaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    /**
     * @var Constraint[]
     */
    private $constraints = [];
    public static function fromConstraints(\PHPUnit\Framework\Constraint\Constraint ...$constraints) : self
    {
    }
    /**
     * @param mixed[] $constraints
     */
    public function setConstraints(array $constraints) : void
    {
    }
    /**
     * Returns the number of operands (constraints).
     */
    public final function arity() : int
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    /**
     * Returns the nested constraints.
     */
    protected final function constraints() : array
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with braces.
     */
    protected final function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
    /**
     * Reduces the sub-expression starting at $this by skipping degenerate
     * sub-expression and returns first descendant constraint that starts
     * a non-reducible sub-expression.
     *
     * See Constraint::reduce() for more.
     */
    protected function reduce() : \PHPUnit\Framework\Constraint\Constraint
    {
    }
    /**
     * Returns string representation of given operand in context of this operator.
     *
     * @param Constraint $constraint operand constraint
     * @param int        $position   position of $constraint in this expression
     */
    private function constraintToString(\PHPUnit\Framework\Constraint\Constraint $constraint, int $position) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalAnd extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalXor extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php.
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    public function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class UnaryOperator extends \PHPUnit\Framework\Constraint\Operator
{
    /**
     * @var Constraint
     */
    private $constraint;
    /**
     * @param Constraint|mixed $constraint
     */
    public function __construct($constraint)
    {
    }
    /**
     * Returns the number of operands (constraints).
     */
    public function arity() : int
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Counts the number of constraint elements.
     */
    public function count() : int
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    /**
     * Transforms string returned by the memeber constraint's toString() or
     * failureDescription() such that it reflects constraint's participation in
     * this expression.
     *
     * The method may be overwritten in a subclass to apply default
     * transformation in case the operand constraint does not provide its own
     * custom strings via toStringInContext() or failureDescriptionInContext().
     *
     * @param string $string the string to be transformed
     */
    protected function transformString(string $string) : string
    {
    }
    /**
     * Provides access to $this->constraint for subclasses.
     */
    protected final function constraint() : \PHPUnit\Framework\Constraint\Constraint
    {
    }
    /**
     * Returns true if the $constraint needs to be wrapped with parentheses.
     */
    protected function constraintNeedsParentheses(\PHPUnit\Framework\Constraint\Constraint $constraint) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalNot extends \PHPUnit\Framework\Constraint\UnaryOperator
{
    public static function negate(string $string) : string
    {
    }
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Applies additional transformation to strings returned by toString() or
     * failureDescription().
     */
    protected function transformString(string $string) : string
    {
    }
    /**
     * Reduces the sub-expression starting at $this by skipping degenerate
     * sub-expression and returns first descendant constraint that starts
     * a non-reducible sub-expression.
     *
     * See Constraint::reduce() for more.
     */
    protected function reduce() : \PHPUnit\Framework\Constraint\Constraint
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LogicalOr extends \PHPUnit\Framework\Constraint\BinaryOperator
{
    /**
     * Returns the name of this operator.
     */
    public function operator() : string
    {
    }
    /**
     * Returns this operator's precedence.
     *
     * @see https://www.php.net/manual/en/language.operators.precedence.php
     */
    public function precedence() : int
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    public function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsInfinite extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsFinite extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsNan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
class ClassHasAttribute extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $attributeName;
    public function __construct(string $attributeName)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
    protected function attributeName() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ClassHasStaticAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ObjectEquals extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var object
     */
    private $expected;
    /**
     * @var string
     */
    private $method;
    public function __construct(object $object, string $method = 'equals')
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws ActualValueIsNotAnObjectException
     * @throws ComparisonMethodDoesNotExistException
     * @throws ComparisonMethodDoesNotDeclareBoolReturnTypeException
     * @throws ComparisonMethodDoesNotDeclareExactlyOneParameterException
     * @throws ComparisonMethodDoesNotDeclareParameterTypeException
     * @throws ComparisonMethodDoesNotAcceptParameterTypeException
     */
    protected function matches($other) : bool
    {
    }
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ObjectHasAttribute extends \PHPUnit\Framework\Constraint\ClassHasAttribute
{
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsType extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    public const TYPE_ARRAY = 'array';
    /**
     * @var string
     */
    public const TYPE_BOOL = 'bool';
    /**
     * @var string
     */
    public const TYPE_FLOAT = 'float';
    /**
     * @var string
     */
    public const TYPE_INT = 'int';
    /**
     * @var string
     */
    public const TYPE_NULL = 'null';
    /**
     * @var string
     */
    public const TYPE_NUMERIC = 'numeric';
    /**
     * @var string
     */
    public const TYPE_OBJECT = 'object';
    /**
     * @var string
     */
    public const TYPE_RESOURCE = 'resource';
    /**
     * @var string
     */
    public const TYPE_CLOSED_RESOURCE = 'resource (closed)';
    /**
     * @var string
     */
    public const TYPE_STRING = 'string';
    /**
     * @var string
     */
    public const TYPE_SCALAR = 'scalar';
    /**
     * @var string
     */
    public const TYPE_CALLABLE = 'callable';
    /**
     * @var string
     */
    public const TYPE_ITERABLE = 'iterable';
    /**
     * @var array<string,bool>
     */
    private const KNOWN_TYPES = ['array' => true, 'boolean' => true, 'bool' => true, 'double' => true, 'float' => true, 'integer' => true, 'int' => true, 'null' => true, 'numeric' => true, 'object' => true, 'real' => true, 'resource' => true, 'resource (closed)' => true, 'string' => true, 'scalar' => true, 'callable' => true, 'iterable' => true];
    /**
     * @var string
     */
    private $type;
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(string $type)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsInstanceOf extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $className;
    public function __construct(string $className)
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    private function getType() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsNull extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class ArrayHasKey extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var int|string
     */
    private $key;
    /**
     * @param int|string $key
     */
    public function __construct($key)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
abstract class TraversableContains extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var mixed
     */
    private $value;
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    protected function failureDescription($other) : string
    {
    }
    protected function value()
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsIdentical extends \PHPUnit\Framework\Constraint\TraversableContains
{
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsOnly extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var Constraint
     */
    private $constraint;
    /**
     * @var string
     */
    private $type;
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(string $type, bool $isNativeType = true)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @param mixed|Traversable $other
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class TraversableContainsEqual extends \PHPUnit\Framework\Constraint\TraversableContains
{
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class JsonMatchesErrorMessageProvider
{
    /**
     * Translates JSON error to a human readable string.
     */
    public static function determineJsonError(string $error, string $prefix = '') : ?string
    {
    }
    /**
     * Translates a given type to a human readable message prefix.
     */
    public static function translateTypeToPrefix(string $type) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class JsonMatches extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $value;
    public function __construct(string $value)
    {
    }
    /**
     * Returns a string representation of the object.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * This method can be overridden to implement the evaluation algorithm.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Throws an exception for the given compared value and test description.
     *
     * @param mixed             $other             evaluated value or object
     * @param string            $description       Additional information about the test
     * @param ComparisonFailure $comparisonFailure
     *
     * @throws ExpectationFailedException
     * @throws \PHPUnit\Framework\Exception
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     *
     * @psalm-return never-return
     */
    protected function fail($other, $description, \SebastianBergmann\Comparator\ComparisonFailure $comparisonFailure = null) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualIgnoringCase extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var mixed
     */
    private $value;
    public function __construct($value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqual extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var mixed
     */
    private $value;
    /**
     * @var float
     */
    private $delta;
    /**
     * @var bool
     */
    private $canonicalize;
    /**
     * @var bool
     */
    private $ignoreCase;
    public function __construct($value, float $delta = 0.0, bool $canonicalize = false, bool $ignoreCase = false)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     *
     * @return bool
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualWithDelta extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var mixed
     */
    private $value;
    /**
     * @var float
     */
    private $delta;
    public function __construct($value, float $delta)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEqualCanonicalizing extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var mixed
     */
    private $value;
    public function __construct($value)
    {
    }
    /**
     * Evaluates the constraint for parameter $other.
     *
     * If $returnResult is set to false (the default), an exception is thrown
     * in case of a failure. null is returned otherwise.
     *
     * If $returnResult is true, the result of the evaluation is returned as
     * a boolean value instead: true in case of success, false in case of a
     * failure.
     *
     * @throws ExpectationFailedException
     */
    public function evaluate($other, string $description = '', bool $returnResult = false) : ?bool
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
class Count extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var int
     */
    private $expectedCount;
    public function __construct(int $expected)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @throws Exception
     */
    protected function matches($other) : bool
    {
    }
    /**
     * @throws Exception
     */
    protected function getCountOf($other) : ?int
    {
    }
    /**
     * Returns the total number of iterations from a generator.
     * This will fully exhaust the generator.
     */
    protected function getCountOfGenerator(\Generator $generator) : int
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class SameSize extends \PHPUnit\Framework\Constraint\Count
{
    public function __construct(iterable $expected)
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class GreaterThan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var float|int
     */
    private $value;
    /**
     * @param float|int $value
     */
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class IsEmpty extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * Returns a string representation of the constraint.
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
    /**
     * Returns the description of the failure.
     *
     * The beginning of failure messages is "Failed asserting that" in most
     * cases. This method should return the second part of that sentence.
     *
     * @param mixed $other evaluated value or object
     */
    protected function failureDescription($other) : string
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class LessThan extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var float|int
     */
    private $value;
    /**
     * @param float|int $value
     */
    public function __construct($value)
    {
    }
    /**
     * Returns a string representation of the constraint.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * Evaluates the constraint for parameter $other. Returns true if the
     * constraint is met, false otherwise.
     *
     * @param mixed $other value or object to evaluate
     */
    protected function matches($other) : bool
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteIterator implements \RecursiveIterator
{
    /**
     * @var int
     */
    private $position = 0;
    /**
     * @var Test[]
     */
    private $tests;
    public function __construct(\PHPUnit\Framework\TestSuite $testSuite)
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\Framework\Test
    {
    }
    public function next() : void
    {
    }
    /**
     * @throws NoChildTestSuiteException
     */
    public function getChildren() : self
    {
    }
    public function hasChildren() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class SkippedTestCase extends \PHPUnit\Framework\TestCase
{
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
     * @var string
     */
    private $message;
    public function __construct(string $className, string $methodName, string $message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     *
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function toString() : string
    {
    }
    /**
     * @throws Exception
     */
    protected function runTest() : void
    {
    }
}
/**
 * @deprecated The `TestListener` interface is deprecated
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
trait TestListenerDefaultImplementation
{
    public function addError(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addWarning(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\Warning $e, float $time) : void
    {
    }
    public function addFailure(\PHPUnit\Framework\Test $test, \PHPUnit\Framework\AssertionFailedError $e, float $time) : void
    {
    }
    public function addIncompleteTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addRiskyTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function addSkippedTest(\PHPUnit\Framework\Test $test, \Throwable $t, float $time) : void
    {
    }
    public function startTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function endTestSuite(\PHPUnit\Framework\TestSuite $suite) : void
    {
    }
    public function startTest(\PHPUnit\Framework\Test $test) : void
    {
    }
    public function endTest(\PHPUnit\Framework\Test $test, float $time) : void
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MockType
{
    /**
     * @psalm-return class-string
     */
    public function generate() : string;
}
namespace PHPUnit\Framework\MockObject\Rule;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodName
{
    /**
     * @var Constraint
     */
    private $constraint;
    /**
     * @param Constraint|string $constraint
     *
     * @throws InvalidArgumentException
     */
    public function __construct($constraint)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    public function matchesName(string $methodName) : bool
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Verifiable
{
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void;
}
namespace PHPUnit\Framework\MockObject\Rule;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class InvocationOrder implements \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\MockObject\Verifiable
{
    /**
     * @var BaseInvocation[]
     */
    private $invocations = [];
    public function getInvocationCount() : int
    {
    }
    public function hasBeenInvoked() : bool
    {
    }
    public final function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public abstract function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool;
    protected abstract function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtLeastCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @var int
     */
    private $requiredInvocations;
    /**
     * @param int $requiredInvocations
     */
    public function __construct($requiredInvocations)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @var int
     */
    private $expectedCount;
    /**
     * @param int $expectedCount
     */
    public function __construct($expectedCount)
    {
    }
    public function isNever() : bool
    {
    }
    public function toString() : string
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersRule extends \PHPUnit\Framework\SelfDescribing, \PHPUnit\Framework\MockObject\Verifiable
{
    /**
     * @throws ExpectationFailedException if the invocation violates the rule
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void;
    public function verify() : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class AnyParameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    public function toString() : string
    {
    }
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public function verify() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtMostCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @var int
     */
    private $allowedInvocations;
    /**
     * @param int $allowedInvocations
     */
    public function __construct($allowedInvocations)
    {
    }
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 *
 * @deprecated https://github.com/sebastianbergmann/phpunit/issues/4297
 * @codeCoverageIgnore
 */
final class InvokedAtIndex extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    /**
     * @var int
     */
    private $sequenceIndex;
    /**
     * @var int
     */
    private $currentIndex = -1;
    /**
     * @param int $sequenceIndex
     */
    public function __construct($sequenceIndex)
    {
    }
    public function toString() : string
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Parameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    /**
     * @var Constraint[]
     */
    private $parameters = [];
    /**
     * @var BaseInvocation
     */
    private $invocation;
    /**
     * @var bool|ExpectationFailedException
     */
    private $parameterVerificationResult;
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(array $parameters)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws Exception
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    /**
     * Checks if the invocation $invocation matches the current rules. If it
     * does the rule will get the invoked() method called which should check
     * if an expectation is met.
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function doVerify() : bool
    {
    }
    /**
     * @throws ExpectationFailedException
     */
    private function guardAgainstDuplicateEvaluationOfParameterConstraints() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveParameters implements \PHPUnit\Framework\MockObject\Rule\ParametersRule
{
    /**
     * @var array
     */
    private $parameterGroups = [];
    /**
     * @var array
     */
    private $invocations = [];
    /**
     * @throws \PHPUnit\Framework\Exception
     */
    public function __construct(array $parameterGroups)
    {
    }
    public function toString() : string
    {
    }
    /**
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function apply(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    /**
     * @throws \PHPUnit\Framework\ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
    /**
     * Verify a single invocation.
     *
     * @param int $callIndex
     *
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function verifyInvocation(\PHPUnit\Framework\MockObject\Invocation $invocation, $callIndex) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class AnyInvokedCount extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function toString() : string
    {
    }
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvokedAtLeastOnce extends \PHPUnit\Framework\MockObject\Rule\InvocationOrder
{
    public function toString() : string
    {
    }
    /**
     * Verifies that the current expectation is valid. If everything is OK the
     * code should just return, if not it must throw an exception.
     *
     * @throws ExpectationFailedException
     */
    public function verify() : void
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    protected function invokedDo(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Invocation implements \PHPUnit\Framework\SelfDescribing
{
    /**
     * @var string
     */
    private $className;
    /**
     * @var string
     */
    private $methodName;
    /**
     * @var array
     */
    private $parameters;
    /**
     * @var string
     */
    private $returnType;
    /**
     * @var bool
     */
    private $isReturnTypeNullable = false;
    /**
     * @var bool
     */
    private $proxiedCall;
    /**
     * @var object
     */
    private $object;
    public function __construct(string $className, string $methodName, array $parameters, string $returnType, object $object, bool $cloneObjects = false, bool $proxiedCall = false)
    {
    }
    public function getClassName() : string
    {
    }
    public function getMethodName() : string
    {
    }
    public function getParameters() : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return mixed Mocked return value
     */
    public function generateReturnValue()
    {
    }
    public function toString() : string
    {
    }
    public function getObject() : object
    {
    }
    private function cloneObject(object $original) : object
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethod
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var Type
     */
    private $returnType;
    public function __construct(string $name, \SebastianBergmann\Type\Type $returnType)
    {
    }
    public function getName() : string
    {
    }
    public function mayReturn($value) : bool
    {
    }
    public function getReturnTypeDeclaration() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Exception extends \Throwable
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IncompatibleReturnValueException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConfigurableMethodsAlreadyInitializedException extends \PHPUnit\Framework\Exception implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RuntimeException extends \RuntimeException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class BadMethodCallException extends \BadMethodCallException implements \PHPUnit\Framework\MockObject\Exception
{
}
/**
 * @method InvocationStubber method($constraint)
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface Stub
{
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler;
    public function __phpunit_hasMatchers() : bool;
    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration) : void;
}
namespace PHPUnit\Framework\MockObject\Stub;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Stub extends \PHPUnit\Framework\SelfDescribing
{
    /**
     * Fakes the processing of the invocation $invocation by returning a
     * specific value.
     *
     * @param Invocation $invocation The invocation which was mocked and matched by the current method and argument matchers
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnStub implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @var mixed
     */
    private $value;
    public function __construct($value)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnCallback implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    private $callback;
    public function __construct($callback)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnValueMap implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @var array
     */
    private $valueMap;
    public function __construct(array $valueMap)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnSelf implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @throws RuntimeException
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConsecutiveCalls implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @var array
     */
    private $stack;
    /**
     * @var mixed
     */
    private $value;
    public function __construct(array $stack)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    private $exception;
    public function __construct(\Throwable $exception)
    {
    }
    /**
     * @throws Throwable
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation) : void
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnArgument implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @var int
     */
    private $argumentIndex;
    public function __construct($argumentIndex)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ReturnReference implements \PHPUnit\Framework\MockObject\Stub\Stub
{
    /**
     * @var mixed
     */
    private $reference;
    public function __construct(&$reference)
    {
    }
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function toString() : string
    {
    }
}
namespace PHPUnit\Framework\MockObject\Builder;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Identity
{
    /**
     * Sets the identification of the expectation to $id.
     *
     * @note The identifier is unique per mock object.
     *
     * @param string $id unique identification of expectation
     */
    public function id($id);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Stub extends \PHPUnit\Framework\MockObject\Builder\Identity
{
    /**
     * Stubs the matching method with the stub object $stub. Any invocations of
     * the matched method will now be handled by the stub instead.
     */
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface ParametersMatch extends \PHPUnit\Framework\MockObject\Builder\Stub
{
    /**
     * Defines the expectation which must occur before the current is valid.
     *
     * @param string $id the identification of the expectation that should
     *                   occur before this one
     *
     * @return Stub
     */
    public function after($id);
    /**
     * Sets the parameters to match for, each parameter to this function will
     * be part of match. To perform specific matches or constraints create a
     * new PHPUnit\Framework\Constraint\Constraint and use it for the parameter.
     * If the parameter value is not a constraint it will use the
     * PHPUnit\Framework\Constraint\IsEqual for the value.
     *
     * Some examples:
     * <code>
     * // match first parameter with value 2
     * $b->with(2);
     * // match first parameter with value 'smock' and second identical to 42
     * $b->with('smock', new PHPUnit\Framework\Constraint\IsEqual(42));
     * </code>
     *
     * @return ParametersMatch
     */
    public function with(...$arguments);
    /**
     * Sets a rule which allows any kind of parameters.
     *
     * Some examples:
     * <code>
     * // match any number of parameters
     * $b->withAnyParameters();
     * </code>
     *
     * @return ParametersMatch
     */
    public function withAnyParameters();
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface InvocationStubber
{
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity;
    /** @return self */
    public function willReturn($value, ...$nextValues);
    /**
     * @param mixed $reference
     *
     * @return self
     */
    public function willReturnReference(&$reference);
    /**
     * @param array<int, array<int, mixed>> $valueMap
     *
     * @return self
     */
    public function willReturnMap(array $valueMap);
    /**
     * @param int $argumentIndex
     *
     * @return self
     */
    public function willReturnArgument($argumentIndex);
    /**
     * @param callable $callback
     *
     * @return self
     */
    public function willReturnCallback($callback);
    /** @return self */
    public function willReturnSelf();
    /**
     * @param mixed $values
     *
     * @return self
     */
    public function willReturnOnConsecutiveCalls(...$values);
    /** @return self */
    public function willThrowException(\Throwable $exception);
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface MethodNameMatch extends \PHPUnit\Framework\MockObject\Builder\ParametersMatch
{
    /**
     * Adds a new method name match and returns the parameter match object for
     * further matching possibilities.
     *
     * @param \PHPUnit\Framework\Constraint\Constraint $name Constraint for matching method, if a string is passed it will use the PHPUnit_Framework_Constraint_IsEqual
     *
     * @return ParametersMatch
     */
    public function method($name);
}
/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationMocker implements \PHPUnit\Framework\MockObject\Builder\InvocationStubber, \PHPUnit\Framework\MockObject\Builder\MethodNameMatch
{
    /**
     * @var InvocationHandler
     */
    private $invocationHandler;
    /**
     * @var Matcher
     */
    private $matcher;
    /**
     * @var ConfigurableMethod[]
     */
    private $configurableMethods;
    public function __construct(\PHPUnit\Framework\MockObject\InvocationHandler $handler, \PHPUnit\Framework\MockObject\Matcher $matcher, \PHPUnit\Framework\MockObject\ConfigurableMethod ...$configurableMethods)
    {
    }
    /**
     * @return $this
     */
    public function id($id) : self
    {
    }
    /**
     * @return $this
     */
    public function will(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : \PHPUnit\Framework\MockObject\Builder\Identity
    {
    }
    public function willReturn($value, ...$nextValues) : self
    {
    }
    public function willReturnReference(&$reference) : self
    {
    }
    public function willReturnMap(array $valueMap) : self
    {
    }
    public function willReturnArgument($argumentIndex) : self
    {
    }
    public function willReturnCallback($callback) : self
    {
    }
    public function willReturnSelf() : self
    {
    }
    public function willReturnOnConsecutiveCalls(...$values) : self
    {
    }
    public function willThrowException(\Throwable $exception) : self
    {
    }
    /**
     * @return $this
     */
    public function after($id) : self
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return $this
     */
    public function with(...$arguments) : self
    {
    }
    /**
     * @param array ...$arguments
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function withConsecutive(...$arguments) : self
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return $this
     */
    public function withAnyParameters() : self
    {
    }
    /**
     * @param Constraint|string $constraint
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function method($constraint) : self
    {
    }
    /**
     * Validate that a parameters rule can be defined, throw exceptions otherwise.
     *
     * @throws RuntimeException
     */
    private function canDefineParameters() : void
    {
    }
    private function getConfiguredMethod() : ?\PHPUnit\Framework\MockObject\ConfigurableMethod
    {
    }
    private function ensureTypeOfReturnValues(array $values) : void
    {
    }
}
namespace PHPUnit\Framework\MockObject;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockTrait implements \PHPUnit\Framework\MockObject\MockType
{
    /**
     * @var string
     */
    private $classCode;
    /**
     * @var class-string
     */
    private $mockName;
    /**
     * @psalm-param class-string $mockName
     */
    public function __construct(string $classCode, string $mockName)
    {
    }
    /**
     * @psalm-return class-string
     */
    public function generate() : string
    {
    }
    public function getClassCode() : string
    {
    }
}
/**
 * @method BuilderInvocationMocker method($constraint)
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
interface MockObject extends \PHPUnit\Framework\MockObject\Stub
{
    public function __phpunit_setOriginalObject($originalObject) : void;
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void;
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $invocationRule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker;
}
/**
 * @psalm-template MockedType
 *
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
final class MockBuilder
{
    /**
     * @var TestCase
     */
    private $testCase;
    /**
     * @var string
     */
    private $type;
    /**
     * @var null|string[]
     */
    private $methods = [];
    /**
     * @var bool
     */
    private $emptyMethodsArray = false;
    /**
     * @var string
     */
    private $mockClassName = '';
    /**
     * @var array
     */
    private $constructorArgs = [];
    /**
     * @var bool
     */
    private $originalConstructor = true;
    /**
     * @var bool
     */
    private $originalClone = true;
    /**
     * @var bool
     */
    private $autoload = true;
    /**
     * @var bool
     */
    private $cloneArguments = false;
    /**
     * @var bool
     */
    private $callOriginalMethods = false;
    /**
     * @var ?object
     */
    private $proxyTarget;
    /**
     * @var bool
     */
    private $allowMockingUnknownTypes = true;
    /**
     * @var bool
     */
    private $returnValueGeneration = true;
    /**
     * @var Generator
     */
    private $generator;
    /**
     * @param string|string[] $type
     *
     * @psalm-param class-string<MockedType>|string|string[] $type
     */
    public function __construct(\PHPUnit\Framework\TestCase $testCase, $type)
    {
    }
    /**
     * Creates a mock object using a fluent interface.
     *
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMock() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates a mock object for an abstract class using a fluent interface.
     *
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMockForAbstractClass() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Creates a mock object for a trait using a fluent interface.
     *
     * @throws \PHPUnit\Framework\Exception
     * @throws RuntimeException
     *
     * @psalm-return MockObject&MockedType
     */
    public function getMockForTrait() : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Specifies the subset of methods to mock. Default is to mock none of them.
     *
     * @deprecated https://github.com/sebastianbergmann/phpunit/pull/3687
     *
     * @return $this
     */
    public function setMethods(?array $methods = null) : self
    {
    }
    /**
     * Specifies the subset of methods to mock, requiring each to exist in the class.
     *
     * @param string[] $methods
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function onlyMethods(array $methods) : self
    {
    }
    /**
     * Specifies methods that don't exist in the class which you want to mock.
     *
     * @param string[] $methods
     *
     * @throws RuntimeException
     *
     * @return $this
     */
    public function addMethods(array $methods) : self
    {
    }
    /**
     * Specifies the subset of methods to not mock. Default is to mock all of them.
     */
    public function setMethodsExcept(array $methods = []) : self
    {
    }
    /**
     * Specifies the arguments for the constructor.
     *
     * @return $this
     */
    public function setConstructorArgs(array $args) : self
    {
    }
    /**
     * Specifies the name for the mock class.
     *
     * @return $this
     */
    public function setMockClassName(string $name) : self
    {
    }
    /**
     * Disables the invocation of the original constructor.
     *
     * @return $this
     */
    public function disableOriginalConstructor() : self
    {
    }
    /**
     * Enables the invocation of the original constructor.
     *
     * @return $this
     */
    public function enableOriginalConstructor() : self
    {
    }
    /**
     * Disables the invocation of the original clone constructor.
     *
     * @return $this
     */
    public function disableOriginalClone() : self
    {
    }
    /**
     * Enables the invocation of the original clone constructor.
     *
     * @return $this
     */
    public function enableOriginalClone() : self
    {
    }
    /**
     * Disables the use of class autoloading while creating the mock object.
     *
     * @return $this
     */
    public function disableAutoload() : self
    {
    }
    /**
     * Enables the use of class autoloading while creating the mock object.
     *
     * @return $this
     */
    public function enableAutoload() : self
    {
    }
    /**
     * Disables the cloning of arguments passed to mocked methods.
     *
     * @return $this
     */
    public function disableArgumentCloning() : self
    {
    }
    /**
     * Enables the cloning of arguments passed to mocked methods.
     *
     * @return $this
     */
    public function enableArgumentCloning() : self
    {
    }
    /**
     * Enables the invocation of the original methods.
     *
     * @return $this
     */
    public function enableProxyingToOriginalMethods() : self
    {
    }
    /**
     * Disables the invocation of the original methods.
     *
     * @return $this
     */
    public function disableProxyingToOriginalMethods() : self
    {
    }
    /**
     * Sets the proxy target.
     *
     * @return $this
     */
    public function setProxyTarget(object $object) : self
    {
    }
    /**
     * @return $this
     */
    public function allowMockingUnknownTypes() : self
    {
    }
    /**
     * @return $this
     */
    public function disallowMockingUnknownTypes() : self
    {
    }
    /**
     * @return $this
     */
    public function enableAutoReturnValueGeneration() : self
    {
    }
    /**
     * @return $this
     */
    public function disableAutoReturnValueGeneration() : self
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockMethodSet
{
    /**
     * @var MockMethod[]
     */
    private $methods = [];
    public function addMethods(\PHPUnit\Framework\MockObject\MockMethod ...$methods) : void
    {
    }
    /**
     * @return MockMethod[]
     */
    public function asArray() : array
    {
    }
    public function hasMethod(string $methodName) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class InvocationHandler
{
    /**
     * @var Matcher[]
     */
    private $matchers = [];
    /**
     * @var Matcher[]
     */
    private $matcherMap = [];
    /**
     * @var ConfigurableMethod[]
     */
    private $configurableMethods;
    /**
     * @var bool
     */
    private $returnValueGeneration;
    /**
     * @var Throwable
     */
    private $deferredError;
    public function __construct(array $configurableMethods, bool $returnValueGeneration)
    {
    }
    public function hasMatchers() : bool
    {
    }
    /**
     * Looks up the match builder with identification $id and returns it.
     *
     * @param string $id The identification of the match builder
     */
    public function lookupMatcher(string $id) : ?\PHPUnit\Framework\MockObject\Matcher
    {
    }
    /**
     * Registers a matcher with the identification $id. The matcher can later be
     * looked up using lookupMatcher() to figure out if it has been invoked.
     *
     * @param string  $id      The identification of the matcher
     * @param Matcher $matcher The builder which is being registered
     *
     * @throws RuntimeException
     */
    public function registerMatcher(string $id, \PHPUnit\Framework\MockObject\Matcher $matcher) : void
    {
    }
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $rule) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
    /**
     * @throws RuntimeException
     * @throws Exception
     */
    public function invoke(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * @throws Throwable
     */
    public function verify() : void
    {
    }
    private function addMatcher(\PHPUnit\Framework\MockObject\Matcher $matcher) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Matcher
{
    /**
     * @var InvocationOrder
     */
    private $invocationRule;
    /**
     * @var mixed
     */
    private $afterMatchBuilderId;
    /**
     * @var bool
     */
    private $afterMatchBuilderIsInvoked = false;
    /**
     * @var MethodName
     */
    private $methodNameRule;
    /**
     * @var ParametersRule
     */
    private $parametersRule;
    /**
     * @var Stub
     */
    private $stub;
    public function __construct(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $rule)
    {
    }
    public function hasMatchers() : bool
    {
    }
    public function hasMethodNameRule() : bool
    {
    }
    public function getMethodNameRule() : \PHPUnit\Framework\MockObject\Rule\MethodName
    {
    }
    public function setMethodNameRule(\PHPUnit\Framework\MockObject\Rule\MethodName $rule) : void
    {
    }
    public function hasParametersRule() : bool
    {
    }
    public function setParametersRule(\PHPUnit\Framework\MockObject\Rule\ParametersRule $rule) : void
    {
    }
    public function setStub(\PHPUnit\Framework\MockObject\Stub\Stub $stub) : void
    {
    }
    public function setAfterMatchBuilderId(string $id) : void
    {
    }
    /**
     * @throws Exception
     * @throws RuntimeException
     * @throws ExpectationFailedException
     */
    public function invoked(\PHPUnit\Framework\MockObject\Invocation $invocation)
    {
    }
    /**
     * @throws RuntimeException
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function matches(\PHPUnit\Framework\MockObject\Invocation $invocation) : bool
    {
    }
    /**
     * @throws RuntimeException
     * @throws ExpectationFailedException
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    public function verify() : void
    {
    }
    public function toString() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Generator
{
    /**
     * @var array
     */
    private const EXCLUDED_METHOD_NAMES = ['__CLASS__' => true, '__DIR__' => true, '__FILE__' => true, '__FUNCTION__' => true, '__LINE__' => true, '__METHOD__' => true, '__NAMESPACE__' => true, '__TRAIT__' => true, '__clone' => true, '__halt_compiler' => true];
    /**
     * @var array
     */
    private static $cache = [];
    /**
     * @var Template[]
     */
    private static $templates = [];
    /**
     * Returns a mock object for the specified class.
     *
     * @param null|array $methods
     *
     * @throws RuntimeException
     */
    public function getMock(string $type, $methods = [], array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = true, bool $callOriginalMethods = false, object $proxyTarget = null, bool $allowMockingUnknownTypes = true, bool $returnValueGeneration = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified abstract class with all abstract
     * methods of the class mocked.
     *
     * Concrete methods to mock can be specified with the $mockedMethods parameter.
     *
     * @psalm-template RealInstanceType of object
     * @psalm-param class-string<RealInstanceType> $originalClassName
     * @psalm-return MockObject&RealInstanceType
     *
     * @throws RuntimeException
     */
    public function getMockForAbstractClass(string $originalClassName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = null, bool $cloneArguments = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns a mock object for the specified trait with all abstract methods
     * of the trait mocked. Concrete methods to mock can be specified with the
     * `$mockedMethods` parameter.
     *
     * @psalm-param trait-string $traitName
     *
     * @throws RuntimeException
     */
    public function getMockForTrait(string $traitName, array $arguments = [], string $mockClassName = '', bool $callOriginalConstructor = true, bool $callOriginalClone = true, bool $callAutoload = true, array $mockedMethods = null, bool $cloneArguments = true) : \PHPUnit\Framework\MockObject\MockObject
    {
    }
    /**
     * Returns an object for the specified trait.
     *
     * @psalm-param trait-string $traitName
     *
     * @throws RuntimeException
     */
    public function getObjectForTrait(string $traitName, string $traitClassName = '', bool $callAutoload = true, bool $callOriginalConstructor = false, array $arguments = []) : object
    {
    }
    public function generate(string $type, array $methods = null, string $mockClassName = '', bool $callOriginalClone = true, bool $callAutoload = true, bool $cloneArguments = true, bool $callOriginalMethods = false) : \PHPUnit\Framework\MockObject\MockClass
    {
    }
    /**
     * @throws RuntimeException
     */
    public function generateClassFromWsdl(string $wsdlFile, string $className, array $methods = [], array $options = []) : string
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return string[]
     */
    public function getClassMethods(string $className) : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return MockMethod[]
     */
    public function mockClassMethods(string $className, bool $callOriginalMethods, bool $cloneArguments) : array
    {
    }
    /**
     * @throws RuntimeException
     *
     * @return MockMethod[]
     */
    public function mockInterfaceMethods(string $interfaceName, bool $cloneArguments) : array
    {
    }
    /**
     * @psalm-param class-string $interfaceName
     *
     * @return ReflectionMethod[]
     */
    private function userDefinedInterfaceMethods(string $interfaceName) : array
    {
    }
    private function getObject(\PHPUnit\Framework\MockObject\MockType $mockClass, $type = '', bool $callOriginalConstructor = false, bool $callAutoload = false, array $arguments = [], bool $callOriginalMethods = false, object $proxyTarget = null, bool $returnValueGeneration = true)
    {
    }
    /**
     * @throws RuntimeException
     */
    private function generateMock(string $type, ?array $explicitMethods, string $mockClassName, bool $callOriginalClone, bool $callAutoload, bool $cloneArguments, bool $callOriginalMethods) : \PHPUnit\Framework\MockObject\MockClass
    {
    }
    private function generateClassName(string $type, string $className, string $prefix) : array
    {
    }
    private function generateMockClassDeclaration(array $mockClassName, bool $isInterface, array $additionalInterfaces = []) : string
    {
    }
    private function canMockMethod(\ReflectionMethod $method) : bool
    {
    }
    private function isMethodNameExcluded(string $name) : bool
    {
    }
    private function getTemplate(string $template) : \SebastianBergmann\Template\Template
    {
    }
    /**
     * @see https://github.com/sebastianbergmann/phpunit/issues/4139#issuecomment-605409765
     */
    private function isConstructor(\ReflectionMethod $method) : bool
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait Method
{
    public function method()
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait Api
{
    /**
     * @var ConfigurableMethod[]
     */
    private static $__phpunit_configurableMethods;
    /**
     * @var object
     */
    private $__phpunit_originalObject;
    /**
     * @var bool
     */
    private $__phpunit_returnValueGeneration = true;
    /**
     * @var InvocationHandler
     */
    private $__phpunit_invocationMocker;
    /** @noinspection MagicMethodsValidityInspection */
    public static function __phpunit_initConfigurableMethods(\PHPUnit\Framework\MockObject\ConfigurableMethod ...$configurableMethods) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_setOriginalObject($originalObject) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_setReturnValueGeneration(bool $returnValueGeneration) : void
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_getInvocationHandler() : \PHPUnit\Framework\MockObject\InvocationHandler
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_hasMatchers() : bool
    {
    }
    /** @noinspection MagicMethodsValidityInspection */
    public function __phpunit_verify(bool $unsetInvocationMocker = true) : void
    {
    }
    public function expects(\PHPUnit\Framework\MockObject\Rule\InvocationOrder $matcher) : \PHPUnit\Framework\MockObject\Builder\InvocationMocker
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait UnmockedCloneMethod
{
    public function __clone()
    {
    }
}
/**
 * @internal This trait is not covered by the backward compatibility promise for PHPUnit
 */
trait MockedCloneMethod
{
    public function __clone()
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MethodNameConstraint extends \PHPUnit\Framework\Constraint\Constraint
{
    /**
     * @var string
     */
    private $methodName;
    public function __construct(string $methodName)
    {
    }
    public function toString() : string
    {
    }
    protected function matches($other) : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockClass implements \PHPUnit\Framework\MockObject\MockType
{
    /**
     * @var string
     */
    private $classCode;
    /**
     * @var class-string
     */
    private $mockName;
    /**
     * @var ConfigurableMethod[]
     */
    private $configurableMethods;
    /**
     * @psalm-param class-string $mockName
     */
    public function __construct(string $classCode, string $mockName, array $configurableMethods)
    {
    }
    /**
     * @psalm-return class-string
     */
    public function generate() : string
    {
    }
    public function getClassCode() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MockMethod
{
    /**
     * @var Template[]
     */
    private static $templates = [];
    /**
     * @var string
     */
    private $className;
    /**
     * @var string
     */
    private $methodName;
    /**
     * @var bool
     */
    private $cloneArguments;
    /**
     * @var string string
     */
    private $modifier;
    /**
     * @var string
     */
    private $argumentsForDeclaration;
    /**
     * @var string
     */
    private $argumentsForCall;
    /**
     * @var Type
     */
    private $returnType;
    /**
     * @var string
     */
    private $reference;
    /**
     * @var bool
     */
    private $callOriginalMethod;
    /**
     * @var bool
     */
    private $static;
    /**
     * @var ?string
     */
    private $deprecation;
    /**
     * @throws RuntimeException
     */
    public static function fromReflection(\ReflectionMethod $method, bool $callOriginalMethod, bool $cloneArguments) : self
    {
    }
    public static function fromName(string $fullClassName, string $methodName, bool $cloneArguments) : self
    {
    }
    public function __construct(string $className, string $methodName, bool $cloneArguments, string $modifier, string $argumentsForDeclaration, string $argumentsForCall, \SebastianBergmann\Type\Type $returnType, string $reference, bool $callOriginalMethod, bool $static, ?string $deprecation)
    {
    }
    public function getName() : string
    {
    }
    /**
     * @throws RuntimeException
     */
    public function generateCode() : string
    {
    }
    public function getReturnType() : \SebastianBergmann\Type\Type
    {
    }
    private function getTemplate(string $template) : \SebastianBergmann\Template\Template
    {
    }
    /**
     * Returns the parameters of a function or method.
     *
     * @throws RuntimeException
     */
    private static function getMethodParametersForDeclaration(\ReflectionMethod $method) : string
    {
    }
    /**
     * Returns the parameters of a function or method.
     *
     * @throws RuntimeException
     */
    private static function getMethodParametersForCall(\ReflectionMethod $method) : string
    {
    }
    /**
     * @throws RuntimeException
     */
    private static function exportDefaultValue(\ReflectionParameter $parameter) : string
    {
    }
    private static function unionTypeAsString(\ReflectionUnionType $union, string $self) : string
    {
    }
}
namespace PHPUnit\Framework;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class WarningTestCase extends \PHPUnit\Framework\TestCase
{
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
     * @var string
     */
    private $message;
    public function __construct(string $message = '')
    {
    }
    public function getMessage() : string
    {
    }
    /**
     * Returns a string representation of the test case.
     */
    public function toString() : string
    {
    }
    /**
     * @throws Exception
     *
     * @psalm-return never-return
     */
    protected function runTest() : void
    {
    }
}
/**
 * Wraps Exceptions thrown by code under test.
 *
 * Re-instantiates Exceptions thrown by user-space code to retain their original
 * class names, properties, and stack traces (but without arguments).
 *
 * Unlike PHPUnit\Framework_\Exception, the complete stack of previous Exceptions
 * is processed.
 *
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExceptionWrapper extends \PHPUnit\Framework\Exception
{
    /**
     * @var string
     */
    protected $className;
    /**
     * @var null|ExceptionWrapper
     */
    protected $previous;
    public function __construct(\Throwable $t)
    {
    }
    public function __toString() : string
    {
    }
    public function getClassName() : string
    {
    }
    public function getPreviousWrapped() : ?self
    {
    }
    public function setClassName(string $className) : void
    {
    }
    public function setOriginalException(\Throwable $t) : void
    {
    }
    public function getOriginalException() : ?\Throwable
    {
    }
    /**
     * Method to contain static originalException to exclude it from stacktrace to prevent the stacktrace contents,
     * which can be quite big, from being garbage-collected, thus blocking memory until shutdown.
     *
     * Approach works both for var_dump() and var_export() and print_r().
     */
    private function originalException(\Throwable $exceptionToStore = null) : ?\Throwable
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestFailure
{
    /**
     * @var null|Test
     */
    private $failedTest;
    /**
     * @var Throwable
     */
    private $thrownException;
    /**
     * @var string
     */
    private $testName;
    /**
     * Returns a description for an exception.
     */
    public static function exceptionToString(\Throwable $e) : string
    {
    }
    /**
     * Constructs a TestFailure with the given test and exception.
     */
    public function __construct(\PHPUnit\Framework\Test $failedTest, \Throwable $t)
    {
    }
    /**
     * Returns a short description of the failure.
     */
    public function toString() : string
    {
    }
    /**
     * Returns a description for the thrown exception.
     */
    public function getExceptionAsString() : string
    {
    }
    /**
     * Returns the name of the failing test (including data set, if any).
     */
    public function getTestName() : string
    {
    }
    /**
     * Returns the failing test.
     *
     * Note: The test object is not set when the test is executed in process
     * isolation.
     *
     * @see Exception
     */
    public function failedTest() : ?\PHPUnit\Framework\Test
    {
    }
    /**
     * Gets the thrown exception.
     */
    public function thrownException() : \Throwable
    {
    }
    /**
     * Returns the exception's message.
     */
    public function exceptionMessage() : string
    {
    }
    /**
     * Returns true if the thrown exception
     * is of type AssertionFailedError.
     */
    public function isFailure() : bool
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @no-named-arguments Parameter names are not covered by the backward compatibility promise for PHPUnit
 */
class Command
{
    /**
     * @var array<string,mixed>
     */
    protected $arguments = [];
    /**
     * @var array<string,mixed>
     */
    protected $longOptions = [];
    /**
     * @var bool
     */
    private $versionStringPrinted = false;
    /**
     * @psalm-var list<string>
     */
    private $warnings = [];
    /**
     * @throws Exception
     */
    public static function main(bool $exit = true) : int
    {
    }
    /**
     * @throws Exception
     */
    public function run(array $argv, bool $exit = true) : int
    {
    }
    /**
     * Create a TestRunner, override in subclasses.
     */
    protected function createRunner() : \PHPUnit\TextUI\TestRunner
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
     * @throws Exception
     */
    protected function handleArguments(array $argv) : void
    {
    }
    /**
     * Handles the loading of the PHPUnit\Runner\TestSuiteLoader implementation.
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    protected function handleLoader(string $loaderClass, string $loaderFile = '') : ?\PHPUnit\Runner\TestSuiteLoader
    {
    }
    /**
     * Handles the loading of the PHPUnit\Util\Printer implementation.
     *
     * @return null|Printer|string
     */
    protected function handlePrinter(string $printerClass, string $printerFile = '')
    {
    }
    /**
     * Loads a bootstrap file.
     */
    protected function handleBootstrap(string $filename) : void
    {
    }
    protected function handleVersionCheck() : void
    {
    }
    /**
     * Show the help message.
     */
    protected function showHelp() : void
    {
    }
    /**
     * Custom callback for test suite discovery.
     */
    protected function handleCustomTestSuite() : void
    {
    }
    private function printVersionString() : void
    {
    }
    private function exitWithErrorMessage(string $message) : void
    {
    }
    private function handleExtensions(string $directory) : void
    {
    }
    private function handleListGroups(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
    {
    }
    /**
     * @throws \PHPUnit\Framework\Exception
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     */
    private function handleListSuites(bool $exit) : int
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function handleListTests(\PHPUnit\Framework\TestSuite $suite, bool $exit) : int
    {
    }
    /**
     * @throws \SebastianBergmann\RecursionContext\InvalidArgumentException
     */
    private function handleListTestsXml(\PHPUnit\Framework\TestSuite $suite, string $target, bool $exit) : int
    {
    }
    private function generateConfiguration() : void
    {
    }
    private function migrateConfiguration(string $filename) : void
    {
    }
    private function handleCustomOptions(array $unrecognizedOptions) : void
    {
    }
    private function handleWarmCoverageCache(\PHPUnit\TextUI\XmlConfiguration\Configuration $configuration) : void
    {
    }
    private function configurationFileInDirectory(string $directory) : ?string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestRunner extends \PHPUnit\Runner\BaseTestRunner
{
    public const SUCCESS_EXIT = 0;
    public const FAILURE_EXIT = 1;
    public const EXCEPTION_EXIT = 2;
    /**
     * @var bool
     */
    private static $versionStringPrinted = false;
    /**
     * @var CodeCoverageFilter
     */
    private $codeCoverageFilter;
    /**
     * @var TestSuiteLoader
     */
    private $loader;
    /**
     * @var ResultPrinter
     */
    private $printer;
    /**
     * @var bool
     */
    private $messagePrinted = false;
    /**
     * @var Hook[]
     */
    private $extensions = [];
    /**
     * @var Timer
     */
    private $timer;
    public function __construct(\PHPUnit\Runner\TestSuiteLoader $loader = null, \SebastianBergmann\CodeCoverage\Filter $filter = null)
    {
    }
    /**
     * @throws \PHPUnit\Runner\Exception
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     * @throws Exception
     */
    public function run(\PHPUnit\Framework\TestSuite $suite, array $arguments = [], array $warnings = [], bool $exit = true) : \PHPUnit\Framework\TestResult
    {
    }
    /**
     * Returns the loader to be used.
     */
    public function getLoader() : \PHPUnit\Runner\TestSuiteLoader
    {
    }
    public function addExtension(\PHPUnit\Runner\Hook $extension) : void
    {
    }
    /**
     * Override to define how to handle a failed loading of
     * a test suite.
     */
    protected function runFailed(string $message) : void
    {
    }
    private function createTestResult() : \PHPUnit\Framework\TestResult
    {
    }
    private function write(string $buffer) : void
    {
    }
    /**
     * @throws Exception
     * @throws \PHPUnit\TextUI\XmlConfiguration\Exception
     */
    private function handleConfiguration(array &$arguments) : void
    {
    }
    private function processSuiteFilters(\PHPUnit\Framework\TestSuite $suite, array $arguments) : void
    {
    }
    private function writeMessage(string $type, string $message) : void
    {
    }
    private function createPrinter(string $class, array $arguments) : \PHPUnit\TextUI\ResultPrinter
    {
    }
    private function codeCoverageGenerationStart(string $format) : void
    {
    }
    private function codeCoverageGenerationSucceeded() : void
    {
    }
    private function codeCoverageGenerationFailed(\Exception $e) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Help
{
    private const LEFT_MARGIN = '  ';
    private const HELP_TEXT = ['Usage' => [['text' => 'phpunit [options] UnitTest.php'], ['text' => 'phpunit [options] <directory>']], 'Code Coverage Options' => [['arg' => '--coverage-clover <file>', 'desc' => 'Generate code coverage report in Clover XML format'], ['arg' => '--coverage-cobertura <file>', 'desc' => 'Generate code coverage report in Cobertura XML format'], ['arg' => '--coverage-crap4j <file>', 'desc' => 'Generate code coverage report in Crap4J XML format'], ['arg' => '--coverage-html <dir>', 'desc' => 'Generate code coverage report in HTML format'], ['arg' => '--coverage-php <file>', 'desc' => 'Export PHP_CodeCoverage object to file'], ['arg' => '--coverage-text <file>', 'desc' => 'Generate code coverage report in text format [default: standard output]'], ['arg' => '--coverage-xml <dir>', 'desc' => 'Generate code coverage report in PHPUnit XML format'], ['arg' => '--coverage-cache <dir>', 'desc' => 'Cache static analysis results'], ['arg' => '--warm-coverage-cache', 'desc' => 'Warm static analysis cache'], ['arg' => '--coverage-filter <dir>', 'desc' => 'Include <dir> in code coverage analysis'], ['arg' => '--path-coverage', 'desc' => 'Perform path coverage analysis'], ['arg' => '--disable-coverage-ignore', 'desc' => 'Disable annotations for ignoring code coverage'], ['arg' => '--no-coverage', 'desc' => 'Ignore code coverage configuration']], 'Logging Options' => [['arg' => '--log-junit <file>', 'desc' => 'Log test execution in JUnit XML format to file'], ['arg' => '--log-teamcity <file>', 'desc' => 'Log test execution in TeamCity format to file'], ['arg' => '--testdox-html <file>', 'desc' => 'Write agile documentation in HTML format to file'], ['arg' => '--testdox-text <file>', 'desc' => 'Write agile documentation in Text format to file'], ['arg' => '--testdox-xml <file>', 'desc' => 'Write agile documentation in XML format to file'], ['arg' => '--reverse-list', 'desc' => 'Print defects in reverse order'], ['arg' => '--no-logging', 'desc' => 'Ignore logging configuration']], 'Test Selection Options' => [['arg' => '--list-suites', 'desc' => 'List available test suites'], ['arg' => '--testsuite <name>', 'desc' => 'Filter which testsuite to run'], ['arg' => '--list-groups', 'desc' => 'List available test groups'], ['arg' => '--group <name>', 'desc' => 'Only runs tests from the specified group(s)'], ['arg' => '--exclude-group <name>', 'desc' => 'Exclude tests from the specified group(s)'], ['arg' => '--covers <name>', 'desc' => 'Only runs tests annotated with "@covers <name>"'], ['arg' => '--uses <name>', 'desc' => 'Only runs tests annotated with "@uses <name>"'], ['arg' => '--list-tests', 'desc' => 'List available tests'], ['arg' => '--list-tests-xml <file>', 'desc' => 'List available tests in XML format'], ['arg' => '--filter <pattern>', 'desc' => 'Filter which tests to run'], ['arg' => '--test-suffix <suffixes>', 'desc' => 'Only search for test in files with specified suffix(es). Default: Test.php,.phpt']], 'Test Execution Options' => [['arg' => '--dont-report-useless-tests', 'desc' => 'Do not report tests that do not test anything'], ['arg' => '--strict-coverage', 'desc' => 'Be strict about @covers annotation usage'], ['arg' => '--strict-global-state', 'desc' => 'Be strict about changes to global state'], ['arg' => '--disallow-test-output', 'desc' => 'Be strict about output during tests'], ['arg' => '--disallow-resource-usage', 'desc' => 'Be strict about resource usage during small tests'], ['arg' => '--enforce-time-limit', 'desc' => 'Enforce time limit based on test size'], ['arg' => '--default-time-limit <sec>', 'desc' => 'Timeout in seconds for tests without @small, @medium or @large'], ['arg' => '--disallow-todo-tests', 'desc' => 'Disallow @todo-annotated tests'], ['spacer' => ''], ['arg' => '--process-isolation', 'desc' => 'Run each test in a separate PHP process'], ['arg' => '--globals-backup', 'desc' => 'Backup and restore $GLOBALS for each test'], ['arg' => '--static-backup', 'desc' => 'Backup and restore static attributes for each test'], ['spacer' => ''], ['arg' => '--colors <flag>', 'desc' => 'Use colors in output ("never", "auto" or "always")'], ['arg' => '--columns <n>', 'desc' => 'Number of columns to use for progress output'], ['arg' => '--columns max', 'desc' => 'Use maximum number of columns for progress output'], ['arg' => '--stderr', 'desc' => 'Write to STDERR instead of STDOUT'], ['arg' => '--stop-on-defect', 'desc' => 'Stop execution upon first not-passed test'], ['arg' => '--stop-on-error', 'desc' => 'Stop execution upon first error'], ['arg' => '--stop-on-failure', 'desc' => 'Stop execution upon first error or failure'], ['arg' => '--stop-on-warning', 'desc' => 'Stop execution upon first warning'], ['arg' => '--stop-on-risky', 'desc' => 'Stop execution upon first risky test'], ['arg' => '--stop-on-skipped', 'desc' => 'Stop execution upon first skipped test'], ['arg' => '--stop-on-incomplete', 'desc' => 'Stop execution upon first incomplete test'], ['arg' => '--fail-on-incomplete', 'desc' => 'Treat incomplete tests as failures'], ['arg' => '--fail-on-risky', 'desc' => 'Treat risky tests as failures'], ['arg' => '--fail-on-skipped', 'desc' => 'Treat skipped tests as failures'], ['arg' => '--fail-on-warning', 'desc' => 'Treat tests with warnings as failures'], ['arg' => '-v|--verbose', 'desc' => 'Output more verbose information'], ['arg' => '--debug', 'desc' => 'Display debugging information'], ['spacer' => ''], ['arg' => '--repeat <times>', 'desc' => 'Runs the test(s) repeatedly'], ['arg' => '--teamcity', 'desc' => 'Report test execution progress in TeamCity format'], ['arg' => '--testdox', 'desc' => 'Report test execution progress in TestDox format'], ['arg' => '--testdox-group', 'desc' => 'Only include tests from the specified group(s)'], ['arg' => '--testdox-exclude-group', 'desc' => 'Exclude tests from the specified group(s)'], ['arg' => '--no-interaction', 'desc' => 'Disable TestDox progress animation'], ['arg' => '--printer <printer>', 'desc' => 'TestListener implementation to use'], ['spacer' => ''], ['arg' => '--order-by <order>', 'desc' => 'Run tests in order: default|defects|duration|no-depends|random|reverse|size'], ['arg' => '--random-order-seed <N>', 'desc' => 'Use a specific random seed <N> for random order'], ['arg' => '--cache-result', 'desc' => 'Write test results to cache file'], ['arg' => '--do-not-cache-result', 'desc' => 'Do not write test results to cache file']], 'Configuration Options' => [['arg' => '--prepend <file>', 'desc' => 'A PHP script that is included as early as possible'], ['arg' => '--bootstrap <file>', 'desc' => 'A PHP script that is included before the tests run'], ['arg' => '-c|--configuration <file>', 'desc' => 'Read configuration from XML file'], ['arg' => '--no-configuration', 'desc' => 'Ignore default configuration file (phpunit.xml)'], ['arg' => '--extensions <extensions>', 'desc' => 'A comma separated list of PHPUnit extensions to load'], ['arg' => '--no-extensions', 'desc' => 'Do not load PHPUnit extensions'], ['arg' => '--include-path <path(s)>', 'desc' => 'Prepend PHP\'s include_path with given path(s)'], ['arg' => '-d <key[=value]>', 'desc' => 'Sets a php.ini value'], ['arg' => '--cache-result-file <file>', 'desc' => 'Specify result cache path and filename'], ['arg' => '--generate-configuration', 'desc' => 'Generate configuration file with suggested settings'], ['arg' => '--migrate-configuration', 'desc' => 'Migrate configuration file to current format']], 'Miscellaneous Options' => [['arg' => '-h|--help', 'desc' => 'Prints this usage information'], ['arg' => '--version', 'desc' => 'Prints the version and exits'], ['arg' => '--atleast-version <min>', 'desc' => 'Checks that version is greater than min and exits'], ['arg' => '--check-version', 'desc' => 'Check whether PHPUnit is the latest version']]];
    /**
     * @var int Number of columns required to write the longest option name to the console
     */
    private $maxArgLength = 0;
    /**
     * @var int Number of columns left for the description field after padding and option
     */
    private $maxDescLength;
    /**
     * @var bool Use color highlights for sections, options and parameters
     */
    private $hasColor = false;
    public function __construct(?int $width = null, ?bool $withColor = null)
    {
    }
    /**
     * Write the help file to the CLI, adapting width and colors to the console.
     */
    public function writeToConsole() : void
    {
    }
    private function writePlaintext() : void
    {
    }
    private function writeWithColor() : void
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
interface Migration
{
    public function migrate(\DOMDocument $document) : void;
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveAttributesFromRootToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveCacheTokensAttribute implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
abstract class LogToReportMigration implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
    protected function migrateAttributes(\DOMElement $src, \DOMElement $dest, array $attributes) : void
    {
    }
    protected abstract function forType() : string;
    protected abstract function toReportFormat(\DOMElement $logNode) : \DOMElement;
    private function findLogNode(\DOMDocument $document) : ?\DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageCloverToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConvertLogTypes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IntroduceCoverageElement implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveWhitelistExcludesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveLogTypes implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class RemoveEmptyFilter implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
    /**
     * @throws MigrationException
     */
    private function ensureEmpty(\DOMElement $element) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageCrap4jToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoveragePhpToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class UpdateSchemaLocationTo93 implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveAttributesFromFilterWhitelistToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageXmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageTextToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class CoverageHtmlToReport extends \PHPUnit\TextUI\XmlConfiguration\LogToReportMigration
{
    protected function forType() : string
    {
    }
    protected function toReportFormat(\DOMElement $logNode) : \DOMElement
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MoveWhitelistDirectoriesToCoverage implements \PHPUnit\TextUI\XmlConfiguration\Migration
{
    /**
     * @throws MigrationException
     */
    public function migrate(\DOMDocument $document) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationBuilderException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationException extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class MigrationBuilder
{
    private const AVAILABLE_MIGRATIONS = ['8.5' => [\PHPUnit\TextUI\XmlConfiguration\RemoveLogTypes::class], '9.2' => [\PHPUnit\TextUI\XmlConfiguration\RemoveCacheTokensAttribute::class, \PHPUnit\TextUI\XmlConfiguration\IntroduceCoverageElement::class, \PHPUnit\TextUI\XmlConfiguration\MoveAttributesFromRootToCoverage::class, \PHPUnit\TextUI\XmlConfiguration\MoveAttributesFromFilterWhitelistToCoverage::class, \PHPUnit\TextUI\XmlConfiguration\MoveWhitelistDirectoriesToCoverage::class, \PHPUnit\TextUI\XmlConfiguration\MoveWhitelistExcludesToCoverage::class, \PHPUnit\TextUI\XmlConfiguration\RemoveEmptyFilter::class, \PHPUnit\TextUI\XmlConfiguration\CoverageCloverToReport::class, \PHPUnit\TextUI\XmlConfiguration\CoverageCrap4jToReport::class, \PHPUnit\TextUI\XmlConfiguration\CoverageHtmlToReport::class, \PHPUnit\TextUI\XmlConfiguration\CoveragePhpToReport::class, \PHPUnit\TextUI\XmlConfiguration\CoverageTextToReport::class, \PHPUnit\TextUI\XmlConfiguration\CoverageXmlToReport::class, \PHPUnit\TextUI\XmlConfiguration\ConvertLogTypes::class, \PHPUnit\TextUI\XmlConfiguration\UpdateSchemaLocationTo93::class]];
    /**
     * @throws MigrationBuilderException
     */
    public function build(string $fromVersion) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Migrator
{
    /**
     * @throws MigrationBuilderException
     * @throws MigrationException
     * @throws Exception
     * @throws XmlException
     */
    public function migrate(string $filename) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Directory[]
     */
    private $directories;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\DirectoryCollection $directories)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class FileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var File[]
     */
    private $files;
    /**
     * @param File[] $files
     */
    public static function fromArray(array $files) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\File ...$files)
    {
    }
    /**
     * @return File[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\FileCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class DirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var Directory[]
     */
    private $directories;
    /**
     * @param Directory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\Directory ...$directories)
    {
    }
    /**
     * @return Directory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\DirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Directory
{
    /**
     * @var string
     */
    private $path;
    public function __construct(string $path)
    {
    }
    public function path() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FileCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var File[]
     */
    private $files;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\FileCollection $files)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class File
{
    /**
     * @var string
     */
    private $path;
    public function __construct(string $path)
    {
    }
    public function path() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class ExtensionCollection implements \IteratorAggregate
{
    /**
     * @var Extension[]
     */
    private $extensions;
    /**
     * @param Extension[] $extensions
     */
    public static function fromArray(array $extensions) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\Extension ...$extensions)
    {
    }
    /**
     * @return Extension[]
     */
    public function asArray() : array
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Extension
{
    /**
     * @var string
     * @psalm-var class-string
     */
    private $className;
    /**
     * @var string
     */
    private $sourceFile;
    /**
     * @var array
     */
    private $arguments;
    /**
     * @psalm-param class-string $className
     */
    public function __construct(string $className, string $sourceFile, array $arguments)
    {
    }
    /**
     * @psalm-return class-string
     */
    public function className() : string
    {
    }
    public function hasSourceFile() : bool
    {
    }
    public function sourceFile() : string
    {
    }
    public function hasArguments() : bool
    {
    }
    public function arguments() : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class PHPUnit
{
    /**
     * @var bool
     */
    private $cacheResult;
    /**
     * @var ?string
     */
    private $cacheResultFile;
    /**
     * @var int|string
     */
    private $columns;
    /**
     * @var string
     */
    private $colors;
    /**
     * @var bool
     */
    private $stderr;
    /**
     * @var bool
     */
    private $noInteraction;
    /**
     * @var bool
     */
    private $verbose;
    /**
     * @var bool
     */
    private $reverseDefectList;
    /**
     * @var bool
     */
    private $convertDeprecationsToExceptions;
    /**
     * @var bool
     */
    private $convertErrorsToExceptions;
    /**
     * @var bool
     */
    private $convertNoticesToExceptions;
    /**
     * @var bool
     */
    private $convertWarningsToExceptions;
    /**
     * @var bool
     */
    private $forceCoversAnnotation;
    /**
     * @var ?string
     */
    private $bootstrap;
    /**
     * @var bool
     */
    private $processIsolation;
    /**
     * @var bool
     */
    private $failOnEmptyTestSuite;
    /**
     * @var bool
     */
    private $failOnIncomplete;
    /**
     * @var bool
     */
    private $failOnRisky;
    /**
     * @var bool
     */
    private $failOnSkipped;
    /**
     * @var bool
     */
    private $failOnWarning;
    /**
     * @var bool
     */
    private $stopOnDefect;
    /**
     * @var bool
     */
    private $stopOnError;
    /**
     * @var bool
     */
    private $stopOnFailure;
    /**
     * @var bool
     */
    private $stopOnWarning;
    /**
     * @var bool
     */
    private $stopOnIncomplete;
    /**
     * @var bool
     */
    private $stopOnRisky;
    /**
     * @var bool
     */
    private $stopOnSkipped;
    /**
     * @var ?string
     */
    private $extensionsDirectory;
    /**
     * @var ?string
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    private $testSuiteLoaderClass;
    /**
     * @var ?string
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    private $testSuiteLoaderFile;
    /**
     * @var ?string
     */
    private $printerClass;
    /**
     * @var ?string
     */
    private $printerFile;
    /**
     * @var bool
     */
    private $beStrictAboutChangesToGlobalState;
    /**
     * @var bool
     */
    private $beStrictAboutOutputDuringTests;
    /**
     * @var bool
     */
    private $beStrictAboutResourceUsageDuringSmallTests;
    /**
     * @var bool
     */
    private $beStrictAboutTestsThatDoNotTestAnything;
    /**
     * @var bool
     */
    private $beStrictAboutTodoAnnotatedTests;
    /**
     * @var bool
     */
    private $beStrictAboutCoversAnnotation;
    /**
     * @var bool
     */
    private $enforceTimeLimit;
    /**
     * @var int
     */
    private $defaultTimeLimit;
    /**
     * @var int
     */
    private $timeoutForSmallTests;
    /**
     * @var int
     */
    private $timeoutForMediumTests;
    /**
     * @var int
     */
    private $timeoutForLargeTests;
    /**
     * @var ?string
     */
    private $defaultTestSuite;
    /**
     * @var int
     */
    private $executionOrder;
    /**
     * @var bool
     */
    private $resolveDependencies;
    /**
     * @var bool
     */
    private $defectsFirst;
    /**
     * @var bool
     */
    private $backupGlobals;
    /**
     * @var bool
     */
    private $backupStaticAttributes;
    /**
     * @var bool
     */
    private $registerMockObjectsFromTestArgumentsRecursively;
    /**
     * @var bool
     */
    private $conflictBetweenPrinterClassAndTestdox;
    public function __construct(bool $cacheResult, ?string $cacheResultFile, $columns, string $colors, bool $stderr, bool $noInteraction, bool $verbose, bool $reverseDefectList, bool $convertDeprecationsToExceptions, bool $convertErrorsToExceptions, bool $convertNoticesToExceptions, bool $convertWarningsToExceptions, bool $forceCoversAnnotation, ?string $bootstrap, bool $processIsolation, bool $failOnEmptyTestSuite, bool $failOnIncomplete, bool $failOnRisky, bool $failOnSkipped, bool $failOnWarning, bool $stopOnDefect, bool $stopOnError, bool $stopOnFailure, bool $stopOnWarning, bool $stopOnIncomplete, bool $stopOnRisky, bool $stopOnSkipped, ?string $extensionsDirectory, ?string $testSuiteLoaderClass, ?string $testSuiteLoaderFile, ?string $printerClass, ?string $printerFile, bool $beStrictAboutChangesToGlobalState, bool $beStrictAboutOutputDuringTests, bool $beStrictAboutResourceUsageDuringSmallTests, bool $beStrictAboutTestsThatDoNotTestAnything, bool $beStrictAboutTodoAnnotatedTests, bool $beStrictAboutCoversAnnotation, bool $enforceTimeLimit, int $defaultTimeLimit, int $timeoutForSmallTests, int $timeoutForMediumTests, int $timeoutForLargeTests, ?string $defaultTestSuite, int $executionOrder, bool $resolveDependencies, bool $defectsFirst, bool $backupGlobals, bool $backupStaticAttributes, bool $registerMockObjectsFromTestArgumentsRecursively, bool $conflictBetweenPrinterClassAndTestdox)
    {
    }
    public function cacheResult() : bool
    {
    }
    /**
     * @psalm-assert-if-true !null $this->cacheResultFile
     */
    public function hasCacheResultFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheResultFile() : string
    {
    }
    public function columns()
    {
    }
    public function colors() : string
    {
    }
    public function stderr() : bool
    {
    }
    public function noInteraction() : bool
    {
    }
    public function verbose() : bool
    {
    }
    public function reverseDefectList() : bool
    {
    }
    public function convertDeprecationsToExceptions() : bool
    {
    }
    public function convertErrorsToExceptions() : bool
    {
    }
    public function convertNoticesToExceptions() : bool
    {
    }
    public function convertWarningsToExceptions() : bool
    {
    }
    public function forceCoversAnnotation() : bool
    {
    }
    /**
     * @psalm-assert-if-true !null $this->bootstrap
     */
    public function hasBootstrap() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function bootstrap() : string
    {
    }
    public function processIsolation() : bool
    {
    }
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function failOnIncomplete() : bool
    {
    }
    public function failOnRisky() : bool
    {
    }
    public function failOnSkipped() : bool
    {
    }
    public function failOnWarning() : bool
    {
    }
    public function stopOnDefect() : bool
    {
    }
    public function stopOnError() : bool
    {
    }
    public function stopOnFailure() : bool
    {
    }
    public function stopOnWarning() : bool
    {
    }
    public function stopOnIncomplete() : bool
    {
    }
    public function stopOnRisky() : bool
    {
    }
    public function stopOnSkipped() : bool
    {
    }
    /**
     * @psalm-assert-if-true !null $this->extensionsDirectory
     */
    public function hasExtensionsDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function extensionsDirectory() : string
    {
    }
    /**
     * @psalm-assert-if-true !null $this->testSuiteLoaderClass
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function hasTestSuiteLoaderClass() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function testSuiteLoaderClass() : string
    {
    }
    /**
     * @psalm-assert-if-true !null $this->testSuiteLoaderFile
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function hasTestSuiteLoaderFile() : bool
    {
    }
    /**
     * @throws Exception
     *
     * @deprecated see https://github.com/sebastianbergmann/phpunit/issues/4039
     */
    public function testSuiteLoaderFile() : string
    {
    }
    /**
     * @psalm-assert-if-true !null $this->printerClass
     */
    public function hasPrinterClass() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function printerClass() : string
    {
    }
    /**
     * @psalm-assert-if-true !null $this->printerFile
     */
    public function hasPrinterFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function printerFile() : string
    {
    }
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function beStrictAboutOutputDuringTests() : bool
    {
    }
    public function beStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function beStrictAboutTestsThatDoNotTestAnything() : bool
    {
    }
    public function beStrictAboutTodoAnnotatedTests() : bool
    {
    }
    public function beStrictAboutCoversAnnotation() : bool
    {
    }
    public function enforceTimeLimit() : bool
    {
    }
    public function defaultTimeLimit() : int
    {
    }
    public function timeoutForSmallTests() : int
    {
    }
    public function timeoutForMediumTests() : int
    {
    }
    public function timeoutForLargeTests() : int
    {
    }
    /**
     * @psalm-assert-if-true !null $this->defaultTestSuite
     */
    public function hasDefaultTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function defaultTestSuite() : string
    {
    }
    public function executionOrder() : int
    {
    }
    public function resolveDependencies() : bool
    {
    }
    public function defectsFirst() : bool
    {
    }
    public function backupGlobals() : bool
    {
    }
    public function backupStaticAttributes() : bool
    {
    }
    public function registerMockObjectsFromTestArgumentsRecursively() : bool
    {
    }
    public function conflictBetweenPrinterClassAndTestdox() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionHandler
{
    public function createHookInstance(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : \PHPUnit\Runner\Hook
    {
    }
    public function createTestListenerInstance(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : \PHPUnit\Framework\TestListener
    {
    }
    private function createInstance(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : object
    {
    }
    /**
     * @throws Exception
     */
    private function ensureClassExists(\PHPUnit\TextUI\XmlConfiguration\Extension $extension) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ExtensionCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Extension[]
     */
    private $extensions;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $extensions)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Extension
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Configuration
{
    /**
     * @var string
     */
    private $filename;
    /**
     * @var ValidationResult
     */
    private $validationResult;
    /**
     * @var ExtensionCollection
     */
    private $extensions;
    /**
     * @var CodeCoverage
     */
    private $codeCoverage;
    /**
     * @var Groups
     */
    private $groups;
    /**
     * @var Groups
     */
    private $testdoxGroups;
    /**
     * @var ExtensionCollection
     */
    private $listeners;
    /**
     * @var Logging
     */
    private $logging;
    /**
     * @var Php
     */
    private $php;
    /**
     * @var PHPUnit
     */
    private $phpunit;
    /**
     * @var TestSuiteCollection
     */
    private $testSuite;
    public function __construct(string $filename, \PHPUnit\Util\Xml\ValidationResult $validationResult, \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $extensions, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $codeCoverage, \PHPUnit\TextUI\XmlConfiguration\Groups $groups, \PHPUnit\TextUI\XmlConfiguration\Groups $testdoxGroups, \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection $listeners, \PHPUnit\TextUI\XmlConfiguration\Logging\Logging $logging, \PHPUnit\TextUI\XmlConfiguration\Php $php, \PHPUnit\TextUI\XmlConfiguration\PHPUnit $phpunit, \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $testSuite)
    {
    }
    public function filename() : string
    {
    }
    public function hasValidationErrors() : bool
    {
    }
    public function validationErrors() : string
    {
    }
    public function extensions() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    public function codeCoverage() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage
    {
    }
    public function groups() : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    public function testdoxGroups() : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    public function listeners() : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    public function logging() : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    public function php() : \PHPUnit\TextUI\XmlConfiguration\Php
    {
    }
    public function phpunit() : \PHPUnit\TextUI\XmlConfiguration\PHPUnit
    {
    }
    public function testSuite() : \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class VariableCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Variable[]
     */
    private $variables;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Variable
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class ConstantCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var Constant[]
     */
    private $constants;
    /**
     * @param Constant[] $constants
     */
    public static function fromArray(array $constants) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\Constant ...$constants)
    {
    }
    /**
     * @return Constant[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\ConstantCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class IniSetting
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $value;
    public function __construct(string $name, string $value)
    {
    }
    public function name() : string
    {
    }
    public function value() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Php
{
    /**
     * @var DirectoryCollection
     */
    private $includePaths;
    /**
     * @var IniSettingCollection
     */
    private $iniSettings;
    /**
     * @var ConstantCollection
     */
    private $constants;
    /**
     * @var VariableCollection
     */
    private $globalVariables;
    /**
     * @var VariableCollection
     */
    private $envVariables;
    /**
     * @var VariableCollection
     */
    private $postVariables;
    /**
     * @var VariableCollection
     */
    private $getVariables;
    /**
     * @var VariableCollection
     */
    private $cookieVariables;
    /**
     * @var VariableCollection
     */
    private $serverVariables;
    /**
     * @var VariableCollection
     */
    private $filesVariables;
    /**
     * @var VariableCollection
     */
    private $requestVariables;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\DirectoryCollection $includePaths, \PHPUnit\TextUI\XmlConfiguration\IniSettingCollection $iniSettings, \PHPUnit\TextUI\XmlConfiguration\ConstantCollection $constants, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $globalVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $envVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $postVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $getVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $cookieVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $serverVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $filesVariables, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $requestVariables)
    {
    }
    public function includePaths() : \PHPUnit\TextUI\XmlConfiguration\DirectoryCollection
    {
    }
    public function iniSettings() : \PHPUnit\TextUI\XmlConfiguration\IniSettingCollection
    {
    }
    public function constants() : \PHPUnit\TextUI\XmlConfiguration\ConstantCollection
    {
    }
    public function globalVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function envVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function postVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function getVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function cookieVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function serverVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function filesVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
    public function requestVariables() : \PHPUnit\TextUI\XmlConfiguration\VariableCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class VariableCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var Variable[]
     */
    private $variables;
    /**
     * @param Variable[] $variables
     */
    public static function fromArray(array $variables) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\Variable ...$variables)
    {
    }
    /**
     * @return Variable[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\VariableCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class IniSettingCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var IniSetting[]
     */
    private $iniSettings;
    /**
     * @param IniSetting[] $iniSettings
     */
    public static function fromArray(array $iniSettings) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\IniSetting ...$iniSettings)
    {
    }
    /**
     * @return IniSetting[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\IniSettingCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class ConstantCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Constant[]
     */
    private $constants;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\ConstantCollection $constants)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Constant
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class PhpHandler
{
    public function handle(\PHPUnit\TextUI\XmlConfiguration\Php $configuration) : void
    {
    }
    private function handleIncludePaths(\PHPUnit\TextUI\XmlConfiguration\DirectoryCollection $includePaths) : void
    {
    }
    private function handleIniSettings(\PHPUnit\TextUI\XmlConfiguration\IniSettingCollection $iniSettings) : void
    {
    }
    private function handleConstants(\PHPUnit\TextUI\XmlConfiguration\ConstantCollection $constants) : void
    {
    }
    private function handleGlobalVariables(\PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables) : void
    {
    }
    private function handleServerVariables(\PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables) : void
    {
    }
    private function handleVariables(string $target, \PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables) : void
    {
    }
    private function handleEnvVariables(\PHPUnit\TextUI\XmlConfiguration\VariableCollection $variables) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class IniSettingCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var IniSetting[]
     */
    private $iniSettings;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\IniSettingCollection $iniSettings)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\IniSetting
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Constant
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var mixed
     */
    private $value;
    public function __construct(string $name, $value)
    {
    }
    public function name() : string
    {
    }
    public function value()
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Variable
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var mixed
     */
    private $value;
    /**
     * @var bool
     */
    private $force;
    public function __construct(string $name, $value, bool $force)
    {
    }
    public function name() : string
    {
    }
    public function value()
    {
    }
    public function force() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Groups
{
    /**
     * @var GroupCollection
     */
    private $include;
    /**
     * @var GroupCollection
     */
    private $exclude;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\GroupCollection $include, \PHPUnit\TextUI\XmlConfiguration\GroupCollection $exclude)
    {
    }
    public function hasInclude() : bool
    {
    }
    public function include() : \PHPUnit\TextUI\XmlConfiguration\GroupCollection
    {
    }
    public function hasExclude() : bool
    {
    }
    public function exclude() : \PHPUnit\TextUI\XmlConfiguration\GroupCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class GroupCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Group[]
     */
    private $groups;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\GroupCollection $groups)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\Group
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Group
{
    /**
     * @var string
     */
    private $name;
    public function __construct(string $name)
    {
    }
    public function name() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class GroupCollection implements \IteratorAggregate
{
    /**
     * @var Group[]
     */
    private $groups;
    /**
     * @param Group[] $groups
     */
    public static function fromArray(array $groups) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\Group ...$groups)
    {
    }
    /**
     * @return Group[]
     */
    public function asArray() : array
    {
    }
    /**
     * @return string[]
     */
    public function asArrayOfStrings() : array
    {
    }
    public function isEmpty() : bool
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\GroupCollectionIterator
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Junit
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TeamCity
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging\TestDox;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Html
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Xml
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\Logging;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Logging
{
    /**
     * @var ?Junit
     */
    private $junit;
    /**
     * @var ?Text
     */
    private $text;
    /**
     * @var ?TeamCity
     */
    private $teamCity;
    /**
     * @var ?TestDoxHtml
     */
    private $testDoxHtml;
    /**
     * @var ?TestDoxText
     */
    private $testDoxText;
    /**
     * @var ?TestDoxXml
     */
    private $testDoxXml;
    public function __construct(?\PHPUnit\TextUI\XmlConfiguration\Logging\Junit $junit, ?\PHPUnit\TextUI\XmlConfiguration\Logging\Text $text, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity $teamCity, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html $testDoxHtml, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text $testDoxText, ?\PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Xml $testDoxXml)
    {
    }
    public function hasJunit() : bool
    {
    }
    public function junit() : \PHPUnit\TextUI\XmlConfiguration\Logging\Junit
    {
    }
    public function hasText() : bool
    {
    }
    public function text() : \PHPUnit\TextUI\XmlConfiguration\Logging\Text
    {
    }
    public function hasTeamCity() : bool
    {
    }
    public function teamCity() : \PHPUnit\TextUI\XmlConfiguration\Logging\TeamCity
    {
    }
    public function hasTestDoxHtml() : bool
    {
    }
    public function testDoxHtml() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Html
    {
    }
    public function hasTestDoxText() : bool
    {
    }
    public function testDoxText() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Text
    {
    }
    public function hasTestDoxXml() : bool
    {
    }
    public function testDoxXml() : \PHPUnit\TextUI\XmlConfiguration\Logging\TestDox\Xml
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Generator
{
    /**
     * @var string
     */
    private const TEMPLATE = <<<'EOT'
<?xml version="1.0" encoding="UTF-8"?>
<phpunit xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance"
         xsi:noNamespaceSchemaLocation="https://schema.phpunit.de/{phpunit_version}/phpunit.xsd"
         bootstrap="{bootstrap_script}"
         cacheResultFile="{cache_directory}/test-results"
         executionOrder="depends,defects"
         forceCoversAnnotation="true"
         beStrictAboutCoversAnnotation="true"
         beStrictAboutOutputDuringTests="true"
         beStrictAboutTodoAnnotatedTests="true"
         failOnRisky="true"
         failOnWarning="true"
         verbose="true">
    <testsuites>
        <testsuite name="default">
            <directory suffix="Test.php">{tests_directory}</directory>
        </testsuite>
    </testsuites>

    <coverage cacheDirectory="{cache_directory}/code-coverage"
              processUncoveredFiles="true">
        <include>
            <directory suffix=".php">{src_directory}</directory>
        </include>
    </coverage>
</phpunit>

EOT;
    public function generateDefaultConfiguration(string $phpunitVersion, string $bootstrapScript, string $testsDirectory, string $srcDirectory, string $cacheDirectory) : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestFile
{
    /**
     * @var string
     */
    private $path;
    /**
     * @var string
     */
    private $phpVersion;
    /**
     * @var VersionComparisonOperator
     */
    private $phpVersionOperator;
    public function __construct(string $path, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator)
    {
    }
    public function path() : string
    {
    }
    public function phpVersion() : string
    {
    }
    public function phpVersionOperator() : \PHPUnit\Util\VersionComparisonOperator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestDirectoryCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var TestDirectory[]
     */
    private $directories;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection $directories)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestDirectory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestSuite
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var TestDirectoryCollection
     */
    private $directories;
    /**
     * @var TestFileCollection
     */
    private $files;
    /**
     * @var FileCollection
     */
    private $exclude;
    public function __construct(string $name, \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection $directories, \PHPUnit\TextUI\XmlConfiguration\TestFileCollection $files, \PHPUnit\TextUI\XmlConfiguration\FileCollection $exclude)
    {
    }
    public function name() : string
    {
    }
    public function directories() : \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollection
    {
    }
    public function files() : \PHPUnit\TextUI\XmlConfiguration\TestFileCollection
    {
    }
    public function exclude() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestDirectory
{
    /**
     * @var string
     */
    private $path;
    /**
     * @var string
     */
    private $prefix;
    /**
     * @var string
     */
    private $suffix;
    /**
     * @var string
     */
    private $phpVersion;
    /**
     * @var VersionComparisonOperator
     */
    private $phpVersionOperator;
    public function __construct(string $path, string $prefix, string $suffix, string $phpVersion, \PHPUnit\Util\VersionComparisonOperator $phpVersionOperator)
    {
    }
    public function path() : string
    {
    }
    public function prefix() : string
    {
    }
    public function suffix() : string
    {
    }
    public function phpVersion() : string
    {
    }
    public function phpVersionOperator() : \PHPUnit\Util\VersionComparisonOperator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestDirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var TestDirectory[]
     */
    private $directories;
    /**
     * @param TestDirectory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\TestDirectory ...$directories)
    {
    }
    /**
     * @return TestDirectory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestDirectoryCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteMapper
{
    public function map(\PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $configuration, string $filter) : \PHPUnit\Framework\TestSuite
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestFileCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var TestFile[]
     */
    private $files;
    /**
     * @param TestFile[] $files
     */
    public static function fromArray(array $files) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\TestFile ...$files)
    {
    }
    /**
     * @return TestFile[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestFileCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestSuiteCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var TestSuite[]
     */
    private $testSuites;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection $testSuites)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestSuite
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestFileCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var TestFile[]
     */
    private $files;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\TestFileCollection $files)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\TestFile
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class TestSuiteCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var TestSuite[]
     */
    private $testSuites;
    /**
     * @param TestSuite[] $testSuites
     */
    public static function fromArray(array $testSuites) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\TestSuite ...$testSuites)
    {
    }
    /**
     * @return TestSuite[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollectionIterator
    {
    }
    public function isEmpty() : bool
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class DirectoryCollectionIterator implements \Countable, \Iterator
{
    /**
     * @var Directory[]
     */
    private $directories;
    /**
     * @var int
     */
    private $position;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $directories)
    {
    }
    public function count() : int
    {
    }
    public function rewind() : void
    {
    }
    public function valid() : bool
    {
    }
    public function key() : int
    {
    }
    public function current() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\Directory
    {
    }
    public function next() : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class DirectoryCollection implements \Countable, \IteratorAggregate
{
    /**
     * @var Directory[]
     */
    private $directories;
    /**
     * @param Directory[] $directories
     */
    public static function fromArray(array $directories) : self
    {
    }
    private function __construct(\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\Directory ...$directories)
    {
    }
    /**
     * @return Directory[]
     */
    public function asArray() : array
    {
    }
    public function count() : int
    {
    }
    public function getIterator() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollectionIterator
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Directory
{
    /**
     * @var string
     */
    private $path;
    /**
     * @var string
     */
    private $prefix;
    /**
     * @var string
     */
    private $suffix;
    /**
     * @var string
     */
    private $group;
    public function __construct(string $path, string $prefix, string $suffix, string $group)
    {
    }
    public function path() : string
    {
    }
    public function prefix() : string
    {
    }
    public function suffix() : string
    {
    }
    public function group() : string
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class FilterMapper
{
    public function map(\SebastianBergmann\CodeCoverage\Filter $filter, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage $configuration) : void
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class CodeCoverage
{
    /**
     * @var ?Directory
     */
    private $cacheDirectory;
    /**
     * @var DirectoryCollection
     */
    private $directories;
    /**
     * @var FileCollection
     */
    private $files;
    /**
     * @var DirectoryCollection
     */
    private $excludeDirectories;
    /**
     * @var FileCollection
     */
    private $excludeFiles;
    /**
     * @var bool
     */
    private $pathCoverage;
    /**
     * @var bool
     */
    private $includeUncoveredFiles;
    /**
     * @var bool
     */
    private $processUncoveredFiles;
    /**
     * @var bool
     */
    private $ignoreDeprecatedCodeUnits;
    /**
     * @var bool
     */
    private $disableCodeCoverageIgnore;
    /**
     * @var ?Clover
     */
    private $clover;
    /**
     * @var ?Cobertura
     */
    private $cobertura;
    /**
     * @var ?Crap4j
     */
    private $crap4j;
    /**
     * @var ?Html
     */
    private $html;
    /**
     * @var ?Php
     */
    private $php;
    /**
     * @var ?Text
     */
    private $text;
    /**
     * @var ?Xml
     */
    private $xml;
    public function __construct(?\PHPUnit\TextUI\XmlConfiguration\Directory $cacheDirectory, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $directories, \PHPUnit\TextUI\XmlConfiguration\FileCollection $files, \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection $excludeDirectories, \PHPUnit\TextUI\XmlConfiguration\FileCollection $excludeFiles, bool $pathCoverage, bool $includeUncoveredFiles, bool $processUncoveredFiles, bool $ignoreDeprecatedCodeUnits, bool $disableCodeCoverageIgnore, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover $clover, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura $cobertura, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j $crap4j, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html $html, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php $php, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text $text, ?\PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml $xml)
    {
    }
    /**
     * @psalm-assert-if-true !null $this->cacheDirectory
     */
    public function hasCacheDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheDirectory() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
    public function hasNonEmptyListOfFilesToBeIncludedInCodeCoverageReport() : bool
    {
    }
    public function directories() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection
    {
    }
    public function files() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
    public function excludeDirectories() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection
    {
    }
    public function excludeFiles() : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
    public function pathCoverage() : bool
    {
    }
    public function includeUncoveredFiles() : bool
    {
    }
    public function ignoreDeprecatedCodeUnits() : bool
    {
    }
    public function disableCodeCoverageIgnore() : bool
    {
    }
    public function processUncoveredFiles() : bool
    {
    }
    /**
     * @psalm-assert-if-true !null $this->clover
     */
    public function hasClover() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function clover() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Clover
    {
    }
    /**
     * @psalm-assert-if-true !null $this->cobertura
     */
    public function hasCobertura() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cobertura() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Cobertura
    {
    }
    /**
     * @psalm-assert-if-true !null $this->crap4j
     */
    public function hasCrap4j() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function crap4j() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Crap4j
    {
    }
    /**
     * @psalm-assert-if-true !null $this->html
     */
    public function hasHtml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function html() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Html
    {
    }
    /**
     * @psalm-assert-if-true !null $this->php
     */
    public function hasPhp() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function php() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Php
    {
    }
    /**
     * @psalm-assert-if-true !null $this->text
     */
    public function hasText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function text() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Text
    {
    }
    /**
     * @psalm-assert-if-true !null $this->xml
     */
    public function hasXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function xml() : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report\Xml
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Report;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Html
{
    /**
     * @var Directory
     */
    private $target;
    /**
     * @var int
     */
    private $lowUpperBound;
    /**
     * @var int
     */
    private $highLowerBound;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\Directory $target, int $lowUpperBound, int $highLowerBound)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
    public function lowUpperBound() : int
    {
    }
    public function highLowerBound() : int
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Crap4j
{
    /**
     * @var File
     */
    private $target;
    /**
     * @var int
     */
    private $threshold;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target, int $threshold)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
    public function threshold() : int
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Php
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Cobertura
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Clover
{
    /**
     * @var File
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Xml
{
    /**
     * @var Directory
     */
    private $target;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\Directory $target)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\Directory
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Text
{
    /**
     * @var File
     */
    private $target;
    /**
     * @var bool
     */
    private $showUncoveredFiles;
    /**
     * @var bool
     */
    private $showOnlySummary;
    public function __construct(\PHPUnit\TextUI\XmlConfiguration\File $target, bool $showUncoveredFiles, bool $showOnlySummary)
    {
    }
    public function target() : \PHPUnit\TextUI\XmlConfiguration\File
    {
    }
    public function showUncoveredFiles() : bool
    {
    }
    public function showOnlySummary() : bool
    {
    }
}
namespace PHPUnit\TextUI\XmlConfiguration;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Loader
{
    /**
     * @throws Exception
     */
    public function load(string $filename) : \PHPUnit\TextUI\XmlConfiguration\Configuration
    {
    }
    public function logging(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    public function legacyLogging(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Logging\Logging
    {
    }
    private function extensions(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    private function getElementConfigurationParameters(string $filename, \DOMElement $element) : \PHPUnit\TextUI\XmlConfiguration\Extension
    {
    }
    private function toAbsolutePath(string $filename, string $path, bool $useIncludePath = false) : string
    {
    }
    private function getConfigurationArguments(string $filename, \DOMNodeList $nodes) : array
    {
    }
    private function codeCoverage(string $filename, \DOMXPath $xpath, \DOMDocument $document) : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage
    {
    }
    /**
     * @deprecated
     */
    private function legacyCodeCoverage(string $filename, \DOMXPath $xpath, \DOMDocument $document) : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\CodeCoverage
    {
    }
    /**
     * If $value is 'false' or 'true', this returns the value that $value represents.
     * Otherwise, returns $default, which may be a string in rare cases.
     *
     * @see \PHPUnit\TextUI\XmlConfigurationTest::testPHPConfigurationIsReadCorrectly
     *
     * @param bool|string $default
     *
     * @return bool|string
     */
    private function getBoolean(string $value, $default)
    {
    }
    private function readFilterDirectories(string $filename, \DOMXPath $xpath, string $query) : \PHPUnit\TextUI\XmlConfiguration\CodeCoverage\Filter\DirectoryCollection
    {
    }
    private function readFilterFiles(string $filename, \DOMXPath $xpath, string $query) : \PHPUnit\TextUI\XmlConfiguration\FileCollection
    {
    }
    private function groups(\DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    private function testdoxGroups(\DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    private function parseGroupConfiguration(\DOMXPath $xpath, string $root) : \PHPUnit\TextUI\XmlConfiguration\Groups
    {
    }
    private function listeners(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\ExtensionCollection
    {
    }
    private function getBooleanAttribute(\DOMElement $element, string $attribute, bool $default) : bool
    {
    }
    private function getIntegerAttribute(\DOMElement $element, string $attribute, int $default) : int
    {
    }
    private function getStringAttribute(\DOMElement $element, string $attribute) : ?string
    {
    }
    private function getInteger(string $value, int $default) : int
    {
    }
    private function php(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\Php
    {
    }
    private function phpunit(string $filename, \DOMDocument $document) : \PHPUnit\TextUI\XmlConfiguration\PHPUnit
    {
    }
    private function getColors(\DOMDocument $document) : string
    {
    }
    /**
     * @return int|string
     */
    private function getColumns(\DOMDocument $document)
    {
    }
    private function testSuite(string $filename, \DOMXPath $xpath) : \PHPUnit\TextUI\XmlConfiguration\TestSuiteCollection
    {
    }
    /**
     * @return DOMElement[]
     */
    private function getTestSuiteElements(\DOMXPath $xpath) : array
    {
    }
    private function element(\DOMXPath $xpath, string $element) : ?\DOMElement
    {
    }
}
namespace PHPUnit\TextUI;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}
namespace PHPUnit\TextUI\CliArguments;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Builder
{
    private const LONG_OPTIONS = ['atleast-version=', 'prepend=', 'bootstrap=', 'cache-result', 'do-not-cache-result', 'cache-result-file=', 'check-version', 'colors==', 'columns=', 'configuration=', 'coverage-cache=', 'warm-coverage-cache', 'coverage-filter=', 'coverage-clover=', 'coverage-cobertura=', 'coverage-crap4j=', 'coverage-html=', 'coverage-php=', 'coverage-text==', 'coverage-xml=', 'path-coverage', 'debug', 'disallow-test-output', 'disallow-resource-usage', 'disallow-todo-tests', 'default-time-limit=', 'enforce-time-limit', 'exclude-group=', 'extensions=', 'filter=', 'generate-configuration', 'globals-backup', 'group=', 'covers=', 'uses=', 'help', 'resolve-dependencies', 'ignore-dependencies', 'include-path=', 'list-groups', 'list-suites', 'list-tests', 'list-tests-xml=', 'loader=', 'log-junit=', 'log-teamcity=', 'migrate-configuration', 'no-configuration', 'no-coverage', 'no-logging', 'no-interaction', 'no-extensions', 'order-by=', 'printer=', 'process-isolation', 'repeat=', 'dont-report-useless-tests', 'random-order', 'random-order-seed=', 'reverse-order', 'reverse-list', 'static-backup', 'stderr', 'stop-on-defect', 'stop-on-error', 'stop-on-failure', 'stop-on-warning', 'stop-on-incomplete', 'stop-on-risky', 'stop-on-skipped', 'fail-on-empty-test-suite', 'fail-on-incomplete', 'fail-on-risky', 'fail-on-skipped', 'fail-on-warning', 'strict-coverage', 'disable-coverage-ignore', 'strict-global-state', 'teamcity', 'testdox', 'testdox-group=', 'testdox-exclude-group=', 'testdox-html=', 'testdox-text=', 'testdox-xml=', 'test-suffix=', 'testsuite=', 'verbose', 'version', 'whitelist=', 'dump-xdebug-filter='];
    private const SHORT_OPTIONS = 'd:c:hv';
    public function fromParameters(array $parameters, array $additionalLongOptions) : \PHPUnit\TextUI\CliArguments\Configuration
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 * @psalm-immutable
 */
final class Configuration
{
    /**
     * @var ?string
     */
    private $argument;
    /**
     * @var ?string
     */
    private $atLeastVersion;
    /**
     * @var ?bool
     */
    private $backupGlobals;
    /**
     * @var ?bool
     */
    private $backupStaticAttributes;
    /**
     * @var ?bool
     */
    private $beStrictAboutChangesToGlobalState;
    /**
     * @var ?bool
     */
    private $beStrictAboutResourceUsageDuringSmallTests;
    /**
     * @var ?string
     */
    private $bootstrap;
    /**
     * @var ?bool
     */
    private $cacheResult;
    /**
     * @var ?string
     */
    private $cacheResultFile;
    /**
     * @var ?bool
     */
    private $checkVersion;
    /**
     * @var ?string
     */
    private $colors;
    /**
     * @var null|int|string
     */
    private $columns;
    /**
     * @var ?string
     */
    private $configuration;
    /**
     * @var null|string[]
     */
    private $coverageFilter;
    /**
     * @var ?string
     */
    private $coverageClover;
    /**
     * @var ?string
     */
    private $coverageCobertura;
    /**
     * @var ?string
     */
    private $coverageCrap4J;
    /**
     * @var ?string
     */
    private $coverageHtml;
    /**
     * @var ?string
     */
    private $coveragePhp;
    /**
     * @var ?string
     */
    private $coverageText;
    /**
     * @var ?bool
     */
    private $coverageTextShowUncoveredFiles;
    /**
     * @var ?bool
     */
    private $coverageTextShowOnlySummary;
    /**
     * @var ?string
     */
    private $coverageXml;
    /**
     * @var ?bool
     */
    private $pathCoverage;
    /**
     * @var ?string
     */
    private $coverageCacheDirectory;
    /**
     * @var ?bool
     */
    private $warmCoverageCache;
    /**
     * @var ?bool
     */
    private $debug;
    /**
     * @var ?int
     */
    private $defaultTimeLimit;
    /**
     * @var ?bool
     */
    private $disableCodeCoverageIgnore;
    /**
     * @var ?bool
     */
    private $disallowTestOutput;
    /**
     * @var ?bool
     */
    private $disallowTodoAnnotatedTests;
    /**
     * @var ?bool
     */
    private $enforceTimeLimit;
    /**
     * @var null|string[]
     */
    private $excludeGroups;
    /**
     * @var ?int
     */
    private $executionOrder;
    /**
     * @var ?int
     */
    private $executionOrderDefects;
    /**
     * @var null|Extension[]
     */
    private $extensions;
    /**
     * @var null|string[]
     */
    private $unavailableExtensions;
    /**
     * @var ?bool
     */
    private $failOnEmptyTestSuite;
    /**
     * @var ?bool
     */
    private $failOnIncomplete;
    /**
     * @var ?bool
     */
    private $failOnRisky;
    /**
     * @var ?bool
     */
    private $failOnSkipped;
    /**
     * @var ?bool
     */
    private $failOnWarning;
    /**
     * @var ?string
     */
    private $filter;
    /**
     * @var ?bool
     */
    private $generateConfiguration;
    /**
     * @var ?bool
     */
    private $migrateConfiguration;
    /**
     * @var null|string[]
     */
    private $groups;
    /**
     * @var null|string[]
     */
    private $testsCovering;
    /**
     * @var null|string[]
     */
    private $testsUsing;
    /**
     * @var ?bool
     */
    private $help;
    /**
     * @var ?string
     */
    private $includePath;
    /**
     * @var null|string[]
     */
    private $iniSettings;
    /**
     * @var ?string
     */
    private $junitLogfile;
    /**
     * @var ?bool
     */
    private $listGroups;
    /**
     * @var ?bool
     */
    private $listSuites;
    /**
     * @var ?bool
     */
    private $listTests;
    /**
     * @var ?string
     */
    private $listTestsXml;
    /**
     * @var ?string
     */
    private $loader;
    /**
     * @var ?bool
     */
    private $noCoverage;
    /**
     * @var ?bool
     */
    private $noExtensions;
    /**
     * @var ?bool
     */
    private $noInteraction;
    /**
     * @var ?bool
     */
    private $noLogging;
    /**
     * @var ?string
     */
    private $printer;
    /**
     * @var ?bool
     */
    private $processIsolation;
    /**
     * @var ?int
     */
    private $randomOrderSeed;
    /**
     * @var ?int
     */
    private $repeat;
    /**
     * @var ?bool
     */
    private $reportUselessTests;
    /**
     * @var ?bool
     */
    private $resolveDependencies;
    /**
     * @var ?bool
     */
    private $reverseList;
    /**
     * @var ?bool
     */
    private $stderr;
    /**
     * @var ?bool
     */
    private $strictCoverage;
    /**
     * @var ?bool
     */
    private $stopOnDefect;
    /**
     * @var ?bool
     */
    private $stopOnError;
    /**
     * @var ?bool
     */
    private $stopOnFailure;
    /**
     * @var ?bool
     */
    private $stopOnIncomplete;
    /**
     * @var ?bool
     */
    private $stopOnRisky;
    /**
     * @var ?bool
     */
    private $stopOnSkipped;
    /**
     * @var ?bool
     */
    private $stopOnWarning;
    /**
     * @var ?string
     */
    private $teamcityLogfile;
    /**
     * @var null|string[]
     */
    private $testdoxExcludeGroups;
    /**
     * @var null|string[]
     */
    private $testdoxGroups;
    /**
     * @var ?string
     */
    private $testdoxHtmlFile;
    /**
     * @var ?string
     */
    private $testdoxTextFile;
    /**
     * @var ?string
     */
    private $testdoxXmlFile;
    /**
     * @var null|string[]
     */
    private $testSuffixes;
    /**
     * @var ?string
     */
    private $testSuite;
    /**
     * @var string[]
     */
    private $unrecognizedOptions;
    /**
     * @var ?string
     */
    private $unrecognizedOrderBy;
    /**
     * @var ?bool
     */
    private $useDefaultConfiguration;
    /**
     * @var ?bool
     */
    private $verbose;
    /**
     * @var ?bool
     */
    private $version;
    /**
     * @var ?string
     */
    private $xdebugFilterFile;
    /**
     * @param null|int|string $columns
     */
    public function __construct(?string $argument, ?string $atLeastVersion, ?bool $backupGlobals, ?bool $backupStaticAttributes, ?bool $beStrictAboutChangesToGlobalState, ?bool $beStrictAboutResourceUsageDuringSmallTests, ?string $bootstrap, ?bool $cacheResult, ?string $cacheResultFile, ?bool $checkVersion, ?string $colors, $columns, ?string $configuration, ?string $coverageClover, ?string $coverageCobertura, ?string $coverageCrap4J, ?string $coverageHtml, ?string $coveragePhp, ?string $coverageText, ?bool $coverageTextShowUncoveredFiles, ?bool $coverageTextShowOnlySummary, ?string $coverageXml, ?bool $pathCoverage, ?string $coverageCacheDirectory, ?bool $warmCoverageCache, ?bool $debug, ?int $defaultTimeLimit, ?bool $disableCodeCoverageIgnore, ?bool $disallowTestOutput, ?bool $disallowTodoAnnotatedTests, ?bool $enforceTimeLimit, ?array $excludeGroups, ?int $executionOrder, ?int $executionOrderDefects, ?array $extensions, ?array $unavailableExtensions, ?bool $failOnEmptyTestSuite, ?bool $failOnIncomplete, ?bool $failOnRisky, ?bool $failOnSkipped, ?bool $failOnWarning, ?string $filter, ?bool $generateConfiguration, ?bool $migrateConfiguration, ?array $groups, ?array $testsCovering, ?array $testsUsing, ?bool $help, ?string $includePath, ?array $iniSettings, ?string $junitLogfile, ?bool $listGroups, ?bool $listSuites, ?bool $listTests, ?string $listTestsXml, ?string $loader, ?bool $noCoverage, ?bool $noExtensions, ?bool $noInteraction, ?bool $noLogging, ?string $printer, ?bool $processIsolation, ?int $randomOrderSeed, ?int $repeat, ?bool $reportUselessTests, ?bool $resolveDependencies, ?bool $reverseList, ?bool $stderr, ?bool $strictCoverage, ?bool $stopOnDefect, ?bool $stopOnError, ?bool $stopOnFailure, ?bool $stopOnIncomplete, ?bool $stopOnRisky, ?bool $stopOnSkipped, ?bool $stopOnWarning, ?string $teamcityLogfile, ?array $testdoxExcludeGroups, ?array $testdoxGroups, ?string $testdoxHtmlFile, ?string $testdoxTextFile, ?string $testdoxXmlFile, ?array $testSuffixes, ?string $testSuite, array $unrecognizedOptions, ?string $unrecognizedOrderBy, ?bool $useDefaultConfiguration, ?bool $verbose, ?bool $version, ?array $coverageFilter, ?string $xdebugFilterFile)
    {
    }
    public function hasArgument() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function argument() : string
    {
    }
    public function hasAtLeastVersion() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function atLeastVersion() : string
    {
    }
    public function hasBackupGlobals() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function backupGlobals() : bool
    {
    }
    public function hasBackupStaticAttributes() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function backupStaticAttributes() : bool
    {
    }
    public function hasBeStrictAboutChangesToGlobalState() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function beStrictAboutChangesToGlobalState() : bool
    {
    }
    public function hasBeStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function beStrictAboutResourceUsageDuringSmallTests() : bool
    {
    }
    public function hasBootstrap() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function bootstrap() : string
    {
    }
    public function hasCacheResult() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheResult() : bool
    {
    }
    public function hasCacheResultFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function cacheResultFile() : string
    {
    }
    public function hasCheckVersion() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function checkVersion() : bool
    {
    }
    public function hasColors() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function colors() : string
    {
    }
    public function hasColumns() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function columns()
    {
    }
    public function hasConfiguration() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function configuration() : string
    {
    }
    public function hasCoverageFilter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageFilter() : array
    {
    }
    public function hasCoverageClover() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageClover() : string
    {
    }
    public function hasCoverageCobertura() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageCobertura() : string
    {
    }
    public function hasCoverageCrap4J() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageCrap4J() : string
    {
    }
    public function hasCoverageHtml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageHtml() : string
    {
    }
    public function hasCoveragePhp() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coveragePhp() : string
    {
    }
    public function hasCoverageText() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageText() : string
    {
    }
    public function hasCoverageTextShowUncoveredFiles() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageTextShowUncoveredFiles() : bool
    {
    }
    public function hasCoverageTextShowOnlySummary() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageTextShowOnlySummary() : bool
    {
    }
    public function hasCoverageXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageXml() : string
    {
    }
    public function hasPathCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function pathCoverage() : bool
    {
    }
    public function hasCoverageCacheDirectory() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function coverageCacheDirectory() : string
    {
    }
    public function hasWarmCoverageCache() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function warmCoverageCache() : bool
    {
    }
    public function hasDebug() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function debug() : bool
    {
    }
    public function hasDefaultTimeLimit() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function defaultTimeLimit() : int
    {
    }
    public function hasDisableCodeCoverageIgnore() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function disableCodeCoverageIgnore() : bool
    {
    }
    public function hasDisallowTestOutput() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function disallowTestOutput() : bool
    {
    }
    public function hasDisallowTodoAnnotatedTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function disallowTodoAnnotatedTests() : bool
    {
    }
    public function hasEnforceTimeLimit() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function enforceTimeLimit() : bool
    {
    }
    public function hasExcludeGroups() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function excludeGroups() : array
    {
    }
    public function hasExecutionOrder() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function executionOrder() : int
    {
    }
    public function hasExecutionOrderDefects() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function executionOrderDefects() : int
    {
    }
    public function hasFailOnEmptyTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnEmptyTestSuite() : bool
    {
    }
    public function hasFailOnIncomplete() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnIncomplete() : bool
    {
    }
    public function hasFailOnRisky() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnRisky() : bool
    {
    }
    public function hasFailOnSkipped() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnSkipped() : bool
    {
    }
    public function hasFailOnWarning() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function failOnWarning() : bool
    {
    }
    public function hasFilter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function filter() : string
    {
    }
    public function hasGenerateConfiguration() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function generateConfiguration() : bool
    {
    }
    public function hasMigrateConfiguration() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function migrateConfiguration() : bool
    {
    }
    public function hasGroups() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function groups() : array
    {
    }
    public function hasTestsCovering() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testsCovering() : array
    {
    }
    public function hasTestsUsing() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testsUsing() : array
    {
    }
    public function hasHelp() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function help() : bool
    {
    }
    public function hasIncludePath() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function includePath() : string
    {
    }
    public function hasIniSettings() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function iniSettings() : array
    {
    }
    public function hasJunitLogfile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function junitLogfile() : string
    {
    }
    public function hasListGroups() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function listGroups() : bool
    {
    }
    public function hasListSuites() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function listSuites() : bool
    {
    }
    public function hasListTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function listTests() : bool
    {
    }
    public function hasListTestsXml() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function listTestsXml() : string
    {
    }
    public function hasLoader() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function loader() : string
    {
    }
    public function hasNoCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noCoverage() : bool
    {
    }
    public function hasNoExtensions() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noExtensions() : bool
    {
    }
    public function hasExtensions() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function extensions() : array
    {
    }
    public function hasUnavailableExtensions() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function unavailableExtensions() : array
    {
    }
    public function hasNoInteraction() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noInteraction() : bool
    {
    }
    public function hasNoLogging() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function noLogging() : bool
    {
    }
    public function hasPrinter() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function printer() : string
    {
    }
    public function hasProcessIsolation() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function processIsolation() : bool
    {
    }
    public function hasRandomOrderSeed() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function randomOrderSeed() : int
    {
    }
    public function hasRepeat() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function repeat() : int
    {
    }
    public function hasReportUselessTests() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function reportUselessTests() : bool
    {
    }
    public function hasResolveDependencies() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function resolveDependencies() : bool
    {
    }
    public function hasReverseList() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function reverseList() : bool
    {
    }
    public function hasStderr() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stderr() : bool
    {
    }
    public function hasStrictCoverage() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function strictCoverage() : bool
    {
    }
    public function hasStopOnDefect() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnDefect() : bool
    {
    }
    public function hasStopOnError() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnError() : bool
    {
    }
    public function hasStopOnFailure() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnFailure() : bool
    {
    }
    public function hasStopOnIncomplete() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnIncomplete() : bool
    {
    }
    public function hasStopOnRisky() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnRisky() : bool
    {
    }
    public function hasStopOnSkipped() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnSkipped() : bool
    {
    }
    public function hasStopOnWarning() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function stopOnWarning() : bool
    {
    }
    public function hasTeamcityLogfile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function teamcityLogfile() : string
    {
    }
    public function hasTestdoxExcludeGroups() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxExcludeGroups() : array
    {
    }
    public function hasTestdoxGroups() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxGroups() : array
    {
    }
    public function hasTestdoxHtmlFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxHtmlFile() : string
    {
    }
    public function hasTestdoxTextFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxTextFile() : string
    {
    }
    public function hasTestdoxXmlFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testdoxXmlFile() : string
    {
    }
    public function hasTestSuffixes() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testSuffixes() : array
    {
    }
    public function hasTestSuite() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function testSuite() : string
    {
    }
    public function unrecognizedOptions() : array
    {
    }
    public function hasUnrecognizedOrderBy() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function unrecognizedOrderBy() : string
    {
    }
    public function hasUseDefaultConfiguration() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function useDefaultConfiguration() : bool
    {
    }
    public function hasVerbose() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function verbose() : bool
    {
    }
    public function hasVersion() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function version() : bool
    {
    }
    public function hasXdebugFilterFile() : bool
    {
    }
    /**
     * @throws Exception
     */
    public function xdebugFilterFile() : string
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Mapper
{
    /**
     * @throws Exception
     */
    public function mapToLegacyArray(\PHPUnit\TextUI\CliArguments\Configuration $arguments) : array
    {
    }
}
/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class Exception extends \RuntimeException implements \PHPUnit\Exception
{
}