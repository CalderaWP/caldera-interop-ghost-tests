<?php


namespace calderawp\interopGhostTests\Models;

/**
 * Class Test
 *
 * Interoperable model for a Test
 */
class Test extends Model
{
	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return \calderawp\interopGhostTests\Entities\Test::class;
	}


	/**
	 * @inheritdoc
	 */
	public static function getType()
	{
		return 'test';
	}
}
