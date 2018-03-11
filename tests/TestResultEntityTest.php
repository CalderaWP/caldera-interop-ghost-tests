<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interop\Entities\Form;
use calderawp\interopGhostTests\CanCastForm;
use calderawp\interopGhostTests\Entities\Test;
use calderawp\interopGhostTests\Entities\TestResult;

class TestResultEntityTest extends TestCase
{

	/**
	 * Test cast to test
	 *
	 * @covers TestResult::$test
	 * @covers TestResult::$casts
	 * @covers CanCastTest::castTest()
	 */
	public function testCastTest()
	{
		$test = $this->_testFactory();
		$entity = new TestResult();
		$entity->passed = 1;
		$entity->test = $test;
		$this->assertSame($test->name, $entity->test->name);
	}


	/**
	 * Test cast to test
	 *
	 * @covers TestResult::$casts
	 * @covers TestResult::$passed
	 */
	public function testCastPassed()
	{
		$test = $this->_testFactory();
		$entity = new TestResult();
		$entity->passed = 1;
		$this->assertEquals(true, $entity->passed);
	}
}
