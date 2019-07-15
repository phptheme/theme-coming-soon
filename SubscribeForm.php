<?php

namespace PhpTheme\ComingSoonTheme;

use PhpTheme\Helpers\Html;

class SubscribeForm extends \PhpTheme\Core\Widget
{

    public $inputOptions = [];

    public $defaultInputOptions = [
        'class' => 'form-control',
        'aria-describedby' => 'basic-addon'
    ];

	public $submitButton = 'Subscribe';

	public $formOptions = [];

    public $defaultFormOptions = [
        'id' => 'subscribe-form',
        'method' => 'POST',
        'action' => '#subscribe'
    ];

	public function run()
	{
		return $this->render('subscribe-form', [
			'submitButton' => $this->submitButton,
			'formOptions' => Html::mergeOptions(
                $this->defaultFormOptions, 
                $this->formOptions
            ),
            'inputOptions' => Html::mergeOptions(
                $this->defaultInputOptions, 
                $this->inputOptions
            )
		]);
	}

}