<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Models\TestResult as Model;
use calderawp\interopGhostTests\Models\TestRun;

/**
 * Class TestResultModelTest
 *
 * Tests for the Test Result Model
 */
class TestResultModelTest extends TestCase
{

	/**
	 * Test entity
	 *
	 * @covers TestResult::$entity
	 * @covers TestResult::toEntity()
	 */
	public function testModel()
	{
		$test = $this->entityFactory('result');
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
		$test = $this->entityFactory('result');
		$model = new Model($test);
		$this->assertSame(\calderawp\interopGhostTests\Entities\TestResult::class, $model->getEntityType());
	}

	/**
	 * Test model type
	 *
	 * @covers TestRun::getType()
	 */
	public function testGetType()
	{
		$test = $this->entityFactory('result');
		$model = new Model($test);
		$this->assertSame('testResult', $model->getType());
	}
}
