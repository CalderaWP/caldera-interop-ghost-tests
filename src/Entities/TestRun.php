<?php


namespace calderawp\interopGhostTests\Entities;

use calderawp\interopGhostTests\CanCastTest;
use calderawp\interopGhostTests\HasRunUuid;

/**
 * Class TestRun
 *
 * Object representation of a test run
 *
 * @package calderawp\interopGhostTests\Entities
 */
class TestRun extends Entity
{
	use HasRunUuid, CanCastTest;
	protected $tests;
	protected $casts = [
		'config' => 'array',
		'tests' => 'tests',
	];
}
