<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Collections\TestRuns;

class TestRunCollectionTest extends TestCase
{

	/**
	 * Test collection of test runs
	 *
	 * @covers TestRuns::addTest()
	 * @covers TestRuns::getTest()
	 */
	public function testAddTestRun()
	{
		$entity = $entity = $this->entityFactory('run');

		$entity2 = clone $entity;
		$entity2->setID(12);

		$collection = new TestRuns();
		$collection
			->addTestRun($entity)
			->addTestRun($entity2);

		$this->assertSame($entity, $collection->getTestRun($entity->getId()));
		$this->assertSame($entity2, $collection->getTestRun($entity2->getId()));
	}
}
