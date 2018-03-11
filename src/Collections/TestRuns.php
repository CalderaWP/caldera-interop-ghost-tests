<?php


namespace calderawp\interopGhostTests\Collections;

use calderawp\interopGhostTests\Entities\TestRun;

/**
 * Class TestRuns
 *
 * Object representation  of a collection of test runs
 *
 * @method TestRun getTestRun(string|int $id )
 * @method TestRuns addTestRun(TestRun $test )
 */
class TestRuns extends Collection
{

	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return TestRun::class;
	}

	protected function getterSetterPostFix()
	{
		return 'TestRun';
	}
}
