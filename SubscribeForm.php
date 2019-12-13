<?php

namespace PhpTheme\ComingSoonTheme;

class SubscribeForm extends \PhpTheme\Core\ThemeWidget
{

	public $submitButton = 'Subscribe';

    public $inputName = 'email';

    public $formAction = '#subscribe';

    public $formId = 'subscribe-form';

	public function toString() : string
	{
		return $this->render('subscribe-form', [
			'submitButton' => $this->submitButton,
            'formAction' => $this->formAction,
            'formId' => $this->formId,
            'inputName' => $this->inputName
		]);
	}

}