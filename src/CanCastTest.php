<?php


namespace calderawp\interopGhostTests;

use calderawp\interopGhostTests\Collections\Tests;
use calderawp\interopGhostTests\Entities\Test;

/**
 * Trait CanCastTest
 *
 * Trait to be uses with CanCastProps for Test
 *
 * @package calderawp\interopGhostTests
 */
trait CanCastTest
{

	/**
	 * Casts arrays to Test
	 *
	 * @param Test|array $maybeTest
	 * @return Test
	 * @throws Exception
	 */
	protected function castTest($maybeTest) : Test
	{
		if (is_array($maybeTest)) {
			$maybeTest = Test::fromArray($maybeTest);
		}

		if (is_a($maybeTest, Test::class)) {
			return $maybeTest;
		}

		throw new Exception('Invalid Test');
	}

	/**
	 * Casts arrays to Test
	 *
	 * @param Tests|array $maybeTests
	 * @return Tests
	 * @throws Exception
	 */
	protected function castTests($maybeTests)
	{
		if (is_array($maybeTests)) {
			$maybeTests = Tests::fromArray($maybeTests);
		}

		if (is_a($maybeTests, Tests::class)) {
			return $maybeTests;
		}
		var_dump($maybeTests);
		exit;
		throw new Exception('Invalid Tests collection');
	}
}
