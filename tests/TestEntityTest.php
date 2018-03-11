<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\interop\Entities\Form;
use calderawp\interopGhostTests\CanCastForm;
use calderawp\interopGhostTests\Entities\Test;

class TestEntityTest extends TestCase
{

	/**
	 * Test cast to form
	 *
	 * @covers Test::$config
	 * @covers Test::$casts
	 * @covers CanCastForm::castForm()
	 */
	public function testCast()
	{
		$config = $this->getMockFormAsArray();
		$form = Form::fromArray($config);
		$entity = new Test();
		$entity->config = $config;
		$this->assertTrue(is_a($entity->config, Form::class));
		$this->assertSame($form->toArray(), $entity->config->toArray());
		$this->assertSame(
			$config[ 'id' ],
			$entity->config->getId()
		);

		$this->assertSame(
			$config[ 'name' ],
			$entity->config->name
		);
	}

	/**
	 * Make sure factory can be trusted  by other groups of tests
	 *
	 * @covers TestCase::_testFactory()
	 * @covers TestCase::factory()
	 */
	public function testTestFactory()
	{
		$config = $this->getMockFormAsArray();
		$test = $this->_testFactory();
		$this->assertSame(
			$config[ 'name' ],
			$test->config->name
		);
	}
}
