<?php


namespace calderawp\interopGhostTests;

use calderawp\interop\Entities\Form;

trait CanCastForm
{

	/**
	 * Cast array to form
	 *
	 * @param Form|array $maybeForm Form or array representing form
	 * @return Form
	 * @throws Exception
	 */
	public function castForm($maybeForm)
	{
		if (is_array($maybeForm)) {
			$maybeForm = Form::fromArray($maybeForm);
		}

		if (is_a($maybeForm, Form::class)) {
			return $maybeForm;
		}

		throw new Exception(json_encode($maybeForm));
	}
}
