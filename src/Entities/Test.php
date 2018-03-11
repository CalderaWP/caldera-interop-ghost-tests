<?php


namespace calderawp\interopGhostTests\Entities;

use calderawp\interopGhostTests\CanCastForm;

/**
 * Class Test
 *
 * Object representation of a test
 *
 * @package calderawp\interopGhostTests\Entities
 */
class Test extends Entity
{
	use CanCastForm;
	protected $config;
	protected $description;
	protected $gitissue;
	protected $ghostinspectorid;
	protected $release;
	protected $testsuite;
	protected $xtestreason;
	protected $helpscout;
	protected $casts = [
		'config' => 'form',
	];
}
