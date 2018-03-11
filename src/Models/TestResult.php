<?php


namespace calderawp\interopGhostTests\Models;

/**
 * Class TestResult
 *
 * Interoperable model for a TestResult
 */
class TestResult extends Model
{
	/**
	 * @inheritdoc
	 */
	public function getEntityType()
	{
		return \calderawp\interopGhostTests\Entities\TestResult::class;
	}


	/**
	 * @inheritdoc
	 */
	public static function getType()
	{
		return 'testResult';
	}
}
