<?php
require_once('vendor/autoload.php');

ini_set('display_errors', 'on');

date_default_timezone_set('asia/seoul');

use libphp\test\TestRunner;
use libphp\tests\test\TestCaseTest;
use libphp\tests\test\TestRunnerTest;

$runner = new TestRunner();
$runner->add(TestCaseTest::createSuite());
$runner->add(TestRunnerTest::createSuite());
$runner->run();

echo $runner->summary(). PHP_EOL;
