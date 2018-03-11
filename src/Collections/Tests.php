<?php

namespace calderawp\interopGhostTests\Collections;

use calderawp\interopGhostTests\Entities\Test;

/**
 * Class Tests
 *
 * Object representation of a group of tests
 *
 * @package calderawp\interopGhostTests\Collections
 */

/**
 * @method Test getTest(string|int $id )
 * @method Tests addTest(Test $test )
 */
class Tests extends Collection
{

	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return Test::class;
	}

	protected function getterSetterPostFix()
	{
		return 'Test';
	}
}
