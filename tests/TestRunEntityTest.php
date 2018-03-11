<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\CanCastTest;
use calderawp\interopGhostTests\Entities\TestRun;
use calderawp\interopGhostTests\HasRunUuid;

class TestRunEntityTest extends TestCase
{

	/**
	 * Test HasRunUuId trait in this context
	 *
	 * @covers HasRunUuid::getUuid()
	 * @covers HasRunUuid::setUuid()
	 * @covers HasRunUuid::$runUuid;
	 */
	public function testGetUuid()
	{
		$uuid = uniqid('lumens');
		$entity = new TestRun();
		$entity->setId(42);
		$entity->setUuid($uuid);
		$this->assertSame($uuid, $entity->getUuid());
	}

	/**
	 *
	 * @covers TestCase::entityFactory()
	 */
	public function testFactory()
	{
		$entity = $this->entityFactory('run');
		$this->assertTrue(is_a($entity, TestRun::class));
	}

	/**
	 * Cover casting tests collections
	 *
	 * @covers CanCastTest::castTests()
	 */
	public function testCastTests()
	{
		$tests = $this->collectionFactory('tests');
		$entity = $this->entityFactory('run');
		$entity->tests = $tests;
		$this->assertSame(12, $entity->tests->getTest(12)->getId());
	}
}
