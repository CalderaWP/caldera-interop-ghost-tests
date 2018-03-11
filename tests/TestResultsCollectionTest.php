<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Collections\TestResults;
use calderawp\interopGhostTests\Entities\TestResult;

class TestResultsCollectionTest extends TestCase
{
	/**
	 * Test collection of test run results
	 *
	 * @covers TestRuns::addTest()
	 * @covers TestRuns::getTest()
	 */
	public function testAddTestResult()
	{
		$test = $this->_testFactory();
		$entity = new TestResult();
		$entity->test = $test;

		$entity2 = clone $entity;
		$entity2->setID(12);

		$collection = new TestResults();
		$collection
			->addTestResult($entity)
			->addTestResult($entity2);

		$this->assertSame($entity, $collection->getTestResult($entity->getId()));
		$this->assertSame($entity2, $collection->getTestResult($entity2->getId()));
	}
}
