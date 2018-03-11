<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interopGhostTests\Models\Test as Model;

class TestModelTest extends TestCase
{

	/**
	 * Test entity
	 *
	 * @covers Test::$entity
	 * @covers Test::toEntity()
	 */
	public function testModel()
	{
		$test = $this->_testFactory();
		$model = new Model($test);
		$this->assertSame($test, $model->toEntity());
	}

	/**
	 * Test entity type
	 *
	 * @covers Test::getEntityType()
	 */
	public function testGetEntityType()
	{
		$test = $this->entityFactory('run');
		$model = new Model($test);
		$this->assertSame(\calderawp\interopGhostTests\Entities\Test::class, $model->getEntityType());
	}

	/**
	 * Test model type
	 *
	 * @covers Test::getType()
	 */
	public function testGetType()
	{
		$test = $this->entityFactory('run');
		$model = new Model($test);
		$this->assertSame('test', $model->getType());
	}

	/**
	 * Test converting to HTTP response
	 *
	 * @covers Test::toResponse();
	 * @covers \calderawp\interopGhostTests\Models\Model::toResponse();
	 */
	public function testToResponse()
	{
		$test = $this->_testFactory();
		$test->gitissue = 54321;
		$model = new Model($test);
		$response = $model->toResponse();

		$body = $response
			->getBody()
			->getContents();
		$json = json_decode($body, true);
		$this->assertSame($json['id'], $model->toEntity()->toArray()['id']);
		$this->assertSame($json['gitissue'], $model->toEntity()->toArray()['gitissue']);
	}
}
