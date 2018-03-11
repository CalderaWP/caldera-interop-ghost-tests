<?php


namespace calderawp\interopGhostTests\Models;

/**
 * Class TestRun
 *
 * Interoperable model for a Test Run
 */
class TestRun extends Model
{
	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return \calderawp\interopGhostTests\Entities\TestRun::class;
	}


	/**
	 * @inheritdoc
	 */
	public static function getType()
	{
		return 'testRun';
	}
}
