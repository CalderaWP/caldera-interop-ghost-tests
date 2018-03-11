<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Models\TestRun as Model;
use calderawp\interopGhostTests\Models\TestRun;

/**
 * Class TestRunModelTest
 *
 * Tests for the Test Run Model
 */
class TestRunModelTest extends TestCase
{

	/**
	 * Test entity
	 *
	 * @covers TestRun::$entity
	 * @covers TestRun::toEntity()
	 */
	public function testModel()
	{
		$test = $this->entityFactory('run');
		$model = new Model($test);
		$this->assertSame($test, $model->toEntity());
	}

	/**
	 * Test entity type
	 *
	 * @covers TestRun::getEntityType()
	 */
	public function testGetEntityType()
	{
		$test = $this->entityFactory('run');
		$model = new Model($test);
		$this->assertSame(\calderawp\interopGhostTests\Entities\TestRun::class, $model->getEntityType());
	}

	/**
	 * Test model type
	 *
	 * @covers TestRun::getType()
	 */
	public function testGetType()
	{
		$test = $this->entityFactory('run');
		$model = new Model($test);
		$this->assertSame('testRun', $model->getType());
	}
}
