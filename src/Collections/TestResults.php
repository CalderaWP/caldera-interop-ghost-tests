<?php


namespace calderawp\interopGhostTests\Collections;

use calderawp\interopGhostTests\Entities\TestResult;

/**
 * Class TestResults
 *
 * Object representation  of a collection of test runs
 *
 * @method TestResult getTestResult(string|int $id )
 * @method TestResults addTestResult(TestResult $test )
 */
class TestResults extends Collection
{

	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return TestResult::class;
	}

	protected function getterSetterPostFix()
	{
		return 'TestResult';
	}
}
