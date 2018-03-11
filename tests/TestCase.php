<?php


namespace calderawp\interopGhostTests\Tests;

use calderawp\ghost\Entities\Test;
use calderawp\interop\Models\Form;
use calderawp\interopGhostTests\Collections\Collection;
use calderawp\interopGhostTests\Collections\Tests;
use calderawp\interopGhostTests\Entities\TestRun;
use calderawp\interopGhostTests\Models\TestResult;

abstract class TestCase extends \PHPUnit\Framework\TestCase
{

	/**
	 * @return array
	 */
	protected function getMockFormAsArray()
	{
		return [
			'id' => 'cf1234',
			'name' => 'Mock Form',
			'fields' => [

			]
		];
	}

	/**
	 * @return Form
	 */
	protected function formFactory()
	{
		return $this->entityFactory('form');
	}

	/**
	 * @return Test
	 */
	//phpcs:disable
	protected function _testFactory()//phpcs:enabe
	{
        return $this->entityFactory('test');
	}

	/**
	 * @param $type
	 * @return Test|Form|TestResult|TestRun|\calderawp\interop\Entities\Entity|static
	 */
	protected function entityFactory($type)
	{
		$config = $this->getMockFormAsArray();
		$form = Form::fromArray($config);
		switch (strtolower($type)) {
			case 'run':
				$entity = new TestRun();
				$entity->setId(42);
				$entity->setUuid(uniqid('lumens'));
				return $entity;
				break;
			case 'result':
				$test = $this->_testFactory();
				$entity = new \calderawp\interopGhostTests\Entities\TestResult();
				$entity->passed = 1;
				$entity->test = $test;
				return $entity;
				break;
			case 'form':
				return $form;
			case 'test':
			default:
				$test = new \calderawp\interopGhostTests\Entities\Test();
				$test->setId(42);
				$test->config = $config;
				return $test;
				break;
		}
	}

	/**
	 * @param $type
	 * @return Tests|Collection
	 */
	protected function collectionFactory($type)
	{
		switch (strtolower($type)) {
			case 'tests':
			default:
				$entity = $this->_testFactory();
				$entity2 = clone $entity;
				$entity2->setID(12);

				$collection = new Tests([$entity,$entity2]);

				return $collection;
			break;
		}
	}
}
