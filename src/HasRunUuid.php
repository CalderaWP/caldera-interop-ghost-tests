<?php


namespace calderawp\interopGhostTests;

trait HasRunUuid
{
	/** @var  string */
	protected $runUuid;

	/**
	 * Get test Uuid
	 *
	 * @return string
	 */
	public function getUuid() : string
	{
		return $this->runUuid;
	}

	/**
	 * Set test Uuid
	 *
	 * @param string $uuid
	 * @return $this
	 */
	public function setUuid(string $uuid)
	{
		$this->runUuid = $uuid;
		return $this;
	}
}
