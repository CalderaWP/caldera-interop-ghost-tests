<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Collections\Collection;
use calderawp\interopGhostTests\Collections\Tests;

class CollectionTest extends TestCase
{

	/**
	 * Test position mapping abstraction
	 *
	 * @covers Collection::mapEntity()
	 * @covers Collection::getMappedEntity()
	 */
	public function testMap()
	{
		$entity = $this->_testFactory();
		$entity->setId('a');
		$entity2 = clone $entity;
		$entity2->setID(12);
		$collection = new Tests();
		$collection
			->addTest($entity)
			->addTest($entity2);
		$this->assertSame('a', $collection->getTest('a')->getId());
		$this->assertSame(12, $collection->getTest(12)->getId());
	}
}
