<?php


namespace calderawp\interopGhostTests\Collections;

use calderawp\interop\Collections\IteratingCollection;
use calderawp\interop\Entities\Entity;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

abstract class Collection extends IteratingCollection
{

	/** @inheritdoc */
	public function __call($name, $arguments)
	{
		if ($name === $this->getEntitySetter()) {
			if (!is_a($arguments[0], $this->getEntityType())) {
				throw new InvalidEntity();
			}
			$this->mapEntity($arguments[0]);
			return $this;
		}

		if ($name === $this->getEntityGetter()) {
			return $this->getMappedEntity($arguments[0]);
		}
	}

	/**
	 * Get the name of the function for getting entities
	 *
	 * @return string
	 */
	protected function getEntityGetter()
	{
		return 'get'. $this->getterSetterPostFix();
	}

	/**
	 * @inheritdoc
	 */
	public function getEntitySetter()
	{
		return 'add'. $this->getterSetterPostFix();
	}

	/**
	 * Get the end of getters/setter function name. IE for addTest, return Test.
	 *
	 * @return string
	 */
	abstract protected function getterSetterPostFix();

	/** @inheritdoc */
	public function toArray()
	{
		$items = [];
		$clone = clone $this;
		if ($this->count()) {
			foreach ($clone as $entity) {
				$items[] = $entity->toArray();
			}
		}
		return $items;
	}

	/**
	 * Map Entity to collection
	 *
	 * @param Entity $entity
	 */
	protected function mapEntity(Entity $entity)
	{
		$this->items[$entity->getId()] = $entity;
		$this->mapPosition($entity->getId());
	}

	/**
	 * Get mapped entity by ID
	 *
	 * @param $id
	 * @return Entity|null
	 */
	protected function getMappedEntity($id)
	{
		return isset($this->items[$id]) ? $this->items[$id] : null;
	}
}
