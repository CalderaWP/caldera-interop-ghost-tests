<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Collections\Tests;

class TestsCollectionTest extends TestCase
{

	/**
	 * Test collection of tests
	 *
	 * @covers Tests::addTest()
	 * @covers Tests::getTest()
	 */
	public function testAddTest()
	{
		$entity = $this->_testFactory();

		$entity2 = clone $entity;
		$entity2->setID(12);

		$collection = new Tests();
		$collection
			->addTest($entity)
			->addTest($entity2);

		$this->assertSame($entity, $collection->getTest($entity->getId()));
		$this->assertSame($entity2, $collection->getTest($entity2->getId()));
	}

	/**
	 *
	 * @covers TestCase::collectionFactory()
	 */
	public function testFactory()
	{
		$collection = $this->collectionFactory('tests');
		$this->assertEquals(2, $collection->count());
	}
}
