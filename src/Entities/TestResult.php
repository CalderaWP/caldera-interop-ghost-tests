<?php


namespace calderawp\interopGhostTests\Entities;

use calderawp\interop\Traits\CanCastProps;
use calderawp\interop\Traits\CanValidatePropertySet;
use calderawp\interopGhostTests\CanCastTest;
use calderawp\interopGhostTests\HasRunUuid;

/**
 * Class TestResult
 *
 * Object representation of a test result
 *
 * @package calderawp\interopGhostTests\Entities
 */
class TestResult extends Entity
{
	use HasRunUuid, CanCastProps, CanCastTest;
	/** @var  Test */
	protected $test;
	/** @var  string */
	protected $startUrl;
	/** @var  string */
	protected $testId;
	/** @var  bool */
	protected $passed;
	/** @inheritdoc */
	protected $casts = [
		'test' => 'test',
		'passed' => 'boolean',
	];
}
